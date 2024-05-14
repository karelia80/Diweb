<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script>
        //Variables globales y las inicializaomos las variables
        let min = 0;
        let max = 0;
        let jugador_1 = 0;
        let jugador_2 = 0;


        //Funciones
        function pedirDatos() {
            min = parseInt(prompt("Dame un min:"));
            max = parseInt(prompt("Dame un max:"));
        }

        function aleatorios() {
            jugador_1 = Math.floor(Math.random() * (max - min + 1)) + min;
            jugador_2 = Math.floor(Math.random() * (max - min + 1)) + min;
        }
        //Funcion Sin entrada y con salida
        function ganador() {
            let ganador = "";
            if (jugador_1 > jugador_2) {
                ganador = "Jugador 1";
            } else if (jugador_1 < jugador_2) {
                ganador = "Jugador 2";
            } else {
                ganador = "Empate";
            }
            return ganador;
        }
        //funcion con entrada y con salida
        function mostrarResultado(mensaje) {
            let ganadorM = ganador();

            mensaje += "\n Ganador: " + ganadorM;
            mensaje += "\n Valor Jugador 1: " + jugador_1;
            mensaje += "\n Valor Jugador 2: " + jugador_2;

            return mensaje;
        }
    </script>

</head>

<body class="d-flex flex-column justify-content-center align-items-center min-vh-100">
    <script>
        //script principal
        let mensaje = "!Batalla Pokemon!";

        pedirDatos();
        aleatorios();
        alert(mostrarResultado(mensaje));

    </script>

    <img src="Imagenes/Batalla-3V3-en-Pokémon-Masters-EX.jpg" alt="batalla pokemon">
</body>

</html>