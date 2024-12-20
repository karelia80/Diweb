<?php
//Ejemplo 04 Estaticos

//Manual php pag 311 manual
class Camion
{
    //atributos
    public $modelo = "Volvo FH electric";
    private $precio = 500000;
    public $electrico = "true";
    //Constructor
    public function __construct($modelo, $precio, $electrico)
    {
        $this->modelo = $modelo;
        $this->setPrecio($precio);
        $this->electrico = $electrico;
    }

    public function setPrecio($precio)
    {
        if ($precio > 100000) {
            $this->precio = $precio;
        }
    }

    public function getPrecio()
    {
        return $this->precio;
    }



    public function __toString() //para imprimir
    {
        $valorElectrico = "No";
        if ($this->electrico) {
            $valorElectrico = "Si";
        }
        return "CAMION: Modelo $this->modelo <br>
                        Precio:" . $this->getPrecio() . " <br> " .
            "Electrico: $valorElectrico ";
    }
}

class TrenCarretera extends Camion
{
    public $remolque2 = true;

    public function __construct($modelo, $precio, $electrico, $remolque)
    {
        parent::__construct($modelo, $precio, $electrico);
        $this->remolque2 = $remolque;
    }
    //==============================================================================
    //creamos un metodo static                                                     
    public static function leeTren($modelo, $precio, $electrico, $remolque)
    {
        return new TrenCarretera($modelo, $precio, $electrico, $remolque);
    }
    //==============================================================================

    //Vamos a definir otro metodo static: crearflota, para hacer un array 
    public static function creaFlota($modelo, $precio, $electrico, $numCamiones)
    {   //defino el array de camiones (vacia)
        $flota = [];
        //Añado camion por camion al array
        //Los camiones seran iguales
        for ($i = 0; $i < $numCamiones; $i++) {
            $nuevocamion = TrenCarretera::leeTren($modelo, $precio, $electrico, true);
            $flota[] = $nuevocamion;
        }
        $pintaCamiones = "";
        //imprimos los camiones (foreach)
        foreach ($flota as $num => $camion) {
            $pintaCamiones .= "Datos Tren Carretera Nº" . ($num + 1) . "<br>" . $camion . "<br>";
        }
        return $pintaCamiones;
    }
    //========================================================================================

    public function __toString()
    {
        //Usamos un ternario  <atributo> ? valorTrue : ValorFalse; el ternario se pone entre ()
        return parent::__toString() . "<br>" .
            "Remolque: " . ($this->remolque2 ? "Si" : "No");
    }
}
    //=========================================================================================

//SCRIPT principal

if (isset($_REQUEST['enviar'])) {
    $modelo = $_REQUEST['texto'];
    $precio = $_REQUEST['num'];
    $electrico = $_REQUEST['opcion'];

    //$camion = new Camion($modelo, $precio, $electrico);

    $trenCarretera = new TrenCarretera($modelo, $precio, $electrico, true);
    //================Usame el metodo staci leeTren====================================================
    $trenCarretera2 =  TrenCarretera::leeTren("Mercedes Tren", $precio, true, true);
    //================================================================================================
    //ahora usamos el metodo crear flota (pasamos el numCamiones con el numero que queremos pasar)
    $flota = TrenCarretera::creaFlota($modelo, $precio, $electrico, 5);
    //================================================================================================
}
// Los metodos y atributos ESTATICOS son aquellos que no necesitan instanciar una clase para poder ser usados. Hay que usar la palabra reservada 'static'. Son perfectos para crear array de objetos
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 04 PHP POO estaticos</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.bundle.min.js"></script>
    <style>
        h2 {
            color: #1121A7;
            text-decoration: underline;
        }

        .form-label {
            color: #1121A7;
        }

        label[for="opcion1"],
        label[for="opcion2"] {
            color: #1121A7;
        }

        p {
            color: #1121A7;
        }
    </style>

</head>

<body class="w-70 p-3 m-3">

    <main class="bg-primary text-white py-4 w-100 text-center fixed-top">
        <h1>Estaticos</h1>
    </main><br><br><br><br>

    <section class="container pt-3 m-4">
        <h2>PHP con POO: Estaticos</h2><br>
    </section>


    <section>

        <p class="alert alert-info">
            <?php
            if (isset($_REQUEST['enviar'])) {

                echo $trenCarretera . "<br><br>";
                echo $trenCarretera2 . "<br><br>";
                echo $flota;
            }

            ?>
        </p>

    </section>
    <section class="w-50 pt-3 m-4">
        <form action="#" method="post" class="form">
            <label for="texto" class="form-label">Modelo</label>
            <input type="text" name="texto" id="texto" class="form-control"><br>

            <label for="num" class="form-label">Precio</label>
            <input type="number" name="num" id="num" class="form-control"><br>

            <p>Electrico</p>
            <input type="radio" name="opcion" id="opcion1" class="form-check-input" checked value="1">
            <label for="opcion1" class="form-check-label">Si</label><br>
            <input type="radio" name="opcion" id="opcion2" class="form-check-input" value="0">
            <label for="opcion2" class="form-check-label">No</label><br><br>

            <input type="submit" value="Enviar" name="enviar" class="btn btn-outline-info">

        </form>
    </section>



</body>

</html>