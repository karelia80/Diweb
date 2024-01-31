---
title: PHP8
created: '2023-11-27T09:41:11.991Z'
modified: '2023-11-27T13:17:25.447Z'
---

# PHP8
--------------

[//]: # (version: 1.0)
[//]: # (author: Iván Rodríguez)
[//]: # (date: 2023-11-27)



# Tabla de contenidos
- [PHP8](#php8)
- [Tabla de contenidos](#tabla-de-contenidos)
  - [Introducción](#introducción)
  - [Instalación](#instalación)
  - [Sintaxis Básica](#sintaxis-básica)
    - [Tipos](#tipos)
    - [Variables](#variables)
    - [Variables Predefinidas](#variables-predefinidas)
    - [Constantes](#constantes)
    - [Operadores](#operadores)
  - [Puerta lógicas](#puerta-lógicas)
    - [Capitulo 2](#capitulo-2)
    - [Subapartado 2.1](#subapartado-21)

<div style="page-break-after: always;"></div>



## Introducción
[Tabla de contenidos](#tabla-de-contenidos)

- Componentes para PHP
  - Servidor de Aplicaciones (Apache)
  - Intérprete de PHP
  - Editor (VS Code + Intelephense)

- Documentación Oficial
  - https://www.php.net/manual/es/index.php
- Recursos adicionales
  - https://www.forcontu.com/libros/drupal10


## Instalación
[Tabla de contenidos](#tabla-de-contenidos)

## Sintaxis Básica
[Tabla de contenidos](#tabla-de-contenidos)

### Tipos
[Tabla de contenidos](#tabla-de-contenidos)

- a) Numéricos -> int (enteros) y float (coma flotante)
- b) Cadenas de caracteres -> string
- c) Booleanos -> bool (true/false)
- d) Objetos -> object y null (sin objeto)
- e) Arrays -> Colecciones de datos

### Variables
[Tabla de contenidos](#tabla-de-contenidos)

- Para visualizar el contenido de las variables, usar var_dump()
- Declaración + Inicialización (recomendado)
- ASignaciones por Valor y por Referencia
```php
<!DOCTYPE html>
<html lang="es">
<!-- DENTRO DE PHP podemos incluir Bootstrap y FontAwesome -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/docs.css">
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style></style>
</head>

<body>

    <?php
    /**
     * PHP DOC
     * Métodos (Funciones), para clases (POO), etc
     * Parámetros de Entrada
     * Salida
     */


    # Comentario de 1 línea
    // Comentario de 1 línea Opcion2
    /* Comentario Multilínea
    - Añadido Texto en Rojo con Bootstrap
    - Añadido Icono con FontAwesome
    */
    echo '<p class="text-danger">
    <i class="fa-regular fa-face-smile"></i>
    Hola Mundo</p>';

    // Variables, empezar con $ y letra (o _)
    // No introducir espacios o caracteres especiales!!
    // Asignaciones por valor
    $nomnbre;   // Declaración
    $nombre = "Luis";
    echo $nombre . "<br>";

    // Uso de asignaciones por referencia (&)
    // Ejemplo POR VALOR
    $ciudad1 = "Badajoz";
    $ciudad2 = $ciudad1;
    echo $ciudad1 . "<br>";
    echo $ciudad2 . "<br>";
    echo "-------------- <br>";
    $ciudad2 = "Sevilla";
    echo $ciudad1 . "<br>";
    echo $ciudad2 . "<br>";
    echo "############################" . "<br>";

    // Ejemplo POR REFERENCIA (&)
    $ciudad1 = "Badajoz";
    $ciudad2 = &$ciudad1;
    echo $ciudad1 . "<br>";
    echo $ciudad2 . "<br>";
    echo "-------------- <br>";
    $ciudad2 = "Sevilla";
    echo $ciudad1 . "<br>";
    echo $ciudad2 . "<br>";

    // Tipos de variables
    /**
     * a) Numéricos -> int (enteros) y float (coma flotante)
     * b) Cadenas de caracteres -> string
     * c) Booleanos -> bool (true/false)
     * d) Objetos -> object y null (sin objeto)
     * e) Arrays -> Colecciones de datos
     */

    $entero = 10;
    $flotante = 10.1;
    $booleano = true;

    class Coche
    {
        public $marca = "Hyundai";
        public $modelo = "Kona";
        public $potencia = 204;
        public $electrico = true;
    }
    $cocheIvan = new Coche();

    $arreglo = array($entero, $flotante, $booleano, $cocheIvan);
    var_dump($arreglo);

    ?>
</body>

</html>
```


<div style="page-break-after: always;"></div>

### Variables Predefinidas
[Tabla de contenidos](#tabla-de-contenidos)

- $GLOBALS — Hace referencia a todas las variables disponibles en el ámbito global
- $_SERVER — Información del entorno del servidor y de ejecución

- Formularios
  - $_GET — Variables HTTP GET
  - $_POST — Variables POST de HTTP
  - $_REQUEST — Variables HTTP Request
  - $_FILES — Variables de subida de ficheros HTTP

- $_SESSION — Variables de sesión
- $_ENV — Variables de entorno
- $_COOKIE — Cookies HTTP

- $argc — El número de argumentos pasados a un script
- $argv — Array de argumentos pasados a un script

### Constantes
[Tabla de contenidos](#tabla-de-contenidos)

- Fragmentos de memoria que NO se modifica
  - Variables inmutables

```php
    define("PI", 3.14156);
    // PI = 100; // NO SE PUEDE!!
    echo PI;
```

### Operadores
[Tabla de contenidos](#tabla-de-contenidos)

- Precedencia operadores: Por encima de TODO -> Paréntesis
  - Aritméticos: *(producto) y / (división ) tienen precedencia sobre + (suma) y - (resta) 
- Operadores Aritméticos: -(neg), +, -, *, /, % (módulo)
- Operador de asignación es "=". Se lee de dcha a izq


- Operadores comparación
  - "==" -> Comparación igualdad
  - "===" -> Comparación igualdad + igual tipo
  - "!=" y "<>" -> Diferentes
  - "!==" > Distinto (incluye tipo)
  - "<" y "<=" -> Menor y menor/igual
  - ">" y ">=" -> Mayor y mayor/igual

- Operadores Incremento/Decremento
  - "$var++" -> Postincremento
  - "$var--" -> Postdecremento

- Operadores lógicos
  - "or" / "||" -> Condición OR
  - "and" / "&&" -> Condición AND
  - "not" / "!" -> Negación

- Operadores cadenas caracteres
  - "." -> Concatenación
  - ".=" -> Asignación / Concatenación




## Puerta lógicas
[Tabla de contenidos](#tabla-de-contenidos)

```
Operadores Lógicos

----- AND --------  (&&)
E1  |  E2  |   S
~~~~~~~~~~~~~~~~~~
0       0       0
0       1       0
1       0       0
1       1       1


----- OR --------   (||)
E1  |  E2  |   S
~~~~~~~~~~~~~~~~~~
0       0       0
0       1       1
1       0       1
1       1       1


----- NAND --------  (!&&) Y negado
E1  |  E2  |   S
~~~~~~~~~~~~~~~~~~
0       0       1
0       1       1
1       0       1
1       1       0


----- NOR --------  (!||)  O Negado
E1  |  E2  |   S
~~~~~~~~~~~~~~~~~~
0       0       1
0       1       0
1       0       0
1       1       0


Cualquier circuito se puede construir 
unicamente con puertas XOR
----- XOR --------  ( xor)  O Exclusivo
E1  |  E2  |   S
~~~~~~~~~~~~~~~~~~
0       0       0
0       1       1
1       0       1
1       1       0
```



```php
    
```


### Capitulo 2
[Tabla de contenidos](#tabla-de-contenidos)

### Subapartado 2.1
[Tabla de contenidos](#tabla-de-contenidos)

<div style="page-break-after: always;"></div>
