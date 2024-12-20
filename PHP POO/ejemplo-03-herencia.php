<?php
//Ejemplo 03 Herencia

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
    { //aqui controlamos el valor por defecto del camion que no pueda ser menor de X
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
                        Precio:" . $this->getPrecio() . " <br> " . //Ahora ahi hay que CONCATENAR con "" y.
            "Electrico: $valorElectrico ";
    }
}
// Ahora se pone la nueva clase hija
class TrenCarretera extends Camion
{
    public $remolque2 = true;

    public function __construct($modelo, $precio, $electrico, $remolque)
    {
        parent::__construct($modelo, $precio, $electrico);
        $this->remolque2 = $remolque;
    }
    public function __toString(){
        //Usamos un ternario  <atributo> ? valorTrue : ValorFalse;
        return parent:: __toString() . "<br>" . 
        "Remolque: " . ($this->remolque2 ? "Si" : "No");
    }
}

if (isset($_REQUEST['enviar'])) {
    $modelo = $_REQUEST['texto'];
    $precio = $_REQUEST['num'];
    $electrico = $_REQUEST['opcion'];

    //$camion = new Camion($modelo, $precio, $electrico);
//hacemos el objeto Trencarretera
$trenCarretera = new TrenCarretera($modelo, $precio, $electrico, true);
   
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 03 PHP POO Herencia</title>
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
        <h1>Herencias</h1>
    </main><br><br><br><br>

    <section class="container pt-3 m-4">
        <h2>PHP con POO: Herencia con encapsulamiento</h2><br>
    </section>


    <section>

        <p class="alert alert-info">
            <?php
            if (isset($_REQUEST['enviar'])) {
              
                echo $trenCarretera;
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