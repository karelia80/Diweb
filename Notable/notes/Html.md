---
pinned: true
title: Html
created: '2023-11-29T17:44:11.483Z'
modified: '2023-12-18T15:50:18.077Z'
---

# Html
---
title: HTML
created: '2023-10-25T08:30:45.377Z'
modified: '2023-10-31T17:27:36.005Z'
---

# Tabla de contenidos
- [Tabla de contenidos](#tabla-de-contenidos)
- [1. HTML](#1-html)
  - [1.1. Etiquetas](#11-etiquetas)
  - [1.2. Atributos](#12-atributos)

## Elementos
Hm^3^
H~2~O 

```php
echo "Hola Mundo";
```


## 1. HTML 
[Tabla de contenidos](#tabla-de-contenidos)

### 1.1. Etiquetas
[Tabla de contenidos](#tabla-de-contenidos)

- html 1
- head 1
  - title 2 -> Titulo
  - meta 2-> Metadatos
- body 1
  - h1...h6 2-> Secciones *en una pagina solo puede haber 1 H1*
  - p 2 -> Párrafo
    - a 3-> Enlace
    - em 3-> Cursiva
    - strong 3 ->negrita
    - ins 3 -> Subrayado
    - del 3 -> tachado
    - sup 3-> Superindice 
    - sub 3-> Subindice
    - abbr 3-> Abreviaturas
    - br 3 -> Salto de linea
    - span 3: fragmento de texto
    - img 3 : imagen 
    

  - blockquote 2 -> Citas
  - code 2-> Código

  - ul 2 -> lista sin ordenar
  - ol 2 -> lista ordenada
    - li 3-> Elemento de lista
*Con el simbolo del dolar $ entre llaves {} me enumera directamente la lista, ejemplo ol>li*3{ejemplo$}* 
*Tambien hay listas multinivel, listas dentro de listas*

  - table 2 -> Tabla
    - caption 3-> Titulo tabla
    - tr 3-> Fila
    - th 4-> Celda cabecera
    - td 4-> Celda
    - thead 3-> Cabecera de tabla *etiqueta semantica* tr>th
    - tbody 3-> Cuerpo de la tabla *etiqueta semantica*tr>td
    - tfoot 3-> Pie de la tabla *etiqueta semantica* el foot se considera como la cabecera tr>th
  Las tablas estan compuestas por filas y celdas. ejemplo de table con cabecera. 
  table>(tr>th*4)+(tr*4>td*4)
  para fusionar columnas colspan/ por columnas y rowspan

  - form 2-> Formularios 
  *El form es la unica forma que tiene para interactuar con el usuario. Hay dos tipos de form (get/post) Get ejemplo sistema de busqueda de amazon (no esta incriptado) o google, Post es para acceder a una pagina web (siempre incriptado).* <form action="" method="post"></form>
html envia inf no recibe.
    - label -> Etiquetas
    - input -> campos 
    - fieldset -> recuadro 
      - legend -> titulo recuadro
    - textarea -> Área de texto
    - select -> Lista desplegable
      - option -> Opciones


  
 *Para poner comentarios control k + control c y para quitar comentario control k + control u* 

 hr es poner una linea entre "p" "field" / <p>&nbsp;</p> espacio en blanco / requerid : requerido, para poner un campo obligatorio. En input puedes poner el atributo placeholder que es el titulo que va dentro del input.
    "for" y "id" tienen que ser iguales// el comando es label+input:number/tel/etc input:checbox+label (emmet)/(input:checkbox+label+br)*3
    el name es la variable, el nombre del a variable/ cuando una variable tiene mas de 1 dato es Array (coleccion de datos)En el checkbox siempre hay mas de una variable y se pone en la variable SIEMPRE [] ej: name="materia[]" / en el radio hay que pòner la misma variable y de esa manera solo se puede poner 1 de las opciones.
    Javascript: vamos a usar js para unir dos input: oninput "valores de id" siendo primero rango y luego valrango
    en java se funciona por eventos, para java ve la pagina como un conjunto de objeto.

_input: checkbox: /input: color /input: date / input: email / input file: para selecionar el archivo/ inpunt hidden /inpunt password /impunt radio/ inpunt range / input reset / inpunt submit / inpunt tel / inpunt tex / inpunt url /inpunt number / input. selec (lista desplegable)_
    
  

### 1.2. Atributos
[Tabla de contenidos](#tabla-de-contenidos)

- class -> Clases (para CSS)
- id -> identificadores únicos (CSS/JS)

### 1.3. SEO
[Tabla de contenidos](#tabla-de-contenidos)

- 1. Validar
  - https://validator.w3.org/
- 2. HTML Estricto (XHTML)
- 3. Ratio Contenido/tags alto
- 4. Usar etiquetas semánticas
- 5. Redes Sociales (enlaces importados)

### 1.3. Marcado Semántico
[Tabla de contenidos](#tabla-de-contenidos)
Siempre va en el body!

- header -> Cabecera de página
- nav -> Barra de navegación, define una seccion de navegacion de una seccion. poder navegar por toda la pagina
- main -> Zona principal, lo central de la pagina(puede incluir aside/section/article...)
- section -> Secciones (para no poner h2...h6)
- aside -> barra lateral
- footer -> Pie
- Article -> Articulos o contenidos relacionados
   (hay que poner h2...h6) tienen que tener el titulo 

- figure -> Imágenes o vídeos
  - figcaption -> Titulo de Imágene o Vídeo
- details -> define comunicaciones que se puede usar o ocultar
  - summary -> el titulo del details. va dentro del details
 
- time : el tiempo
- mark: remarcado de palabras.

 


*Normas: no puede haber la misma etiqueta semantica dentro de otra (section dentro de un section no se puede). Main solo puede haber 1, las etiquetas article y section SIEMPRE tienen que tener un encabezado h2,h3,h4...*
*No existe una solucion unica, puedes maquetar como quieras siempre que sigas la estuctura.*


