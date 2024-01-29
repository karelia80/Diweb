<?php
require("errores.php");
//03 insertar.
// conectar a Mysql

$servidor = "localhost";
$usuario = "root";
$clave = "root";
$ddbb = "anidi";

$conexion = new mysqli($servidor, $usuario, $clave, $ddbb);
if ($conexion->connect_error) {
    die("ERROR CONEXION");
} /*else {
    echo "ENJOY!";
}*/

?>
<?php
// tratar formulario
if (isset($_REQUEST['enviar'])) { #ojo hay que poner cada campo!!!!
    $nombre = $_REQUEST["nombre"];
    $edad = $_REQUEST["edad"];
    $sexo = $_REQUEST["sexo"];
    $nac = $_REQUEST["nac"];
    $numAula = $_REQUEST["numAula"];

    echo $nombre . "<br>";
    echo $edad . "<br>";
    echo $sexo . "<br>";
    echo $nac . "<br>";
    echo $numAula . "<br>";

    $sql = "INSERT INTO Alumnos VALUES (?,?,?,?,?)";
    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("siisi", $nombre, $edad, $sexo, $nac, $numAula);
    if ($sentPreparada->execute()) {
        $mensaje = "Insertada el Aula en la DDBB";
    }else {
        $mensaje = "Error!";
    }
}
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
        <p class="alert alert-info w-50">
            <?php
            if (isset($_REQUEST['enviar'])) {
                echo "Insertada Aula en la BBDD";
            }
            ?>
        </p>
        <hr>

        <form action="#" method="post" class="form w-50 text-light">

            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control"><br>

            <label for="edad" class="form-label">Edad</label>
            <input type="number" name="edad" id="edad" class="form-control"><br>
            <hr>

            <p>Sexo</p>
            <input class="form-check-input bg-transparent  border border-primary" type="radio" name="sexo" id="mujer" value="true" checked="checked">
            <label for="mujer" class="form-check-label">Mujer</label><br>

            <input class="form-check-input bg-transparent  border border-primary" type="radio" name="sexo" id="hombre" value="false">
            <label for="hombre" class="form-check-label">Hombre</label><br>
            <hr>

            <label for="nac" class="form-label">Fecha de Nacimiento</label>
            <input type="date" name="nac" id="nac" class="form-control"><br>

            <select class="form-control" name="numAula" id="numAula">
                <option value="23">Aula23</option>
            </select><br>

            <input type="submit" value="Enviar" name="enviar" class="form-control border border-dark bg-warning text-light"><br>
        </form>

    </main>

    <!-- Text,number, password, date, radio, email, color, submit, tel, hidden -->
</body>

</html>