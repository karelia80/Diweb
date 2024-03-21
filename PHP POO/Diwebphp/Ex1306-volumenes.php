<?php
require("../errores.php");
?>
<?php
$mensaje = "";
$resultado = 0;

// Tratar formulario
if (isset($_REQUEST['enviar'])) {
    $base = $_REQUEST['base'];
    $altura = $_REQUEST['altura'];
    $radio = $_REQUEST['radio'];


    $opcion = $_REQUEST['opcion'];
    if ($opcion < 1 || $opcion > 4) {
        $mensaje .= "¡Opción incorrecta!";
    }

    // 1. Prisma
    if ($opcion == 1) {
        if (isset($_REQUEST['radio'])) {
            $mensaje = "¡Radio innecesario! <br>";
        }
        $mensaje .= "Volumen Prisma:";
        $resultado = $base * $altura;
    }

    // 2. Cilindro
    if ($opcion == 2) {
        if (isset($_REQUEST['base'])) {
            $mensaje = "¡Área base innecesaria! <br>";
        }
        $mensaje .= "Volumen Cilindro:";
        $resultado = M_PI * $radio * $radio * $altura;
    }

    // 3. Cono
    if ($opcion == 3) {
        if (isset($_REQUEST['radio'])) {
            $mensaje = "¡Radio innecesario! <br>";
        }
        $mensaje .= "Volumen Cono:";
        $resultado = 1 / 3 * $base * $altura;
    }

    // 4. Esfera
    if ($opcion == 4) {
        if (isset($_REQUEST['base']) || isset($_REQUEST['altura'])) {
            $mensaje = "Base/Altura innecesarios! <br>";
        }
        $mensaje .= "Volumen Esfera:";
        $resultado = 4 / 3 * M_PI * pow($radio, 3);
    }


    //$resultado = $num1 + $num2;
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
        <p class="alert alert-info w-50">
            <?php
            if (isset($_REQUEST['enviar'])) {
                echo "$mensaje <br>";
                echo "$resultado <br>";
            }
            ?>
        </p>
    </section>
    <form action="#" method="post" class="form">
        <fieldset class="w-50">
            <label for="base" class="form-label">A - Área Base: </label>
            <input type="number" name="base" id="base" class="form-control"><br>

            <label for="altura" class="form-label">H - Altura: </label>
            <input type="number" name="altura" id="altura" class="form-control"><br>

            <label for="radio" class="form-label">r - Radio: </label>
            <input type="number" name="radio" id="radio" class="form-control"><br>

            <label for="opcion" class="form-label">Opción: </label>
            <input type="number" name="opcion" id="opcion" class="form-control"><br>
            
            <input type="submit" value="Enviar" class="form-control" name="enviar">

        </fieldset>
    </form>

    <?php
    ?>
</body>

</html>