<?php
require("errores.php");

abstract class Persona
{
    private $dni = "";
    public $nombre = "";

    public function __construct($dni, $nombre)
    {
        $this->dni = $dni;
        $this->nombre = $nombre;
    }

    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    public function getDni()
    {
        return $this->dni;
    }

    abstract function __tostring();
}

class Reserva
{
    private $entrada;
    public $huesped;
    public $empleado;

    public function __construct($entrada, $huesped, $empleado)
    {
        $this->entrada = $entrada;
        $this->huesped = $huesped;
        $this->empleado = $empleado;
    }

    public function setEntrada($entrada)
    {
        $this->entrada = $entrada;
    }

    public function getEntrada()
    {
        return $this->entrada;
    }

    public function leeReserva($entrada, $huesped, $empleado)
    {
        return new Reserva($entrada, $huesped, $empleado);
    }
    public function __toString()
    {
        return "Entrada: $this->entrada <br>" .
            "Huesped: $this->huesped <br>" .
            "Empleado. $this->empleado";
    }
}

class Cliente extends Persona
{
    private $edad5 = 0;

    public function __construct($dni, $nombre, $edad5)
    {
        parent::__construct($dni, $nombre);
        $this->setEdad5($edad5);
    }

    public function setEdad5($edad5)
    {
        $this->edad5 = $edad5;
    }

    public function getEdad5()
    {
        return $this->edad5;
    }


    public function leeCliente($dni, $nombre, $edad5)
    {
        return new cliente($dni, $nombre, $edad5);
    }
    public function __toString()
    {
        return "Dni: " . $this->getDni() . "<br>" .
            "Nombre: " . $this->nombre . "<br>" .
            "Edad: " . $this->getEdad5();
    }
}

class Trabajador extends Persona
{
    private $esTemporal = true;

    public function __construct($dni, $nombre, $esTemporal)
    {
        parent::__construct($dni, $nombre);
        $this->setEsTemporal($esTemporal);
    }

    public function setEsTemporal($esTemporal)
    {
        $this->esTemporal = $esTemporal;
    }

    public function getEsTemporal()
    {
        return $this->esTemporal;
    }

    public function leeTrabajador($dni, $nombre, $esTemporal)
    {
        return new Trabajador($dni, $nombre, $esTemporal);
    }

    public function __toString()
    {
        return "Dni: " . $this->getDni() . "<br>" .
            "Nombre: " . $this->nombre . "<br>" .
            "Es Temporal: " . $this->getesTemporal();
    }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <style>
        main {
            background: linear-gradient(180deg, #5193D5, #C7F0FF);

        }

        .form-container {
            text-align: left;
        }
    </style>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.bundle.min.js"></script>
</head>

<body>

    <main class="container align-center w-50 bg-info p-3 mt-5 text-center border border-primary rounded-5">
   
        <br>
        <section class="form-container">
            <form action="#" method="post" class="form">
                <p>Datos del Cliente</p>
                <input type="text" name="num" id="num" class="form-control" placeholder="DNI Cliente" max="9"><br>
                <input type="text" name="nam" id="nam" class="form-control" placeholder="Nombre del Cliente"><br>
                <input type="number" name="year" id="year" class="form-control" placeholder="Edad Cliente"><br><hr>

        <p>Datos del Trabajador</p>
                <input type="text" name="nume" id="nume" class="form-control" placeholder="DNI Trabajador" max="9"><br>
                <input type="text" name="nam" id="nam" class="form-control" placeholder="Nombre del Trabajador"><br>

                <p>¿El trabajador es temporal?</p>
                <input type="radio" name="opcion" id="opcion1" class="form-check-input" checked value="1">
                <label for="opcion1" class="form-check-label">Si</label><br>
                <input type="radio" name="opcion" id="opcion2" class="form-check-input" value="0">
                <label for="opcion2" class="form-check-label">No</label><br><br>

                <label for="entrada_reserva" class="form-label">Entrada Reserva</label>
                    <input type="date" class="form-control" id="entrada_reserva" name="entrada_reserva"><br>
                

                <input type="submit" value="Enviar" name="enviar" class="btn btn-info">
            </form>

        </section><br>
        <section class="row">
            <nav class="col">
                <a href="index.php" class="btn btn-sm btn-dark w-50">Menú</a><br><br>

            </nav>
        </section>
   <?php

if (isset($_POST['enviar'])) {
    
    $dniCliente = $_POST['num'];
    $nombreCliente = $_POST['nam'];
    $edadCliente = $_POST['year'];

    $dniTrabajador = $_POST['nume'];
    $nombreTrabajador = $_POST['nam'];
    $esTemporal = ($_POST['opcion'] == 1) ? "Si" : "No";

   
    $cliente = new Cliente($dniCliente, $nombreCliente, $edadCliente);
    $trabajador = new Trabajador($dniTrabajador, $nombreTrabajador, $esTemporal);

}
?>
     <p class="alert alert-info alert-dismissible fade show" role="alert">
            Ejercicio 8
            <?php
            if (isset($_REQUEST['enviar'])) {
            echo "<p>Datos del Cliente:</p>";
            echo $cliente->__toString() . "<br><br>";
        
            echo "<p>Datos del Trabajador:</p>";
            echo $trabajador->__toString() . "<br><br>";
            }
            ?>
        </p>


    </main>
 


</body>

</html>