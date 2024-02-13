<?php
require("errores.php");
// menu.php
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <br>
    <main class="container align-center w-50 bg-info p-3 text-center">
        <p class="alert alert-info">
            MENU PRINCIPAL
        </p>
        <hr>
        <br>
        <section class="row">
            <nav class="col">
                <a href="instalar.php" class="btn btn-sm btn-warning w-100"><i class="bi bi-database-fill"></i>&nbsp;Instalar BBDD</a><br><br>
                <a href="insertar.php" class="btn btn-sm btn-primary w-100"><i class="bi bi-person-plus"></i>&nbsp;Insertar Registro</a><br><br>
                <a href="consultar.php" class="btn btn-sm btn-dark w-100"><i class="bi bi-book-half"></i>&nbsp;Consulta Tabla</a><br><br>
            </nav>
        </section>
    </main>

</body>

</html>