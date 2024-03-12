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

    public static function leeTren($modelo, $precio, $electrico, $remolque)
    {
        return new TrenCarretera($modelo, $precio, $electrico, $remolque);
    }


    public function __toString()
    {
        //Usamos un ternario  <atributo> ? valorTrue : ValorFalse; el ternario se pone entre ()
        return parent::__toString() . "<br>" .
            "Remolque: " . ($this->remolque2 ? "Si" : "No");
    }
}

if (isset($_REQUEST['enviar'])) {
    $modelo = $_REQUEST['texto'];
    $precio = $_REQUEST['num'];
    $electrico = $_REQUEST['opcion'];

    //$camion = new Camion($modelo, $precio, $electrico);

    $trenCarretera = new TrenCarretera($modelo, $precio, $electrico, true);
    $trenCarretera2 =  TrenCarretera::leeTren("Mercedes Tren", $precio, true, true);
}
// Los metodos y atributos ESTATICOS son aqueños que no necesitan instanciar una clase para poder ser usados. Hay que usar la palabra reservada 'static'.
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
                echo $trenCarretera2;
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