// ejemplo-04-TS-Funciones.ts
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
var Tren = /** @class */ (function () {
    // Constructor
    function Tren(linea, velocidad) {
        // Atributos privados
        this._linea = "";
        this._velocidad = 0;
        this._electrico = true;
        this._linea = linea;
        this._velocidad = velocidad;
    }
    Object.defineProperty(Tren.prototype, "linea", {
        // Setter y Getter
        /**
         * Getter linea
         * @return {string }
         */
        get: function () {
            return this._linea;
        },
        /**
         * Setter linea
         * @param {string } value
         */
        set: function (value) {
            this._linea = value;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(Tren.prototype, "velocidad", {
        /**
         * Getter velocidad
         * @return {number }
         */
        get: function () {
            return this._velocidad;
        },
        /**
         * Setter velocidad
         * @param {number } value
         */
        set: function (value) {
            this._velocidad = value;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(Tren.prototype, "electrico", {
        /**
         * Getter electrico
         * @return {boolean }
         */
        get: function () {
            return this._electrico;
        },
        /**
         * Setter electrico
         * @param {boolean } value
         */
        set: function (value) {
            this._electrico = value;
        },
        enumerable: false,
        configurable: true
    });
    /*
    set linea(nuevaLinea: string) {
      this._linea = nuevaLinea;
    }
  
    set velocidad(nuevaVelocidad: number) {
      if (nuevaVelocidad > 0) {
        this._velocidad = nuevaVelocidad;
      }
    }
  
    set electrico(valorElectrico: boolean) {
      if (typeof valorElectrico == "boolean") {
        this._electrico = valorElectrico;
      }
    }
  
    get linea(): string {
      return this._linea;
    }
  
    get velocidad(): number {
      return this._velocidad;
    }
  
    get electrico(): boolean {
      return this._electrico;
    }
    */
    // Otros métodos
    Tren.prototype.acelerar = function (incremento) {
        this._velocidad += incremento;
    };
    Tren.prototype.frenar = function (incremento) {
        this._velocidad -= incremento;
    };
    // Imprimir datos del objeto (toString)
    Tren.prototype.toString = function () {
        // Usamos una función anonima
        var reemplazo = function (key, value) {
            if (key === '_electrico') {
                return value ? "Sí" : "No";
            }
            return value;
        };
        return JSON.stringify(this, reemplazo, 2);
        /*
        return JSON.stringify(
          {
            "Linea Ferroviaria": this._linea,
            "Velocidad del Tren": this._velocidad,
            "Es electrico": this._electrico,
          },null,2) */
    };
    return Tren;
}());
var Mercancias = /** @class */ (function (_super) {
    __extends(Mercancias, _super);
    // Constructor
    function Mercancias(linea, velocidad, carga) {
        var _this = _super.call(this, linea, velocidad) || this;
        // Atributo
        _this._carga = 0.0;
        _this._carga = carga;
        return _this;
    }
    Object.defineProperty(Mercancias.prototype, "carga", {
        // setter y getter
        get: function () {
            return this._carga;
        },
        set: function (nuevaCarga) {
            if (nuevaCarga > 0) {
                this._carga = nuevaCarga;
            }
        },
        enumerable: false,
        configurable: true
    });
    // Método String
    Mercancias.prototype.toString = function () {
        var json = _super.prototype.toString.call(this);
        json["Carga Tren"] = this._carga;
        return "Tren de Mercancias\n        ".concat(json);
    };
    return Mercancias;
}(Tren));
function iniciar4() {
    var AVE = new Tren("SEV-MAD", 300);
    alert(AVE.toString());
    AVE.acelerar(50);
    alert(AVE.toString());
    var trenMercancias = new Mercancias("SEV-MAD", 100, 625.50);
    alert(trenMercancias.toString());
}
