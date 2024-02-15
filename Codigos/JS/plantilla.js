//plantilla.js

window.alert("hola Mundo");
let numero = 0; //con let hacemos una variable
numero = window.prompt("Dame un numero: ");
window.alert("Tu numero es: " + numero);

window.alert("hola Mundo");
numero = parseInt(numero);
numero = window.prompt("Dame un numero: ");
window.alert("Tu numero es: " + (numero + 2));

function patata() {
    let disney = window.confirm("Sigue la tienda Disney en Los Arcos?");
    let mensaje = "";
    if (disney) {
        mensaje = "Blanca tenia razon";
    } else {
        mensaje = "Blanca se fue a otra dimension";
    }
    //usamos el DOM
document.getElementById('a').value = mensaje;

}

//conversion - parseInt, parseFloat, Boolean -> convierte en cadena

//
var dias = ["Lunes", "Martes", "Miercoles"];
function iniciar() {
    alert(dias[2]);
    
}


var dias = ["Lunes", "Martes", "Miercoles"];
function iniciar() {
    dias.reverse();// para revertir el arrays
    alert(dias[2]);
    
}