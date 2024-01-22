---
tags: [Import-6153]
title: Instalar en ubuntu
created: '2024-01-15T17:20:12.312Z'
modified: '2024-01-22T15:41:52.077Z'
---

---
title: Instalar en ubuntu
created: '2024-01-01T14:06:57.092Z'
modified: '2024-01-11T21:30:05.907Z'
---

# Instalar en ubuntu

1 Instalar Pinta
sudo apt update && sudo apt install pinta

sudo apt-get install libcanberra-gtk-module


2 desistalar Pinta
sudo apt remove pinta && sudo apt autoremove

=========================
###Actualizar Discord
sudo dpkg -i discord-0.....deb

=========================
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

=====================================
PDF TK

sudo apt install pdftk -y
pdftk *.pdf output "nombredelmanual.pdf"


