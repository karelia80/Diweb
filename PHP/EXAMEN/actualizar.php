<?php
require("errores.php");
require("funciones.php");
// actualizar.php

// Conectar a MYSQL
$conexion = conectar();
?>

<?php
// Tratar formulario
if (isset($_REQUEST["enviar"])) {

    $id = $_REQUEST["id"];
    $nombre = $_REQUEST["nombre"];
    $departamento= $_REQUEST["departamento"];
    $edad = $_REQUEST["edad"];
    $alta = $_REQUEST["alta"];
    $activo = $_REQUEST["activo"];


    $sql = "UPDATE Trabajadores 
            SET nombre = ?, departamento = ?, edad = ?, alta = ?,
            activo = ?
            WHERE id = ?";
    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("ssisii", 
   $nombre, $departamento, $edad, $alta, $activo, $id );

    if($sentPreparada->execute()) {
        $mensaje = "Actualizada Trabajador en la BBDD";
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
    <title>UPDATE</title>
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
       

        <br>
        <section class="row">
            <nav class="col">
                <a href="menu.php" class="btn btn-sm btn-success w-100">Volver al menú</a><br><br>
            </nav>
        </section>
    </main>

</body>

</html>