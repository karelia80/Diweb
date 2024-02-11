<?php

require("errores.php");
require("funciones.php");


if (isset($_REQUEST["enviar"])) {

    $cif = $conexion->real_escape_string($_POST["cif"]);
    $nombre = $conexion->real_escape_string($_POST["nombre"]);
    $fundacion = $conexion->real_escape_string($_POST["fundacion"]);
    $numsocios = $conexion->real_escape_string($_POST["num_socios"]);
    $estadio = $conexion->real_escape_string($_POST["estadio"]);
    

    
    $sql = "INSERT INTO Clubes VALUES (?, ?, ?, ?, ?)";
    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("ssiis", 
        $nif, $nombre, $fundacion, $numsocios, $estadio);
        
    if($sentPreparada->execute()) {
        $mensaje = "Inserción Correcta!";
    } else {
        $mensaje = "ERROR!";
    }
    
}


$sentPreparada->close();
$conexion->close();

header('location: insertar-clubes.php');

?>