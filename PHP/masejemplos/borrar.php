<?php
require("errores.php");
require("funciones.php");
//Borrar.

// conectar a Mysql (hemos llamado a "funciones.php" para conectar con la bbdd)
$conexion = conectar();
?>
<?php
// tratar formulario
if (isset($_REQUEST['borrar'])) {
    $id = $_REQUEST["borrar"];
    $sql = "DELETE FROM reservas WHERE id = ?";
    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("i", $id);
    $sentPreparada->execute();
    $mensaje = "Reserva eliminada";
}
?>


<?php
//REALIZAR UNA CONSULTA
if (isset($_REQUEST['eliminar'])) {
    $id = $_REQUEST['eliminar'];
    $sql = "SELECT * FROM reservas WHERE id = ?";
    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("i", $id);
    $sentPreparada->execute();
    $fila = $sentPreparada->get_result();
    $fila = $fila->fetch_all(MYSQLI_ASSOC);
    //var_dump ($fila);
    $mensaje = "¿Borrar registro?";
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <br>
    <main class="container aling-center w-50 bg-primary p-3">
        <br>
        <?php
        if (isset($_REQUEST['eliminar'])) {

        ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Entrada</th>
                        <th>Salida</th>
                        <th>Habitación</th>
                        <th>Pagado</th>
                        <th>Importe</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($fila as $reserva) { #para recorrer las filas, no ponemos el [0] en este caso no hace falta
                    ?>
                        <tr>
                            <td><?php echo $reserva['id'] ?></td>
                            <td><?php echo $reserva['cliente'] ?></td>
                            <td><?php echo $reserva['entrada'] ?></td>
                            <td><?php echo $reserva['salida'] ?></td>
                            <td><?php echo $reserva['hab'] ?></td>
                            <td><?php echo $reserva['pagado'] ?></td>
                            <td><?php echo $reserva['importe'] ?></td>
                        </tr>

                    <?php
                    }
                    ?>

                </tbody>
            </table>
        <?php }
        ?>
        <?php

        ?>
        <p class="alert alert-info w-100">
            <?php
            if (isset($_REQUEST['eliminar'])
            || isset($_REQUEST['borrar'])) {
                echo $mensaje;
            }

            if (isset($_REQUEST['eliminar'])) {
            ?>
                <a href="borrar.php?borrar=<?php echo $fila[0]['id'] ?>" class="btn btn-outline-danger">SI</a>
                <a href="reservas.php" class="btn btn-outline-success">NO</a>
            <?php
            }
            ?>
        </p>
        <hr>

        <section class="row">
            <nav class="col">

                <a href="menu.php" class="btn btn-sm btn-info w-100">Volver al Menú</a><br><br>
            </nav>
        </section>

    </main>

    <!-- Text,number, password, date, radio, email, color, submit, tel, hidden -->
</body>

</html>