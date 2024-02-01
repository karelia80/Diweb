---
title: Apuntes-PHP (2)
created: '2024-01-29T19:34:47.357Z'
modified: '2024-02-01T18:22:42.546Z'
---

# Apuntes-PHP

## [Tabla de contenidos](#tabla-de-contenidos)
  - [PHP](#php)
  - [Sintáxis básica](#sintáxis-básica)
  - [Variables](#variables)
  - [Tipos de datos](#tipos-de-datos)
  - [Operadores](#operadores)
  - [Condicionales](#condicionales)
    - [If...else](#if...else)
    - [Switch](#switch)
  - [Bucles](#bucles)
    - [While](#while)
    - [For](#for)
    - [Foreach](#foreach)
  - [Match](#match)
  - [Funciones](#funciones)
    - [Sin entrada sin salida](#sin-entrada-sin-salida)
    - [Sin entrada con salida](#sin-entrada-con-salida)
    - [Con entrada sin salida](#con-entrada-sin-salida)
    - [Con entrada con salida](#con-entrada-con-salida)
  - [MySQL](#mysql)
    - [Conexión BBDD](#conexión-bbdd)
    - [Cargar BBDD](#cargar-bbdd)
    - [Login](#login)
    - [CRUD](#crud)
      - [Insertar](#insertar)
      - [Consultar](#consultar)
      - [Actualizar](#actualizar)
      - [Borrar](#borrar)

## [PHP](#php)
[Tabla de contenidos](#tabla-de-contenidos)
¿Qué es PHP?
PHP es un lenguaje de programación interpretado, que quiere decir eso, pues que ejecuta el código línea por línea desde arriba hasta abajo, no como JavaScript que es un lenguaje compilado, que eso es que ejecuta el código entero a la vez como si fuera un bloque.

PHP Se encarga de comunicarse con el servidor, pidiendole datos o enviando datos, haciendo más dinámicas las páginas web dónde se emplea introduciendo el código directamente en el HTML.

## [Sintáxis básica](#sintáxis-básica)
[Tabla de contenidos](#tabla-de-contenidos)

Hay reglas para los nombres de variables, funciones y constantes:
  - Comenzar por una letra o un guion bajo
  - Contener a continuación letras, cifras o el guión bajo
  - Están terminantemente prohibidos los caracteres especiales "#$%&"
```php
<?php
$variable;
$_variable;
$var_1;
?>
```

  - `<?php...?>` -> Lugar de código php
  - Recuerda cerrar con `;`
  - `//` -> Comentario en línea
  - `/**/` -> Comentario multilínea
  - `echo` -> Muestra en pantalla


## [Variables](#variables)
PHP tiene en cuenta las minúsculas y las mayúsculas.

Para crear una variable se inicializa con el signo `$`:
```php
$nombreVariable = valor;
```
  - var_dump() -> Te sirve para mostrar el contenido de una variable

### [Variables predefinidas](#variables-predefinidas)
  - $GLOBALS — Hace referencia a todas las variables disponibles en el ámbito global

  - $_SERVER — Información del entorno del servidor y de ejecución

Formularios

  - $_GET — Variables HTTP GET
  - $_POST — Variables POST de HTTP
  - $_REQUEST — Variables HTTP Request
  - $_FILES — Variables de subida de ficheros HTTP
  - $_SESSION — Variables de sesión

  - $_ENV — Variables de entorno

  - $_COOKIE — Cookies HTTP

  - $argc — El número de argumentos pasados a un script

  - $argv — Array de argumentos pasados a un script

## [Tipos de datos](#tipos-de-datos)
[Tabla de contenidos](#tabla-de-contenidos)
  - `$tipo = null;` -> Tipo nulo
  - `$string = "Pedro";` -> Cadena de caracteres
  - `$verdad = true;` -> Booleano, True/False
  - `$numero = 10;` -> Números enteros
  - `$octal = 0o102;` -> Número octal
  - `$hexadecimal = 0xCCC;` -> Número hexadecimal
  - `$binario = 0b1011100;` -> Números binarios
  - `$flotante = 1.234;` -> Números flotantes (o double)
  - `$notCientifica = 1.2E-10;` -> Nota científica (1.2 * 10⁻10)
  - `$nombreEmpresa = "Soltel";` -> Cadena de caracteres
  - `$colores = array("Azul", "Verde", "Rojo");` -> Un array unidimensional

## [Operadores](#operadores)
[Tabla de contenidos](#tabla-de-contenidos)
Operadores aritméticos:
  - `+` -> Suma
  - `-` -> Resta
  - `*`-> Multiplicación
  - `/` -> División
  - `%` -> Módulo o Resto de la División
  - `**` -> Exponencial

Operadores de asignación:
  - `x = y` -> x tiene el valor de y
  - `x += y` -> Suma de variables
  - `x -= y` -> Resta de variables
  - `x *= y` -> Multiplicación de variables
  - `x /= y` -> División de variables
  - `x %= y` -> Módulo de variables

Operadores de Comparación:
  - `==` -> Igual
  - `===` -> Idéntico (mismo valor y tipo)
  - `!=` -> No es igual
  - `<>` -> No es igual
  - `!==` -> No es idéntico (mismo valor y tipo)
  - `>` -> Mayor que
  - `<` -> Menor que
  - `>=` -> Mayor o igual
  - `<=` -> Menor o igual
  - `<=>` -> Devuelve un entero menor, igual o mayor que cero (Nave espacial)
```php
<?php
$x = 5;  
$y = 10;

echo ($x <=> $y); // devuelve -1 porque $x es menor que $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // devuelve 0 porque los valores son iguales
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // devuelve 1 porque $x es mayor que $y
?>  
```

## [Condicionales](#condicionales)
[Tabla de contenidos](#tabla-de-contenidos)
Las condicionales son muy usadas cuándo quieres hacer acciones distintas dependiendo de ciertas condiciones.

  - `if` -> Ejecuta el códgio siempre y cuándo la condición sea true
  - `if...else` -> Ejecuta un código si es true u otro si es false
  - `if...else if...else` -> Ejecuta diferentes códigos para más de una condición
  - `switch` -> Selecciona un bloque de código para ser ejecutado

### [If else](#if-else)

If...else:
```php
<?php
$num1 = 10;
$num2 = 20;

if ($num1 > $num2) {
    echo "Num1 es mayor que Num2";
} else {
    echo "Num1 es menor que Num2";
}
?>
```

If...else if:
```php
if ($num1 > $num2) {
    echo "Num1 es mayor que Num2";
} else if ($num1 == $num2) {
    echo "Num1 es igual a Num2";
} else {
    echo "Num1 es menor que Num2";
}
?>
```

Operadores lógicos de `if`:
  - && -> And -> True si ambas condiciones son true
  - || -> Or -> True si una de las dos condiciones es true
  - xor -> True si una de las condiciones es true, pero no las dos
  - ! -> Not -> True si la condición es false

Podemos hacer tantas comparaciones como queramos en un if:
```php
<?php
$a = 5;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
  echo "$a es un número entre el 2 y el 7";
}
?>
```

El `if...else` ejecuta un código si es true y otro si es false
```php
<?php
$hora = date("H");

if ($hora < "20") {
  echo "Ten un buen día";
} else {
  echo "Buenas noches";
}
?>
```

### [Switch](#switch)
El `switch` selecciona un bloque de código de entre todos para ser ejecutado:

```php
<?php
// Haces tu interfaz para el usuario
$menu = "1. Sumar <br>
         2. Restar <br>
         3. Salir";

echo $menu . "<br>";

$opcion = 1;
$mensajeMenu = "";

// Normalmente cada case debe tener un break para que no salte a todas las opciones
switch ($opcion) {
    case 1:
        $mensajeMenu = "Has elegido Sumar <br>";
        break;
    case 2:
        $mensajeMenu = "Has elegido Restar <br>";
        break;
    case 3:
        $mensajeMenu = "Salir!";
        break;
    default:
        $mensajeMenu = "Opción Incorrecta! <br>";
}

echo $mensajeMenu;
?>
```
  - El `$opcion` se evalúa una vez
  - El valor de `$opcion` se compara con los valores de cada caso
  - Si es igual a uno, ese bloque de código se ejecutará
  - La palabra clave `break` detiene el bloque de código
  - El bloque de código `default` se ejecuta si no es igual a ninguno


```php
<?php
// Pero no siempre usaremos break en un case
$dia = "martes";

switch ($dia) {
    case 'lunes':
    case 'martes':
    case 'miércoles':
    case 'jueves':
    case 'viernes':
        echo "Toca dar clase <br>";
        break;

    default:
        echo "No hay clase <br>";
        break;
}
?>
```

## [Bucles](#bucles)
[Tabla de contenidos](#tabla-de-contenidos)
Los bucles te sirven si te interesa que un bloque de código se repita.

Estos son los que hay:
  - `while` -> Hace el bucle siempre y cuándo la condición especificada se cumpla
  - `do...while` -> Hace el bucle una vez, y luego se repite si la condición es true
  - `for` -> Hace el bucle un número de veces en concreto
  - `foreach` -> Hace el bucle por cada elemento de un array


### [While](#while)

```php
<?php
$num = 1;
while ($num <= 5) {
    echo $num . "<br>";
    $num++; // $num = $num +1
}

// 2. do... while (PROHIBIDO!!)
$num = 1;
do {
    echo $num . "<br>";
    $num++; // $num = $num +1
} while ($num <= 7);
?>
```

### [For](#for)

```php
<?php
for ($num = 1; $num <= 5; $num++) {
    echo $num . "<br>";
}

// break y continue -> EVITAR usarlos en bucles
// 3a. for con break (rompe el bucle)
for ($num = 1; $num <= 5; $num++) {
    if ($num == 3) break;   // NO poner las llaves está mal!!
    echo $num . "<br>";
}

// 3b. for con continue (salta iteración)
for ($num = 1; $num <= 5; $num++) {
    if ($num == 3) continue;   // NO poner las llaves está mal!!
    echo $num . "<br>";
}
?>
```

### [Foreach](#foreach)
Es un for para arrays completos.

  - array unidimensional asociativo
Se usa para lecturas de bases de datos (arrays bidimensionales), cada clave se corresponde con un campo

```php
<?php
// Array asociativo
$alumnos = array(
    "alumno1" => "Juan Jośe Mata",
    "alumno2" => "Olga Serrano",
    "alumno3" => "Jorge Martin"
);
foreach ($alumnos as $alumno => $nombre) {
    echo "$alumno = $nombre <br>";
}
?>
```

```php
<?php
// Array simple
$alumnos2 = array("Juan Jośe Mata", "Olga Serrano", "Jorge Martin");
$mensajeAlumnos2 = "";

foreach ($alumnos2 as $nombre) {
    $mensajeAlumnos2 .= "$nombre <br>";
}

echo $mensajeAlumnos2;
?>
```

```php
<?php
// Ejemplo de uso de array unidimensional NO asociativo
$numeros = [5, 8, 10, 3, 7];
$suma = 0;
$contadorNum = 0;
$valores = "<br>";
foreach ($numeros as $numero) {
    $suma += $numero;
    $contadorNum++;
    $valores .= $numero . "<br>";
}
echo "<br>La media es: " . $suma / $contadorNum . "<br>";
echo "<br>Valores introducidos: " . $valores . "<br>";
?>
```

## [Match](#match)
[Tabla de contenidos](#tabla-de-contenidos)
Match es una evolución de switch, incluye comparaciones en el case y permite distintas salidas de la condición, no solo el true.

```php
<?php
$mensaje = "";
$edad = 65;
$mensaje = match (true) {
    $edad <= 18 && $edad > 0 => "Eres menor de edad",
    $edad > 18 && $edad < 65 => "Estás en edad de trabajar",
    $edad >= 65 => "Estás para jubilarte...",
    default => "Edad incorrecta"
}

echo $mensaje;
?>
```

## [Funciones](#funciones)
[Tabla de contenidos](#tabla-de-contenidos)
PHP tiene más de 1000 funciones propias, a parte de las que puedes crear y personalizar.

Retorno de funciones:
  - void -> No devuelve ningún valor
  - static -> El valor debe ser un objeto de la misma clase que donde se llama ese método
  - never -> La función o el método interrumpe la ejecución del programa, generando una excepción o no se termina nunca

Funciones creadas por el usuario:
  - Una función es un bloque de declaraciones que pueden usarse repetidas veces en un programa
  - Una función no se ejecutará automáticamente cuándo una página carga
  - Una función se ejecutará llamándola

Para crear una función se empieza con la palabra clave `function` seguido del nombre de la función:
```php
<?php
function saludo() {
  echo "Hola, ¿Qué tal?";
}
?>
```

LLamamos a la función:
```php
<?php
function saludo() {
  echo "Hola, ¿Qué tal?";
}

saludo();
?>
```

Hay 4 tipologias de funciones propias (usuario). Por complejidad (menor a mayor):

### [Sin entrada sin salida](#sin-entrada-sin-salida) (todo pasa en la función)

Acá vamos a usar PHPDocs

```php
<?php
    function sumar()
    {
        // num1 y num2 son variables locales (propias de la función)
        $num1 = 10;
        $num2 = 20;

        $resultado = $num1 + $num2;

        echo $resultado;
    }

    sumar();
?>
```

### [Sin entrada con salida](#sin-entrada-con-salida) (return)
En los parámetros estoy usando las variables globales:

```php
<?php
    function restar()
    {
        // num1 y num2 son variables locales (propias de la función)
        $num1 = 10;
        $num2 = 20;
    
        $resultado = $num1 - $num2;
    
        // Devuelve el resultado de la resta
        return $resultado;
    }

    $resultado = restar();
    echo "Resultado: " . $resultado;
?>
```

### [Con entrada sin salida](#con-entrada-sin-salida)

```php
<?php
function multiplicar($num1, $num2)
{
    $resultado = $num1 * $num2;
    // No mostramos el resultado directamente
    return $resultado;
}

$resultado = multiplicar(3, 4);

// Mostramos el resultado
echo "Resultado: " . $resultado; // Esto imprimirá "Resultado: 12"
?>
```

### [Con entrada con salida](#con-entrada-con-salida) Es la tipología MAS USADA

```php
<?php
    function dividir($num1, $num2)
{
    $resultado = null;
    if ($num2 != 0) {
        $resultado = $num1 / $num2;
    }
    return $resultado;
}

$resultado = dividir(10, 2);
echo "Resultado: " . $resultado . "<br>"; // Esto mostrará "Resultado: 5"

$resultado = dividir(8, 0);
echo "Resultado: " . $resultado . "<br>"; // Esto no mostrará nada ya que el divisor es cero y se devuelve null
?>
```

## [Formularios](#formularios)
[Tabla de contenidos](#tabla-de-contenidos)
Con PHP podemos tratar los formularios:
```php
<?php
// Este If solo funcionará cuándo se pulse el botón enviar
if (isset($_REQUEST["enviar"])) {
    // Le damos a las variables el valor recogido de los inputs
    // Se recoge porque le indicamos el name de los input que debe recoger
    $nombre = $_REQUEST["nombre"];
    $edad = $_REQUEST["edad"];
    $sexo = $_REQUEST["sexo"];
    $nac = $_REQUEST["nac"];

    // Mostramos el resultado
    echo $nombre . "<br>";
    echo $edad . "<br>";
    echo $sexo . "<br>";
    echo $nac . "<br>";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
</head>

<body>
<br>
    <main>   
        <p>
            <?php
            // Si se manda "enviar", se mostrará el mensaje
            if (isset($_REQUEST["enviar"])) {
                echo "Misión completada";
            }
            ?>
        </p>
        <hr>
        <form action="#" method="post" class="form w-50 text-light">
            <!-- Input Nombre -->
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre"><br>

            <!-- Input edad -->
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad"><br>

            <!-- Input Fecha de nacimiento -->
            <label for="nac">Fecha Nacimiento</label>
            <input type="date" name="nac" id="nac"><br>

            <!-- Radio Mujer -->
            <input type="radio" name="sexo" id="mujer" value="true"
            checked = "checked">
            <label for="mujer">Mujer</label><br>
            
            <!-- Radio Hombre -->
            <input type="radio" name="sexo" id="hombre" value="false" class="form-check-input">
            <label for="hombre">Hombre</label><br>

            <!-- Input Enviar -->
            <input type="submit" value="Enviar" name="enviar">
        </form>
        <br>
    </main>

</body>

</html>
```

## [MySQL](#mysql)
[Tabla de contenidos](#tabla-de-contenidos)

### [Conexión BBDD](#conexión-bbdd)
Para conectar con la base de datos (POO):
```php
<?php
// Definimos unas variables para que tengan los valores para poder acceder a la bbdd
$servidor = "localhost";
$usuario = "root";
$clave = "root";

// Hacemos la conexión
$conexion = new mysqli($servidor, $usuario, $clave);

// Verificamos la conexión
if ($conexion->connect_error) {
  die("Conexión fallida");
} else {
  echo "Conexión establecida";
}

?>
```

### [Cargar BBDD](#cargar-bbdd)
Carga de Base de datos:
```php
<?php
// Conectar a MYSQL
$servidor = "localhost";
$usuario = "root";
$clave = "root";

$conexion = new mysqli($servidor, $usuario, $clave);
if($conexion->connect_error) {
    die("ERROR conexión!");
} else {
  echo "Conexión establecida";
}
?>

<?php
// Si le damos al botón "Cargar BBDD", cargamos la base de datos
if (isset($_REQUEST["enviar"])) {
  
    // Esta variable tiene el valor del archivo sql
    $archivoSQL = "anidi.sql";

    // Esta variable lee el contenido de la anterior variable
    $contenidoSQL = file_get_contents($archivoSQL);

    // Esta variable carga la base de datos
    $cargaBBDD = $conexion->multi_query($contenidoSQL);
    if($cargaBBDD) {
        $mensaje = "BBDD cargado BIEN";
    } else {
        $mensaje = "ERROR";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<br>
    <main class="container align-center w-50 bg-info p-3">   
        <p class="alert alert-info">
            <?php
            if (isset($_REQUEST["enviar"])) {
                echo $mensaje;
            }
            ?>
        </p>
        <hr>
        <form action="#" method="post" class="form w-50 text-light">
            <input type="submit" value="Cargar SQL" name="enviar" class="form-control border border-danger bg-warning text-bg-light">
        </form>
        <br>
    </main>

</body>

</html>
```

### [Login](#login)
Iniciar sesión:
```php
<?php
// Conectar a MYSQL
$servidor = "localhost";
$usuario = "root";
$clave = "root";

$conexion = new mysqli($servidor, $usuario, $clave);
if ($conexion->connect_error) {
    die("ERROR conexión!");
}
?>

<?php
// Tratamos el formulario
if (isset($_REQUEST["enviar"])) {

    // Recoge el input de usuario
    $usuario = $_REQUEST["usuario"];

    // Recoge el input de clave
    $clave = $_REQUEST["clave"];

    // Lo visualizamos
    echo $usuario . "<br>";
    echo $clave . "<br>";

    // Comprobamos credenciales
    if ($usuario == "admin" && $clave == "1234") {
        header("Location: archivo.php");
    } else {
        $mensaje = "Nombre de usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <br>
    <main class="container align-center w-50 bg-info p-3">
        <p class="alert alert-info">
            <?php
            if (isset($_REQUEST["enviar"])) {
                echo $mensaje;
            }
            ?>
        </p>
        <hr>
        <form action="#" method="post" class="form w-50 text-light">

            <!-- Input Usuario -->
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" name="usuario" id="usuario" class="form-control"><br>
            
            <!-- Input Contraseña -->
            <label for="clave" class="form-label">Clave</label>
            <input type="password" name="clave" id="clave" class="form-control"><br>

            <!-- Input Enviar -->
            <input type="submit" value="Acceder" name="enviar" class="form-control border border-danger bg-warning text-bg-light">
        </form>
        <br>
    </main>

</body>

</html>
```

### [CRUD](#crud)
[Tabla de contenidos](#tabla-de-contenidos)

#### [Insertar](#insertar)
Empezamos con el CRUD, primero insertar (Create):
```php
<?php
// Conectar a MYSQL
$servidor = "localhost";
$usuario = "root";
$clave = "root";
$bbdd = "anidi";

$conexion = new mysqli($servidor, $usuario, $clave, $bbdd);
if ($conexion->connect_error) {
    die("ERROR conexión!");
}
?>

<?php
// Tratamos el formulario
if (isset($_REQUEST["enviar"])) {

    $nombre = $_REQUEST["nombre"];
    $edad = $_REQUEST["edad"];
    $sexo = $_REQUEST["sexo"];
    $nac = $_REQUEST["nac"];
    $numaula = $_REQUEST["numaula"];

    // Insertamos en la tabla Alumnos los 5 valores que declaramos arriba
    // Ponemos una interrogación por valor introducido
    $sql = "INSERT INTO Alumnos VALUES (?, ?, ?, ?, ?)";

    // Hacemos una variable que hará de sentencia preparada para evitar inyecciones sql
    $sentPreparada = $conexion->prepare($sql);

    /*
    Le indicamos el tipo de parámetros que vamos a introducir:
    s -> Texto, palabras o cualquier cosa que contenga letras (string)
    i -> Números (int)
    d -> Decimales (double)
    */ 
    $sentPreparada->bind_param("siisi", 
        $nombre, $edad, $sexo, $nac, $numaula);
    
    // Hacemos la condición de si se ejecuta la sentencia preparada:
    if($sentPreparada->execute()) {
        $mensaje = "Insertada Alumno/a en la BBDD";
    } else {
        $mensaje = "ERROR!";
    }
    
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <br>
    <main class="container align-center w-50 bg-info p-3">
        <p class="alert alert-info">
            <?php
            if (isset($_REQUEST["enviar"])) {
                echo $mensaje;
            }
            ?>
        </p>
        <hr>
        <form action="#" method="post" class="form w-50 text-light">
            <!-- Input Nombre -->
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control"><br>

            <!-- Input edad -->
            <label for="edad" class="form-label">Edad</label>
            <input type="number" name="edad" id="edad" class="form-control"><br>

            <!-- Input Fecha de nacimiento -->
            <label for="nac" class="form-label">Fecha Nacimiento</label>
            <input type="date" name="nac" id="nac" class="form-control"><br>

            <!-- Radio Mujer -->
            <input type="radio" name="sexo" id="mujer" value="true" class="form-check-input" checked="checked">
            <label for="mujer" class="form-check-label">Mujer</label><br>
            
            <!-- Radio Hombre -->
            <input type="radio" name="sexo" id="hombre" value="false" class="form-check-input">
            <label for="hombre" class="form-check-label">Hombre</label><br>

            <!-- Select del aula -->
            <select name="numaula" id="numaula" class="form-select">
                <option value="23">Aula23</option>
            </select><br>

            <!-- Input Enviar -->
            <input type="submit" value="Insertar Registro" name="enviar" class="form-control border border-danger bg-warning text-bg-light">
        </form>
        <br>

        <!-- Menú -->
        <section class="row">
            <nav class="col">
                <a href="01-cargar-bbdd.php" class="btn btn-sm btn-dark w-100">CargarBBDD</a><br><br>
                <a href="02-login.php" class="btn btn-sm btn-primary w-100">Acceso</a><br><br>
                <a href="03-insertar.php" class="btn btn-sm btn-warning w-100">Insertar</a><br><br>
            </nav>
            <nav class="col">
                <a href="04-consultar.php" class="btn btn-sm btn-success w-100">Consultar</a><br><br>
                <a href="05-actualizar.php" class="btn btn-sm btn-secondary w-100">Actualizar</a><br><br>
                <a href="06-borrar.php" class="btn btn-sm btn-danger w-100">Borrar</a><br><br>
            </nav>
        </section>
    </main>

</body>

</html>
```

#### [Consultar](#consultar)
Vamos a hacer unas consultas (Read):
```php
<?php
// Conectar a MYSQL
$servidor = "localhost";
$usuario = "root";
$clave = "root";
$bbdd = "anidi";

$conexion = new mysqli($servidor, $usuario, $clave, $bbdd);
if ($conexion->connect_error) {
    die("ERROR conexión!");
}
?>

<?php
// Realizamos una consulta genérica, seleccionamos TODO de la tabla Alumnos
$sql = "SELECT * FROM Alumnos";

// Definimos una variable para que contenga la consulta
$filas = $conexion->query($sql);

// Definimos una variable para que contenga las filas de los registros
$numFilas = $filas->num_rows;

// Y aquí mostrámos las filas
$mensaje = "N de registros: " . $numFilas;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <br>
    <main class="container align-center w-50 bg-info p-3">

        <?php
        // Si se le da a enviar, se mostrará la tabla de abajo
        if (isset($_REQUEST["enviar"])) {
        ?>

            <!-- Tabla de Registros -->
            <table class="table">

                <!-- Cabeceras -->
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>Nacimiento</th>
                        <th>Aula</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Definimos una variable que recoja los registros de las filas
                    $alumnos = $filas->fetch_all(MYSQLI_ASSOC);

                    // Ahora redefinimos almunos como alumno y que por cada alumno se muestre su registro correspondiente
                    foreach ($alumnos as $alumno) {
                    ?>
                        <tr>
                            <td><?php echo $alumno['nombre'] ?></td>
                            <td><?php echo $alumno['edad'] ?></td>
                            <td><?php echo $alumno['sexo'] ?></td>
                            <td><?php echo $alumno['fechanac'] ?></td>
                            <td><?php echo $alumno['numAula'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>

        <?php
        }
        ?>

        <p class="alert alert-info">
            <?php
            // El mensaje que te dice el número de registros
            if (isset($_REQUEST["enviar"])) {
                echo $mensaje;
            }
            ?>
        </p>
        <hr>
        <form action="#" method="post" class="form w-50 text-light">
            <input type="submit" value="Consultar Tabla" name="enviar" class="form-control border border-danger bg-warning text-bg-light">
        </form>
        <br>
        <section class="row">
            <nav class="col">
                <a href="01-cargar-bbdd.php" class="btn btn-sm btn-dark w-100">CargarBBDD</a><br><br>
                <a href="02-login.php" class="btn btn-sm btn-primary w-100">Acceso</a><br><br>
                <a href="03-insertar.php" class="btn btn-sm btn-warning w-100">Insertar</a><br><br>
            </nav>
            <nav class="col">
                <a href="04-consultar.php" class="btn btn-sm btn-success w-100">Consultar</a><br><br>
                <a href="05-actualizar.php" class="btn btn-sm btn-secondary w-100">Actualizar</a><br><br>
                <a href="06-borrar.php" class="btn btn-sm btn-danger w-100">Borrar</a><br><br>
            </nav>
        </section>
    </main>

</body>

</html>
```

#### [Actualizar](#actualizar)
Vamos a ver como se actualiza (Update):
```php
<?php
// Conectar a MYSQL
$servidor = "localhost";
$usuario = "root";
$clave = "root";
$bbdd = "anidi";
 
$conexion = new mysqli($servidor, $usuario, $clave, $bbdd);
if ($conexion->connect_error) {
    die("ERROR conexión!");
}
?>

<?php
// Tratamos el formulario de actualizar
if (isset($_REQUEST["enviar"])) {

    $nombre = $_REQUEST["nombre"];
    $edad = $_REQUEST["edad"];
    $sexo = $_REQUEST["sexo"];
    $nac = $_REQUEST["nac"];
    $numaula = $_REQUEST["numaula"];

    /*
      Actualizamos de la tabla Alumnos los campos edad, sexo, fechanac y numAula filtrando por el nombre del alumno que queremos actualizar
    */  
    $sql = "UPDATE Alumnos 
            SET edad = ?, sexo = ?, fechanac = ?, numAula = ?
            WHERE nombre = ?";
    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("iisis", 
        $edad, $sexo, $nac, $numaula, $nombre);

    if($sentPreparada->execute()) {
        $mensaje = "Actualizado/a Alumno/a en la BBDD";
    } else {
        $mensaje = "ERROR!";
    }
    
}
?>


<?php
// Recogemos los datos del alumno que vamos a actualizar filtrando por su nombre
if (isset($_REQUEST["alumno"])) {
    $nombre = $_REQUEST["alumno"];

    $sql = "SELECT * FROM Alumnos WHERE nombre = ?";
    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("s", $nombre);
    $sentPreparada->execute();
    $fila = $sentPreparada->get_result();
    $fila = $fila->fetch_all(MYSQLI_ASSOC);

    //var_dump($fila);
    $mensaje = "Vas a actualizar la fila: " . $nombre;
}

?>


<?php
// Hacemos una consulta completa para la tabla consulta 
$sql = "SELECT * FROM Alumnos";
$filas = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <br>
    <main class="container align-center w-50 bg-info p-3">

        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Nacimiento</th>
                    <th>Aula</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $alumnos = $filas->fetch_all(MYSQLI_ASSOC);
                foreach ($alumnos as $alumno) {
                ?>
                    <tr>
                        <td><?php echo $alumno['nombre'] ?></td>
                        <td><?php echo $alumno['edad'] ?></td>
                        <td><?php echo $alumno['sexo'] ?></td>
                        <td><?php echo $alumno['fechanac'] ?></td>
                        <td><?php echo $alumno['numAula'] ?></td>

                        <!-- Botón para mandar el nombre del alumno que queremos actualizar -->
                        <td><a href="05-actualizar.php?alumno=<?php echo $alumno['nombre'] ?>" 
                        class="btn btn-outline-success"> Actualizar</a></td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>

        <p class="alert alert-info">
            <?php
            if (isset($_REQUEST["alumno"])) {
                echo $mensaje;
            }
            ?>
        </p>
        <hr>
        <?php
        if (isset($_REQUEST["alumno"])) {
        ?>
            <form action="#" method="post" class="form w-50 text-light">

                <!-- Input deshabilitado de el nombre del alumno -->
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" 
                class="form-control text-bg-secondary" disabled = "disabled"
                value="<?php echo $fila[0]['nombre'] ?>"><br>

                <!-- Input OCULTO para que haga la consulta -->
                <input type="hidden" name="nombre"
                value="<?php echo $fila[0]['nombre'] ?>">

                <!-- Input para la edad -->
                <label for="edad" class="form-label">Edad</label>
                <input type="number" name="edad" id="edad" class="form-control" value="<?php echo $fila[0]['edad'] ?>"><br>

                <p>Sexo</p>
                <?php 
                  // Este primer If es para verificar si el campo sexo es true
                  if ($fila[0]['sexo']) {
                ?>
                    <!-- Input de sexo mujer seleccionado (TRUE) -->
                    <input type="radio" name="sexo" id="mujer" value="1" class="form-check-input" checked="checked">
                    <label for="mujer" class="form-check-label">Mujer</label><br>

                    <!-- Input de sexo hombre NO seleccionado (FALSE) -->
                    <input type="radio" name="sexo" id="hombre" value="0" class="form-check-input">
                    <label for="hombre" class="form-check-label">Hombre</label><br>
                <?php
                  } 
                ?>
                <?php 
                  // Y este If es por si el campo sexo NO es true
                  if (!$fila[0]['sexo']) {
                ?>
                    <!-- Input de sexo mujer NO seleccionado (FALSE) -->
                    <input type="radio" name="sexo" id="mujer" value="1" class="form-check-input" >
                    <label for="mujer" class="form-check-label">Mujer</label><br>

                    <!-- Input de sexo hombre seleccionado (TRUE) -->
                    <input type="radio" name="sexo" id="hombre" value="0" class="form-check-input" checked="checked">
                    <label for="hombre" class="form-check-label">Hombre</label><br>
                <?php
                  } 
                ?>

                <hr>

                <!-- Input Fecha de nacimiento -->
                <label for="nac" class="form-label">Fecha Nacimiento</label>
                <input type="date" name="nac" id="nac" class="form-control" value="<?php echo $fila[0]['fechanac'] ?>"><br>
               
                <!-- Select para elegir aula -->
                <select name="numaula" id="numaula" class="form-select">
                    <option value="23">Aula23</option>
                </select><br>

                <!-- Input que actualiza el registro ('enviar') -->
                <input type="submit" value="Actualizar Registro" name="enviar" class="form-control border border-danger bg-warning text-bg-light">
            </form>
        <?php
        }
        ?>

        <br>
        <section class="row">
            <nav class="col">
                <a href="01-cargar-bbdd.php" class="btn btn-sm btn-dark w-100">CargarBBDD</a><br><br>
                <a href="02-login.php" class="btn btn-sm btn-primary w-100">Acceso</a><br><br>
                <a href="03-insertar.php" class="btn btn-sm btn-warning w-100">Insertar</a><br><br>
            </nav>
            <nav class="col">
                <a href="04-consultar.php" class="btn btn-sm btn-success w-100">Consultar</a><br><br>
                <a href="05-actualizar.php" class="btn btn-sm btn-secondary w-100">Actualizar</a><br><br>
                <a href="06-borrar.php" class="btn btn-sm btn-danger w-100">Borrar</a><br><br>
            </nav>
        </section>
    </main>

</body>

</html>
```

#### [Borrar](#borrar)
Vamos a borrar registros (Delete):
```php
<?php
// Conectar a MYSQL
$servidor = "localhost";
$usuario = "root";
$clave = "root";
$bbdd = "anidi";

$conexion = new mysqli($servidor, $usuario, $clave, $bbdd);
if ($conexion->connect_error) {
    die("ERROR conexión!");
}
?>

<?php
// Recoge a alumno del botón Borrar
if (isset($_REQUEST["alumno"])) {
    $nombre = $_REQUEST["alumno"];
    $mensaje = "¿Desea borrar fila de ". $nombre . "?";
}
?>


<?php
// Hacemos el borrado
if (isset($_REQUEST["eliminar"])) {
    // Esta variable recoge el valor de el botón SI
    $nombre = $_REQUEST["eliminar"];

    // Borramos de la tabla Alumnos por nombre
    $sql = "DELETE FROM Alumnos WHERE nombre = ?";
    $sentPrepada = $conexion->prepare($sql);
    $sentPrepada->bind_param("s", $nombre);
    $sentPrepada->execute();
    $mensaje = "Fila borrada!";
}
?>

<?php
// Realizar una consulta 
$sql = "SELECT * FROM Alumnos";
$filas = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <br>
    <main class="container align-center w-50 bg-info p-3">

            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>Nacimiento</th>
                        <th>Aula</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $alumnos = $filas->fetch_all(MYSQLI_ASSOC);
                    foreach ($alumnos as $alumno) {
                    ?>
                        <tr>
                            <td><?php echo $alumno['nombre'] ?></td>
                            <td><?php echo $alumno['edad'] ?></td>
                            <td><?php echo $alumno['sexo'] ?></td>
                            <td><?php echo $alumno['fechanac'] ?></td>
                            <td><?php echo $alumno['numAula'] ?></td>
                            <!-- Botón 'alumno' -->
                            <td><a href="06-borrar.php?alumno=<?php echo $alumno['nombre'] ?>"
                            class="btn btn-outline-danger"> Borrar</a></td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>

        <p class="alert alert-info">
        <?php
            // Si se manda "alumno" o "eliminar" se muestra el mensaje
            if (isset($_REQUEST["alumno"]) || isset($_REQUEST["eliminar"])) {
                echo $mensaje;
            }
            
            // Si se manda "alumno" elige entre SI o NO
            if (isset($_REQUEST["alumno"])){
            ?> 
            
            <!-- Botón 'eliminar' -->
            <a href="06-borrar.php?eliminar=<?php echo $nombre ?>"
                            class="btn btn-outline-danger"> SI</a>
            <!-- Botón NO -->
            <a href="06-borrar.php"
                            class="btn btn-outline-success"> NO</a>
            
            <?php
            }
            ?> 
        </p>
        <hr>
        <br>
        <section class="row">
            <nav class="col">
                <a href="01-cargar-bbdd.php" class="btn btn-sm btn-dark w-100">CargarBBDD</a><br><br>
                <a href="02-login.php" class="btn btn-sm btn-primary w-100">Acceso</a><br><br>
                <a href="03-insertar.php" class="btn btn-sm btn-warning w-100">Insertar</a><br><br>
            </nav>
            <nav class="col">
                <a href="04-consultar.php" class="btn btn-sm btn-success w-100">Consultar</a><br><br>
                <a href="05-actualizar.php" class="btn btn-sm btn-secondary w-100">Actualizar</a><br><br>
                <a href="06-borrar.php" class="btn btn-sm btn-danger w-100">Borrar</a><br><br>
            </nav>
        </section>
    </main>

</body>

</html>
```
