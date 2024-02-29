// ejemplo-03-TS-Funciones.ts
function iniciar3() {
    alert(hola());
    // funcion anonima
    var saludar = function () {
        return "Hola mundo";
    };
    //funciones flechas
    var sumar = function (num1, num2) {
        return num1 + num2;
    };
    //la funcion no tiene nombre y cuando llamo a la funcion a lo que llamo es a la variable.
    alert(saludar());
    var valor1 = 8, valor2 = 4;
    alert(sumar(valor1, valor2));
}
//funcion tipada clasica
function hola() {
    return "saludo al mundo";
}
