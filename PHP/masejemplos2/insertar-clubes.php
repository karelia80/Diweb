<?php
require("errores.php");
require("funciones.php");

$conexion = conectar();
?>


<?php
$sql = "SELECT * FROM Clubes";
$filas = $conexion->query($sql); //es solo 1 consulta por eso se pone query en vez de mmultiquery

?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <main class="container align-center w-50 bg-info p-3">
        <br>
        <table class="table table-striped">
        <thead>
            <tr>
                <th>CIF</th>
                <th>Nombre</th>
                <th>Fundacion</th>
                <th>Nº Socio</th>
                <th>Estadio</th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
            $Clubes= $filas->fetch_all(MYSQLI_ASSOC);//asociado a su campo
            foreach ($Clubes as $club) {
             ?>
             <tr>
                <td><?php echo $club['cif']?></td>
                <td><?php echo $club['nombre']?></td>
                <td><?php echo $club['fundacion']?></td>
                <td><?php echo $club['num_socio']?></td>
                <td><?php echo $club['estadio']?></td>
                
            </tr>

             <?php   
            }
            ?>
           
        </tbody> 
    </table><br>
    <div class="row justify-content-end">
        <div class="col-auto">
<!-- boton del modal -->
             <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1" ><i class="bi bi-box-arrow-in-right"></i>&nbsp;Nuevo Club</a>
    </div>
</div><br>

        

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
    <?php include '../masejemplos2/nuevo-Modal.php';?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>