"use strict";
var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
Object.defineProperty(exports, "__esModule", { value: true });
exports.Coche = void 0;
// ejemplo-05-TS-Modulos.ts
var ejemplo_05_TS_Modulos_Vehiculo_1 = require("./ejemplo-05-TS-Modulos-Vehiculo");
var Coche = /** @class */ (function (_super) {
    __extends(Coche, _super);
    function Coche(modelo, plazas) {
        var _this = _super.call(this, modelo) || this;
        _this.plazas = 0;
        _this.plazas = plazas;
        return _this;
    }
    Coche.prototype.toString = function () {
        var json = _super.prototype.toString.call(this);
        json["Plazas"] = this.plazas;
        return json;
    };
    return Coche;
}(ejemplo_05_TS_Modulos_Vehiculo_1.Vehiculo));
exports.Coche = Coche;
