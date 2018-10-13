(function($) {
  "use strict"; // Start of use strict

  // formspree use
  var pathname = window.location.pathname;
  if(pathname == "/thanks.html" ){
    console.log('no estoy en index')
    setTimeout(function(){
      window.location.replace("/");
    }, 4000);
  }// end Formspree Use

  //PHP sender
    $('#contact-form-submit').on('click',function(){
        var email = $("#conEmail").val();
        var url = "mail.php";

        $.ajax({
            type: "POST",
            url: url,
            data: {
              email: email
            },
            success: function (data) {
              $("#exampleModal").modal();
              $('#contact-form').trigger("reset");
            },
            error: function (error) {
                console.log(JSON.stringify(error));
            }
        });
        return false;
      });


  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 48)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 54
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

})(jQuery); // End of use strict
