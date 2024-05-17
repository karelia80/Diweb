<?php
require("errores.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pitagoras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script>

        let ladoA = 0;
        let ladoB = 0;
        var ladoC = 0;

        function pedirDatos() {
            ladoA = parseInt(prompt("Pon la longitud del lado A:"));
            ladoB = parseInt(prompt("Pon la longitud del lado B:"));
        }

        function calcular(){
            ladoC = Math.sqrt(ladoA * ladoA + ladoB * ladoB);
        }
        function mostrarResultado() {
        return "Para los lados A = " + ladoA + " y B = " + ladoB + ", la longitud del lado C, según el teorema de Pitágoras, es: " + ladoC;
    }
       
       
    </script>

</head>

<body class="d-flex flex-column justify-content-center align-items-center min-vh-100">
    <script>
      
        pedirDatos();
        calcular();
        alert(mostrarResultado());
    </script>

<main>
 <img src="ima/mates.jpg" alt="Loco">

 <a href="menu.php" class="btn btn-primary d-block mt-3">Volver al menú</a>

</main>
   
</body>

</html>