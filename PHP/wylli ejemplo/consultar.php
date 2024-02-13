<?php
require("errores.php");
require("funciones.php");


// Conectar a MYSQL
$conexion = conectar();
?>

<?php
// Realizar una consulta 
$sql = "SELECT * FROM Trabajadores";
$filas = $conexion->query($sql);
$numFilas = $filas->num_rows;
$mensaje = "Número de registros: " . $numFilas;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Trabajadores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <br>
    <main class="container align-center w-50 bg-info p-3">

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Departamento</th>
                    <th>Edad</th>
                    <th>Fecha de Alta</th>
                    <th>Activo</th>
                    <th></th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                <?php
                $trabajadores = $filas->fetch_all(MYSQLI_ASSOC);

                foreach ($trabajadores as $trabajador) {
                ?>
                    <tr>
                        <td><?php echo $trabajador['id'] ?></td>
                        <td><?php echo $trabajador['nombre'] ?></td>
                        <td><?php echo $trabajador['departamento'] ?></td>
                        <td><?php echo $trabajador['edad'] ?></td>
                        <td><?php echo $trabajador['alta'] ?></td>
                        <td>
                            <?php if ($trabajador['activo'] == 1) {
                                echo "Si";
                            } else {
                                echo "No";
                            }
                            ?>
                        </td>
                        <td><a href="modificar.php?trabajador=<?php echo $trabajador['id'] ?>" class="btn btn-outline-success">Editar</a></td>
                        <td><a href="borrar.php?trabajador=<?php echo $trabajador['id'] ?>" class="btn btn-outline-success">Eliminar</a></td>

                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>

        <p class="alert alert-info text-center">
            <?php

            echo $mensaje;

            ?>
        </p>
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