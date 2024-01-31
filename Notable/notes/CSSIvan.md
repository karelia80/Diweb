---
title: CSS
created: '2023-11-06T10:03:50.532Z'
modified: '2023-11-13T13:13:38.422Z'
---

# CSS
--------------

[//]: # (version: 1.0)
[//]: # (author: Iván Rodríguez)
[//]: # (date: 2020-11-06)



# Tabla de contenidos
- [CSS](#css)
- [Tabla de contenidos](#tabla-de-contenidos)
  - [Validador CSS](#validador-css)
  - [Selectores CSS](#selectores-css)
  - [Propiedades CSS](#propiedades-css)
    - [CSS3](#css3)
  - [Capitulo 2](#capitulo-2)
    - [Subapartado 2.1](#subapartado-21)
  - [Capitulo 3](#capitulo-3)
    - [Seccion1](#seccion1)
    - [Seccion2](#seccion2)
      - [Seccion2.1](#seccion21)
  - [Clases](#clases)
  - [Clase 01 - 24/10](#clase-01---2410)

<div style="page-break-after: always;"></div>

## Validador CSS
[Tabla de contenidos](#tabla-de-contenidos)

- http://jigsaw.w3.org/css-validator/

## Selectores CSS
[Tabla de contenidos](#tabla-de-contenidos)

- * -> Selector universal
- p -> Selector de etiqueta
- p a -> Selector descendente
- p > a -> Selector descendente directo (hijo)
- p + p -> Selector Adyacente (hermano)
- .clase -> Clase (asociado al atributo class = "")
- #id -> ID (asociado al atributo id = "", OJO, único)
- p, a -> Varios selectores
- a[href="https:www.google.es"] -> Selector de atributo

## Propiedades CSS
[Tabla de contenidos](#tabla-de-contenidos)

- Modelo de cajas
  - width -> Ancho
  - height -> Alto
  - margin -> margen [top, right, bottom, left]
  - padding -> relleno  [top, right, bottom, left]

- bordes
  - border [top, right, bottom, left]
  - border-with [top, right, bottom, left]
  - border-color [top, right, bottom, left]
  - border-style  [top, right, bottom, left]
  - outline -> Borde exterior

- Fondos
  - background-color -> Color Fondo
  - background -> Fondo
  - background-image -> Imagen fondo (url)
  - background-position -> Posición
  - background-repeat -> repetición (x/y)
  - background-attachment -> scroll|fixed
  - background-size -> Tamaño

- Posicionamiento
  - static -> Estático o normal
  - fixed -> Fijo ()
  - relative -> Relativo a su posición normal
  - absolute -> Relativo a su contenedor teniendo en cuenta el posicionamiento de este
    - Se posición original se pierde, y sale del flujo normal de la página
  - float -> flotante (left|right)

- Visibilidad
  - display -> Mostrar/no (no ocupa espacio)
  - visibility -> Ocultar/no (ocupa espacio)
  - overflow -> Desbordamiento
  - z-index -> Capas

- Texto
  - color -> Color de texto
  - font-family -> Fuente
  - font-size -> Tamaño 
  - font-weight -> grosor (negrita)
  - font-style -> Cursiva (italic)
  - font-variant -> Versalitas (small-caps)
  - text-decoration -> subrayado, tachado, etc
  - text-align -> Alineación
  - line-height -> Interlineado
  - text-transform -> Mayúsculas/Minúsculas
  - vertical-align -> Alineación Vertical
  - text-indet -> Sangria
  - letter-spacing -> Espaciado letras
  - word-spacing -> Espaciado de palabras
  - white-space -> Espacios en blanco
  - Pseudoelementos
    - ::first-letter -> Primera letra (letra capital)
    - ::first-line -> Primer línea

- Enlaces (pseudoclases)
  - :link -> Sin visitar
  - :visited -> Visitados
  - :hover -> Por encima
  - :active -> Al pulsar

- Listas
  - list-style-type -> Tipo de lista
  - list-style-position -> posición viñeta
  - list-style-image -> imagen de viñeta

- Tablas
  - border-collapse -> Unión entre celdas
  - border-spacing -> Espaciado entre celdas
  - empty-cells -> Mostrar/ocultar Celdas vacias

- Formularios
  - Ej selector: input[type="text"]:active -> Se pulsa el input
  - : focus -> Pseudo-clase equivalente al :active pero se mantiene el cambio

- Nuevas propiedades CSS3
  - border-radius -> Radio de borde (poner previamente border)
  - box-shadow -> Sombra de caja
  - text-shadow -> Sombra de texto
  - @font-face -> Importación de Fuentes [font-family] {Ver Google fonts}
  - outline -> Borde exterior
  - background -> fondo normal 
    - linear-gradient -> Gradiente Lineal
    - radial-gradient -> Gradiente Radial

  - transition-property -> propiedades a transicionar
  - transition-delay -> Retraso transición
  - transition-duration -> Duración
  - transition-timing-function -> Forma de la transición

  - text-align-last -> Alineación ultima línea
  - word-wrap -> romper palabras para ajuste de texto 
  - hyphens -> (auto) Guiones
  - text-overflow -> (ellipsis ...) Desbordamiento texto ; 
    - Acompañar con white-space: nowrap y overflow: hidden;
  - -webkit-text-stroke-width y -webkit-text-stroke-color: para Chrome
    - Resaltado de texto
  - ::selection -> pseudoclase para cambiar texto al seleccionar

  - column -> Para definir columnas
    - column-count -> número columnas
    - column-width -> Ancho columnas
    - column-gap -> Espacio entre columnas
    - column-rule -> Línea vertical
    - column-span -> Cortar texto entre columnas


<div style="page-break-after: always;"></div>

### CSS3
[Tabla de contenidos](#tabla-de-contenidos)

- Color RGBA -> A es alpha, % opacidad (0-1)

- border-radius -> Bordes redondeados (radio borde)
- box-shadow -> Sombra de caja (x,y,difuminado, expasion, color)
- text-shadow -> Sombra de texto (x,y,difuminado, expasion, color)
- @font-face -> Fuentes externas (https://www.dafont.com/es/ y https://fonts.google.com/)
- linear-gradient (background) -> Degradado Lineal
- radial-gradient (background) -> Degradado Radial
- border-image -> Imagen para bordes

- tranform -> Tranformar objeto
  - scale -> Escala
  - rotate -> Rotación
  - skew -> Trapecio
  - translate -> Mover 
- transition -> Transiciones
  - transition-property -> Propiedades para transicionar
  - transition-duration -> Duración 
  - transition-delay -> Retraso
  - transition-timing -> Comportamiento transición (acelerado, frenado)

<div style="page-break-after: always;"></div>

## Capitulo 2
[Tabla de contenidos](#tabla-de-contenidos)

### Subapartado 2.1
[Tabla de contenidos](#tabla-de-contenidos)

<div style="page-break-after: always;"></div>


## Capitulo 3
[Tabla de contenidos](#tabla-de-contenidos)

- Recursos: 
  - 

```php
echo "Hola Mundo";
```

### Seccion1
[Tabla de contenidos](#tabla-de-contenidos)

```console
#...
```



### Seccion2
[Tabla de contenidos](#tabla-de-contenidos)

```console
#...
```


#### Seccion2.1
[Tabla de contenidos](#tabla-de-contenidos)

1. **negrita**

```console
sudo apt update
sudo apt upgrade
```

2. Hm^3^
    - H~2~O

- dfgdlfkgdlfkj
- dflgjdlfkj

- [X] Hm^3^
    - H~2~O


## Clases 
[Tabla de contenidos](#tabla-de-contenidos)


## Clase 01 - 24/10
[Tabla de contenidos](#tabla-de-contenidos)

- [Web Notable](https://notable.app/)
  - https://notable.app/static/pdfs/cheatsheet.pdf
- [ ] https://github.com/twbs/bootstrap
- [ ] https://github.com/mermaid-js/mermaid

---

- [Apuntes de Docker](Docker.md "Introducción")

> IMPORTANTE: Para hacer una captura de pantalla simplemente hazla y pegala!!

![](@attachment/Clipboard_2023-10-24-14-10-11.png)
:angel::angel::angel::angel:
```python
user = "fulano"
```

