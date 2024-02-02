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
} 

?>
<?php
// tratar formulario
if (isset($_REQUEST['enviar'])) { 
    $usuario = $_REQUEST["usuario"];
    $clave = $_REQUEST["clave"];
    

    //echo $usuario . "<br>";
   // echo $clave . "<br>";

    //comprobamos credenciales

    if ($usuario =="admin" && $clave == "0000") {
        header("location: 03-insertar_.php");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
</head>
<body> 
    <br>
    <main class="container aling-center w-50 bg-info p-3">
         <br>
    <p class="alert alert-info w-100">
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

    
    <input type="submit" value="Acceder" name="enviar" class="form-control border border-white bg-warning text-light">
    </form><br>

    <section class="row">
            <nav class="col">
                <a href="carga_bbdd.php" class="btn btn-sm btn-success w-100"><i class="bi bi-database-fill"></i>&nbsp;CargarBBDD</a><br><br>
                <a href="02-login_.php" class="btn btn-sm btn-dark w-100"><i class="bi bi-person-circle"></i>&nbsp;Acceso</a><br><br>
                <a href="03-insertar_.php" class="btn btn-sm btn-light w-100"><i class="bi bi-plus-circle"></i>&nbsp;Insertar</a><br><br>
            </nav>
            <nav class="col">
                <a href="04-consultar_.php" class="btn btn-sm btn-primary w-100"><i class="bi bi-book-half"></i>&nbsp;Consultar</a><br><br>
                <a href="05-actualizar_.php" class="btn btn-sm btn-secondary w-100"><i class="bi bi-arrow-up-circle-fill"></i>&nbsp;Actualizar</a><br><br>
                <a href="06-borrar_.php" class="btn btn-sm btn-danger w-100"><i class="bi bi-trash3"></i>&nbsp;Borrar</a><br><br>
            </nav>
        </section>



    </main>
   
    <!-- Text,number, password, date, radio, email, color, submit, tel, hidden -->
</body>
</html>
