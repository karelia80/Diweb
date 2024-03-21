<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$mensaje = "";
$resultado = 0;
$numpi = 3.1416;

if (isset($_REQUEST['enviar'])) {
    $base = $_REQUEST['base'];
    $altura = $_REQUEST['altura'];
    $radio = $_REQUEST['radio'];

    $opcion = $_REQUEST['opcion'];
    if ($opcion < 1 || $opcion > 4) {
        $mensaje .= "Opcion incorrecta";
    }

    if ($opcion == 1) {
        if (isset($_REQUEST['radio'])) {
            
        }
        $mensaje .= "Prisma";
        $resultado = $base * $altura;
    }

    if ($opcion == 2) {
        if (isset($_REQUEST['base'])) {
            
        }
        $mensaje .= "Cilindro";
        $resultado = $numpi * $radio * $radio * $altura;
    }

    if ($opcion == 3) {
        if (isset($_REQUEST['radio'])) {
          
        }
        $mensaje .= "Cono";
        $resultado = 1 / 3 * $base * $altura;
    }
    if ($opcion == 4) {
        if (isset($_REQUEST['base']) || isset($_REQUEST['altura'])) {
           
        }
        $mensaje .= "Esfera:";
        $resultado = 4 / 3 * $numpi * pow($radio, 3);
    }

}






?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volúmenes</title>
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
            text-decoration: underline;
        }
    </style>


</head>

<body class="w-70 p-3 m-3">

    <main class="container align-center w-50 bg-info p-3 mt-5 text-center border border-primary rounded-5">
        <p class="alert alert-info">
            <?php
            if (isset($_REQUEST['enviar'])) {
                echo "$mensaje <br>";
                echo "$resultado <br>";
            }
            ?>
        </p>
        <hr>
        <br>

        <section class="form-container">
            <form action="#" method="post">
                <label for="base" class="form-label">Dame A (area base)</label>
                <input type="number" name="base" id="base" class="form-control"><br><br>
                <label for="altura" class="form-label">Dame h (altura)</label>
                <input type="number" name="altura" id="altura" class="form-control"><br><br>
                <label for="radio" class="form-label">Dame r (radio)</label>
                <input type="number" name="radio" id="radio" class="form-control"><br><br>
                <label for="opcion" class="form-label">Opción</label>
                <input type="number" name="opcion" id="opcion" class="form-control"><br><br>


                <input type="submit" value="Enviar" name="enviar" class="btn btn-outline-primary">
            </form>
        </section><br>

        <section class="row">
            <nav class="col">
                <a href="ex1306-media-gdiv.php" class="btn btn-sm btn-primary w-100">Volúmenes</a><br><br>
            </nav>
            <nav class="col">
                <a href="Ex-1306-menu.php" class="btn btn-sm btn-primary w-100">Volver al Menú</a><br><br>
            </nav>
        </section>

    </main>



</body>

</html>