<?php

require("errores.php");
require("funciones.php");
$conexion = conectar();

if (isset($_REQUEST["enviar"])) {

    $nif = $conexion->real_escape_string($_POST["nif"]);
    $nombre = $conexion->real_escape_string($_POST["nombre"]);
    $edad = $conexion->real_escape_string($_POST["edad"]);
    $destituido = $conexion->real_escape_string($_POST["destituido"]);
    $ficha = $conexion->real_escape_string($_POST["ficha"]);
    $clubescif = $conexion->real_escape_string($_POST["clubescif"]);
    /*echo "nif: " . $nif . "<br>";
    echo "Nombre: " . $nombre . "<br>";
    echo "edad: " . $edad . "<br>";
    echo "destituido: " . $destituido . "<br>";
    echo "ficha: " . $ficha . "<br>";  
    echo "clubescif: " . $clubescif . "<br>";
    */
    
    
    $sql = "INSERT INTO Entrenadores (nif_nie, nombre, edad, destituido, ficha, Clubes_cif) VALUES (?, ?, ?, ?, ?, ?)";
    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("ssiiis", 
        $nif, $nombre, $edad, $destituido, $ficha, $clubescif);

      
    if($sentPreparada->execute()) {
        $mensaje = "Inserción Correcta!";
        echo "<script>alert('$mensaje');</script>";
    } else {
        $mensaje = "ERROR!";
    }
    

   $sentPreparada->close();
$conexion->close(); 

}


header('location: insertar-entrenad.php');
// Después de realizar la inserción exitosamente
header('Location: insertar-entrenad.php?exito=1');
exit();


?>