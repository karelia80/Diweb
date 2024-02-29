"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
// ejemplo-05-TS-Modulos.ts
// TS Principal
// Importo las clases de los otros archivos
var ejemplo_05_TS_Modulos_Vehiculo_1 = require("./ejemplo-05-TS-Modulos-Vehiculo");
var ejemplo_05_TS_Modulos_Coche_1 = require("./ejemplo-05-TS-Modulos-Coche");
function iniciar5() {
    var tractor = new ejemplo_05_TS_Modulos_Vehiculo_1.Vehiculo("Tractor Amarillo");
    alert(tractor.toString());
    var miCoche = new ejemplo_05_TS_Modulos_Coche_1.Coche("Hyundai Koma", 5);
    alert(miCoche.toString());
}
