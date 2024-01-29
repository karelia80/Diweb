---
tags: [Import-6153]
title: Instalar en ubuntu
created: '2024-01-15T17:20:12.312Z'
modified: '2024-01-29T09:47:29.074Z'
---

---
title: Instalar en ubuntu

---

# Instalar en ubuntu

1 Instalar Pinta
```
sudo apt update && sudo apt install pinta

sudo apt-get install libcanberra-gtk-module
```

2 desistalar Pinta
sudo apt remove pinta && sudo apt autoremove
***
###Actualizar Discord
```
sudo dpkg -i discord-0.....deb
```
***
###Instalar Composer
Instalar Composer
Tabla de contenidos
cd ~
 Bajamos el archivo
 
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
#Comprobamos que es el correcto
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f154

 Hacemos la instalación
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

***
PDF TK
```
sudo apt install pdftk -y
pdftk *.pdf output "nombredelmanual.pdf"
``````
***
## Como instalar la extension PHP Debug en visual studio code:

Instalacion Extension PHP Debug para los warnigs y erros: 
1-Ir a extensiones de VSC e instalar PHP Debug.
2-hacer un php.info y copiar toda la informacion (control+a/ control+c)
3-ir a este link (que te proporciona la misma entension) https://xdebug.org/wizard.php que es el  Xdebug installation wizard.
4-En el recuadro pegas toda la informacion de php.info y te da las instrucciones especificas a seguir..

