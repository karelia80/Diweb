// ejemplo-05-TS-Modulos.ts

export class Vehiculo {
    modelo: string = ""
    constructor(modelo: string) {
        this.modelo = modelo
    }
    toString(): string {
        return JSON.stringify(this,null, 2)
    }
}