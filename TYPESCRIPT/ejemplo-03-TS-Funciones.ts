// ejemplo-03-TS-Funciones.ts
function iniciar3() {
    alert(hola())
    // funcion anonima
    let saludar = function (): string{
        return "Hola mundo"
    }
//funciones flechas
let sumar = function (num1: number, num2: number): number {
    return num1 + num2
}


//la funcion no tiene nombre y cuando llamo a la funcion a lo que llamo es a la variable.
alert(saludar())

let valor1: number= 8, valor2:number =4
alert(sumar(valor1,valor2))

}
//funcion tipada clasica
function hola(): string {
    return "saludo al mundo"
}
