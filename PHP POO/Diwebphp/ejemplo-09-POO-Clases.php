<?php
require("errores.php");
?>
<?php
// POO (Programación Orientada a Objetos) - Clases
// Clase ~ plantilla
class Camion
{
    // Atributos
    public $modelo = "Volvo FH Electric";
    public $velocidad  = 0;
    public $potencia;
    public $electrico = true;

    // Constructor definido
    // En PHP NO está permitida la sobrecarga de constructores
    public function __construct(
        $modelo = "Volvo FH Electric",
        $electrico = true,
        $potencia = 450,
        $velocidad = 0
    ) {
        $this->$modelo = $modelo;
        $this->electrico = $electrico;
        $this->potencia = $potencia;
    }

    /**
     * JAVA -> sobrecarga de constructores
     * public Camion(){...}
     * public Camion(modelo, electrico){...}
     * public Camion(modelo, electrico, potencia){...}
     * 
     */

    // Función de clase -> Método
    public function acelerar($valor)
    {
        $this->velocidad = $this->velocidad + $valor;
    }

    public function frenar($valor)
    {
        // $this->velocidad = $this->velocidad - $valor;
        $this->velocidad -= $valor;
    }

    // Método toString
    public function __toString()
    {
        if ($this->electrico) {
            $valorEletrico = "SI";
        } else {
            $valorEletrico = "NO";
        }
        return "Datos Camión <br>" .
            "Modelo: $this->modelo <br>" .
            "Velocidad: $this->velocidad Km/hr <br>" .
            "Potencia: $this->potencia CV <br>" .
            "Electrico: $valorEletrico <br>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases</title>
</head>

<body>
    <?php
    // Script Principal (void main() de C++)
    // Instanciamos la clase
    $miCamion1 = new Camion();
    $miCamion2 = new Camion();
    $miCamion3 = new Camion("Scania Serie S", false);
    $miCamion4 = new Camion("Scania Serie P", false, 200);


    // Ejemplo en el que creo un camión por modelo y velocidad
    $miCamion5 = new Camion("Volvo FH16");
    $miCamion5->velocidad = -10;

    //$miCamion6 = new Camion($modelo = "FH15", $potencia = 700, $electrico = false);


    var_dump($miCamion2);
    echo "<br>";

    // Voy a imprimir los atributos del camion1
    echo    "<br>Camion1 <br>";
    echo $miCamion1;

    echo    "<br>Camion3 <br>";
    $miCamion3->acelerar(50);
    $miCamion3->frenar(10);
    echo $miCamion3;

    echo    "<br>Camion4 <br>";
    echo $miCamion4;

    echo    "<br>Camion5 <br>";
    echo $miCamion5;

    //echo    "<br>Camion6 <br>";
    //echo $miCamion6;
    ?>
</body>

</html>