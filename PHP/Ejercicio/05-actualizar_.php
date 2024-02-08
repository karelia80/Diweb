<?php
require("errores.php");
require("funcionesh.php");

$conexion = conectar();
?>
<?php
// tratar formulario
if (isset($_REQUEST['enviar'])) { #ojo hay que poner cada campo!!!!
    $matricula = $_REQUEST["matricula"];
    $fecha = $_REQUEST["fecha"];
    $precio = $_REQUEST["precio"];
    $bol = $_REQUEST["bol"];
    $idm = $_REQUEST["idm"];
    $nifcli = $_REQUEST["nifcli"];
    $nifven = $_REQUEST["nifven"];


    $sql = "UPDATE Ventas
    SET fecha = ?, precio = ?, bol = ?, idm = ?, nifcli = ?, nifven = ? WHERE matricula = ?";
    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("idiisss", $fecha, $precio, $bol, $idm, $nifcli, $nifven, $matricula);
    if ($sentPreparada->execute()) {
        $mensaje = "Cliente actualizado en la DDBB";
    } else {
        $mensaje = "Error!";
    }
}
?>
<?php
//REALIZAR UNA CONSULTA
$sql = "SELECT * FROM Ventas";
$filas = $conexion->query($sql); //es solo 1 consulta por eso se pone query en vez de mmultiquery
$numFilas = $filas->num_rows;
$mensaje = "Nº de Registro: " . $numFilas;


?>

<?php //UPDATE
// tratar formulario
if (isset($_REQUEST['matricula'])) {
    $matricula = $_REQUEST["matricula"];
    $sql = "SELECT * FROM Ventas WHERE matricula = ?";


    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("s", $matricula);
    $sentPreparada->execute();
    $fila = $sentPreparada->get_result();
    $fila = $fila->fetch_all(MYSQLI_ASSOC);

    //var_dump($fila); //esto es para sacar ver lo que continene cualquier variable y comprobar si esta bien
    $mensaje = "Vas a actualizar la fila: " . $matricula;
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
    $nombre[$fila_nombre['nif']] = $fila_nombre['nombre'];
}
?>
<?php
//buscar a los vendedores hago un select
$sql_vendedores = "SELECT nif, nombre FROM Vendedores";
$result_vendedores = $conexion->query($sql_vendedores);
$nombreven = [];
while ($fila_nombreven = $result_vendedores->fetch_assoc()) {
    $nombreven[$fila_nombreven['nif']] = $fila_nombreven['nombre'];
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
        <style>
            .icon-header {
                text-align: center;
            }

            .icon-header i {
                color: green;
            }
        </style>
    </head>


</head>

<body>
    <br>
    <main class="container aling-center w-50 bg-info p-3">
        <br>
        <header class="table-responsive">
            <table class="table table-sm table-striped">
                <thead>
                    <tr>
                        <th>Matricula</th>
                        <th>Fecha</th>
                        <th>Precio</th>
                        <th>Financiado</th>
                        <th>Modelo</th>
                        <th>DNI Cliente</th>
                        <th>DNI Vendedor</th>
                        <th class="icon-header"><i class="bi bi-box-arrow-in-down"></i></th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $Ventas = $filas->fetch_all(MYSQLI_ASSOC); //aqui se escribe igual que en mysql
                    foreach ($Ventas as $venta) {
                        //var_dump($Ventas);
                    ?>
                        <tr>
                            <td><?php echo $venta['matricula'] ?></td>
                            <td><?php echo $venta['fecha'] ?></td>
                            <td><?php echo $venta['precio'] ?></td>
                            <td><?php echo $venta['financiado'] ?></td>
                            <td><?php echo $venta['Modelos_idModelo'] ?></td>
                            <td><?php echo $venta['Clientes_nif'] ?></td>
                            <td><?php echo $venta['Vendedores_nif'] ?></td>
                            <td><a href="05-actualizar_.php?venta=<?php echo $venta['matricula'] ?>" class="btn btn-outline-success">Actualizar</a></td>

                        </tr>

                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </header><br>
        <hr>
        <p class="alert alert-info w-100 text-center">

            <?php
            if (isset($_REQUEST['venta'])) {
                echo $mensaje;
            }
            ?>
        </p>
        <hr>
        <?php
        if (isset($_REQUEST['enviar'])) {

        ?>

            <form action="#" method="post" class="form w-100 text-light">
                <label for="matricula" class="form-label text-white">Matricula</label>
                <input type="text" name="matricula" id="matricula" class="form-control" value="<?php echo $fila[0]['matricula'] ?>"><br>

                <label for="fecha" class="form-label text-white">Fecha</label>
                <input type="date" name="fecha" id="fecha" class="form-control" value="<?php echo $fila[0]['fecha'] ?>"><br>


                <label for="precio" class="form-label text-white">Precio</label>
                <input type="number" name="precio" id="precio" class="form-control" value="<?php echo $fila[0]['precio'] ?>"><br>

                <p>Financiación</p>
                <select name="bol" class="form-select" id="bol" value="<?php echo $fila[0]['bol'] ?>">
                    <option value="" <?php if ($fila[0]['bol'] == "") echo "selected"; ?>>opción</option>
                    <option value="1" <?php if ($fila[0]['bol'] == "") echo "selected"; ?>>Sí</option>
                    <option value="0" <?php if ($fila[0]['bol'] == "") echo "selected"; ?>>No</option>
                </select><br>
                <hr>

                <label for="idm" class="form-label text-white">Modelo</label>
                <select name="idm" class="form-select" id="idm" value="<?php echo $fila[0]['idm'] ?>">
                    <option value="" selected> modelo</option>
                    <?php
                    // Para mostrar los modelos
                    foreach ($modelos as $idModelo => $nombreModelo) {
                        echo "<option value=\"$idModelo\">$nombreModelo</option>";
                    }
                    ?>
                </select><br>


                <label for="nifcli" class="form-label text-white">Cliente</label>
                <select name="nifcli" class="form-select" id="nifcli" value="<?php echo $fila[0]['nifcli'] ?>">
                    <option value="" selected> cliente</option>
                    <?php

                    // Para mostrar los clientes
                    foreach ($nombre as $nif => $nombrecliente) {
                        echo "<option value=\"$nif\">$nombrecliente</option>";
                    }
                    ?>
                </select><br>

                <label for="nifven" class="form-label text-white">Vendedor</label>
                <select name="nifven" class="form-select" id="nifven" value="<?php echo $fila[0]['nifven'] ?>">
                    <option value="" selected>Elija un Vendedor</option>
                    <?php

                    // Para mostrar vendedores
                    foreach ($nombreven as $nif => $nombrevendedor) {
                        echo "<option value=\"$nif\">$nombrevendedor</option>";
                    }
                    ?>
                </select><br>

                <input type="submit" value="actualizar" name="enviar" class="form-control border border-white bg-warning text-light">

            </form><br>
        <?php
        }

        ?>
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

    <!-- Text,number, password, date, radio, email, color, submit, tel, hidden -->
</body>

</html>