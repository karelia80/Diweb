<?php

declare(strict_types=1);        // Para cambiar el interprete -> Tipado completo!
require("errores.php");

?>
<?php
// Abstracción -> Clases abstractas -> Métodos abstractos (al menos 1)
// A nivel profesional debemos hacerlo asi:
// a) En la clase padre (abstracta) poner los atributos y métodos como protected
// b) En la clase hija (la que se instanciará) se pone atributos como PRIVADOS
// c) Hay que tiparlo TODO!
abstract class Persona
{
    protected String $nombre;
    private int $edad;

    protected function __construct(String $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Defino el toString como abstracto
    abstract public function __toString(): String;

    // Métodos setter y getter
    protected function setEdad(int $edad)
    {
        if ($edad > 0) {
            $this->edad = $edad;
        }
    }

    protected function getEdad(): int
    {
        return $this->edad;
    }
}

class Alumno extends Persona
{
    private bool $matriculaPagada;

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

        // nombre es protected y lo veo como si fuera mio
        // edad es privado y tengo que usar su getter
        return "<br> Nombre: $this->nombre " .
            "<br> Edad:" . $this->getEdad() .
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
    echo $alumna;

    // Objeto de la clase Persona
    // Una vez convertida en abstracta NO podemos instanciarla!
    /*
    $persona = new Persona("Juanjo", 28);
    echo $persona;
    */
    ?>
</body>

</html>