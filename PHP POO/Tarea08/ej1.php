<?php
require("errores.php");

if (isset($_REQUEST['enviar'])) {

    $num = $_REQUEST['num'];        //number
    $opcion = $_REQUEST['opcion']; //boolean
    $mensaje = "";

if ($num >= 18 && $opcion == true) {
     $mensaje = "Felicidades! Eres mayor y tienes el carnet <br>";
} else if ($num >= 18 && $opcion == false) {
    $mensaje = "Debes sacarte el carnet! <br>";
}else {
     $mensaje = "Eres menor! Lo siento...<br>";
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
            ¿Tienes edad para conducir? <br>
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
                <a href="#" class="btn btn-sm btn-primary w-100">Carnet de Conducir</a><br><br>
            </nav>
        </section>
        <section class="form-container">
            <form action="#" method="post" class="form">

                <input type="number" name="num" id="num" class="form-control" placeholder="Escribe tu edad aqui"><br>
                <p>Tienes el carnet</p>
                <input type="radio" name="opcion" id="opcion1" class="form-check-input" checked value="1">
                <label for="opcion1" class="form-check-label">Si</label><br>
                <input type="radio" name="opcion" id="opcion2" class="form-check-input" value="0">
                <label for="opcion2" class="form-check-label">No</label><br><br>

                <input type="submit" value="Enviar" name="enviar" class="btn btn-info">
            </form>

        </section>
    </main>

</body>

</html>