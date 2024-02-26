//ejemplo-01-ts-hola mundo.ts
//No olvidar hacer tsc ejemplo-01-ts-hola mundo.ts
function iniciar() {
usarDOM("hola mundo")
}
function usarDOM(mensaje: string) {
    const parrafo = document.querySelector(".alert")
    if(parrafo){
        parrafo.innerHTML = mensaje
    }
    
}