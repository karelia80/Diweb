---
title: WORDPRESS
created: '2024-01-23T07:57:03.496Z'
modified: '2024-05-27T15:45:15.003Z'
---

# WORDPRESS
=======================

Gestion de contenidos (CMS) que permite crear y administras sitios webs/blogs.

https://es.wordpress.org/




post_max_size = 64M

upload_max_filesize = 64M
1. creamos la base de datos para el wordpress
``` console
msql -u root -p
contraseña: root
CREATE DATABASE wordpress6
```
.nano /var/www/html/wordpress/wp-config.php
.define("ALLOW_UNFILTERED_UPLOADS", true);

