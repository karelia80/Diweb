<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
// ejemplo-00-Plantilla.php
if (isset($_REQUEST['enviar'])) {
    $num = $_REQUEST['num'];  
    
     /*
    $mensaje = "No es primo";
    $resultado = 0;
    $resultado = esPrimo($num);
    if ($resultado == 1) {
        $mensaje = "Es primo";
    }*/

    $patata = verPrimos($num);
   
    
}

function esPrimo($num)
{
    $resultado = 0;
    $divisores = 0;

    for ($i = $num; $i >= 1; $i--) {
        if ($num % $i == 0) {
            $divisores++;
        }
    }
    if ($divisores <= 2) {
        $resultado = 1;
    }


    return $resultado;
}
function verPrimos($num){
    $primos=[];
    $contador=0;

    for ($i=1; $i < 1000 ; $i++) { 
        $resultado=esPrimo($i);
        if ($resultado == 1) {
            $primos[]=$i;
            $contador++;
        }

        if($contador == $num){
            break;
        }
    }


    return $primos;
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

        label.form-label {
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
            PHP con POO: Primos</h1>
        <section>
            <p class="alert alert-info">
                <?php
                if (isset($_REQUEST['enviar'])) {
                    echo $num . "<br>";          // number
                    $mensaje= var_dump($patata);
                }
                ?>
            </p>
        </section>
        <section class="form-container w-50">
            <form action="#" method="post" class="form">
                <label for="num" class="form-label">Di un numero de 10 al 20</label>
                <input type="number" name="num" id="num" class="form-control" min="10" max="20"><br>
                <br>
                <input type="submit" value="Enviar" name="enviar" class="btn btn-outline-primary">
            </form>
        </section>
    </main>

</body>

</html>