<?php

declare(strict_types=1);        // Para cambiar el interprete -> Tipado completo!
require("errores.php");

?>
<?php
// Interfaces -> Son plantillas donde TODOS los métodos son abstractos
// Obligan a las clases que las implementan a desarrollar dichos métodos
// OJO: No existe la herencia múltiple pero si la implementación de interfaces múltiple

// A nivel profesional debemos hacerlo asi:
// a) En la clase padre (abstracta) poner los atributos y métodos como protected
// b) En la clase hija (la que se instanciará) se pone atributos como PRIVADOS
// c) Hay que tiparlo TODO!

interface Acciones1
{
    public function cambiarEdad(int $edad): void;
}

interface Acciones2
{
    public function matricular(): void;
}

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

class Alumno extends Persona implements Acciones1, Acciones2
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

    // Desarrollamos los métodos de las interfaces
    public function cambiarEdad(int $edad): void
    {
        $this->setEdad($edad);
    }

    public function matricular(): void
    {
        if (!$this->matriculaPagada) {
            $this->matriculaPagada = true;
        } else {
            echo "<br>OYE, ya ha pagado la matricula!!";
        }
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
    $alumna->cambiarEdad(33);
    $alumna->matricular();
    echo $alumna;
    ?>
</body>

</html>