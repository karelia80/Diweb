<?php
// 02 Estructuras de control.php

//Condicionar if... else (si...no) pag82
$edad = 18;     // cambiando aqui la variante cambia la instruccion si es true o false.
if ($edad >= 18) {
    echo "Puedes votar <br>";
} else {
    echo "te jodes, no puedes ni beber ni votar <br>";
}

echo "----------------------------------<br>";

// condicional if... else... if (si...no...si) "if anidados"

$edad = 1;
if ($edad >= 18) {
    echo "Puedes votar <br>";
} else if ($edad >=3) {
    echo "al cole!!!! <br>";
} else {
    echo "te esperan en la guarderia <br>";
}

echo "----------------------------------<br>";

//switch "es un if anidado, pero pone el codigo un poco mas claro.
$edad = 8;
switch ($edad) {
        case ($edad >= 18):
            echo "Puedes votar <br>";
        break;
        case $edad >=3:
            echo "al cole!!!! <br>";
            break;
    default:
    echo "te esperan en la guarderia <br>";
        break;
}
echo "----------------------------------<br>";

//los switch se suelen usar para los menus

$opcion = 3;
switch ($opcion) {
    case 1:
       echo "Sumar! <br>";
        break;
        case 2:
            echo "Restar! <br>";
             break;
             case 3:
                echo "Multiplicar! <br>";
                 break;
                 case 4:
                    echo "Dividir! <br>";
                     break;
    
    default:
        echo "Opcion incorrecta <br>";
        break;
}

echo "----------------------------------<br>";
// pero no siempre usaremos break en un switch...case
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