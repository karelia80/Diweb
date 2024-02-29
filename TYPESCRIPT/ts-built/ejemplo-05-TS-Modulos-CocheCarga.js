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
    function Coche() {
        var _this = _super !== null && _super.apply(this, arguments) || this;
        _this.peso = 0.0;
        return _this;
    }
    return Coche;
}(ejemplo_05_TS_Modulos_Vehiculo_1.Vehiculo));
exports.Coche = Coche;
