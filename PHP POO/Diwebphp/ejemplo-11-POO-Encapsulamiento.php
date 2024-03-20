<?php
require("errores.php");
?>
<?php
// Encapsulamiento (incluyendo herencia)
// Por primera vez vamos a tiparlo todo
class Persona
{
    protected String $nombre;
    private int $edad;

    public function __construct(String $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function __toString(): String
    {
        return "<br> Nombre: $this->nombre " .
            "<br> Edad: $this->edad";
    }

    // Métodos setter y getter
    public function setEdad(int $edad)
    {
        if ($edad > 0) {
            $this->edad = $edad;
        }
    }

    public function getEdad(): int
    {
        return $this->edad;
    }
}

class Alumno extends Persona
{
    public bool $matriculaPagada;

    public function __construct(String $nombre, int $edad, bool $matriculaPagada)
    {
        parent::__construct($nombre, $edad);
        $this->matriculaPagada = $matriculaPagada;
    }

    public function __toString(): String
    {
        if ($this->matriculaPagada) {
            $valorMat = "SI";
        } else {
            $valorMat = "NO";
        }
        return parent::__toString() .
            "<br> ¿Matricula pagada: $valorMat ";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulamiento</title>
</head>

<body>
    <?php
    // Script principal
    $alumna = new Alumno("Maria", 34, true);
    $alumna->setEdad(24);
    echo $alumna->getEdad();
    echo $alumna;
    ?>
</body>

</html>