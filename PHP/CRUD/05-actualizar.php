<?php
require("errores.php");
require("funciones.php");
//05 ACTUALiAZAR.

$conexion = conectar();
?>
<?php
// tratar formulario
if (isset($_REQUEST['eliminar'])) { #ojo hay que poner cada campo!!!!
    $nombre = $_REQUEST["eliminar"];
    $sql = "DELETE FROM Alumnos WHERE nombre = ?";
    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("s", $nombre);
    $sentPreparada->execute();
    $mensaje = "Fila borrada.";
}
?>

<?php //UPDATE
// tratar formulario
if (isset($_REQUEST['alumno'])) { #ojo hay que poner cada campo!!!!
    $nombre = $_REQUEST["alumno"];
    $sql = "SELECT * FROM Alumnos WHERE nombre = ?";

    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("s", $nombre);
    $sentPreparada->execute();
    $fila = $sentPreparada->get_result();
    $fila = $fila->fetch_all(MYSQLI_ASSOC);

    //var_dump($fila); //esto es para sacar ver lo que continene cualquier variable y comprobar si esta bien
    $mensaje = "Vas a actualizar la fila: " . $nombre;
}
?>



<?php
//REALIZAR UNA CONSULTA
$sql = "SELECT * FROM Alumnos";
$filas = $conexion->query($sql); //es solo 1 consulta por eso se pone query en vez de mmultiquery
//$numFilas = $filas->num_rows; esto es para sacar el numero de registro
/*$mensaje = "Nº de Registro: " .$numFilas;*/

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <br>
    <main class="container aling-center w-50 bg-primary p-3">
        <br>

        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Nacimiento</th>
                    <th>Aula</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $alumnos = $filas->fetch_all(MYSQLI_ASSOC); //asociado a su campo
                foreach ($alumnos as $alumno) {
                ?>
                    <tr>
                        <td><?php echo $alumno['nombre'] ?></td>
                        <td><?php echo $alumno['edad'] ?></td>
                        <td><?php echo $alumno['sexo'] ?></td>
                        <td><?php echo $alumno['fechanac'] ?></td>
                        <td><?php echo $alumno['numAula'] ?></td>
                        <td><a href="05-actualizar.php?alumno=<?php echo $alumno['nombre'] ?>" class="btn btn-outline-success">Actulizar</a></td>
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>

        <?php

        ?>
        <p class="alert alert-info w-100">
            <?php
            if (
                isset($_REQUEST['alumno'])
                || isset($_REQUEST["eliminar"])
            ) {
                echo $mensaje;
            } ?>


            <?php

            ?>
        </p>
        <hr>
        <?php
        if (isset($_REQUEST['alumno'])) {
        ?>
            <form action="#" method="post" class="form w-50 text-light">

                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $fila[0]['nombre'] ?>"><br>

                <label for="edad" class="form-label">Edad</label>
                <input type="number" name="edad" id="edad" class="form-control" value="<?php echo $fila[0]['edad'] ?>"><br>
                <hr>

                <p>Sexo</p>
                <?php
                if ($fila[0]['sexo']) {
                ?>
                    <input class="form-check-input bg-transparent  border border-primary" type="radio" name="sexo" id="mujer" value="1" checked="checked">
                    <label for="mujer" class="form-check-label">Mujer</label><br>
                    <input class="form-check-input bg-transparent  border border-primary" type="radio" name="sexo" id="hombre" value="0">
                    <label for="hombre" class="form-check-label">Hombre</label><br>
                <?php
                }
                ?>


                <?php
                if (!$fila[0]['sexo']) {
                ?>
                <input class="form-check-input bg-transparent  border border-primary" type="radio" name="sexo" id="mujer" value="1" >
                    <label for="mujer" class="form-check-label">Mujer</label><br>
                    <input class="form-check-input bg-transparent  border border-primary" type="radio" name="sexo" id="hombre" value="0" checked="checked">
                    <label for="hombre" class="form-check-label">Hombre</label><br>
                <?php
                }
                ?>


                <hr>


                <label for="nac" class="form-label">Fecha de Nacimiento</label>
                <input type="date" name="nac" id="nac" class="form-control" value="<?php echo $fila[0]['fechanac'] ?>"><br>

                <select class="form-control" name="numAula" id="numAula">
                    <option value="23">Aula23</option>
                </select>
                <br>

                <input type="submit" value="Actualizar" name="enviar" class="form-control border border-dark bg-warning text-light"><br>
            </form><br>
        <?php
        }
        ?>



        <section class="row">
            <nav class="col">
                <a href="01-cargar-bbdd.php" class="btn btn-sm btn-dark w-100">CargarBBDD</a><br><br>
                <a href="02-login.php" class="btn btn-sm btn-dark w-100">Acceso</a><br><br>
                <a href="03-insertar.php" class="btn btn-sm btn-success w-100">Insertar</a><br><br>
            </nav>
            <nav class="col">
                <a href="04-consultar.php" class="btn btn-sm btn-info w-100">Consultar</a><br><br>
                <a href="05-actualizar.php" class="btn btn-sm btn-secondary w-100">Actualizar</a><br><br>
                <a href="06-borrar.php" class="btn btn-sm btn-danger w-100">Borrar</a><br><br>
            </nav>
        </section>

    </main>

    <!-- Text,number, password, date, radio, email, color, submit, tel, hidden -->
</body>

</html>