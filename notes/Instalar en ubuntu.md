---
tags: [Import-6153]
title: Instalar en ubuntu
created: '2024-01-15T17:20:12.312Z'
modified: '2024-05-13T16:25:42.659Z'
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
***
### Symfony

#### Bajamos el instalador
cd ~/Descargas
curl -sS https://get.symfony.com/cli/installer | bash
#### Instalamos globalmente
sudo mv ~/.symfony5/bin/symfony /usr/local/bin/symfony

#### Comprobamos
symfony

#### Si mas adelante nos sale DEPRECATED
sudo rm /usr/local/bin/symfony
#### Y repetimos los pasos de la instalación
```
# IMPORTANTE: Symfony NO tiene que estar obligatoriamente
# en el directorio de publicación de Apache!
# Estructura del comando
# symfony new <carpeta> --version --webapp
symfony new /var/www/html/symfony6 --version="6.2.*" --webapp

# Nos metemos en el directorio del proyecto e iniciamos el servidor
cd /var/www/html/symfony6
symfony server:start

# Si mas adelante queremos parar el servidor debemos ABRIR OTRA PESTAÑA
# de la consola y poner lo siguiente
### symfony server:stop
```
- Y ya podemos ver en el navegador como quedaría:
  - http://127.0.0.1:8000


Empezar proyecto
symfony server:start
para pararlo server:stop o control+c

***

Usar df -h para ver las particiones

Para instalar symfony en bajo linux
a. instalar en modo dual (windows +linux)
b. Usar el wsl2 
c.Maquina virtual, (Vware o Virtualbox)
d. Docker

Que es Docker?

***

Pila LAMP
```
sudo apt update
sudo apt upgrade
sudo apt install apache2
sudo service apache2 start
```

Comprobamos que está todo correcto escribiendo en el navegador:
http://localhost/
***

Instalar MySQL

```
sudo apt update
sudo apt install mysql-server mysql-client
```
Ahora toca acceder, pero en primer lugar debemos definir el acceso sin sudo:

``` 
sudo mysql -u root -p 

use mysql;
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'root';
FLUSH PRIVILEGES;
exit

# NOTA: En caso de ser MariaDB usar:
# ALTER USER 'root'@'localhost' IDENTIFIED BY 'root';
```
Solo queda reinicirar MySQL y entrar con root/root

```
sudo service mysql restart
mysql -u root -p
# Y ahora ponemos la conraseña: root
```
***
Instalar PHP 8

Tabla de contenidos

```
sudo apt update
sudo apt -y install software-properties-common
sudo add-apt-repository ppa:ondrej/php
Press [ENTER] to continue or Ctrl-c to cancel adding it.
# Pulsamos ENTER
sudo apt update
sudo apt upgrade

sudo apt -y install php                        # Lo mas probable es que el upgrade ya lo instale
php -v                                            # Para ver la versión de PHP

# Instalamos las extensiones que nos harán falta...
sudo apt install php-zip            # Este...
sudo apt-get install php-curl       # Este...
sudo apt-get install php-xml        # Este...
sudo apt-get install php-intl       # Este...
sudo apt-get install php-pgsql
sudo apt-get install php-xsl
sudo apt-get install php-amqp
sudo apt-get install php-gd         # Este...
sudo apt-get install openssl
sudo apt-get install php-redis
sudo apt install php-mysql          # Este...

# Para instalar el Soporte MongoDB
# IMPORTANTE! Si no vas a usar MongoDB, NO LO INSTALES!!
sudo apt install php-dev php-pear
sudo pecl install mongodb

# Vemos el listado de librerias instaladas (incluidas las de arriba)
php -m
```
Debemos activar los módulos en el PHP.ini NOTA: Si no hemos instalado MongoDB, no hace falta esto...

```
sudo nano /etc/php/8.2/cli/php.ini
# Dentro del archivo...
extension=mongodb.so

# CTRL + O (Guardar) y CTRL+X (salir)
sudo service apache2 restart
```
Seguimos instalando módulos de PHP:
```
### sodium
# Instalamos CGI
sudo apt-get install php-cgi

# Instalamos además FPM:
# OJO! Muy importante
sudo apt-get install php-fpm
# Hay que activar el FPM en el Apache
sudo a2enmod proxy_fcgi setenvif
sudo a2enconf php-fpm

# Y por último reiniciamos Apache
sudo service apache2 restart
```
Instalar Dependencias
``` 
# Instalamos dependencias y nos lo bajamos
sudo apt update
sudo apt install curl php8.2-cli php8.2-mbstring git unzip

# Probamos que version tenemos de PHP
php -v

# ATENCIÓN! Si por alguna razón queremos cambiar a PHP7.4 debemos hacer lo siguiente
# sudo apt -y install php7.4
# sudo a2enmod php7.4
# sudo service apache2 restart
# sudo update-alternatives --set php /usr/bin/php7.4
# sudo update-alternatives --set phar /usr/bin/phar7.4
# sudo update-alternatives --set phar.phar /usr/bin/phar.phar7.4
# sudo update-alternatives --set phpize /usr/bin/phpize7.4
# sudo update-alternatives --set php-config /usr/bin/php-config7.4

# Y volvemos a comprobar
php -v
# Mas info: https://tecadmin.net/switch-between-multiple-php-version-on-ubuntu/
```
Por último, vamos a comprobar que PHP y Apache se comunican correctamente:

```
sudo chmod 777 -R /var/www/html # Damos permisos al directorio de publicación
cd /var/www/html
nano info.php
```
Dentro de info.php ponemos esto:
```
<?php
// Muestra toda la información, por defecto INFO_ALL
phpinfo();
?>
# Y luego CTRL + O (Guardar) y CTRL + X (salir)
```



