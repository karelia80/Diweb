<?php
require("errores.php");
require("funciones.php");

$conexion = conectar();
?>
<?php
// Tratar formulario
if (isset($_REQUEST["enviar"])) {

    $nif = $_REQUEST["nif"];
    $nombre = $_REQUEST["nombre"];
    $edad = $_REQUEST["edad"];
    

    
    $sql = "INSERT INTO docentes VALUES (?, ?, ?)";
    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("ssi", 
        $nif, $nombre, $edad);
    if($sentPreparada->execute()) {
        $mensaje = "Inserción Correcta!";
    } else {
        $mensaje = "ERROR!";
    }
    
}
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
    <p class="alert alert-info w-100">
            <?php
            if (isset($_REQUEST['enviar'])) {
                echo "Nuevo Docente insertado";
            }
            ?>
        </p>
        <form action="#" method="post" class="form w-50 text-light">

            <label for="nif" class="form-label">DNI</label>
            <input type="text" name="nif" id="nif" placeholder="Identificación" class="form-control"><br>
            <label for="docente" class="form-label">Nombre del docente</label>
            <input type="text" name="nombre" id="docente" placeholder="nombre completo" class="form-control"><br>
            <label for="edad" class="form-label">Edad del docente</label>
            <input type="number" name="edad" id="edad" placeholder="Indicar edad en años" class="form-control"><br>

            <button type="submit" value="Insertar Reserva" name="enviar" class="btn btn-primary"><i class="bi bi-folder-plus"></i>&nbsp;Guardar</button>
          
        </form>

        <br>
        <section class="row">
            <nav class="col">
                <a href="index.php" class="btn btn-sm btn-secondary w-100"><i class="bi bi-list"></i>&nbsp;Menú</a><br><br>
                <a href="carga.php" class="btn btn-sm btn-warning w-100"><i class="bi bi-database-fill"></i>&nbsp;Cargar BBDD</a><br><br>
                <a href="insertar-docentes.php" class="btn btn-sm btn-primary w-100"><i class="bi bi-person-plus"></i>&nbsp;Insertar Docentes</a><br><br>
                <a href="insertar-alumnos.php" class="btn btn-sm btn-primary w-100"><i class="bi bi-person-plus"></i>&nbsp;Insertar Alumnos</a><br><br>
            </nav>
            <nav class="col">
                <a href="consulta-docentes.php" class="btn btn-sm btn-light w-100"><i class="bi bi-book-half"></i>&nbsp;Consultar Docentes</a><br><br>
                <a href="consulta-alumnos.php" class="btn btn-sm btn-light w-100"><i class="bi bi-book-half"></i>&nbsp;Consultar Alumnos</a><br><br>
                <a href="actualizar-alumnos.php" class="btn btn-sm btn-success w-100"><i class="bi bi-arrow-clockwise"></i>&nbsp;Actualizar Alumnos</a><br><br>
                <a href="borrar-alumnos.php" class="btn btn-sm btn-danger w-100"><i class="bi bi-trash3"></i>&nbsp;Borrar Alumnos</a><br><br>
            </nav>
        </section>
    </main>

</body>

</html>