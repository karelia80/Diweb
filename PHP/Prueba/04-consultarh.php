<?php
require("errores.php");
require("funcionesh.php");

$conexion = conectar();


?>

<?php
//REALIZAR UNA CONSULTA
$sql = "SELECT * FROM Clientes";
$filas = $conexion->query($sql); //es solo 1 consulta por eso se pone query en vez de mmultiquery
$numFilas = $filas->num_rows;
$mensaje = "Nº de Registro: " .$numFilas;


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
    
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

    
</head>
<body> 
    <br>
    <main class="container aling-center w-50 bg-info p-3">
         <br>
    <p class="alert alert-info w-100 text-center"> 
   
    <?php
    if (isset($_REQUEST['enviar'])) {
        echo $mensaje;
    }
    ?>
    </p>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>NIF</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
            $Clientes = $filas->fetch_all(MYSQLI_ASSOC);//asociado a su campo
            foreach ($Clientes as $cliente) {
             ?>
             <tr>
                <td><?php echo $cliente['nif']?></td>
                <td><?php echo $cliente['nombre']?></td>
                <td><?php echo $cliente['correo']?></td>
                <td><?php echo $cliente['telefono']?></td>
                
            </tr>

             <?php   
            }
            ?>
           
        </tbody> 
    </table>
    <hr>
    
    <form action="#" method="post" class="form w-100 text-light">

    <input type="submit" value="Cargar SQL" name="enviar" class="form-control border border-white bg-warning text-light">
    </form><br>
    <section class="row">
            <nav class="col">
                <a href="01-bbddcarga.php" class="btn btn-sm btn-success w-100"><i class="bi bi-database-fill"></i>&nbsp;CargarBBDD</a><br><br>
                <a href="02-loginh.php" class="btn btn-sm btn-dark w-100"><i class="bi bi-person-circle"></i>&nbsp;Acceso</a><br><br>
                <a href="03-insertarh.php" class="btn btn-sm btn-light w-100"><i class="bi bi-plus-circle"></i>&nbsp;Insertar</a><br><br>
            </nav>
            <nav class="col">
                <a href="04-consultarh.php" class="btn btn-sm btn-primary w-100"><i class="bi bi-book-half"></i>&nbsp;Consultar</a><br><br>
                <a href="05-actualizarh.php" class="btn btn-sm btn-secondary w-100"><i class="bi bi-arrow-up-circle-fill"></i>&nbsp;Actualizar</a><br><br>
                <a href="06-borrarh.php" class="btn btn-sm btn-danger w-100"><i class="bi bi-trash3"></i>&nbsp;Borrar</a><br><br>
            </nav>
        </section>

    </main>
   
    <!-- Text,number, password, date, radio, email, color, submit, tel, hidden -->
</body>
</html>
