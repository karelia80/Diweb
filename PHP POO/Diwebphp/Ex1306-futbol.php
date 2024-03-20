<?php

declare(strict_types=1);
require("../errores.php");
?>
<?php
// Clase abstracta Deportista
abstract class Deportista
{
    // Atributos
    protected String $identidad;
    private int $edad;
    protected bool $sexo;

    public function __construct(String $identidad, int $edad, bool $sexo)
    {
        $this->identidad = $identidad;
        $this->edad = $edad;
        $this->sexo = $sexo;
    }

    public function __toString(): String
    {
        if ($this->sexo) {          // if ($this->sexo == true) 
            $valorSexo = "Mujer";
        } else {
            $valorSexo = "Hombre";
        }

        $mensaje = "Identidad: $this->identidad <br>
                    Edad: $this->edad <br>
                    Sexo: $valorSexo <br>";
        return $mensaje;
    }

    abstract public function federarse();

    // setter y getter
    public function setEdad(int $edad): void
    {
        $this->edad = $edad;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }
}

// Clase composición
class Club
{
    // Atributo
    public String $denominacion;
    public int $fundacion;

    // Constructor
    public function __construct(String $denominacion, int $fundacion)
    {
        $this->denominacion = $denominacion;
        $this->fundacion = $fundacion;
    }

    // toString
    public function __toString(): String
    {
        return "Club: $this->denominacion, Fundación: $this->fundacion ";
    }
}

class Futbolista extends Deportista
{
    // Atributo propio
    public int $dorsal;
    public Club $betis;

    // Constructor
    public function __construct(String $identidad, int $edad, bool $sexo, int $dorsal)
    {
        parent::__construct($identidad, $edad, $sexo);
        $this->dorsal = $dorsal;
        $this->betis = new Club("Real Betis", 1907);
    }

    // toString
    public function __toString(): String
    {
        $mensaje = parent::__toString() .
            "Dorsal: $this->dorsal <br>
            $this->betis <br>";
        return $mensaje;
    }

    public function federarse()
    {
        return "Estoy Federado <br>";
    }
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
            //$guido = new Deportista("Guido Rodríguez", 30, false);
            //echo $guido;
            $guido = new Futbolista("Guido Rodríguez", 30, false, 5);
            echo $guido;
            ?>
        </p>
    </section>

    <?php
    ?>
</body>

</html>