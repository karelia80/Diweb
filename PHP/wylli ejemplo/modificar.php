<?php
require("errores.php");
require("funciones.php");


// Conectar a MYSQL
$conexion = conectar();
?>

<?php
if (isset($_REQUEST["trabajador"])) {

    $id = $_REQUEST["trabajador"];
    $sql = "SELECT * FROM Trabajadores WHERE id = ?";
    //$filas = $conexion->query($sql);
    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("i", $id);
    $sentPreparada->execute();
    $fila = $sentPreparada->get_result();
    $fila = $fila->fetch_all(MYSQLI_ASSOC);
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Trabajador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <br>
    <main class="container align-center w-50 bg-info p-3">
    <form action="actualizar.php" method="post" class="form w-50 text-light">

        <label for="id" class="form-label">ID</label>
        <input type="number" name="id" id="id" class="form-control text-bg-secondary" disabled="disabled" value="<?php echo $fila[0]['id'] ?>"><br>
        <input type="hidden" name="id" value="<?php echo $fila[0]['id'] ?>">

        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $fila[0]['nombre'] ?>"><br>

        <label for="departamento" class="form-label">Departamento</label>
        <input type="text" name="departamento" id="departamento" class="form-control" value="<?php echo $fila[0]['departamento'] ?>"><br>

        <label for="edad" class="form-label">Edad</label>
        <input type="number" name="edad" id="edad" class="form-control" value="<?php echo $fila[0]['edad'] ?>"><br>

        <label for="alta" class="form-label">Fecha Alta</label>
        <input type="date" name="alta" id="alta" class="form-control" value="<?php echo $fila[0]['alta'] ?>"><br>
       

        <p>Activo</p>
        <?php if ($fila[0]['activo']) {
        ?>
            <input type="radio" name="activo" id="si" value="1" class="form-check-input" checked="checked">
            <label for="si" class="form-check-label">SI</label><br>
            <input type="radio" name="activo" id="no" value="0" class="form-check-input">
            <label for="no" class="form-check-label">NO</label><br>
        <?php
        } ?>
        <?php if (!$fila[0]['activo']) {
        ?>
            <input type="radio" name="activo" id="si" value="1" class="form-check-input">
            <label for="si" class="form-check-label">SI</label><br>
            <input type="radio" name="activo" id="no" value="0" class="form-check-input" checked="checked">
            <label for="no" class="form-check-label">NO</label><br>
        <?php
        } ?>

        

        
            <input type="submit" value="Actualizar Registro" name="enviar" class="form-control border border-danger bg-warning text-bg-light">
        </form>

        
        <hr>

        <br>
        <section class="row">
            <nav class="col">
                <a href="menu.php" class="btn btn-sm btn-success w-100">Volver al menu principal</a><br><br>
            </nav>
        </section>
    </main>

</body>

</html>