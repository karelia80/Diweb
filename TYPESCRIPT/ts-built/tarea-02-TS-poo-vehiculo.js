"use strict";
//tarea-02-TS-poo-vehiculo.ts
Object.defineProperty(exports, "__esModule", { value: true });
exports.Vehiculo = void 0;
//Clase padre o superclase
var Vehiculo = /** @class */ (function () {
    function Vehiculo(marca) {
        this.marca = "";
        this.marca = marca;
    }
    Vehiculo.prototype.imprimir = function () {
        return {
            marca: this.marca
        };
    };
    return Vehiculo;
}());
exports.Vehiculo = Vehiculo;
