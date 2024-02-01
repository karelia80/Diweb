<?php
//FUNCIONES PHP

function conectar() 
{
$servidor = "localhost";
$usuario = "root";
$clave = "root";
$ddbb = "Hyundauto";

$conexion = new mysqli($servidor, $usuario, $clave, $ddbb);
if ($conexion->connect_error) {
    die("ERROR CONEXION");
} 
return $conexion;
}




/* hay 4 tipos de funciones:


*/ 