//tarea-01-holamundo.ts
function principal(): void {
    alert(holas("Hola"))
}
function holas(mensaje: string): string {
    let sufijo : string = " mundo"
    return mensaje + sufijo

}