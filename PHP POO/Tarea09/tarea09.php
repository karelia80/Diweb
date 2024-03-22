<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php

if (isset($_REQUEST['enviar'])) {
    $texto = $_REQUEST['texto'];        // String
    $num = $_REQUEST['num'];            // number
    $opcion = $_REQUEST['opcion'];      // boolean
}
//=========================================================

interface Interfaz
{
    public function __toString();
    public function crearArray();
}
//==========================================================
trait Rasgo
{
    public function masIva()
    {
    }
    public function verNeto()
    {
    }
}
//=========================================================

abstract class Persona
{

    public $nombre = "";
    private $old = 0;
    public $sexo = true;

    public function __construct($nombre,$old,$sexo){
        $this->nombre= $nombre;
        $this->setOld($old);
        $this->sexo= $sexo;
    }
    public function setOld($old)
    {
        $this->old = $old;
    }
    public function getOld()
    {
        return $this->old;
    }
}
//=========================================================
class Carrera{
    public $grado="";
    private $creditosTotales=0;

    public function __construct($grado,$creditosTotales)
    {
        $this->grado=$grado;
        $this->creditosTotales=$creditosTotales;
    }
    public function setCreditosTotales($creditosTotales){
        $this->creditosTotales=$creditosTotales;
    }
    public function getCreditosTotales(){
        return $this->creditosTotales;
    }
}
//=============================================================

class Asignatura{
    public $denominacion= "";
    private $creditos=6;
    public $troncal=true;
public function __construct($denominacion,$creditos){
    $this->denominacion=$denominacion;
    $this->setCreditos($creditos);
}

    


}







?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 09</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.bundle.min.js"></script>
</head>

<body>
    <main class="w-70 p-3 m-3 border border-secondary rounded-4">
        <h1 class="bg-primary text-white text-center">
            Ejercicio 09</h1>
        <section>
            <p class="alert alert-info">
                <?php
                if (isset($_REQUEST['enviar'])) {
                    echo $texto . "<br>";        // String
                    echo $num . "<br>";          // number
                    echo $opcion . "<br>";        // boolean
                }
                ?>
            </p>
        </section>
        <section class="w-50">
            <form action="#" method="post" class="form">
                <label for="texto" class="form-label">Nombre</label>
                <input type="text" name="texto" id="texto" class="form-control"><br>
                <label for="num" class="form-label">Edad</label>
                <input type="number" name="num" id="num" class="form-control"><br>
                <hr><br>
                <p>Sexo</p>
                <input type="radio" name="opcion" id="opcion1" class="form-check-input" checked value="1">
                <label for="opcion1" class="form-check-label">Mujer</label><br>
                <input type="radio" name="opcion" id="opcion2" class="form-check-input" value="0">
                <label for="opcion2" class="form-check-label">Hombre</label><br><br>
                <input type="submit" value="Enviar" name="enviar" class="btn btn-outline-primary">
            </form>
        </section>
    </main>

</body>

</html>