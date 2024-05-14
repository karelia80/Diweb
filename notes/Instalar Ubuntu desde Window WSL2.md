---
title: Instalar Ubuntu desde Window WSL2
created: '2024-05-13T14:56:27.512Z'
modified: '2024-05-13T18:29:19.128Z'
---

# Instalar Ubuntu desde Window WSL2



Buscar en google WSL2. En la pagina de microsoft explican todo el proceso. Instalar el Ubuntu sever que es todo por consola.

Hay que tener instalado el powershell(la consola de linux en windows), si es windows10. En windows11 no es necesario.
Abrimos la terminal como administrador.
 - wsl--install

https://symfony.com/doc/5.x/setup.html
 Ahora hay que MySQL
 ***
 Tb intalar PHP8 -PHPFPM -Comprobar si apache y php 
 ***
 Instalar tb Composer directamente a la pagina.
 - php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

- php composer-setup.php
- sudo mv composer.phar /usr/local/bin/composer
Despues ir a la consola y poner `composer'
Para actualizar composer hay que poner `sudo composer self-update`
***
Despues instalar symfony CLI

La version DEBIAN/UBUNTU
curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh' | sudo -E bash
sudo apt install symfony-cli



 
 
 












