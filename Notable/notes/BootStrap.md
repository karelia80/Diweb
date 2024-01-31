---
title: BootStrap
created: '2023-11-14T09:26:45.100Z'
modified: '2023-11-21T13:20:29.033Z'
---

# BootStrap
--------------

[//]: # (version: 1.0)
[//]: # (author: Iván Rodríguez)
[//]: # (date: 2023-12-18)



# Tabla de contenidos
- [BootStrap](#bootstrap)
- [Tabla de contenidos](#tabla-de-contenidos)
  - [Introducción](#introducción)
  - [Instalación](#instalación)
    - [Utilities](#utilities)
    - [Layouts](#layouts)
  - [Content](#content)
  - [Images](#images)
  - [Tables](#tables)
    - [Formularios](#formularios)
    - [Colores texto](#colores-texto)
  - [Componentes](#componentes)
    - [FontAwesome](#fontawesome)
    - [SASS](#sass)
      - [Iconos](#iconos)

<div style="page-break-after: always;"></div>




## Introducción
[Tabla de contenidos](#tabla-de-contenidos)

- URL
  - https://getbootstrap.com/docs/5.3/getting-started/introduction/
  - 

## Instalación
[Tabla de contenidos](#tabla-de-contenidos)

- Instalación por cdn remotos
  - En local, bajamos los archivos y quitamos la URLs de los cdn
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <h1>Hello, world!</h1>
```

### Utilities
[Tabla de contenidos](#tabla-de-contenidos)

- p-[0-5] -> Relleno
  - p[t|b|s|e] -> Relleno top, bottom, start (left), end (right)
  - p[x|y] -> x (left y rigt) | y (top y bottom) 
- m-[0-5] -> Margen
  - m[t|b|s|e] -> Margen top, bottom, start (left), end (right)
  - m[x|y] -> x (left y rigt) | y (top y bottom) 
> NOTA: A diferencia de CSS puro, los margenes NO se solapan (¡se suman!)

### Layouts
[Tabla de contenidos](#tabla-de-contenidos)

Recursos:
- https://getbootstrap.com/docs/5.0/utilities/position/
  
- position-relative -> Posicionamiento relativo
- position-absolute -> Posicionamiento absoluto
- top -> Propiedad top
- start -> Propiedad left
- bottom -> Propiedad bottom
- end -> Propiedad right
  
- visually-hidden -> Propiedad visuality: "hidden"

- Columnas
  - col-[1-12] -> Columnas de tamaño X
  - col-auto -> Dispone de columnas en función de contenido
  - col -> Ancho automático
  - align-items-[start|center|end] -> Alineación Vertical de columnas sobre contenedor
    - align-self-[start|center|end] -> Alineación vertical independente de cada columna
  - justify-content-[start|center|end|around|between|evenly] -> Alineación horizontal de columnas
  - order-[1...n|first|last] -> Importante seguir orden columnas: 1,2,3,...
  - offset-[1-12] -> Define que la columna se ponga a la derecha

- Gutters (espaciado entre elementos de columna -> poner en contenedor clase row)
  - g-[0-5] -> Espaciado horizontal y vertical
    - gx -> Espaciado horizontal
    - gy -> Espaciado vertical

<div style="page-break-after: always;"></div>

## Content
[Tabla de contenidos](#tabla-de-contenidos)

- h1...h6 -> Encabezados
- display-[1-6] -> Encabezados mas grandes
- text-body-secondary -> Subtitulo
- lead -> Resaltar párrafo
- initialism -> Pone el texto mas pequeño (~abbr)
- blockquote -> Cita (~blockquote)
  - blockquote-footer -> Subcita (añade -- subcita)

## Images
[Tabla de contenidos](#tabla-de-contenidos)

- img-fluid -> Redimensionar responsive
- rounded -> Esquinas redondeadas
- img-thumbnail -> Miniaturas
  - w-25, w-50 -> Ancho 25/50%
- float-start, float-end -> Flotando izq/dcha
- mx-auto d-block -> Centrar objeto
- figure-caption -> titulo imagen

## Tables
[Tabla de contenidos](#tabla-de-contenidos)

- table -> Formatea la tabla
- table-striped -> Celdas impares otro fondo
- table-striped-columns -> Columnas pares otro fondo
- table-[color] -> Filas o tablas enteras fondo [¢olor]
- table-hover -> Cambio fondo ratón por encima
- table-active -> Celda o fila marcada
- table-bordered -> Bordes de tabla
  - border-[color] -> Color de borde
- table-borderless -> Tabla sin bordes
  - col-bordeless
- table-sm -> Reduce altura filas
- table-group-divider -> División entre grupos tabla

- align-[top|middle|bottom] -> Alineación vertical
  - text-[left|center|right] -> Alineación Horizontal
- caption-[top|bottom] -> Lugar del caption
- table-responsive[-sm|-md|-lg|-xl|-xxl] -> Quitar scroll por tamaño

### Formularios
[Tabla de contenidos](#tabla-de-contenidos)

- form-label -> Etiquetas
- form-control -> Inputs del formulario
- form-text -> Texto plano para formulario
- form-select -> Para desplegables
  - form-select-[lg|sm] -> Tamaño
- form-check-input -> Checkbox
  - form-check-input -> Etiquetas checkbox"
- bd-example bd-example-indeterminate -> PENDIENTE
- form-check-inline -> Radios y checkbox en linea
- form-check-reverse -> Radios y checkbox apilados derecha
- form-group -> Agrupar elementos formulario

 - btn-check -> toggle
  - btn-outline-primary -> Color borde exterior toggle
 - form-range -> Rango 

- input-group-text -> Agrupar input + span
  - input-group-[sm|lg] -> Tamaño conjunto
- form-floating -> Inputs con label flotantes

- needs-validation -> Poner mensajes de validación personalizados
  - valid-feedback -> Validación correcta
  - invalid-feedback -> Validación incorrecta

### Colores texto
[Tabla de contenidos](#tabla-de-contenidos)

- text-primary -> Azul
- text-secondary -> gris oscuro
- text-success -> Verde
- text-danger -> Rojo
- text-warning -> Amarillo
- text-info -> celeste
- text-light -> gris claro
- text-dark -> Negro
- text-muted -> gris
- text-white -> White


<div style="page-break-after: always;"></div>


## Componentes
[Tabla de contenidos](#tabla-de-contenidos)

- Acordeón 
  - accordion -> Contenedor para elementos de acordeón
  - accordion-flush -> Sale los bordes mas finos (es mas elegante) 
  - accordion-item -> Elemento de Acordeón
  - accordion-header -> Cabecera de acordeón (botón)
    - accordion-button -> Botón para acordeones
  - accordion-body -> Cuerpo del acordeón
  - collapse show -> Muestra el elemento
  - accordion-collapse -> Zona colapsable

- alert -> Alerta
  - alert-[color] -> Color alerta
  - alert-link -> Enlace del color de la alerta
  - alert-heading -> Cabecera Alert
  - alert-dismissible -> Alert con X para cerrar (fade show)
  - btn-close -> Botón con la X de cerrar
    - data-bs-dismiss="alert" -> Funcionalidad para cerrar

- badge -> etiquetas especiales (insignias)
  - bg-[color] -> Fondo color
  - rounded-pill -> rectángulo Ovalado
  - rounded-circle -> Óvalo

- breadcrumb -> Migas de pan
  - breadcrumb-item -> Elemento de la miga de pan
    - Active -> Elemento activo (gris claro)

- Botones
  - btn -> Botón
  - btn-[color] -> Color fondo botón
  - btn-group -> Botones en grupo
  - btn-check -> Convertir checkbox en botón
  - btn-outline-[color] -> Color borde botón
  - btn-group-[tam] -> Tamaño botones
  - btn-group-vertical -> Botones en vertical

- Tarjetas
  - card -> Define la tarjeta
  - card-header -> Cabecera de tarjeta
  - card-img-top -> Imagen arriba
  - card-body -> Cuerpo
    - card-title -> Titulo 
    - card-subtitle -> Subtitulo
    - card-text -> Texto del cuerpo
    - card-link -> Enlace de tarjeta
    - card-img-overlay - >Texto por encima imagen
  - text-bg-[color] -> Color fondo
  - border-[color] -> COlor borde

- Carrusel (Slider)
  - carousel -> Define el Slider
    - carousel-dark -> Inversión de colores (obsoleto)
  - slide -> Pase diapositivas
  - carousel-fade -> Transición
  - carousel-indicators -> Controles inferiores
  - carousel-inner -> Contenedor Diapositivas 
  - carousel-item -> Diapositiva 
    - active -> Diapositiva por defecto
  - carousel-caption -> Texto diapositiva
  - carousel-control-prev -> Botón previo
  - carousel-control-next -> Botón siguiente
  - carousel-control-prev-icon -> icono botón
    - visually-hidden -> Contenido oculto
  
  - data-bs-ride="true" -> Activa el autoarranque (OJO, accesibilidad)
  - data-bs-interval="1000" -> Retraso de 1sg entre diapositivas
  - data-bs-touch="false" -> Deshabilitar navegación por toque en disp. móviles

- Mensajes contraidos
  - data-bs-toggle -> Comportamiento desplegable
  - aria-controls -> Mensaje a visualizar
  - data-bs-target=".multi-collapse" -> Ver/Ocultar multiples mensajes

- Menús desplegables
  - navbar -> Adaptación menu hamburguesa 
  - navbar-expand-[sm|lg]  -> Cuando aparece la hamburguesa [=]
  - navbar-dark -> Fondo oscuro
  - navbar-brand
    - navbar-toggler -> Iconos menú hamburguesa [=]

  - btn-group -> Agrupa estructura desplegable
  - dropdown-toggle -> Flecha hacia abajo (menú inferior )
    - dropdown-toggle-split -> Flecha desplegable
  - dropup -> Flecha hacia arriba (menú superior)
  - dropend -> Menú a la derecha
  - dropstart -> Menú a la izquierda
  
  - dropdown-menu -> Contenedor Elementos menú
    - active -> Elemento activo
    - disabled aria-disabled="true" -> Deshabilitado
  - dropdown-menu-dark -> Menú oscuro
  - dropdown-item -> Un elemento del menú
  - dropdown-divider -> Divisor

- Listas
  - list-group - Definir la lista
  - list-group-item -> Elemento de lista
  - list-group-item-action -> Funcionalidad hover, disabled
  - active -> Elemento activo
  - disabled -> Deshabilitado
  - list-group-flush -> Quita bordes
  - list-group-numbered -> Convierte en lista ordenada
  
  - d-flex -> Cajas flexibles
  - justify-content-between -> Contenido justificado
  - align-items-start  -> Alineación izquierda
  - text-decoration-none -> Quitar raya enlaces
  - badge -> Recuadro (normalmente a la derecha)

- Ventanas Emergentes
  - modal -> Contenedor modal 
    - fade -> Mostrar/Ocultar
  - modal-dialog - Ventana Modal
  - modal-content -> Contenido
  - modal-header -> Cabecera contenido
    - modal-title -> titulo en cabacera
  - modal-body -> Cuerpo
  - modal-footer -> Pie
  - modal-dialog-scrollable -> Scroll en el contenido del modal
  - modal-dialog-centered -> Contenido scroll centrado

- Barra de navegación
  - navbar -> Contenedor general del navbar
  - fixed-top -> Barra navegación FIJA en la zona superior
  - fixed-bottom -> FIJA abajo
    - navbar-expand-[sm|md|lg] -> Cuando cambia al menú hamguesa
  - navbar-brand -> Elemento principal
  - navbar-toggler -> Botón menú hamburguesa
    - navbar-toggler-icon -> Icono del menú hamburguesa
  - navbar-collapse -> Sección a introducir en el menú hamburguesa
  - navbar-nav -> Lista Hamburguesa
    - nav-item -> Elemento lista hamguesa 
  - nav-link -> Enlaces navegación

  - nav -> Listas para navegar
  - nav-pills -> Pestañas
  - nav-item -> Elemento de navegación
  - nav-link -> Enlaces de navegación

- Panel Lateral emergente
  - offcanvas
  - offcanvas-[start|top|end|bottom] -> Panel izquierda,arriba,derecha,abajo
  - offcanvas-header -> Cabecera panel
    - offcanvas-title -> Titulo
  - offcanvas-body -> Cuerpo del panel
  - data-bs-backdrop="static" -> Panel estático (hay que cerrar con X)
  
- Paginación
  - pagination -> Contenedor paginación
    - pagination-[sm|lg] -> Tamaño cuadros paginación
    - justify-content-[start|center|end] -> Alineación Horizontal
    - page-item -> Elemento (paǵina)
    - page-link -> Enlace paginación

```php
echo "Hola Mundo";
```

### FontAwesome
[Tabla de contenidos](#tabla-de-contenidos)

- Recursos:
  - https://fontawesome.com/docs/web/setup/get-started
  - https://cdnjs.com/libraries/font-awesome

```html
<!-- Se ponen varias clases para definir el icono, tipo, animación y tamaño -->
<i class="fa-regular fa-user fa-beat fa-2xl"></i>
```

- Para descargar el Kit
  - https://fontawesome.com/v6/download > [Free for web]
  - Añadir tanto boostrap como fontawesome, lo metemos de este modo:
    - Meter ambos en una carpeta llamada libs
```html
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap + FontAwesome</title>
    <link href="libs/bootstrap.min.css" rel="stylesheet">
    <script src="libs/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="libs/fontawesome/css/all.css">
</head>
</head>

<body>
</body>
</html>
```
### SASS
[Tabla de contenidos](#tabla-de-contenidos)

- Vamos a ver como personalizar los alert de Bootstrap usando sass.
1. Para empezar instalamos SASS con npm 
```console
sudo npm install -g sass
```

2. Nos creamos en nuestra carpeta un archivo con extensión scss y lo abrimos con VSCode:
```console
cd $HOME/Documentos/curso-desarrollo/html
mkdir estilos
cd estilos
code entrada.scss
```

3. El contenido del archivo SASS será el siguiente:
  - En $HOME/Documentos/curso-desarrollo/html/estilos/entrada.scss
```scss
// Sobrescribe las variables de Bootstrap para los alertas

// Define tus propios colores o modifica los existentes
$alert-success-bg: #dff0d8;
$alert-success-border: #d0e9c6;
$alert-success-text: #3c763d;

$alert-danger-bg: #f2dede;
$alert-danger-border: #ebccd1;
$alert-danger-text: #a94442;

// Importa Bootstrap para acceder a sus estilos y extenderlos
@import "bootstrap5/libs/bootstrap.min.css";
```

4. Hacemos la compilación .
```console
cd $HOME/Documentos/curso-desarrollo/html/estilos
sass entrada.scss salida.css
```

5. Añadimos el nuevo archivo css (salida.css) como link a nuestro ejemplo:
```html
<link rel="stylesheet" href="estilos/salida.css" >
```


#### Iconos 
[Tabla de contenidos](#tabla-de-contenidos)

1. Instalar los iconos
```console
# Nos metemos en la carpeta libs del proyecto
cd /var/www/html/dawdm2023/bootstrap5/libs
npm i bootstrap-icons
```


```console
sudo apt update
sudo apt upgrade
```
