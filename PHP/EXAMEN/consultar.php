<?php
require("errores.php");
require("../EXAMEN/funciones.php");

$conexion = conectar();

?>
<?php
$sql = "SELECT * FROM Trabajadores";
$filas = $conexion->query($sql);
$numFilas = $filas->num_rows;
$mensaje = "Nº de Registro: " . $numFilas;
?>
<?php
// tratar formulario
if (isset($_REQUEST['eliminar'])) { #ojo hay que poner cada campo!!!!
    $nombre = $_REQUEST["eliminar"];
    $sql = "DELETE FROM Trabajadores WHERE id = ?";
    $sentPreparada = $conexion->prepare ($sql);
    $sentPreparada->bind_param("i", $id);
    $sentPreparada->execute();
    $mensaje = "Fila borrada."; 
}
?>

<?php 
if (isset($_REQUEST['trabajadores'])) { 
    $id = $_REQUEST["trabajador"];
    $mensaje = "¿Desea borrar la fila de ". $id . "?"; 
}
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar BBDD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <br>
    <main class="container align-center w-50 bg-info p-3 text-center">
    <p class="alert alert-info">
            <?php
            if (isset($_REQUEST["enviar"])) {
                echo $mensaje;
            }
            ?>
        </p><br>
        <hr>
        <?php
        if (isset($_REQUEST['enviar'])) {
        ?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Departamento</th>
                            <th>Edad</th>
                            <th>Alta</th>
                            <th>Activo</th>
                            <!-- ejercicio 6 -->
                            <th>Editar</th>
                            <th>Eliminar</th>
                        
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        $Trabajadores = $filas->fetch_all(MYSQLI_ASSOC);
                        foreach ($Trabajadores as $trabajadores) {
                        ?>
                            <tr>
                                <td><?php echo $trabajadores['id'] ?></td>
                                <td><?php echo $trabajadores['nombre'] ?></td>
                                <td><?php echo $trabajadores['departamento'] ?></td>
                                <td><?php echo $trabajadores['edad'] ?></td>
                                <td><?php echo $trabajadores['alta'] ?></td>
                                <td><?php echo $trabajadores['activo'] ?></td>
                                 <!-- ejercicio 6 -->
                                <td><a href="modificar.php?editar=<?php echo $trabajadores['id'] ?>" class="btn btn-outline-success">Editar</a></td>
                                <td><a href="borrar.php?eliminar=<?php echo $trabajadores['id'] ?>" class="btn btn-outline-danger">Eliminar</a></td>
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
            <input type="submit" value="Ver Trabajadores" name="enviar" class="form-control border border-danger bg-warning text-bg-light">
        </form><br>
        <section class="row">
            <nav class="col">
            
            
                
                <a href="insertar.php" class="btn btn-sm btn-primary w-100"><i class="bi bi-person-plus"></i>&nbsp;Insertar Registro</a><br><br>
                <a href="consultar.php" class="btn btn-sm btn-dark w-100"><i class="bi bi-book-half"></i>&nbsp;Consulta Tabla</a><br><br>
                <a href="menu.php" class="btn btn-sm btn-secondary w-100"><i class="bi bi-list"></i>&nbsp;Menú</a><br><br>
            </nav>
        </section>
    </main>

</body>

</html>