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
// Tratar formulario
if (isset($_REQUEST["enviar"])) {

    $id = $_REQUEST["id"];
    $nombre = $_REQUEST["nombre"];
    $departamento = $_REQUEST["departamento"];
    $edad = $_REQUEST["edad"];
    $alta = $_REQUEST["alta"];
    $activo = $_REQUEST["activo"];
    

    
    $sql = "INSERT INTO Trabajadores (id, nombre, departamento,edad, alta, activo) VALUES (?, ?, ?, ?, ?, ?)";
    $sentPreparada = $conexion->prepare($sql);
    $sentPreparada->bind_param("issisi", 
        $id, $nombre, $departamento, $edad, $alta, $activo);
    if($sentPreparada->execute()) {
        $mensaje = "Inserción Correcta!";
    } else {
        $mensaje = "ERROR!";
    }
    
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
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        $Trabajadores = $filas->fetch_all(MYSQLI_ASSOC);
                        foreach ($Trabajadores as $trabajador) {
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
            </div>
        <br>

        <section>
        <form action="#" method="post" class="form w-50 text-light">

            <label for="id" class="form-label">ID</label>
            <input type="number" name="id" id="id" class="form-control"><br>

            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control"><br>

            <label for="departamento" class="form-label">Departamento</label>
            <input type="text" name="departamento" id="departamento" class="form-control"><br>
            
            <label for="edad" class="form-label">Edad</label>
            <input type="number" name="edad" id="edad" class="form-control" min=18 max=100><br>
         
            
            <label for="alta" class="form-label">Alta</label>
            <input type="date" name="alta" id="alta" class="form-control"><br>

            <p>Activo</p>
            <input type="radio" name="activo" id="si" value="1" class="form-check-input">
            <label for="si" class="form-check-label">SI</label><br>
            <input type="radio" name="activo" id="no" value="0" class="form-check-input">
            <label for="no" class="form-check-label">NO</label><br>
            <hr>
        </form>
     </section><br>

        <form action="#" method="post" class="form w-100 text-light">
            <input type="submit" value="Insertar Nuevo Trabajador" name="enviar" class="form-control border border-danger bg-warning text-bg-light">
        </form><br>
        <section class="row">
            <nav class="col">
                
                <a href="menu.php" class="btn btn-sm btn-secondary w-100"><i class="bi bi-list"></i>&nbsp;Menú</a><br><br>
            </nav>
        </section>
    </main>

</body>

</html>