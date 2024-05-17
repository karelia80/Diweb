<?php
require("errores.php");

interface Modos
{
    public function encender();
    public function apagar();
}

trait Flota
{
    public function alta()
    {
        echo " Vehiculo dado de alta";
    }
    public function baja()
    {
        echo " Vehiculo dado de baja";
    }
}

abstract class Vehiculo {
    public $matricula="";

    public function __construct($matricula){
        $this->matricula=$matricula;
    }
    
    public function __toString(){
        return "Matrícula: " . $this->matricula;
    }
    
}
class Conductor{
    public $nombre="";
    public $sexo= true;

    public function __construct($nombre,$sexo)
    {
        $this->nombre = $nombre;
        $this->sexo = $sexo;
    }
}

class Coche extends Vehiculo implements Modos {
    use Flota;
    public $tipo="";


    public function __construct($matricula,$tipo){
        parent::__construct($matricula);
        $this->tipo= $tipo; 
    }
    public function encender(){
        echo "Encendido";
    }
    public function apagar(){
        echo "Apagado";
    }
}

class Furgoneta extends Vehiculo implements Modos{
    use Flota;
    public $adaptado="";
    public $capacidad= 0;

    public function __construct($matricula,$adaptado,$capacidad){
        parent::__construct($matricula);
        $this->adaptado= $adaptado;
        $this->capacidad= $capacidad;
    }
        public function encender(){
        echo "Encendido";
    }
    public function apagar(){
        echo "Apagado";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehiculos PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>

<body class="d-flex flex-column justify-content-center align-items-center min-vh-100">

    <main>
        <?php
       $coche = new coche("1111ABC","Electrico");
       echo $coche;
       echo $coche->alta();
       echo $coche->encender();
       $furgoneta = new furgoneta ("1111DEF", 1.7, 1);
       echo $furgoneta;
       echo $furgoneta->baja();
       echo $furgoneta->apagar();
        ?>
       <img src="ima/Cabify-logo-purple.png" alt="coche">
        <a href="menu.php" class="btn btn-primary d-block mt-3">Volver al menú</a><br>

        


    </main>

</body>

</html>