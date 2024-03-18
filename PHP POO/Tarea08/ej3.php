<?php
require("errores.php");

if (isset($_REQUEST['enviar'])) {

    $num = $_REQUEST['num'];        //number 
    $mensaje = "";

    if ($num >= 10 && $num <= 20) {
        
        $i = 1; 
        while ($i < $num) {
            if ($i % 2 == 0) {
                $mensaje .= $i . " ";
            }
            $i++;
        }
    } else {
        $mensaje = "Error";
    }
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
            Los numeros impares son: <br>
            <?php
            if (isset($_REQUEST['enviar'])) {
                echo  $mensaje;
            }
            ?>
        </p>
        <hr>
        <br>
        <section class="row">
            <nav class="col">
                <a href="index.php" class="btn btn-sm btn-dark w-100">Volver al Menú</a><br><br>
            </nav>
            <nav class="col">
            <a href="ej3.php" class="btn btn-sm btn-primary w-100">Numeros Pares</a><br><br>
        </section>
        <section class="form-container">
            <form action="#" method="post" class="form">

                <input type="number" name="num" id="num" class="form-control" min="10" max="20" required placeholder="Pon un numero entre 10 y 20"><br>
                <input type="submit" value="Enviar" name="enviar" class="btn btn-info">
            </form>

        </section>
    </main>

</body>

</html>