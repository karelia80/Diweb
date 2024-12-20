---
title: Drupal SiteBuilt
created: '2024-12-17T10:39:55.738Z'
modified: '2024-12-19T14:15:48.396Z'
---

# Drupal SiteBuilt 

## Instalacion:

### PASO 1: Acceso al Servidor
1. Conexión por SSH
Usaremos las credenciales que nos diste para conectarnos al servidor mediante SSH:

Servidor: ssh.training.forcontu.com
Usuario: blansole
Contraseña: g4_uS3_u
Puerto: 2220
```
ssh -p 2220 blansole@ssh.training.forcontu.com
```
Al ejecutar este comando en tu terminal, se te pedirá la contraseña. Introducir: g4_uS3_u.

---
### PASO 2: Preparación del Entorno
1. Accede al directorio de instalación
Una vez dentro del servidor, navega al directorio donde se instalará Drupal:
```
cd public_html/sb/
```
2. Comprueba que Composer está instalado
Ejecuta el siguiente comando:
```
composer --version
```
Si aparece una versión, Composer está instalado.

---

### PASO 3: Instalación de Drupal
1. Ejecuta el Comando de Instalación
Dentro del directorio public_html/sb/, instala Drupal con el siguiente comando:
```
composer create-project drupal/recommended-project:^10 sb2
```
Esto creará un directorio llamado sb2 y descargará todos los archivos necesarios.

2. Accede al Directorio de Drupal
Una vez descargado, navega al nuevo directorio:
```
cd sb2
```
3. Configura Permisos
Asegúrate de que los directorios críticos tienen los permisos correctos:
```
chmod -R 755 sites/default
chmod 644 sites/default/settings.php
```
---
### PASO 4: Completa la Instalación de Drupal
1. Accede al Instalador de Drupal
Abre un navegador y ve a la URL de tu subdominio:
```
http://sb2.blansole.training.forcontu.com
```
Si aparece una ventana emergente solicitando credenciales .htpasswd, introduce:

- Usuario: forcontu
- Contraseña: forcontu
Completar los campos restantes y haz clic en Guardar y continuar.

2. Selecciona el Idioma
Elige Español como idioma para la instalación.

3. Configura la Base de Datos
Introduce los siguientes datos en el formulario de configuración:

- Servidor de base de datos: 127.0.0.1
- Nombre de la base de datos: el nombre proporcionado en tu aula (deberás buscarlo en "Mis alojamientos", he puesto blansole_sb2).
- Usuario de la base de datos: blansole
- Contraseña de la base de datos: g4_uS3_u
Haz clic en Guardar y continuar.

4. Configura la Cuenta de Mantenimiento
Introduce los siguientes datos para la cuenta de administrador:

- Nombre de usuario: admin
- Contraseña: g4_uS3_u
Completar los campos restantes y haz clic en Guardar y continuar.

---

### PASO 5: Configuración Inicial del Sitio
1. Configura el Nombre y Lema del Sitio:
Ve a Configuración → Configuración básica del sitio (/admin/config/system/site-information).
2. Rellena los campos:
- Nombre del sitio: algo como "Mercado Libre".
- Lema: "Venta de artículos de segunda mano".
3. Haz clic en Guardar configuración.

4. Configura los Idiomas
Ve a Configuración → Regional e Idioma → Idiomas (/admin/config/regional/language).
5. Agrega el idioma inglés:
- Haz clic en Agregar idioma.
- Selecciona English y haz clic en Guardar.
6. Configura el portal para que los contenidos estén disponibles en ambos idiomas.

---

### PASO 6: Instalar el Módulo Admin Toolbar
1. Instala el Módulo con Composer
Vuelve a tu conexión SSH y asegúrate de estar dentro del directorio sb2:
```
composer require drupal/admin_toolbar
```
2. Activa el Módulo
- Ve a Extensiones (Módulos) (/admin/modules).
- Busca el módulo Admin Toolbar y actívalo marcando las casillas necesarias.
Clic en Guardar configuración.

---
## Instalación y configuración del tema/modulo

Para instalar cualquier tema o app para Drupal hay que hacerlo mediante consola
```
ssh -p 2220 blansole@ssh.training.forcontu.com
```
Se mete la contraseña:
```
g4_uS3_u
```

```
cd public_html/sb/sb2
```
A partir de aquí se empiezan a añadir lo que necesitemos. Después de copiar o descargar la librería, vacía las cachés de Drupal desde la interfaz o usando Drush:
```
drush cr
```

---

## Crear la página básica Ejemplo /como-vender
1. Ve a Contenido → Agregar contenido → Página básica (/node/add/page).
- Completa los siguientes campos:
- Título: "¿Cómo vender?".
- Cuerpo: Escribe un texto breve explicando cómo vender artículos (puedes usar algo como: "Para vender en nuestro portal, simplemente regístrate y publica tu anuncio.").
- Configura la URL:
En la sección Configuración de alias URL, establece:
/como-vender.
Publica la página haciendo clic en Guardar.

---

---

## Modulos interesantes que instalar

[Modulos Durpal](https://www.drupal.org/project/project_module)

- PathAuto 
```
composer require 'drupal/pathauto:^1.13'
```
- Admin Toolbar
```
composer require 'drupal/admin_toolbar:^3.5'
```
- Colorbox
```
composer require 'drupal/colorbox:^2.1'
```
Pero para terminar de instalar el colorbox tambien hay que instalar las librerias. lo primero instalar el drush
```
composer require drush/drush
```
Y luego verificar con "ls" que este la carpeta **vendor/bin**, despues seguir el manual de drupal pg 422
```
composer require drupal/colorbox
 ./vendor/bin/drush en colorbox
 ./vendor/bin/drush colorbox-plugin
 ```
 Debe aparecer el mensaje:
[success] The colorbox library has been successfully downloaded to
/home/d10/public_html/sb/sb1/web/libraries/colorbox.

Despues limpia todas las cachés de Drupal para aplicar los cambios:
 ```
 ./vendor/bin/drush cr
```
- Image Effects
```
composer require drupal/image_effects
```
- Token
```
composer require drupal/token
```
- Masquerade 
```
composer require 'drupal/masquerade:^2.0'
```

<br>

Después de instalar cualquier módulo, ejecutar estos comandos:
```
./vendor/bin/drush cr
./vendor/bin/drush cc container
```









