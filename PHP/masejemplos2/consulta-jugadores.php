<?php
require("errores.php");
require("funciones.php");

$conexion = conectar();

?>
<?php
//REALIZAR UNA CONSULTA
$sql = "SELECT * FROM Jugadores";
$filas = $conexion->query($sql);
$numFilas = $filas->num_rows;
$mensaje = "Nº de Registro: " . $numFilas;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clubes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>


    <main class="container align-center w-50 bg-info p-3 mt-3">
        <br>

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
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Cedido</th>
                            <th>Sueldo</th>
                            <th>Club</th>
                            <th>Posicion</th>
                           
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        $Jugadores = $filas->fetch_all(MYSQLI_ASSOC);
                        foreach ($Jugadores as $jugadores) {
                        ?>
                            <tr>
                                <td><?php echo $jugadores['nif_nie'] ?></td>
                                <td><?php echo $jugadores['nombre'] ?></td>
                                <td><?php echo $jugadores['edad'] ?></td>
                                <td><?php echo $jugadores['cedido'] ?></td>
                                <td><?php echo $jugadores['ficha'] ?></td>
                                <td><?php echo $jugadores['Clubes_cif'] ?></td>
                                <td><?php echo $jugadores['Posiciones_idPosiciones'] ?></td>
                                
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
            <input type="submit" value="Ver Jugadores" name="enviar" class="form-control border border-danger bg-warning text-bg-light">
        </form>
        <br>
        <section class="row">
            <nav class="col">
                <a href="index.php" class="btn btn-sm btn-secondary w-100"><i class="bi bi-list"></i>&nbsp;Menú</a><br><br>
                <a href="cargar.php" class="btn btn-sm btn-warning w-100"><i class="bi bi-database-fill"></i>&nbsp;Cargar BBDD</a><br><br>
                <a href="insertar-clubes.php" class="btn btn-sm btn-primary w-100"><i class="bi bi-person-plus"></i>&nbsp;Insertar Clubes</a><br><br>
                <a href="insertar-entrenad.php" class="btn btn-sm btn-primary w-100"><i class="bi bi-person-plus"></i>&nbsp;Insertar Entranadores</a><br><br>
            </nav>
            <nav class="col">
                <a href="consulta-jugadores.php" class="btn btn-sm btn-light w-100"><i class="bi bi-book-half"></i>&nbsp;Consultar Jugadores</a><br><br>
                <a href="consulta-partidos.php" class="btn btn-sm btn-light w-100"><i class="bi bi-book-half"></i>&nbsp;Consultar Partidos</a><br><br>
                <a href="actualizar-jugadores.php" class="btn btn-sm btn-success w-100"><i class="bi bi-arrow-clockwise"></i>&nbsp;Actualizar Jugadores </a><br><br>
                <a href="borrar-entrenad.php" class="btn btn-sm btn-danger w-100"><i class="bi bi-trash3"></i>&nbsp;Borrar Entranadores</a><br><br>
            </nav>
        </section>
    </main>


</body>

</html>