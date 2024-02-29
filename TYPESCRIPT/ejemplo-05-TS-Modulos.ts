// ejemplo-05-TS-Modulos.ts
// TS Principal
// Importo las clases de los otros archivos
import { Vehiculo } from "./ejemplo-05-TS-Modulos-Vehiculo"
import { Coche } from "./ejemplo-05-TS-Modulos-Coche"

function iniciar5() {
    let tractor = new Vehiculo("Tractor Amarillo")
    alert(tractor.toString())
    let miCoche = new Coche("Hyundai Koma", 5)
    alert(miCoche.toString())
}