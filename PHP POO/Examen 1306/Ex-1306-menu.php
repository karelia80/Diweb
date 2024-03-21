<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen 1306 Menu</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.bundle.min.js"></script>
    <style>
         main {
            background: linear-gradient(180deg, #5193D5, #C7F0FF);
            
        }
    </style>

    
</head>

<body class="w-70 p-3 m-3">

<main class="container align-center w-50 bg-info p-3 mt-5 text-center border border-primary rounded-5">
        <p class="alert alert-info">
           Menu Principal
        </p>
        <hr>
        <br>
        <section class="row">
            <nav class="col">
                
                <a href="Ex1306-volumenes.php" class="btn btn-sm btn-primary w-100">Volúmenes</a><br><br>
                <a href="Ex1306-geometria.php" class="btn btn-sm btn-primary w-100">Geometría</a><br><br>
                
            </nav>
            <nav class="col">
                <a href="Ex1306-tabmultiplicar.php" class="btn btn-sm btn-primary w-100">Tabla de Multiplicar</a><br><br>
                <a href="Ex1306-futbol.php" class="btn btn-sm btn-primary w-100">Fútbol</a><br><br>
            </nav>
        </section>
    </main>



</body>

</html>