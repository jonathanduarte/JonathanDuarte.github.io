<?php
/**
 * Created by PhpStorm.
 * User: gbanchs
 * Date: 8/11/18
 * Time: 9:09 PM
 */
//Load Composer's autoloader
require 'mailer/phpmailer/PHPMailerAutoload.php';
header('Content-Type: application/json');
$msg = '';
//Don't run this unless we're handling a form submission
if (array_key_exists('email', $_POST)) {

    $email = $_POST['email'];



//IS WHERE THE EMAIL IS GOING TO BE SEND
    $receptor = getenv('MAIL_RECEPTOR');
// $receptor = 'jwhite@ffleague.co.uk';

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


//export environments vars in your environment or OS like this

//export MAIL_RECEPTOR=mail@whoisreceving.com
//export MAIL_USER=gmailUser
//export MAIL_PASSWORD=password


    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = false;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = getenv('MAIL_USER');                 // SMTP username
        $mail->Password = getenv('MAIL_PASSWORD');                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom($receptor , 'Oli');
        //$mail->addAddress($email, 'Suscriber');     // Add a recipient
        $mail->addAddress($receptor );               // Name is optional
        $mail->addReplyTo($receptor , 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'You have a new contact';
        $mail->Body = 'You have a new contact <a href="mailto:' . $email . '"> ' . $email . ' </a></b>';
        $mail->AltBody = 'You have a new contact' . $email;

       // $mail->send();
        //echo 'Message has been sent';

        $jsondata['type'] = 'success';
        $jsondata['success'] = true;
        $jsondata['message'] = 'Thank you for submitting your email.';
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($jsondata);
        exit();

    } catch (Exception $e) {
        $jsondata['type'] = 'error';
        $jsondata['success'] = false;
        $jsondata['message'] = 'Thank you for submitting your email.';
        return $jsondata;
    }

    return $jsondata;
}
?>
