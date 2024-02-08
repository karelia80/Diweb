<?php
require("errores.php");
require("funciones.php");

$conexion = conectar();
?>
<?php
// tratar formulario
if (isset($_REQUEST['eliminar'])) {
    $nif = $_REQUEST["eliminar"];
    $sql = "DELETE FROM alumnos WHERE nif = ?";
    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("s", $nif);
    $sentPreparada->execute();
    $mensaje = "Registro eliminado";
}
?>

<?php //Eliminar en php.
if (isset($_REQUEST['alumno'])) {
    $nif = $_REQUEST["alumno"];
    $mensaje = "¿Desea borrar al alumno con nif: " . $nif . "?";
}
?>



<?php
//REALIZAR UNA CONSULTA
$sql = "SELECT nif, nombre, fechanac, pagado, importe FROM alumnos";
$filas = $conexion->query($sql);
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Alumnos</title>
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

<body>
    <br>
    <main class="container align-center w-50 bg-info p-3">
       

            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nif</th>
                            <th>Alumno</th>
                            <th>Fecha de nacimiento</th>
                            <th>Matricula Pagada</th>
                            <th>Importe</th>
                            <th class="icon-header"><i class="bi bi-trash3-fill"></i></th>
                            

                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        $alumnos = $filas->fetch_all(MYSQLI_ASSOC);
                        foreach ($alumnos as $alumno) {
                        ?>
                            <tr>
                                <td><?php echo $alumno['nif'] ?></td>
                                <td><?php echo $alumno['nombre'] ?></td>
                                <td><?php echo $alumno['fechanac'] ?></td>
                                <td><?php echo $alumno['pagado'] ?></td>
                                <td><?php echo $alumno['importe'] ?></td>
                                <td><a href="borrar-alumnos.php?alumno=<?php echo $alumno['nif'] ?>" class="btn btn-outline-danger">Borrar</a></td>

                            <?php
                        }
                            ?>

                    </tbody>
                </table>
            </div>
            <p class="alert alert-info w-100 text-center">
            <?php
            if (
                isset($_REQUEST['alumno'])
                || isset($_REQUEST["eliminar"])
            ) {
                echo $mensaje;
            } ?>


            <?php
            if (isset($_REQUEST['alumno'])) {

            ?>
                <a href="borrar-alumnos.php?eliminar=<?php echo $nif ?>" class="btn btn-outline-danger">SI</a>
                <a href="index.php" class="btn btn-outline-success">NO</a>
            <?php
            }
            ?>
        </p>


        </form>
        <br>
        <section class="row">
            <nav class="col">
                <a href="index.php" class="btn btn-sm btn-secondary w-100"><i class="bi bi-list"></i>&nbsp;Menú</a><br><br>
                <a href="carga.php" class="btn btn-sm btn-warning w-100"><i class="bi bi-database-fill"></i>&nbsp;Cargar BBDD</a><br><br>
                <a href="insertar-docentes.php" class="btn btn-sm btn-primary w-100"><i class="bi bi-person-plus"></i>&nbsp;Insertar Docentes</a><br><br>
                <a href="insertar-alumnos.php" class="btn btn-sm btn-primary w-100"><i class="bi bi-person-plus"></i>&nbsp;Insertar Alumnos</a><br><br>
            </nav>
            <nav class="col">
                <a href="consulta-docentes.php" class="btn btn-sm btn-light w-100"><i class="bi bi-book-half"></i>&nbsp;Consultar Docentes</a><br><br>
                <a href="consulta-alumnos.php" class="btn btn-sm btn-light w-100"><i class="bi bi-book-half"></i>&nbsp;Consultar Alumnos</a><br><br>
                <a href="actualizar-alumnos.php" class="btn btn-sm btn-success w-100"><i class="bi bi-arrow-clockwise"></i>&nbsp;Actualizar Alumnos</a><br><br>
                <a href="borrar-alumnos.php" class="btn btn-sm btn-danger w-100"><i class="bi bi-trash3"></i>&nbsp;Borrar Alumnos</a><br><br>
            </nav>
        </section>
    </main>

</body>

</html>