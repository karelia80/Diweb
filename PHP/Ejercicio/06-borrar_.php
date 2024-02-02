<?php
require("errores.php");
require("funcionesh.php");

$conexion = conectar();


?>
<?php
// tratar formulario
if (isset($_REQUEST['eliminar'])) {
    $matricula = $_REQUEST["eliminar"];
    $sql = "DELETE FROM Ventas WHERE matricula = ?";
    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("s", $matricula);
    $sentPreparada->execute();
    $mensaje = "Venta borrada";
}
?>

<?php //Eliminar en php.
// tratar formulario
if (isset($_REQUEST['venta'])) {
    $matricula = $_REQUEST["venta"];
    $mensaje = "¿Desea borrar al cliente con nif: " . $matricula . "?";
}
?>
<?php
$sql = "SELECT * FROM Ventas";
$filas = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>

    <head>
        <style>
            .icon-header {
                text-align: center;
            }

            .icon-header i {
                color: red;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
                <th class="icon-header"><i class="bi bi-trash3-fill"></i></th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
            $Ventas = $filas->fetch_all(MYSQLI_ASSOC);//aqui se escribe igual que en mysql
            foreach ($Ventas as $venta) {
                //var_dump($Ventas);
             ?>
             <tr>
                <td><?php echo $venta['matricula']?></td>
                <td><?php echo $venta['fecha']?></td>
                <td><?php echo $venta['precio']?></td>
                <td><?php echo $venta['financiado']?></td>
                <td><?php echo $venta['Modelos_idModelo']?></td>
                <td><?php echo $venta['Clientes_nif']?></td>
                <td><?php echo $venta['Vendedores_nif']?></td>
                <td><a href="06-borrar_.php?venta=<?php echo $venta['matricula'] ?>" class="btn btn-outline-danger">Borrar</a></td>

            </tr>

             <?php   
            }
            ?>
           
        </tbody> 
    </table>
</header><br>
        <p class="alert alert-info w-100 text-center">
            <?php
            if (
                isset($_REQUEST['venta'])
                || isset($_REQUEST["eliminar"])
            ) {
                echo $mensaje;
            } ?>


            <?php
            if (isset($_REQUEST['venta'])) {

            ?>
                <a href="06-borrar_.php?eliminar=<?php echo $matricula ?>" class="btn btn-outline-danger">SI</a>
                <a href="06-borrar_.php" class="btn btn-outline-success">NO</a>
            <?php
            }
            ?>
        </p>

        <hr>

        <!-- <form action="#" method="post" class="form w-100 text-light">

            <input type="submit" value="Eliminar" name="enviar" class="form-control border border-white bg-warning text-light">
        </form><br> -->
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