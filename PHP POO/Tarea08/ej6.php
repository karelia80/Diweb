<?php
require("errores.php");

if (isset($_REQUEST['enviar'])) {
    $base = $_REQUEST['base'];
    $exponente = $_REQUEST['exponente'];  
    $potencia = pow($base, $exponente);

    $mensaje = "";
   
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <style>
        main {
            background: linear-gradient(180deg, #5193D5, #C7F0FF);

        }

        .form-container {
            text-align: left;
        }
    </style>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.bundle.min.js"></script>
</head>

<body>
    <main class="container align-center w-50 bg-info p-3 mt-5 text-center border border-primary rounded-5">
        <p class="alert alert-info">
            El Resultado es <br>
            <?php
            if (isset($_REQUEST['enviar'])) {
                echo "La potencia de " . $base . " elevado a la " . $exponente . " es " . $potencia;
            }
            ?>
        </p>
        <hr>
        <br>
        <section class="row">
            <nav class="col">
                <a href="index.php" class="btn btn-sm btn-dark w-100">Volver al Menú</a><br><br>
            </nav>

        </section>
        <section class="form-container">
            <form action="#" method="post" class="form">
                <input type="number" name="base" id="base" class="form-control" placeholder="Pon la base"><br>
                <input type="number" name="exponente" id="exponente" class="form-control"  placeholder="Pon el exponente"><br>
                <input type="submit" value="Enviar" name="enviar" class="btn btn-info">

        </section>
    </main>

</body>

</html>