<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body class="d-flex flex-column justify-content-center align-items-center min-vh-100">
    <?php
    if (isset($_REQUEST['enviar'])) {
        $texto = $_REQUEST['texto'];
    }
    ?>
    <form action="#" method="post" class="form w-50">
        <label for="texto" class="form-label">Texto</label>
        <input type="text" name="texto" id="texto" class="form-control w-50"><br><br>
        <input type="submit" value="Enviar" name="enviar" class="form-control w-50 bg-primary"><br>
    </form>
    <main class="text-center w-50">
        <nav class="mx-auto bg-primary rounded p-3">
            <h2 class="alert alert-primary mt-3 fs-5">Menu</h2>
        </nav>
        <p class="alert alert-primary mt-3">
            <?php
            if (isset($_REQUEST['enviar'])) {
                echo $texto;
            }
            ?>
        </p>
        <a href="#" class="btn btn-primary d-block mt-3">Enlace 1</a>
        <a href="#" class="btn btn-primary d-block mt-2">Enlace 2</a>

    </main>
</body>

</html>