'''
Ejemplo de Funciones
'''
#Declarar la funcion que pida dos numeros entre 0-20 y distancia entre ellos de 10
def examen (cadena):
        num1= 0   #declaro e inicio la variable
        num2 =0

        num1= int(input("Dame numero del 0-20: "))
        while num1 < 0 or num1 > 20: 
            num1= int(input("Dame numero del 0-20: "))

        num2= int(input(f"Dame numero del 0-20 y 10+ que {num1}: "))
        while num2 < 0 or num2 > 20 or num2 - num1<10:
            num2= int(input(f"Dame numero del 0-20 y 10+ que {num1}: "))

        print(f"Los valores son: {num1} y {num2}")

#Hacemos el return 
        return cadena, num1, num2
    
    
#Hacemos llamada a la funcion
micadena, minum1, minum2 = examen("Numeros Obtenidos")
print (f"{micadena}: {minum1} , {minum2}")

