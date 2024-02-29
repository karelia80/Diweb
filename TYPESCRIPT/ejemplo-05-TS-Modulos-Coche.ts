// ejemplo-05-TS-Modulos.ts
import { Vehiculo } from "./ejemplo-05-TS-Modulos-Vehiculo"

export class Coche extends Vehiculo {
    plazas: number = 0
    constructor(modelo:string, plazas: number){
        super(modelo)
        this.plazas = plazas
    }
    toString(): string {
        let json = super.toString()
        json["Plazas"] = this.plazas
        return json
    }
}