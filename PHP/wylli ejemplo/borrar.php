<?php
require("errores.php");
require("funciones.php");
// borrar.php

// Conectar a MYSQL
$conexion = conectar();
?>


<?php
if (isset($_REQUEST["borrar"])) {
    $id = $_REQUEST["borrar"];
    $sql = "DELETE FROM Trabajadores WHERE id = ?";
    $sentPrepada = $conexion->prepare($sql);
    $sentPrepada->bind_param("i", $id);
    $sentPrepada->execute();
    $mensaje = "Fila borrada!";
}
?>

<?php
// Realizar una consulta filtrada
if (isset($_REQUEST["trabajador"])) {
    $id = $_REQUEST["trabajador"];
    $sql = "SELECT * FROM Trabajadores WHERE id = ?";
    $sentPreparada = $conexion->prepare($sql);

    $sentPreparada->bind_param("i", $id);

    $sentPreparada->execute();
    $fila = $sentPreparada->get_result();
    $fila = $fila->fetch_all(MYSQLI_ASSOC);
    //var_dump($fila);
    $mensaje = "¿Borrar registro?";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Trabajador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <br>
    <main class="container align-center w-50 bg-info p-3">
        <?php
        if (isset($_REQUEST["trabajador"])) {
        ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Departamento</th>
                        <th>Edad</th>
                        <th>Fecha de Alta</th>
                        <th>Activo</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($fila as $trabajador) {
                    ?>
                        <tr>
                            <td><?php echo $trabajador['id'] ?></td>
                            <td><?php echo $trabajador['nombre'] ?></td>
                            <td><?php echo $trabajador['departamento'] ?></td>
                            <td><?php echo $trabajador['edad'] ?></td>
                            <td><?php echo $trabajador['alta'] ?></td>
                            <td>
                                <?php if ($trabajador['activo'] == 1) {
                                    echo "Si";
                                } else {
                                    echo "No";
                                }
                                ?>
                            </td>

                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        <?php
        }
        ?>
        <p class="alert alert-danger">
            <?php
            if (
                isset($_REQUEST["trabajador"])
                || isset($_REQUEST["borrar"])
            ) {
                echo $mensaje;
            }
            if (isset($_REQUEST["trabajador"])) {
            ?>
                <a href="borrar.php?borrar=<?php echo $fila[0]['id'] ?>" class="btn btn-outline-danger"> SI</a>
                <a href="consultar.php" class="btn btn-outline-success"> NO</a>
            <?php
            }
            ?>
        </p>
        <hr>
        <br>
        <section class="row">
            <nav class="col">
                <a href="menu.php" class="btn btn-sm btn-success w-100">Volver al menu principal</a><br><br>
            </nav>
        </section>
    </main>

</body>

</html>