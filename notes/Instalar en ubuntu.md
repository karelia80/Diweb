---
tags: [Import-6153]
title: Instalar en ubuntu
created: '2024-01-15T17:20:12.312Z'
modified: '2024-01-30T10:45:09.310Z'
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

