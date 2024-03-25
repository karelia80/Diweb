'''
Ejemplo de MATCH CASE
'''
dia = input("Dame dia semana: ")
match dia.lower():
    case "lunes" | "martes "| "miercoles" | "jueves" | "viernes":
        print ("Toca currar")
    case "sabado" | "domingo":
        print("Es finde")
    case _: #DEFAULT
        print('Dia no valido')