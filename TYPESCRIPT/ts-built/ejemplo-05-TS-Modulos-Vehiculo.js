"use strict";
// ejemplo-05-TS-Modulos.ts
Object.defineProperty(exports, "__esModule", { value: true });
exports.Vehiculo = void 0;
var Vehiculo = /** @class */ (function () {
    function Vehiculo(modelo) {
        this.modelo = "";
        this.modelo = modelo;
    }
    Vehiculo.prototype.toString = function () {
        return JSON.stringify(this, null, 2);
    };
    return Vehiculo;
}());
exports.Vehiculo = Vehiculo;
