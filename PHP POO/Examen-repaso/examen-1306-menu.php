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
                
                <a href="ex1306-media-gdiv.php" class="btn btn-sm btn-primary w-100">Media G Divisores</a><br><br>
                <a href="ex1306-camion.php" class="btn btn-sm btn-primary w-100">Camion</a><br><br>
                
            </nav>
            <nav class="col">
                <a href="ex1306-mis-primos.php" class="btn btn-sm btn-primary w-100">Mis Primos</a><br><br>
                <a href="ex1306-tussam.php" class="btn btn-sm btn-primary w-100">Tussam</a><br><br>
                
            </nav>
        </section>
    </main>



</body>

</html>