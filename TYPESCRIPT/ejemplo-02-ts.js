"use strict";
// ejemplo-02-TS-Array.ts
function iniciar2() {
    alert(JSON.stringify(frutas(), null, 2));
}
// Función sin entrada y con salida
function frutas() {
    let num = parseInt(prompt("Nº Elementos")); // 4
    // frutas = ["peras", "uvas", "fresas", "piñas"]
    let frutas = new Array(num);
    for (let index = 0; index < frutas.length; index++) {
        frutas[index] = prompt("Dame fruta:");
    }
    return frutas;
}
