<?php
require("errores.php");#aqui no se meten las funciones porque es distinta, 
//01 cargar BBDD.
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
   

   $archivoSQL = "anidi.sql";
   $contenidoSQL = file_get_contents($archivoSQL); 
   $cargaBBDD = $conexion ->multi_query($contenidoSQL);
   if($cargaBBDD) {
    $mensaje = "BBDD cargado bien";
   } else {
    $mensaje = "ERROR";
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

    <input type="submit" value="Cargar SQL" name="enviar" class="form-control border border-dark bg-warning text-light">
    </form><br>
    <section class="row">
            <nav class="col">
                <a href="01-cargar-bbdd.php" class="btn btn-sm btn-dark w-100">CargarBBDD</a><br><br>
                <a href="02-login.php" class="btn btn-sm btn-dark w-100">Acceso</a><br><br>
                <a href="03-insertar.php" class="btn btn-sm btn-warning w-100">Insertar</a><br><br>
            </nav>
            <nav class="col">
                <a href="04-consultar.php" class="btn btn-sm btn-warning w-100">Consultar</a><br><br>
                <a href="05-actualizar.php" class="btn btn-sm btn-secondary w-100">Actualizar</a><br><br>
                <a href="06-borrar.php" class="btn btn-sm btn-danger w-100">Borrar</a><br><br>
            </nav>
        </section>

    </main>
   
    <!-- Text,number, password, date, radio, email, color, submit, tel, hidden -->
</body>
</html>
