//tarea-02-TS-poo-vehiculo.ts

//Clase padre o superclase
 export class Vehiculo {
    marca: string = ""

    constructor (marca: string){
        this.marca = marca
    }
    imprimir (){
        return {
            marca : this.marca
        }
    }
}