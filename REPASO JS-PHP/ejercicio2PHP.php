<?php
//Primero hacemos la interfaz

interface Luchador
{
    public function atacar(): void;
    public function defender(): void;
}
//seguimos los traits
trait Combate
{
    public static function ataqueRapido(): void
    {
        echo "El Pokemon hace ataque rápido!!";
    }
    public static function esquivar(): void
    {
        echo "El Pokemon esquiva el ataque!!";
    }
}
//clase padre
abstract class Servivo
{
    private string $nombre = "";
    public int $nivel = 0;

    public function __construct(string $nombre, int $nivel)
    {
        $this->setNombre($nombre);
        $this->nivel = $nivel;
    }
    //ahora hacemos setter y getter
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }
    public function getNombre(): string
    {
        return $this->nombre;
    }

    // ahora hacemos las funciones
    public function comer(): void
    {
        echo "Recupera 10PV";
    }
    public function dormir(): void
    {
        echo "Recupera todos los PV";
    }
    //Metodo abstracto, no lleva desarrollo porque es abstracto.

    abstract public function __toString();
   
}
//Ahora toca hacer la composicion
class Movimiento
{
    public string $nombre = "";
    public int $poder = 0;
    public int $precision = 0;

    public function __construct(string $nombre, int $poder, int $precision)
    {
        $this->nombre = $nombre;
        $this->poder = $poder;
        $this->precision = $precision;
    }

    public function ejecutar(string $nombrePokemon): void
    {
        echo "Ejecuto movimiento sobre $nombrePokemon";
    }
    //Ahora para acabar las clases hijas.

}
class Pokemon extends Servivo implements Luchador
{
    use Combate;
    public string $tipo = "";
    public Movimiento $movimiento;

    public function __construct(string $nombre, int $nivel, string $tipo)
    {
        parent::__construct($nombre, $nivel); // aqui no se tipa porque ya esta tipado arriba
        $this->tipo = $tipo;
        $this->movimiento = new Movimiento("Placaje", 60, 95);
    }
    //ahora los metodos de la interfaz(si no sale erro)
    public function atacar(): void
    {
        echo "Ataco";
    }
    public function defender(): void
    {
        echo "Defiendo";
    }
    //Metodo propio

    public function evolucionar(): void
    {

        echo $this->getNombre() . "evolucionado!";
    }
    public function __toString(){
        $mensaje = "Dato Pokemon: <br>";
        $mensaje .= "Nombre: " . $this->getNombre() . "<br>";
        $mensaje .= "Nivel: " . $this->nivel . "<br>";
        $mensaje .= "Tipo: " . $this->tipo . "<br>"; 
        $mensaje .= "Movimiento: <br>";
        $mensaje .= "Nombre: " . $this->movimiento->nombre . "<br>";
        $mensaje .= "Poder: " . $this->movimiento->poder . "<br>";
        $mensaje .= "Precisión: " . $this->movimiento->precision . "<br>";
        return $mensaje;
    }
}

class Entrenador extends Servivo implements Luchador
{
   

    public int $insignias = 0;


    public function __construct(string $nombre, int $nivel, int $insignias)
    {
        parent::__construct($nombre, $nivel); // aqui no se tipa porque ya esta tipado arriba
        $this->insignias = $insignias;
    }
    public function atacar(): void
    {
        echo "¡Ataco!";
    }
    public function defender(): void
    {
        echo "¡Defiendo!";
    }
    //Metodo propio

    public function entrenar(): void
    {
        echo $this->getNombre() . "entrenado!";
    }
    public function __toString(){
        $mensaje = "Dato Éntrenador: <br>";
        $mensaje .= "Nombre: " . $this->getNombre() . "<br>";
        $mensaje .= "Nivel: " . $this->nivel . "<br>";
        $mensaje .= "Insignias: " . $this->insignias . "<br>";
        return $mensaje;
    }
   
}
 //Ahora hay que hacer el SCRIPT PRINCIPAL esta abajo
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body class="d-flex flex-column justify-content-center align-items-center min-vh-100">

    <?php
    //SCRIPT PRINCIPAL
    if (isset($_REQUEST['enviar'])) {
        $nombre = $_REQUEST['texto'];
        //usamos uno de los metodos Statics
        Pokemon::ataqueRapido();

        $pokemon = new Pokemon($nombre, 10, "Electrico");
        echo $pokemon; //Uso el tostring.

        $entrenador = new Entrenador("Ash Ketchum", 10, 10);
        echo $entrenador;
    }
    ?>

    <form action="#" method="post" class="form w-50 mt-3 row g-1">
        <!-- <label for="texto" class="form-label">Texto</label> -->
        <input type="text" name="texto" id="texto" class="form-control w-50 mb-3" placeholder="Escribe el nombre del Pokemon
        ">
        <input type="submit" value="Enviar" name="enviar" class="btn btn-link w-50 bg-transparent mb-3"><br>
    </form>
    <main class="text-center w-50">
        <nav class="mx-auto bg-primary rounded p-3">
            <h2 class="alert alert-primary mt-3 fs-5">¿Qué Pokemon te gusta?</h2>
        </nav>
        <p class="alert alert-primary mt-3">
            <?php
            if (isset($_REQUEST['enviar'])) {
                echo $nombre;
            }
            ?>
        </p>
        <a href="#" class="btn btn-primary d-block mt-3">Enlace 1</a>
        <a href="#" class="btn btn-primary d-block mt-2">Enlace 2</a>

    </main>
</body>

</html>