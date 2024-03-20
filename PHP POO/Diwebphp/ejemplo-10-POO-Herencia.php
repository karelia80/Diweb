<?php
require("errores.php");
?>
<?php
// Herencia
class Vehiculo
{
    // Atributos
    public $modelo;
    public $electrico;

    // Constructor definido completo
    public function __construct($modelo, $electrico)
    {
        $this->modelo = $modelo;
        $this->electrico = $electrico;
    }

    // Método toString
    public function __toString()
    {
        $valorElectrico = "NO";
        if ($this->electrico == true) {
            $valorElectrico = "SI";
        }
        return  "<br> Modelo: $this->modelo " .
            "<br> Eletrico: $valorElectrico";
    }
}

class Coche extends Vehiculo
{
    // Atributo
    public $numPuertas = 4;

    // Constructor propio
    public function __construct($modelo, $electrico, $numPuertas)
    {
        // Uso el constructor del padre -> parent, equivale a super()
        parent::__construct($modelo, $electrico);
        $this->numPuertas = $numPuertas;
    }

    // Método toString
    public function __toString()
    {
        return parent::__toString() .
            "<br> Nº Puertas: $this->numPuertas";
    }
}

class Camion extends Vehiculo
{
    public $capCarga = 1000;
    public function __construct($modelo, $electrico, $capCarga)
    {
        parent::__construct($modelo, $electrico);
        $this->capCarga = $capCarga;
    }
    public function __toString()
    {
        return parent::__toString() .
            "<br> Capacidad Carga: $this->capCarga";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herencia</title>
</head>

<body>
    <?php
    // Script principal
    $cocheJuanjo = new Coche("Mercedes EQS", true, 4);
    echo "<h2>Coche Juanjo</h2>";
    echo $cocheJuanjo . "<br><br>";

    $camionIvan = new Camion("Vovo FHElectric", true, 3000);
    echo "<h2>Camion Iván</h2>";
    echo $camionIvan . "<br><br>";
    ?>
</body>

</html>