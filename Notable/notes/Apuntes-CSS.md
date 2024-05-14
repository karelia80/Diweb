---
title: Apuntes-CSS
created: '2024-01-16T15:39:56.153Z'
modified: '2024-01-16T19:31:40.419Z'
---

# Apuntes-CSS

## [Tabla de contenidos](#tabla-de-contenidos)



## [Selectores](#selectores)

Selectores básicos:
  - `*`{} -> Todos los elementos de la página
  - h1{} -> Por etiqueta
  - p span{} -> Selector descendente
  - .cabecera{} -> Selector por clase
  - #destacado -> Selector por id

Selectores avanzados:
  - p > span -> Selector hijo
  - elemento1 + elemento2 -> Selector adyacente
  - Selector por atributos
    - [nombre_atributo], selecciona los elementos que tienen establecido el atributo llamado
      nombre_atributo, independientemente de su valor.

    - [nombre_atributo=valor], selecciona los elementos que tienen establecido un atributo
      llamado nombre_atributo con un valor igual a valor.

    - [nombre_atributo~=valor], selecciona los elementos que tienen establecido un atributo
      llamado nombre_atributo y al menos uno de los valores del atributo es valor.

    - [nombre_atributo|=valor], selecciona los elementos que tienen establecido un atributo
      llamado nombre_atributo y cuyo valor es una serie de palabras separadas con guiones,
      pero que comienza con valor. Este tipo de selector sólo es útil para los atributos de
      tipo lang que indican el idioma del contenido del elemento.
  - nth- -> Selector por enumeración (7-seventh)
    - child ->
    - of-type ->
    - last-of-type ->
  - first
    - child
    - of-type
    - letter
    - line
  
## [Colores](#colores)
  - Palabras clave
  - RGB Decimal -> R(rojo), G(verde), B(azul); de 0 a 255
  - RGB Porcentual -> de 0% a 100%
  - RGB Hexadecimal -> del 0 al 9 y de la A a la F (#AA00FF)


## [Cajas](cajas)
Anchura y altura:
  - width -> Ancho
  - height -> Altura

Margen y relleno:
  - margin -> Margen
    - top
    - right
    - bottom
    - left
  - padding -> Relleno
    - top
    - right
    - bottom
    - left

Bordes:
  - Anchura
    - top-width
    - right-width
    - bottom-width
    - left-width
  - Color
    - top-color
    - right-color
    - bottom-color
    - left-color
  - Estilo
    - top-style
    - right-style
    - bottom-style
    - left-style
Fondos:
  - background-color -> Color de fondo
  - background-image -> Imagen de fondo
  - background-repeat -> Controla la forma en la que se repite el fondo
  - background-position -> Controla la posición en la que se muestra la imagen
  - background-attachment -> Fija la imagen de fondo

## [Posicionamiento y visualización](#posicionamiento-y-visualización)

Tipos de elementos:
  - Elemento en bloque -> Empiezan en una nueva línea y ocupan todo el espacio disponible hasta el final de la línea
  - Elemento en línea -> No empiezan en una nueva línea y sólo ocupan el espacio necesario para mostrar sus contenidos

Posicionamiento:
  - (static) Normal o estático -> El base
  - (relative) Relativo -> Se posiciona en base a su posicionamiento normal y después desplazarla
  - (absolute) Absoluto -> Se posiciona en base a su elemento contenedor y el resto de elementos de la página ignoran la nueva posición
  - (fixed) Fijo -> Se fija independientemente de a dónde te muevas en la página
  - (inherit) Flotante -> Desplaza las cajas todo lo posible a la izquierda o la derecha de la línea en la que se encuentra

Visualización:
  - display -> Se oculta y no mantiene su posición en la página
  - visibility -> Se oculta pero mantiene su posición en la página
  - overflow -> Controla los contenidos sobrantes de un elemento
  - z-index -> Establece el nivel tridimensional en el que se muestra el elemento

## [Texto](#texto)
Tipografía:
  - color -> Le cambia el color a las letras
  - font-family -> Establece el tipo de letra
  - font-size -> Establece el tamaño de letra
  - font-weight -> Establece la anchura de la letra
  - font-style -> Estilo de la letra
  - font-variant -> Versalitas

Texto:
  - text-align -> La alineación del contenido del elemento
  - line-height -> Altura de línea de los elementos
  - text-decoration -> Decoración del texto
  - text-transform -> Transforma el texto original
  - vertical-align -> Alineación vertical
  - text-indent -> Tabula desde la izquierda (Sangría)
  - letter-spacing -> Espacio entre letras
  - word-spacing -> Espacio entre palabras
  - white-space -> Como trata los especios en blanco del texto

## [Enlaces](#enlaces)
Pseudo-clases:
  - :link -> Enlaces que apuntan a páginas o recursos aún no visitados por el usuario
  - :visited -> Enlaces ya usados
  - :hover -> Mientras estás apuntando el ratón encima
  - :active -> Mientras estás pinchando en el enlace


## [Listas](#listas)
Estilos básicos:
  - list-style-type -> Establece el tipo de viñeta mostrada en una lista
  - list-style-position -> Establece la posición de la viñeta de cada elemento de una lista
  - list-style-image -> Reemplaza las viñetas automáticas por una imagen personalizada

## [Tablas](#tablas)

