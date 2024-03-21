<?php



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

interface Eventos
{
    public function concentrarse();
    public function viajar();
}

trait Partido
{
    public function jugarPartido()
    {
        $mensaje = "Voy a jugar";
        return $mensaje;
    }
    public function dirigirPartido()
    {
        $mensaje = "Soy el Mister";
        return $mensaje;
    }
}

abstract class Deportista
{
    protected $identidad = "";
    protected $edad = 0;
    protected $sexo = true;

    public function __construct($identidad, $edad, $sexo)
    {
        $this->identidad = $identidad;
        $this->edad = $edad;
        $this->sexo = $sexo;
    }
    public function setIdentidad($identidad)
    {
        $this->identidad = $identidad;
    }
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
    public function getIdentidad()
    {
        return $this->identidad;
    }
    public function getedad()
    {
        return $this->edad;
    }
    public function isSexo()
    {
        return $this->sexo;
    }
    public function __toString()
    {
        if ($this->sexo) {
            $valorSexo = "Mujer";
        } else {
            $valorSexo = "Hombre";
        }

        $mensaje = "Identidad: $this->identidad <br>
                    Edad: $this->edad <br>
                    Sexo: $valorSexo <br>";

        return $mensaje;
    }
    abstract function federarse();
}
class club
{
    public $denominacion = "";
    public $fundacion = 0;

    public function __construct($denominacion, $fundacion)
    {
        $this->denominacion = $denominacion;
        $this->fundacion = $fundacion;
    }
    public function __toString()
    {
        return "Denominacion: $this->denominacion <br>" . 
                "Fundacion: $this->fundacion <br>";
    }
}

class Futbolista extends Deportista implements Eventos {
    use Partido;

    public $dorsal= 0;
    public $club1;
    public $club2;
    public $club3;

    public function __construct($dorsal){
        $this->dorsal=$dorsal;
        parent::__construct("Guido Rodriguez", 27, false);
        $this->club1= new Club("Real Betis Balompie", 1907);
        $this->club2 = new Club("Sevilla Fútbol Club", 1890);
        $this->club3 = new Club("Real Madrid FC", 1902);
    }
    public function __toString(){
        return "Identidad:" . $this->identidad . "<br>" . 
                "Edad:" . $this->edad . "<br>" .
                "Sexo:" . $this->sexo . "<br>" .
                "Dorsal: $this->dorsal <br>" . 
                "Club: $this->club1";
    }
    public function federarse()
    {
        return "Estoy Federado";
    }

    public function concentrarse(){
        return "Concentrado";
    }
    public function viajar(){
        return "Viajo";
    }
}

class Entrenador extends Deportista implements Eventos{
    use Partido;

    public $inicioEntrenador=0;
    public $club1;
    public $club2;
    public $club3;

    public function __construct($inicioEntrenador){
        $this->inicioEntrenador=$inicioEntrenador;
        parent::__construct("Guido Rodriguez", 27, false);
        $this->club1= new Club("Real Betis Balompie", 1907);
        $this->club2 = new Club("Sevilla Fútbol Club", 1890);
        $this->club3 = new Club("Real Madrid FC", 1902);
    }

    public function __toString(){
        return "Identidad:" . $this->identidad . "<br>" . 
                "Edad:" . $this->edad . "<br>" .
                "Sexo:" . $this->sexo . "<br>" .
                "Dorsal: $this->inicioEntrenador <br>" . 
                "Club: $this->club1";
    }
    public function federarse()
    {
        return "Estoy Federado";
    }

    public function concentrarse(){
        return "Concentrado";
    }
    public function viajar(){
        return "Viajo";
    }


}




if (isset($_REQUEST['enviar'])) {
    $futbito = new Futbolista(27);
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futbol</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.bundle.min.js"></script>
    <style>
        main {
            background: linear-gradient(180deg, #5193D5, #C7F0FF);

        }

        .form-container {
            text-align: left;
        }

        label.form-label {
            color: #1A49E7;
            text-decoration: underline;
        }
    </style>


</head>

<body class="w-70 p-3 m-3">

    <main class="container align-center w-50 bg-info p-3 mt-5 text-center border border-primary rounded-5">
        <p class="alert alert-info">
            <?php
            if (isset($_REQUEST['enviar'])) {
                echo $futbito;
            }
            ?>
        </p>
        <hr>
        <br>

        <section class="form-container">
            <form action="#" method="post">

                <input type="submit" value="Enviar" name="enviar" class="btn btn-outline-primary">
            </form>
        </section><br>

        <section class="row">
            <nav class="col">
                <a href="Ex1306-geometria.php" class="btn btn-sm btn-primary w-100">Geometría</a><br><br>
            </nav>
            <nav class="col">
                <a href="Ex-1306-menu.php" class="btn btn-sm btn-primary w-100">Volver al Menú</a><br><br>
            </nav>
        </section>

    </main>



</body>

</html>