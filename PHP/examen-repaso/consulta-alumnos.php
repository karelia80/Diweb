<?php
require("errores.php");
require("funciones.php");

$conexion = conectar();
?>

<?php
//REALIZAR UNA CONSULTA
$sql = "SELECT docentes.nif as nifdocentes, docentes.nombre as docente, docentes.edad as edad, alumnos.nif as nidalumnos, alumnos.nombre as alumno, alumnos.fechanac as fechanacimiento, alumnos.pagado as pagado, alumnos.importe as precio
FROM alumnos, docentes
where docentes.nif = alumnos.docentes_nif
";
$filas = $conexion->query($sql);
$numFilas = $filas->num_rows;
$mensaje = "Nº de Registro: " . $numFilas;
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
        <?php
        if (isset($_REQUEST['enviar'])) {
        ?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nif docente</th>
                            <th>Docente</th>
                            <th>Edad</th>
                            <th>Nif</th>
                            <th>Alumno</th>
                            <th>Fecha de nacimiento</th>
                            <th>Matricula Pagada</th>
                            <th>Importe</th>

                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        $alumnos = $filas->fetch_all(MYSQLI_ASSOC);
                        foreach ($alumnos as $alumno) {
                        ?>
                            <tr>
                                <td><?php echo $alumno['nifdocentes'] ?></td>
                                <td><?php echo $alumno['docente'] ?></td>
                                <td><?php echo $alumno['edad'] ?></td>
                                <td><?php echo $alumno['nidalumnos'] ?></td>
                                <td><?php echo $alumno['alumno'] ?></td>
                                <td><?php echo $alumno['fechanacimiento'] ?></td>
                                <td><?php echo $alumno['pagado'] ?></td>
                                <td><?php echo $alumno['precio'] ?></td>
                            <?php
                        }
                            ?>

                    </tbody>
                </table>
            </div>
        <?php
        }
        ?>
        <br>
        <form action="#" method="post" class="form w-100 text-light">
            <input type="submit" value="Ver Alumnos" name="enviar" class="form-control border border-danger bg-warning text-bg-light">
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