<?php

require("errores.php");
require("funciones.php");
$conexion = conectar();

if (isset($_REQUEST["enviar"])) {

    $cif = $conexion->real_escape_string($_POST["cif"]);
    $nombre = $conexion->real_escape_string($_POST["nombre"]);
    $fundacion = $conexion->real_escape_string($_POST["fundacion"]);
    $numsocios = $conexion->real_escape_string($_POST["numsocios"]);
    $estadio = $conexion->real_escape_string($_POST["estadio"]);
    /*echo "CIF: " . $cif . "<br>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Fundación: " . $fundacion . "<br>";
    echo "Número de Socios: " . $numsocios . "<br>";
    echo "Estadio: " . $estadio . "<br>";   */

    
    $sql = "INSERT INTO Clubes VALUES (?, ?, ?, ?, ?)";
    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("ssiis", 
        $cif, $nombre, $fundacion, $numsocios, $estadio);
        
    if($sentPreparada->execute()) {
        $mensaje = "Inserción Correcta!";
        echo "<script>alert('$mensaje');</script>";
    } else {
        $mensaje = "ERROR!";
    }
    

   $sentPreparada->close();
$conexion->close(); 

}


header('location: insertar-clubes.php');
// Después de realizar la inserción exitosamente
header('Location: insertar-clubes.php?exito=1');
exit();


?>