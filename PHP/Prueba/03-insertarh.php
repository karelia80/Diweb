<?php

require("errores.php");
require("funcionesh.php");

$conexion = conectar();


$mensaje = "";

?>
<?php
$sql = "SELECT * FROM Clientes";
$filas = $conexion->query($sql); //es solo 1 consulta por eso se pone query en vez de mmultiquery

?> 
<?php
// tratar formulario
if (isset($_REQUEST['enviar'])) { #ojo hay que poner cada campo!!!!
    $nif = $_REQUEST["nif"];
    $nombre = $_REQUEST["nombre"];
    $correo = $_REQUEST["correo"];
    $telefono = $_REQUEST["telefono"];
    

    $sql = "INSERT INTO Clientes VALUES (?,?,?,?)";
    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("sssi", $nif, $nombre, $correo, $telefono);
    
}
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>


</head>

<body>
    <br>
    <main class="container aling-center w-50 bg-info p-3">
       
       
        <table class="table table-striped">
        <thead>
            <tr>
                <th>NIF</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
            $Clientes = $filas->fetch_all(MYSQLI_ASSOC);//asociado a su campo
            foreach ($Clientes as $cliente) {
             ?>
             <tr>
                <td><?php echo $cliente['nif']?></td>
                <td><?php echo $cliente['nombre']?></td>
                <td><?php echo $cliente['correo']?></td>
                <td><?php echo $cliente['telefono']?></td>
                
            </tr>

             <?php   
            }
            ?>
           
        </tbody> 
    </table>
        <hr>
        <!-- <p class="alert alert-info w-100 text-center">

</p><br> -->


<div class="row justify-content-end">
        <div class="col-auto">
<!-- boton del modal -->
             <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1" ><i class="bi bi-person-fill-add"></i>&nbsp;Añadir nuevo cliente</a>
    </div>
</div><br>

       
        </form><br>
        <section class="row">
            <nav class="col">
                <a href="01-bbddcarga.php" class="btn btn-sm btn-success w-100"><i class="bi bi-database-fill"></i>&nbsp;CargarBBDD</a><br><br>
                <a href="02-loginh.php" class="btn btn-sm btn-dark w-100"><i class="bi bi-person-circle"></i>&nbsp;Acceso</a><br><br>
                <a href="03-insertarh.php" class="btn btn-sm btn-primary w-100"><i class="bi bi-plus-circle"></i>&nbsp;Insertar</a><br><br>
            </nav>
            <nav class="col">
                <a href="04-consultarh.php" class="btn btn-sm btn-light w-100"><i class="bi bi-book-half"></i>&nbsp;Consultar</a><br><br>
                <a href="05-actualizarh.php" class="btn btn-sm btn-secondary w-100"><i class="bi bi-arrow-up-circle-fill"></i>&nbsp;Actualizar</a><br><br>
                <a href="06-borrarh.php" class="btn btn-sm btn-danger w-100"><i class="bi bi-trash3"></i>&nbsp;Borrar</a><br><br>
            </nav>
        </section>

    </main>

    <?php include '../Prueba/nuevo-Modal.php';?>
    <?php //include '../Prueba/toast.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Text,number, password, date, radio, email, color, submit, tel, hidden -->
</body>

</html>