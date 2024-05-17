<?php
require("errores.php");
function gravedad($M, $d) {
    
    $G = 6.67e-11; 
    
   
    $M_kg = $M * 1e24;
    $d_m = $d * 1e3;
    
    
    $gravedad = ($G * $M_kg) / ($d_m * $d_m); 
    
    return $gravedad; 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $M = isset($_POST['M']) ? intval($_POST['M']) : 0;
    $d = isset($_POST['d']) ? intval($_POST['d']) : 0;
    if (isset($resultado_gravedad)) 
    $resultado_gravedad = gravedad($M, $d);
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body class="d-flex flex-column justify-content-center align-items-center min-vh-100">
    <main class="text-center w-50">
     <img src="ima/newton.jpeg" alt="mates">


     <form method="post" action="<?php 
     echo htmlspecialchars($_SERVER["PHP_SELF"]); 
     ?>">
            <div class="form-group">
                <label for="M">Masa (en unidades):</label>
                <input type="number" class="form-control" id="M" name="M" required>
            </div>
            <div class="form-group">
                <label for="d">Distancia (radio en km):</label>
                <input type="number" class="form-control" id="d" name="d" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Gravedad</button>
        </form>
        <?php if (isset($resultado_gravedad)) : ?>
            <div class="mt-4">
                <h3>Resultado:</h3>
                <p>La gravedad calculada es aproximadamente: <?php echo number_format($resultado_gravedad, 2); ?> m/s²</p>
            </div>
            <?php endif; ?>

    </main>

     <a href="menu.php" class="btn btn-primary d-block mt-3">Volver al menú</a>

    </main>
</body>

</html>