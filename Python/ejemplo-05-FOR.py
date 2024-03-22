'''
Ejemplo FOR
'''
#TABLA DE MULTIPLICAR

def tabla_multiplicar(num):
    #FOR del 1 hasta el 5
    for i in range (1,6):#por defecto es +1 pero no se pone por redundancia
        print(f"{num} x {1}: {num * i}")
        
def tablaInversa(num):
    for i in range(5,0, -1):
        print(f"{num} x {1}: {num * i}")
        
numero = int(input("Dame numero para tabla de multiplicar: "))
print("Tabla Multiplicar: " )
tabla_multiplicar(numero)

print("Tabla multiplicar inversa: ")
tablaInversa(numero)

     