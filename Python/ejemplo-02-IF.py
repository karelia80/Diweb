"""
os acordais del ejercicio de la edad en PHP y JS?
"""
#IF
#int para convertir a enteros
edad = int(input("Dame edad: "))
if edad < 18:
    print("No puedes trabajar")
elif edad >= 18 and edad <65:
    print("Tienes que currar")
else:
    print("Puedes Jubilarte")