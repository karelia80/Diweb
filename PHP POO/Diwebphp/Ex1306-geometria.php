<?php

declare(strict_types=1);
require("../errores.php");
?>
<?php
// Definición de las clases
class Geometria
{
    // Atributos
    public int $b;      // base
    public int $a;      // altura

    // Constructor
    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    // toString
    public function __toString(): String
    {
        $mensaje =  "Base: $this->b <br>
                     Altura: $this->a <br>";
        return $mensaje;
    }
}

class Triangulo extends Geometria
{
    // Atributos YA está heredados

    // El constructor YA está heredado

    // toString
    public function __toString(): String
    {
        $mensaje = "Triángulo <br>" .
            parent::__toString();
        return $mensaje;
    }

    public function area(): String
    {
        $mensaje = "Área: " . ($this->b * $this->a / 2) . "<br>";
        return $mensaje;
    }
}

class Rectangulo extends Geometria
{
    // Atributos YA está heredados
    // El constructor YA está heredado
    // toString
    public function __toString(): String
    {
        $mensaje = "Rectángulo <br>" .
            parent::__toString();
        return $mensaje;
    }

    public function area(): String
    {
        $mensaje = "Área: " . ($this->b * $this->a) . "<br>";
        return $mensaje;
    }
}

// Tratar formulario
if (isset($_REQUEST['enviar'])) {
    // intval -> devuelve valor entero de String
    // boolval -> devuelve valor booleano de String
    // floatval -> Devuelve valor flotante de String
    $base = intval($_REQUEST['base']);
    $altura = intval($_REQUEST['altura']);
    $resultado = $base + $altura;

    //$figura = new Geometria($altura, $base);
    $triangulo = new Triangulo($altura, $base);
    $rectangulo = new Rectangulo($altura, $base);
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
                //echo $figura;
                echo $triangulo;
                echo $triangulo->area();
                echo $rectangulo;
                echo $triangulo->area();
            }
            ?>
        </p>
    </section>
    <form action="#" method="post" class="form">
        <fieldset class="w-50">
            <label for="base" class="form-label">Base</label>
            <input type="number" name="base" id="base" class="form-control"><br>
            <label for="altura" class="form-label">Altura</label>
            <input type="number" name="altura" id="altura" class="form-control"><br>
            <input type="submit" value="Enviar" class="form-control" name="enviar">
        </fieldset>
    </form>

    <?php
    ?>
</body>

</html>