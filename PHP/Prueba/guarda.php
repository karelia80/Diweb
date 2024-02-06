<?php

require("errores.php");
require("funcionesh.php");

$conexion = conectar();

$nif = $conexion->real_escape_string($_POST["nif"]);
$nombre = $conexion->real_escape_string($_POST["nombre"]);
$correo = $conexion->real_escape_string($_POST["correo"]);
$telefono = $conexion->real_escape_string($_POST["telefono"]);

$sql = "INSERT INTO Clientes (nif, nombre, correo,telefono) VALUES (?,?,?,?)";
$sentPreparada = $conexion->prepare($sql);
$sentPreparada->bind_param("sssi", $nif, $nombre, $correo, $telefono);

if ($sentPreparada->execute()) {
    $id = $sentPreparada->insert_id;
    echo "Cliente insertado correctamente con ID: " . $id;
} else {
    echo "Error al insertar cliente: " . $conexion->error;
}

$sentPreparada->close();
$conexion->close();

header('location: 03-insertarh.php');

?>