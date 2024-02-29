// ejemplo-04-TS-Funciones.ts

class Tren {
    // Atributos privados
    private _linea: string = "";
    private _velocidad: number = 0;
    private _electrico: boolean = true;
  
    // Constructor
    constructor(linea: string, velocidad: number) {
      this._linea = linea;
      this._velocidad = velocidad;
    }
  
    // Setter y Getter
  
    /**
     * Getter linea
     * @return {string }
     */
    public get linea(): string {
      return this._linea;
    }
  
    /**
     * Getter velocidad
     * @return {number }
     */
    public get velocidad(): number {
      return this._velocidad;
    }
  
    /**
     * Getter electrico
     * @return {boolean }
     */
    public get electrico(): boolean {
      return this._electrico;
    }
  
    /**
     * Setter linea
     * @param {string } value
     */
    public set linea(value: string) {
      this._linea = value;
    }
  
    /**
     * Setter velocidad
     * @param {number } value
     */
    public set velocidad(value: number) {
      this._velocidad = value;
    }
  
    /**
     * Setter electrico
     * @param {boolean } value
     */
    public set electrico(value: boolean) {
      this._electrico = value;
    }
  
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
    acelerar(incremento: number): void {
      this._velocidad += incremento;
    }
  
    frenar(incremento: number): void {
      this._velocidad -= incremento;
    }
  
    // Imprimir datos del objeto (toString)
    toString(): string {
      // Usamos una función anonima
      const reemplazo = function (key: string, value: any) {
        if (key === '_electrico') {
          return value ? "Sí" : "No";
        }
        return value;
      };
  
      return JSON.stringify(this,reemplazo, 2)
  
      /*
      return JSON.stringify(
        {
          "Linea Ferroviaria": this._linea,
          "Velocidad del Tren": this._velocidad,
          "Es electrico": this._electrico,
        },null,2) */
  
  
    }
  }
  
  class Mercancias extends Tren {
    // Atributo
    private _carga: number = 0.0
  
    // Constructor
    constructor(linea: string, velocidad: number, carga: number) {
      super(linea, velocidad)
      this._carga = carga
    }
  
    // setter y getter
    get carga (): number {
      return this._carga
    }
  
    set carga(nuevaCarga: number) {
      if(nuevaCarga>0) {
        this._carga = nuevaCarga
      }
    }
  
    // Método String
    toString(): string {
        let json = super.toString()
        json["Carga Tren"] = this._carga
        return `Tren de Mercancias
        ${json}`
    }
  }
  
  function iniciar4() {
    let AVE: Tren = new Tren("SEV-MAD", 300);
    alert(AVE.toString());
    AVE.acelerar(50);
    alert(AVE.toString());
    let trenMercancias : Mercancias = new Mercancias ("SEV-MAD", 100, 625.50)
    alert(trenMercancias.toString())
  }