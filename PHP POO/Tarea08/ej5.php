<?php
require("errores.php");

if (isset($_REQUEST['enviar'])) {


    $mensaje = "";
    $num = array(42, 17, 95, 30, 63, 10);

    $mensaje= array_sum(($num));
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
            Este es el array [42, 17, 95, 30, 63, 10] <br>
            <?php
            if (isset($_REQUEST['enviar'])) {
                echo "Los numero impares son: " . $mensaje;
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
               
                <input type="hidden" name="enviar" value="1">
                <input type="submit" value="Enviar" class="btn btn-info">
            </form>
           
        </section>
    </main>

</body>

</html>