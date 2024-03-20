<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
interface Metodos1
{
    public static function darAlta();
}
interface Metodos2
{
    public function darBaja();
}
//====================================================

trait Gestion1
{
    public function usar()
    {
        return "Vehiculo en uso";
    }
}
trait Gestion2
{
    public function asignarChofer()
    {
        return "Vehiculo con Chofer asignado";
    }
}
//====================================================

abstract class Vehiculo
{
    protected $matricula = "";
    protected $antiguedad = 0;
    protected $electrico = true;

    public function __construct($matricula, $antiguedad, $electrico)
    {
        $this->matricula = $matricula;
        $this->antiguedad = $antiguedad;
        $this->electrico = $electrico;
    }
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }
    public function setAntiguedad($antiguedad)
    {
        $this->antiguedad = $antiguedad;
    }
    public function setElectrico($electrico)
    {
        $this->electrico = $electrico;
    }
    public function getMatricula()
    {
        return $this->matricula;
    }
    public function getAntiguedad()
    {
        return  $this->antiguedad;
    }
    public function isElectrico()
    {
        return  $this->electrico;
    }
    abstract public function __toString();
}
//===========================================

//clase para composicion: es una clase que contiene otra clase, un objeto cuando vayas a instanciar que tiene otro objeto.

class Linea
{
    public $denominacion = "";
    public $numParadas = 10;

    public function __construct($denominacion)
    {
        $this->denominacion = $denominacion;
    }
    public function __toString()
    {
        return "Denominacion: $this->denominacion <br>" .
            "Numparadas: $this->numParadas <br>";
    }
}
//================================================================

//Clases hijas. Se pone las interfaces y los traits(se use las palabras reservadas implements y use)

class Bus extends Vehiculo implements Metodos1, Metodos2
{
    use Gestion1, Gestion2;

    //Atributos
    public $modelo = "";
    public $capacidad = 55;
    public $Linea1;

    public function __construct($modelo)
    {
        $this->modelo = $modelo;
        parent::__construct("1111AAA", 2020, false);
        $this->Linea1 = new Linea("Plus Ultra-Pol Norte");
    }
    public function __toString()
    {
        return "Matricula:" . $this->getMatricula() . "<br>" .
            "Antiguedad:" . $this->getAntiguedad() . "<br>" .
            "Electrico:" . $this->isElectrico() . "<br>" .
            "Modelo: $this->modelo <br>" . //el hijo si se puede poner con las comillas y sin concatenar
            "Linea <br> ########## <br> $this->Linea1 <br>";
    }
    //==================================================================

    //Anadir a continuacion los 2 metodos de las interfases

    public static function darAlta()
    {
        return new Bus("Scania GNC");
    }

    public function darBaja()
    {
        return "Dado de baja";
    }
}
//=======================================================================================

class CocheTaller extends Vehiculo implements Metodos1
{
    use Gestion1;

    public $marca = "";
    public $completo = true;
    public $Linea1;

    public function __construct($marca)
    {
        $this->marca = $marca;
        parent::__construct("1111AAA", 2020, false);
        $this->Linea1 = new Linea("Plus Ultra-Pol Norte");
    }
    public function __toString()
    {
        return "Matricula:" . $this->getMatricula() . "<br>" .
            "Antiguedad:" . $this->getAntiguedad() . "<br>" .
            "Electrico:" . $this->isElectrico() . "<br>" .
            "Marca: $this->marca <br>" . //el hijo si se puede poner con las comillas y sin concatenar
            "Completo: $this->completo <br>" .
            "Linea <br> ########## <br> $this->Linea1 <br>";
    }

    public static function darAlta()
    {
        return new CocheTaller("FORD SUPER DUTY");
    }
}


//esto es el SCRIPT PRINCIPAL
if (isset($_REQUEST['enviar'])) {
  //$vehiculo1 = new Vehiculo("aaaa2334", 2020, false);
  $bus1 = new Bus ("Iveco e-way");
  $cochetaller1= new CocheTaller ("Toyota Hilux");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - POO - Clases</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.bundle.min.js"></script>
    <style>
        main {
            background: linear-gradient(180deg, #5193D5, #C7F0FF);

        }

        .form-container {
            text-align: left;
        }

        label.form-label
         {
            color: #1A49E7;
            text-decoration: underline;
        }

        p {
            color: #1A49E7;
            font-weight: bold;
            text-decoration: underline;

        }
    </style>
</head>

<body class="w-70 p-3 m-3">
    <main class="container align-center w-50 bg-info p-3 mt-5 text-center border border-primary rounded-5">
        <h1 class="bg-primary text-white text-center">
            Ex 1306 Tussam</h1>
        <section>
            <p class="alert alert-info">
                <?php
                if (isset($_REQUEST['enviar'])) {
                    echo $bus1;
                    echo $cochetaller1;
                    $bus2 = Bus::darAlta();
                    echo $bus2;
                }
                ?>
            </p>
        </section>
        <section class="form-container w-50">

            <form action="#" method="post" class="form">

                <input type="submit" value="Enviar" name="enviar" class="btn btn-outline-primary">

            </form>
            <br>
        </section>
        <nav class="col">
                <a href="examen-1306-menu.php" class="btn btn-sm btn-primary w-100">Volver al Menu</a><br><br>
            </nav>
    </main>

</body>
<!-- label.form-check-label esto es para seleccionar los radios con css -->
</html>