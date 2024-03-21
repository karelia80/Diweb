<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Geometria
{
    public $base = 0;
    public $altura = 0;

    public function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function __toString()
    {
        $mensaje = "Base: $this->base <br>" .
            "Altura: $this->altura";
            return $mensaje;
    }
}

class Triangulo extends Geometria
{

    public function __toString()
    {
        $mensaje= "Triangulo: <br>" . parent::__toString();
        return $mensaje;
    }

    public function area()
    {
        $mensaje= "Area: " . ($this->base * $this->altura / 2) . "<br>";
        return $mensaje;
    }
}

class Rectangulo extends Geometria{

    public function __toString()
    {
        $mensaje= "Rectangulo: <br>" . parent::__toString();
        return $mensaje;
    }

    public function area()
    {
        $mensaje= "Area: " . ($this->base * $this->altura) . "<br>";
        return $mensaje;
    }

}

if (isset($_REQUEST['enviar'])){
    $trian1 = new Triangulo(10,5);
    $recta1 = new Rectangulo(10,5);

}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geometria</title>
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
                echo $trian1;
                echo $trian1->area();
                echo $recta1;
                echo $recta1->area();
            }
            ?>
        </p>
        <hr>
        <br>

        <section class="form-container">
            <form action="#" method="post">

                <input type="submit" value="Enviar" name="enviar" class="btn btn-outline-primary">
            </form>
        </section><br>

        <section class="row">
            <nav class="col">
                <a href="Ex1306-geometria.php" class="btn btn-sm btn-primary w-100">Geometría</a><br><br>
            </nav>
            <nav class="col">
                <a href="Ex-1306-menu.php" class="btn btn-sm btn-primary w-100">Volver al Menú</a><br><br>
            </nav>
        </section>

    </main>



</body>

</html>