---
title: RECORTES
created: '2023-12-11T16:17:41.689Z'
modified: '2023-12-13T17:43:52.510Z'
---

# RECORTES
HTML Fecha de primer examen 22 diciembre

# Para cambiar el Pront
cd ~ + ls -la (buscar bashrc)
hacer copia de seguridad : cp .bashrc .copiabashrc_copia
sudo nano .bashrc +intro
if [ "$color_prompt" = yes ]; then
    PS1='${debian_chroot:+($debian_chroot)}\[\033[01;32m\]\u@\h\[\033[00m\]:\[\033[01;34m\]\w\[\033[00m\]\$ '
    Cambiar el \u@\h por lo que quieras ejemplo "]Blanca@pcanidi\" y la w por "W" en mayusculas para que salga solo la carpeta

    el comando pwd te dice donde te encuentras
    el comando cd .. para subir

=============================================
Github: soyunpaketito@gmail.com USu:Karelia80
Comandos de git que voy a utlizar:
- git status: mirar el estado de los documentos

- git init: inicio de repositorio en el directorio en el que estes, crear una carpeta. Se hace 1 vez.

- git clonet: clona un repositorio en remoto, descargar la carpeta

- git add . : para que se añada varios archivos al repositorio remoto. Guardar

- git commit -m "__": guardar los archivos en el repositorio local. Se le añade un "comentario".

- git push: mandar el repositorio local al remoto (nube)

- git pull: mandar desde la nube al area de trabajo.
- git restore : deshacer /cambiar desde terminal cualquier codigo que has cambiadoy este mal.
- git log : historial de commit
- git blame : historal de quien ha tocado el codigo y para salir le das a "Q"
- git remote add : copia de seguridad en otros repositorios.

Las ramas: Modulos de trabajo en equipo: en area de trabajo
- git branch: crear una rama "git branch esther"// te dice en que rama estas si solo ponoes git branch// si quieres borrar rama git branch -r
- git chetout: para pasar de una rama a otra
- git diff  "archivo 1 archivo 2" : para comparar archivos.
- git merge : fusionas ramas

Token: para usar el repositorio.
Ruta --> /var/www/html/Diweb
Meter Doc. en Git: copiar la carpeta documentos/codigos en sistema/var/html
luego en el terminar /var/www/html/ + cd Diweb + git status + git add . (para añadir todo)
para mandarlo Git commit -m "x" (sale un mensaje hay que copiar  git config --global --edit + intro) borrar # de name y email y rellenarlos con nombre y correo de github guardar+intro+salir

git push +intro 

git status + git add . + git commit -m "" + git push // git pull

=============================================
Extensiones para el VSCode: 
- Print
- Markdown PDF


=============================================
Pila-LAMP, servidor para webs
  Linux os
  Apache: servidor web
  MySQL: sistema de gestion de bases de datos (SGBD)
  PHP: lenguaje de servidor (con esto podemos crear aplicaciones webs)
  sudo apt update
  sudo apt install apache2
  *Una vez instalado en Linux pones en el navegador localhost/*

  La siguiente instalacion: 
  sudo apt install mysql-server mysql-client
  Para meterse: sudo mysql -u root -p (root es aministrador, la contraseña que vamos a poner en clase "root")
  use mysql;
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'root';
FLUSH PRIVILEGES;
exit


  Instalar el mysql workbench de esta https://downloads.mysql.com/archives/workbench/ 
  version 22.04
  instalar desde la consola sudo descargas... etc


Instalar PHP
sudo apt -y install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt -y install php # Lo mas probable es que el upgrade ya lo instale
php -v # Para ver la versión de PHP

 Instalamos las extensiones que nos harán falta...
sudo apt install php-zip # Este...
sudo apt-get install php-curl # Este...
sudo apt-get install php-xml # Este...
sudo apt-get install php-intl # Este...
sudo apt-get install php-gd # Este...
sudo apt install php-mysql # Este...

 sodium
 Instalamos CGI
sudo apt-get install php-cgi

 Instalamos además FPM:

 sudo apt-get install php-fpm
Hay que activar el FPM en el Apache
sudo a2enmod proxy_fcgi setenvif
sudo a2enconf php-fpm
Y por último reiniciamos Apache
sudo service apache2 restart

Instalar Dependencias

Instalamos dependencias y nos lo bajamos
sudo apt update
sudo apt install curl php8.2-cli php8.2-mbstring git unzip


