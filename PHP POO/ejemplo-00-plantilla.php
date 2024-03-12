<?php
//Ejemplo 00 plantilla

if (isset($_REQUEST['enviar'])) {
    $texto = $_REQUEST['texto'];  //texto
    $num = $_REQUEST['num'];        //number
    $opcion = $_REQUEST['opcion']; //boolean
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 00 PHP POO Plantilla</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.bundle.min.js"></script>
    <style>
        h2 {
            color: #1121A7;
            text-decoration: underline;
        }

        .form-label {
            color: #1121A7;
        }

        label[for="opcion1"],
        label[for="opcion2"] {
            color: #1121A7;
        }

        p {
            color: #1121A7;
        }
       
    </style>

</head>

<body class="w-70 p-3 m-3">

    <main class="bg-primary text-white py-4 w-100 text-center fixed-top">
        <h1>Plantilla para el Examen</h1>


    </main><br><br><br><br>

    <section class="container pt-3 m-4">
        <h2>Plantilla</h2><br>
    </section>


    <section>

        <p class="alert alert-info">
            <?php
            if (isset($_REQUEST['enviar'])) {
                echo  $texto. "<br>";
                echo  $num. "<br>";
                echo  $opcion. "<br>";
            }

            ?>
        </p>

    </section>
    <section class="w-50 pt-3 m-4">
        <form action="#" method="post" class="form">
            <label for="texto" class="form-label">Nombre</label>
            <input type="text" name="texto" id="texto" class="form-control"><br>

            <label for="num" class="form-label">Número</label>
            <input type="number" name="num" id="num" class="form-control"><br>

            <p>Sexo</p>
            <input type="radio" name="opcion" id="opcion1" class="form-check-input" checked value="1">
            <label for="opcion1" class="form-check-label">Mujer</label><br>
            <input type="radio" name="opcion" id="opcion2" class="form-check-input" value="0">
            <label for="opcion2" class="form-check-label">Hombre</label><br><br>

            <input type="submit" value="Enviar" name="enviar" class="btn btn-outline-info">

        </form>
    </section>



</body>

</html>