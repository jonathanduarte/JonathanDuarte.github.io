---
layout: inner
title: 'Mi primera aplicación con Ionic'
date: 2016-06-14 15:00:00
categories: Tencnología
tags: ionic framework templeates aplicación
local_featured_image: 'templates.jpg'
author: Jonathan Duarte.
author_pic: autorJonathan.JPG
author_email: mrduarte55@gmail.com
lead_text: 'Aprenderemos como crear nuestra primera aplicación utilizando los templeates que Ionic tiene disponibles para nosotros'
---

Ionic a hecho un esfuerzo por facilitar la ejecución  de los procesos que comprenden desarrollar con esta herramienta, es por ello que nos proporcionaron plantillas ya construidas que podemos utilizar con mucha facilidad, en este articulo te mostraremos los primeros pasos para construir tus propias aplicaciones utilizando Ionic Framework.

## Paso 1: Creando nuestra primera aplicación
Para crear una aplicación utilizamos el siguiente comando en nuestra consola.

### `ionic start myApp [template]` ###

Con **ionic start** estamos iniciando los procesos de contrucción de nuestra aplicación, seguidamente declaramos el nombre de nuestra aplicación y por ultimo el template a utilizar en caso de que deseemos utilizar uno de los templates de Ionic.

---

## Paso 2: Templates

**1.sidemenu:** Los menús laterales (tipo Drawer) o ion-side-menus en ionic, son una de las maneras más frecuentes de navegar dentro de una aplicación móvil. El uso de esta opción como viene es muy simple.

- Puedes ver el codigo fuente en [github][2]

- Gracias a neustros amigos de [plunker][3] podemos ver la plantilla funcionando.

- [Alexander Ramirez][8] tiene en su blog un tutorial muy completo sobre como realizar un menu e incluye un ejemplo super practico les comparto su [enlace][4]

**2.tabs:** Otro patrón de navegación muy frecuente en las aplicaciones es el uso de tabs y Ionic nos ofrece una platilla para esta funcionalidad.

- Puedes ver el codigo fuente en [github][5]

- Gracias a neustros amigos de [plunker][6] podemos ver la plantilla funcionando.

- [Alexander Ramirez][8] en su blog posee un tutorial acerca de tabs bastante completo les comparto el [enlace][7]         

**3.blank:** Esta plantilla solo consta de un header y una vista, cuya utilidad es de gran importancia para aquellos desarrolladores que desean crear su proyecto desde cero añadiendo la esctructura que se adapte mejor a sus necesidades

- Puedes ver el codigo fuente en [github][9]

- Gracias a neustros amigos de [plunker][10] podemos ver la plantilla funcionando.

## Paso 3: Probando nuestra aplicación
Una vez creado nuestro proyecto vamos a realizar una prueba de nuestra aplicación con el comando

### `ionic serve --lab` ###

Este comando nos despliega nuestro navegador con una vista simulada para android y para ios en donde podemos visualizar los cambios que realizamos a medida que avanzamos en el desarrollo de nuestro proyecto.


[2]:https://github.com/driftyco/ionic-starter-sidemenu
[3]:http://plnkr.co/edit/0RXSDB?p=preview
[4]:http://alexanderramirez.me/desarrollo/ionic/angularjs/sidemenu.html
[5]:https://github.com/driftyco/ionic-starter-tabs
[6]:http://plnkr.co/edit/qYMCrt?p=preview
[7]:http://alexanderramirez.me/desarrollo/ionic/angularjs/tabs.html
[8]:http://alexanderramirez.me/
[9]:https://github.com/driftyco/ionic-starter-blank
[10]:http://plnkr.co/edit/tpl:IUU30p?p=preview
