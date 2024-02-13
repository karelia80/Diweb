<?php
require("errores.php");
require("../EXAMEN/funciones.php");

$conexion = conectar();

?>
<?php
$sql = "SELECT * FROM Trabajadores";
$filas = $conexion->query($sql);

?>
<?php
// tratar formulario
if (isset($_REQUEST['borrar'])) {
    $id = $_REQUEST["borrar"];
    $sql = "DELETE FROM Trabajadores WHERE id = ?";
    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("i", $id);
    $sentPreparada->execute();
    $mensaje = "Borrar Trabajador";
}
?>


<?php
//REALIZAR UNA CONSULTA
if (isset($_REQUEST['eliminar'])) {
    $id = $_REQUEST['eliminar'];
    $sql = "SELECT * FROM Trabajadores WHERE id = ?";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <br>
    <main class="container aling-center w-50 bg-primary p-3">
        <br>

        <div class="table-responsive">
            <?php
            if (isset($_REQUEST['eliminar'])) {
            ?>

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Departamento</th>
                            <th>Edad</th>
                            <th>Alta</th>
                            <th>Activo</th>



                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php

                        foreach ($fila as $trabajador) {
                        ?>
                            <tr>
                                <td><?php echo $trabajador['id'] ?></td>
                                <td><?php echo $trabajador['nombre'] ?></td>
                                <td><?php echo $trabajador['departamento'] ?></td>
                                <td><?php echo $trabajador['edad'] ?></td>
                                <td><?php echo $trabajador['alta'] ?></td>
                                <td><?php echo $trabajador['activo'] ?></td>


                            <?php
                        }
                            ?>

                    </tbody>
                </table>
            <?php
            }
            ?>
        </div>

        </tbody>
        </table>

        <p class="alert alert-info w-100">
            <?php
            if (
                isset($_REQUEST['trabajadores'])
                || isset($_REQUEST['eliminar'])
            ) {
                echo $mensaje;
            }

            if (isset($_REQUEST['eliminar'])) {
            ?>
                <a href="borrar.php?borrar=<?php echo $fila[0]['id'] ?>" class="btn btn-outline-danger">SI</a>
                <a href="menu.php" class="btn btn-outline-success">NO</a>
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


</body>

</html>