<?php
require("errores.php");
require("funciones.php");
// modificar.php

// Conectar a MYSQL
$conexion = conectar();
?>
<?php
$sql = "SELECT * FROM Trabajadores";
$filas = $conexion->query($sql);

?>

<?php
if (isset($_REQUEST["editar"])) {
    $id = $_REQUEST["editar"];

    $sql = "SELECT * FROM Trabajadores WHERE id = ?";
    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("i", $id);
    $sentPreparada->execute();
    $fila = $sentPreparada->get_result();
    $fila = $fila->fetch_all(MYSQLI_ASSOC);

    //var_dump($fila);
    $mensaje = "Vas a actualizar la fila: " . $id;
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <br>
    <main class="container align-center w-50 bg-info p-3">

        <p class="alert alert-info">
            <?php
            if (isset($_REQUEST["editar"])) {
                echo $mensaje;
            }
            ?>
        </p>
        <hr>
        <div class="table-responsive">
            <?php
            if (isset($_REQUEST['editar'])) {
            ?>

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Departamento</th>
                            <th>Edad</th>
                            <th>Alta</th>
                            <th>Activo</th>



                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php

                        foreach ($fila as $trabajador) {
                        ?>
                            <tr>
                                <td><?php echo $trabajador['id'] ?></td>
                                <td><?php echo $trabajador['nombre'] ?></td>
                                <td><?php echo $trabajador['departamento'] ?></td>
                                <td><?php echo $trabajador['edad'] ?></td>
                                <td><?php echo $trabajador['alta'] ?></td>
                                <td><?php echo $trabajador['activo'] ?></td>
                            <?php
                        }
                            ?>

                    </tbody>
                </table>
            <?php
            }
            ?>
        </div>

        </tbody>
        </table><br>

        <?php
        if (isset($_REQUEST["editar"])) {
        ?>
            <form action="actualizar.php" method="post" class="form w-50 text-light">

                <label for="id" class="form-label">ID</label>
                <input type="number" name="id" id="id" class="form-control" value="<?php echo $fila[0]['id'] ?>"><br>

                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $fila[0]['nombre'] ?>"><br>


                <label for="departamento" class="form-label">Departamento</label>
                <input type="text" name="departamento" id="departamento" class="form-control" value="<?php echo $fila[0]['departamento'] ?>"><br>

                <label for="edad" class="form-label">Edad</label>
                <input type="number" name="edad" id="edad" class="form-control" value="<?php echo $fila[0]['edad'] ?>"><br>

                <label for="alta" class="form-label">Alta</label>
                <input type="date" name="alta" id="alta" class="form-control" value="<?php echo $fila[0]['alta'] ?>"><br>


                <p>Activo</p>
                <?php if ($fila[0]['activo']) {
                ?>
                    <input type="radio" name="activo" id="si" value="1" class="form-check-input" checked="checked">
                    <label for="si" class="form-check-label">SI</label><br>
                    <input type="radio" name="activo" id="no" value="0" class="form-check-input">
                    <label for="no" class="form-check-label">NO</label><br>
                <?php } ?>

                <?php if (!$fila[0]['activo']) {
                ?>
                    <input type="radio" name="activo" id="si" value="1" class="form-check-input">
                    <label for="si" class="form-check-label">SI</label><br>
                    <input type="radio" name="activo" id="no" value="0" class="form-check-input" checked="checked">
                    <label for="no" class="form-check-label">NO</label><br>
                <?php } ?>

                <hr>

                <input type="submit" value="Actualizar Trabajadores" name="enviar" class="form-control border border-danger bg-warning text-bg-light">

            </form>
        <?php
        }
        ?>

        <br>
        <section class="row">
            <nav class="col">
                <a href="menu.php" class="btn btn-sm btn-primary w-100">Volver al Menú</a><br><br>
            </nav>
        </section>
    </main>

</body>

</html>