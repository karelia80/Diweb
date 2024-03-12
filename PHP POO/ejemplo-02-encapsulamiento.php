<?php
//Ejemplo 02 Encapsular

//Manual php pag 311 manual
class Camion
{
    //atributos
    public $modelo = "Volvo FH electric";
    private $precio = 500000;
    private $electrico = "true";
    //Constructor
    public function __construct($modelo, $precio, $electrico)
    {
        $this->modelo = $modelo;
        // $this->precio = $precio;
        //  $this->electrico = $electrico;


        // 3 Ahora para asignar usamos los SETTER

        $this->setPrecio($precio);
        $this->setElectrico($electrico);
    }
    // 2 Añadimos SETTER y GETTER->que va debajo del constructor
    public function setPrecio($precio)
    { //aqui controlamos el valor por defecto del camion que no pueda ser menor de X
        if ($precio > 100000) {
            $this->precio = $precio;
        }
    }
    public function setElectrico($electrico)
    {
        $this->electrico = $electrico;
    }

    public function getPrecio()
    {
        return $this->precio;
    }


    public function isElectrico() //Los boolean por convenccion se pone "is" en los GET
    {
        return $this->electrico;
    }


    // 4 AQUI usamos los GETTER

    public function __toString() //para imprimir
    {
        $valorElectrico = "No";
        if ($this->isElectrico()) {
            $valorElectrico = "Si";
        }
        return "CAMION: Modelo $this->modelo <br>
                        Precio:" . $this->getPrecio() . " <br> " . //Ahora ahi hay que CONCATENAR con "" y.
            "Electrico: $valorElectrico ";
    }
}
if (isset($_REQUEST['enviar'])) {
    $texto = $_REQUEST['texto'];
    $num = $_REQUEST['num'];
    $opcion = $_REQUEST['opcion'];

    $camion = new Camion($texto, $num, $opcion);

    //cambiamos el valor del precio
    
    // 1 $camion->precio= -50000; //esto da un error, porque no se puede acceder a un atributo privado

    //Pero ahora con el setter y getter si podemos cambiar el precio
    $camion->setPrecio(500000);

}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 01 PHP POO Clases</title>
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
        <h1>Encapsulamiento</h1>
    </main><br><br><br><br>

    <section class="container pt-3 m-4">
        <h2>PHP con POO: Encapsular</h2><br>
    </section>


    <section>

        <p class="alert alert-info">
            <?php
            if (isset($_REQUEST['enviar'])) {
                // echo  $texto . "<br>";
                // echo  $num . "<br>";
                // echo  $opcion . "<br>";

                echo $camion;
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