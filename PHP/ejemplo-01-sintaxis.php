<?php
// 01-sintaxis.php
require("errores.php");

echo "hola mundo <br>";

$x = 9;
$y = 2;
$z = $x + $y;
$w = $x % $y; // Operacion modulo, el resto de la division entera es lo que nos quedamos


echo "$z <br>";
echo "$w <br>";

//tabla o array unidimensional

$numeros = [3, 6, 1, 8, 2]; // el orden del array es 1 2 3 4...
echo "$numeros[3] <br>";
echo $numeros[0] + $numeros[4] . "<br>";

// array asociativo muy importante

$alumna1 = array(
    "nombre" => "Esther",
    "sexo" => true,
    "edad" => 46,
);
echo $alumna1["nombre"] . "<br>";
echo $alumna1["edad"] . "<br>";

//Operadores postincremento/decremento
$num = 1;
$num++; //$num = $num +1;
echo $num . "<br>";

$num--;
echo $num . "<br>";

$base = 2;
$exponente = 4;
$potencia = $base ** $exponente;
echo $potencia . "<br>";
