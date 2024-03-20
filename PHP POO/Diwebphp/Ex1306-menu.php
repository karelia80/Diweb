<?php
require("../errores.php");
?>
<?php
// Tratar formulario
if (isset($_REQUEST['enviar'])) {
    $num1 = $_REQUEST['num1'];
    $num2 = $_REQUEST['num2'];
    $resultado = $num1 + $num2;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-3 m-2 border-0 bd-example">
    <section aria-label="info">
        <p class="alert alert-info w-50"><a href="Ex1306-volumenes.php">1. Volúmenes</a></p>
        <p class="alert alert-info w-50"><a href="Ex1306-geometria.php">2. Geometría</a></p>
        <p class="alert alert-info w-50"><a href="Ex1306-tabmultiplicar.php">3. TablasMultiplicar</a></p>
        <p class="alert alert-info w-50"><a href="Ex1306-futbol.php">4. Fútbol</a></p>
    </section>
    <?php
    ?>
</body>

</html>