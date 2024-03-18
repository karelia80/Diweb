<?php
require("errores.php");
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
        
    </style>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.bundle.min.js"></script>
</head>

<body>

    <main class="container align-center w-50 bg-info p-3 mt-5 text-center border border-primary rounded-5">
        <p class="alert alert-info">
            Ejercicio 8
        </p>
        <hr>
        <br>
        <section class="row">
            <nav class="col">
                <a href="index.php" class="btn btn-sm btn-dark w-100">Menú</a><br><br>
                <a href="ej1.php" class="btn btn-sm btn-primary w-100">Carnet de Conducir</a><br><br>
                <a href="ej2.php" class="btn btn-sm btn-primary w-100">Edad para Trabajar</a><br><br>
                <a href="ej3.php" class="btn btn-sm btn-primary w-100">Numeros Pares</a><br><br>
            </nav>
            <nav class="col">
                <a href="ej4.php" class="btn btn-sm btn-primary w-100">Elementos Impares</a><br><br>
                <a href="ej5.php" class="btn btn-sm btn-primary w-100">Suma de Cinco Enteros</a><br><br>
                <a href="ej6.php" class="btn btn-sm btn-primary w-100">Base y Exponente</a><br><br>
                <a href="ej7.php" class="btn btn-sm btn-light w-100">POO</a><br><br>
            </nav>
        </section>
    </main>

</body>

</html>