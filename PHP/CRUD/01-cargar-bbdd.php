<?php
require("../errores.php");

// conectar a Mysql

$servidor ="localhost";
$usuario ="root";
$clave ="root";

$conexion = new mysqli($servidor, $usuario, $clave);
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

    echo $nombre . "<br>";
    echo $edad . "<br>";
    echo $sexo . "<br>";
    echo $nac . "<br>";
    
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
        echo "Mision Completada!!!";
    }
    ?>
    </p>
    <hr>
    <form action="#" method="post" class="form w-50 text-light">

    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" id="nombre" class="form-control"><br>

    <label for="edad" class="form-label">Edad</label>
    <input type="number" name="edad" id="edad" class="form-control"><br>

    <label for="nac" class="form-label">Fecha de Nacimiento</label>
    <input type="date" name="nac" id="nac" class="form-control"><br>
    
    <input type="radio" name="sexo" id="mujer" value="true" class="form-check-input" checked ="checked"> 
    <label for="mujer" class="form-check-label">Mujer</label><br>

    <input type="radio" name="sexo" id="hombre" value="false" class="form-check-input"> 
    <label for="hombre" class="form-check-label">Hombre</label><br>

    <input type="submit" value="Enviar" name="enviar" class="form-control border border-dark bg-warning text-light">
    </form>

    </main>
   
    
</body>
</html>
