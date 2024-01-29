<?php
require("errores.php");
//02.login

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
    $usuario = $_REQUEST["usuario"];
    $clave = $_REQUEST["clave"];
    

    echo $usuario . "<br>";
    echo $clave . "<br>";

    //comprobamos credenciales

    if ($usuario =="admin" && $clave == "1234") {
        header("location: 03-insertar.php");
    }else {
        $mensaje = "Credenciales INCORRECTAS";
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
        echo $mensaje;
    }
    ?>
    </p>
    <hr>
    
    <form action="#" method="post" class="form w-50 text-light">

    <label for="usuario" class="form-label">Usuario</label>
    <input type="text" name="usuario" id="usuario" class="form-control"><br>

    <label for="clave" class="form-label">Clave</label>
    <input type="password" name="clave" id="clave" class="form-control"><br>

    
    <input type="submit" value="Acceder" name="enviar" class="form-control border border-dark bg-warning text-light">
    </form>

    </main>
   
    <!-- Text,number, password, date, radio, email, color, submit, tel, hidden -->
</body>
</html>
