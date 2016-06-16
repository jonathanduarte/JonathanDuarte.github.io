---
layout: inner
title: 'Instalación de Ionic'
date: 2016-06-14 15:00:00
categories: Tencnología
tags: ionic framework Instalacion
local_featured_image: 'sraCodificando.jpg'
author: Jonathan Duarte.
author_pic: autorJonathan.JPG
author_email: mrduarte55@gmail.com
lead_text: 'Instalación de Ionic en pocos y simples pasos'
---

El proceso de instalación de Ionic es bastante sencillo y está diseñado para funcionar correctamente en el sistema operativo de tu preferencia, el desarrollo en Linux y Mac es bastante similar así que funciona perfectamente, particularmente he seguido este tutorial en Linux ubuntu 16.04 LTS y no tuve ningún problema de relevancia así que *Let's go...*

# Paso 1: nodeJS.

Node es una plataforma Javascript para la programación del lado del servidor que permite a los usuarios crear aplicaciones de red con mayor versatilidad, node incluye su propio manejador paquetes **npm** es una herramienta muy poderosa que podemos utilizar mediante consola para instalar paquetes de desarrollo necesarios, te aconsejo que cuando necesites instalar alguna herramienta consultes primero la documentación de npm, es muy probable que este se encuentre incluido en su inventario.

### `sudo apt-get install nodejs` ###  

*Verificamos la versión con:* `node -v` ; `npm -v`

En caso de que sea necesario puedes instalar npm manualmente con el comando

### `sudo apt-get install npm` ###
---


# Paso 2: Cordova.

Apache Cordova es un framework para el desarrollo de aplicaciones móviles propiedad de Adobe Systems que permite a los programadores desarrollar aplicaciones para dispositivos móviles utilizando herramientas web genéricas como JavaScript, HTML5 y CSS3, resultando aplicaciones híbridas.

### `npm install cordova -g` ###
---

# Paso 3: Ionic.

No es necesario presentarlo.

### `npm install ionic -g` ###
---

Una vez realizado con éxito los pasos anteriores ya tenemos instalado nuestro ambiente de desarrollo, así que ya podemos comenzar a crear aplicaciones multiplataforma con Ionic Framework...
