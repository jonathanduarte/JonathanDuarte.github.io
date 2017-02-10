---
layout: inner
title: 'Instalción de NodeJS utilizando Node Version Manager (nvm)'
date: 2016-08-23 15:00:00
categories: Tencnología
tags: nvm nodejs
local_featured_image: 'nvm.jpg'
author: Jonathan Duarte.
author_pic: autorJonathan.JPG
author_email: mrduarte55@gmail.com
lead_text: 'Node es un intérprete Javascript del lado del servidor que permitir a un programador construir aplicaciones altamente escalables y escribir código que maneje decenas de miles de conexiones simultáneas en una sola máquina física.'
---

[NodeJS][1] según su propia definicion es un entorno de ejecución para JavaScript construido con el motor de JavaScript V8 de Chrome. Node.js usa un modelo de operaciones E/S sin bloqueo y orientado a eventos, que lo hace liviano y eficiente. El ecosistema de paquetes de Node.js, npm, es el ecosistema mas grande de librerías de código abierto en el mundo.

Particularmente este artículo tiene como objetivo mostrar el proceso de instalación de [nvm][2] esta herramienta es un manejador de versiones para [nodeJs][1] , lo que nos da la posibilidad de poder instalar y gestionar diferentes versiones de [nodeJs][1] de forma amigable y sin los tediosos problemas de incompatibilidad en nuestras dependencias.


## Paso 1: Preparandonos para instalar nvm
Actualizamos nuestros paquetes con el comando:

{% highlight terminal %}
  sudo apt-get update
{% endhighlight %}

El paquete **build-essential** deberia estar instalado sin embargo vamos a incluirlo en nuestro proceso de instalación con el comando  

{% highlight terminal %}
  apt-get install build-essential libssl-dev
{% endhighlight %}
---


## Paso 2: Instalando NVM (node version manager)
Con el siguiente comando inicializamos el script de instalación:

{% highlight terminal %}
  curl https://raw.githubusercontent.com/creationix/nvm/v6.9.5/install.sh | bash
{% endhighlight %}

Como pueden observar en el comando especificamos la versión actual a instalar en este caso yo estoy instalando la versión 6.9.5 ya que es con la cual estoy trabajando actualmente en caso de requerir otra versión simplemente la sustituimos en el comando ejecutado y listo.

**Debemos cerrar y abrir nuevamente nuestro terminal**

## Paso 3: Verificando nuestra instalación

Para verificar que [nvm][2] se encuentra correctamente instaldo y funcionando corremos el siguiente comando:

{% highlight terminal %}
  nvm --version
{% endhighlight %}


**El resultado en nuestro terminal debe ser 6.9.5**

## Comandos de utilidad

- Para acceder a los comando de [nvm][2].

{% highlight terminal %}
  nvm help
{% endhighlight %}

- Para obtener la lista de las versiones de node instaladas en nuestro computadora.

{% highlight terminal %}
  nvm ls
{% endhighlight %}

- Para obtener la lista de las versiones de node disponibles para ser instaladas

{% highlight highlight2 terminal %}
  nvm ls-remote
{% endhighlight %}

- Para instalar una versión especifica de node:

{% highlight terminal %}
  nvm install + version
{% endhighlight %}

- Para fijar por defecto la versión de node que se esta utilizando actualmente:

{% highlight terminal %}
  nvm alias default
{% endhighlight %}

[1]:https://nodejs.org/es/
[2]:https://github.com/creationix/nvm
