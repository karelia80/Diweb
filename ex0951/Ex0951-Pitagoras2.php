<?php
require("errores.php");

class pitagoras
{
    //atributos
    public $cateto1 = 0;
    public $cateto2 = 0;
    public $hipotenusa = 0;

    public function __construct($cateto1, $cateto2, $hipotenusa)
    {
        $this->cateto1 = $cateto1;
        $this->cateto2 = $cateto2;
        $this->hipotenusa = $hipotenusa;
    }
    public function Cateto($cateto1, $hipotenusa)
    {
        $cateto2 = sqrt($this->hipotenusa * $this->hipotenusa - $this->cateto1 * $this->cateto1);
        return $cateto2;
    }
    public function Hipotenusa($cateto1, $cateto2)
    {
        $hipotenusa =  sqrt($this->cateto1 * $this->cateto1 + $this->cateto2 * $this->cateto2);
        return $hipotenusa;
    }
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pitagoras PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>

<body class="d-flex flex-column justify-content-center align-items-center min-vh-100">

    <main>
        <?php
        $triangulo = new pitagoras(4, 3, 5);
        $resultado1 = $triangulo->Cateto(4, 5);
        echo "El valor del metodo Cateto es " . $resultado1 . "<br>";
        $resultado2 = $triangulo->Hipotenusa(4,3);
        echo "El valor del metodo Hipotenusa es " . $resultado2;

        ?>
        <!-- <img src="ima/mates.jpg" alt="mates"> -->

        <a href="menu.php" class="btn btn-primary d-block mt-3">Volver al menú</a>

    </main>

</body>

</html>