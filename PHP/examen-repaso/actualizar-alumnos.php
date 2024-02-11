<?php
require("errores.php");
require("funciones.php");

$conexion = conectar();
?>
<?php
if (isset($_REQUEST["enviar"])) {

    $nif = $_REQUEST["nif"];
    $nombre = $_REQUEST["nombre"];
    $fechanac = $_REQUEST["nac"];
    $pagado = $_REQUEST["pagado"];
    $importe = $_REQUEST["importe"];
    $nifdoc = $_REQUEST["docentes_nif"];



    $sql = "UPDATE alumnos
    SET nombre = ?, fechanac = ?, pagado = ?, importe = ?, docentes_nif = ? WHERE nif = ?";
    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param(
        "ssiiss",
        $nombre,
        $fechanac,
        $pagado,
        $importe,
        $nifdoc,
        $nif
        
    );
    if ($sentPreparada->execute()) {
        $mensaje = "Cambios guardados!";
    } else {
        $mensaje = "ERROR!";
    }
}
?>

<?php
if (isset($_REQUEST['alumno'])) {
    $nif = $_REQUEST["alumno"];

    $sql = "SELECT * FROM alumnos WHERE nif = ?";


    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("s", $nif);
    $sentPreparada->execute();
    $fila = $sentPreparada->get_result();
    $fila = $fila->fetch_all(MYSQLI_ASSOC);

    $mensaje = "Vas actualizar al alumno con nif: " . $nif;
}
?>



<?php
//REALIZAR UNA CONSULTA
$sql = "SELECT * FROM alumnos";
$filas = $conexion->query($sql);
?>

<?php
//buscar a los docentes para el select
$sql_docentes = "SELECT nif, nombre FROM docentes";
$result_docentes = $conexion->query($sql_docentes);
$nombredoc = [];
while ($fila_nombredoc = $result_docentes->fetch_assoc()) {
    $nombredoc[$fila_nombredoc['nif']] = $fila_nombredoc['nombre'];
}
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
            color: green;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <br>
    <main class="container align-center w-50 bg-info p-3">

        <hr>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nif</th>
                        <th>Alumno</th>
                        <th>Fecha de nacimiento</th>
                        <th>Matricula Pagada</th>
                        <th>Importe</th>
                        <th>docentes</th>
                        <th class="icon-header"><i class="bi bi-arrow-clockwise"></i></th>


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
                            <td><?php echo $alumno['docentes_nif'] ?></td>
                            <td><a href="actualizar-alumnos.php?alumno=<?php echo $alumno['nif'] ?>" class="btn btn-outline-success">Actualizar</a></td>

                        <?php
                    }
                        ?>

                </tbody>
            </table>
        </div><br>
        <p class="alert alert-info w-100 text-center">
            <?php
            if (
                isset($_REQUEST['alumno'])
                || isset($_REQUEST["actualizar"])
            ) {
                echo $mensaje;
            } ?>

        </p>

        <?php
        if (isset($_REQUEST['alumno'])) {

        ?>
            <form action="#" method="post" class="form w-50 text-light">

                <label for="nif" class="form-label">ID</label>
                <input type="text" name="nif" id="nif" class="form-control text-bg-secondary" disabled="disabled" value="<?php echo $fila[0]['nif'] ?>"><br>
                <input type="hidden" name="nif" value="<?php echo $fila[0]['nif'] ?>">


                <label for="docente" class="form-label">Nombre del docente</label>
                <input type="text" name="nombre" id="docente" placeholder="Nombre completo" class="form-control" value="<?php echo $fila[0]['nombre'] ?>"><br>

                <label for="nac" class="form-label">Fecha Nacimiento</label>
                <input type="date" name="nac" id="nac" 
                class="form-control" 
                value="<?php echo $fila[0]['fechanac'] ?>"><br>


                <p>Matricula pagada</p>
                <?php
                if ($fila[0]['pagado']) {
                ?>
                    <input type="radio" name="pagado" id="pagsi" value="1" checked="checked">
                    <label for="pagsi" class="form-check-label">Sí</label><br>
                    <input type="radio" name="pagado" id="pagno" value="0">
                    <label for="pagno" class="form-check-label">No</label><br>
                <?php
                }
                ?>

                <?php
                if (!$fila[0]['pagado']) {
                ?>
                    <input type="radio" name="pagado" id="pagsi" value="1">
                    <label for="pagsi" class="form-check-label">Sí</label><br>
                    <input type="radio" name="pagado" id="pagno" value="0" checked="checked">
                    <label for="pagno" class="form-check-label">No</label><br>
                <?php
                }
                ?>

                <label for="importe" class="form-label">Importe</label><br>
                <input type="number" name="importe" id="importe" placeholder="Indicar precio maricula" class="form-control" value="<?php echo $fila[0]['importe'] ?>"><br>

                <label for="nifdoc" class="form-label text-white">Docente</label>
                <select name="docentes_nif" class="form-select bg-secondary text-white" id="nifdoc" disabled="disabled">
                    <option value="">Elija docente</option><br>
                    <?php
                    $docente_seleccionado = $fila[0]['docentes_nif'];
                    foreach ($nombredoc as $nif => $nombredocentes) {
                        $seleccionado = ($nif == $docente_seleccionado) ? "selected" : "";
                        echo "<option value=\"$nif\" $seleccionado>$nombredocentes</option>";
                    }
                    ?>
                </select><br>
                <input type="hidden" name="docentes_nif" value="<?php echo $docente_seleccionado ?>">

                <button type="submit" value="actualizar" name="enviar" class="btn btn-primary"><i class="bi bi-folder-plus"></i>&nbsp;Guardar cambios</button>

            </form>
        <?php } ?>
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