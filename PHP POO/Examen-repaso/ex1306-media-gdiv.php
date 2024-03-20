<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function mgd($num)
{
    $divisores = 0;
    $dividendo = 1;
    for ($i = $num; $i >= 1; $i--) {
        if ($num % $i == 0) {
            $divisores++;
            $dividendo = $dividendo * $i;
        }
    }
    return $dividendo / $divisores;
}


$mensaje = "";
if (isset($_REQUEST['enviar'])) {

    $num = $_REQUEST['num'];
    if ($num < 1000 || $num > 10000) {
        $mensaje = "Num incorrecto";
    } else {
        $mensaje = mgd($num);
    }
}




?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media G Div</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.bundle.min.js"></script>
    <style>
        main {
            background: linear-gradient(180deg, #5193D5, #C7F0FF);

        }

        .form-container {
            text-align: left;
        }

        label.form-label {
            color: #1A49E7;
            text-decoration:underline;
        }
    </style>


</head>

<body class="w-70 p-3 m-3">

    <main class="container align-center w-50 bg-info p-3 mt-5 text-center border border-primary rounded-5">
        <p class="alert alert-info">
            <?php
            if (isset($_REQUEST['enviar'])) {

                echo $num . "<br>";          // number
                echo $mensaje . "<br>";
            }
            ?>
        </p>
        <hr>
        <br>
        <section class="row">
            <nav class="col">
                <a href="ex1306-media-gdiv.php" class="btn btn-sm btn-primary w-100">Media G Divisores</a><br><br>
            </nav>
            <nav class="col">
                <a href="examen-1306-menu.php" class="btn btn-sm btn-primary w-100">Volver al Menu</a><br><br>
            </nav>
        </section>
        <section class="form-container">
            <form action="#" method="post">
                <label for="num" class="form-label">Pon un numero</label>
                <input type="number" name="num" id="num" class="form-control"><br><br>
                <input type="submit" value="Enviar" name="enviar" class="btn btn-outline-primary">
            </form>
        </section>
    </main>



</body>

</html>