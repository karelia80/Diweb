<?php
require("errores.php");
require("funcionesh.php");

$conexion = conectar();
?>
<?php
// tratar formulario
if (isset($_REQUEST['enviar'])) { #ojo hay que poner cada campo!!!!
    $matricula = $_POST["matricula"];
    $fecha = $_POST["fecha"];
    $precio = $_POST["precio"];
    $bol = $_POST["bol"];
    $idm = $_POST["idm"];
    $nifcli = $_POST["nifcli"];
    $nifven = $_POST["nifven"];
 

    $sql = "INSERT INTO Ventas VALUES (?,?,?,?,?,?,?)";
    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("ssdiiss", $matricula, $fecha, $precio, $bol, $idm, $nifcli, $nifven);
    if ($sentPreparada->execute()) {
        $mensaje = "Datos insertado en la DDBB";
    } else {
        $mensaje = "Error!";
    }
}
?>
<?php
// ==============================================================================================

// buscar los modelos, lo hago con un select
$sql_modelos = "SELECT idModelo, modelo FROM Modelos";
$result_modelos = $conexion->query($sql_modelos);
$modelos = [];
while ($fila_modelo = $result_modelos->fetch_assoc()) {
    $modelos[$fila_modelo['idModelo']] = $fila_modelo['modelo'];
}
?>
<?php 
//buscar los clientes hago un select
$sql_cliente = "SELECT nif, nombre FROM Clientes";
$result_cliente = $conexion->query($sql_cliente);
$nombre = [];
while ($fila_nombre = $result_cliente->fetch_assoc()) {
    $nombre [$fila_nombre['nif']] =$fila_nombre ['nombre'];

}
?>
<?php 
//buscar a los vendedores hago un select
$sql_vendedores = "SELECT nif, nombre FROM Vendedores";
$result_vendedores = $conexion->query($sql_vendedores);
$nombreven = [];
while ($fila_nombreven = $result_vendedores->fetch_assoc()) {
    $nombreven [$fila_nombreven ['nif']] =$fila_nombreven ['nombre'];

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
        <br>
        <p class="alert alert-info w-100 text-center">

            <?php
            if (isset($_REQUEST['enviar'])) {
                echo $mensaje;
            }
            ?>
        </p>

        <hr>

        <form action="#" method="post" class="form w-100 text-light">
            <label for="matricula" class="form-label text-white">Matricula</label>
            <input type="text" name="matricula" id="matricula" class="form-control"><br>

            <label for="fecha" class="form-label text-white">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control"><br>
            

            <label for="precio" class="form-label text-white">Precio</label>
            <input type="number" name="precio" id="precio" class="form-control"><br>

            <p>Financiación</p>
            <select name="bol" class="form-select" id="bol">
            <option value=""selected disabled ="disabled">Elija una opción</option>
            <option value="1">Sí</option>
            <option value="0">No</option>
            </select><br>
            <hr>

            <label for="idm" class="form-label text-white">Modelo</label>
            <select name="idm" class="form-select" id="idm">
                 <option value="" selected disabled="disabled">Elija un modelo</option>
            <?php
    // Para mostrar los modelos
            foreach ($modelos as $idModelo => $nombreModelo) {
            echo "<option value=\"$idModelo\">$nombreModelo</option>";
            }
             ?>
            </select><br>


            <label for="nifcli" class="form-label text-white">Cliente</label>
            <select name="nifcli" class="form-select" id="nifcli">
                 <option value="" selected disabled="disabled">Elija un cliente</option>
            <?php
            
    // Para mostrar los clientes
            foreach ($nombre as $nif => $nombrecliente) {
            echo "<option value=\"$nif\">$nombrecliente</option>";
            }
             ?>
            </select><br>
            
            <label for="nifven" class="form-label text-white">Vendedor</label>
            <select name="nifven" class="form-select" id="nifven">
                 <option value="" selected disabled="disabled">Elija un Vendedor</option>
            <?php
            
    // Para mostrar vendedores
            foreach ($nombreven as $nif => $nombrevendedor) {
            echo "<option value=\"$nif\">$nombrevendedor</option>";
            }
             ?>
            </select><br>
            <input type="submit" value="Insertar nueva venta" name="enviar" class="form-control border border-white bg-warning text-light">
        </form><br>
    
        <section class="row">
            <nav class="col">
                <a href="carga_bbdd.php" class="btn btn-sm btn-success w-100"><i class="bi bi-database-fill"></i>&nbsp;CargarBBDD</a><br><br>
                <a href="02-login_.php" class="btn btn-sm btn-dark w-100"><i class="bi bi-person-circle"></i>&nbsp;Acceso</a><br><br>
                <a href="03-insertar_.php" class="btn btn-sm btn-light w-100"><i class="bi bi-plus-circle"></i>&nbsp;Insertar</a><br><br>
            </nav>
            <nav class="col">
                <a href="04-consultar_.php" class="btn btn-sm btn-primary w-100"><i class="bi bi-book-half"></i>&nbsp;Consultar</a><br><br>
                <a href="05-actualizar_.php" class="btn btn-sm btn-secondary w-100"><i class="bi bi-arrow-up-circle-fill"></i>&nbsp;Actualizar</a><br><br>
                <a href="06-borrar_.php" class="btn btn-sm btn-danger w-100"><i class="bi bi-trash3"></i>&nbsp;Borrar</a><br><br>
            </nav>
        </section>

    </main>

        </body>
        