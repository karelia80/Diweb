'''
EJemplo de ARRAYS
'''
# funcion para crear y devolver una array unidimensional
def  crearArray(num):
    miArray=[]
    
    #range va desde el 0 hasta num-1. Usamos FOR
    for i in range(num):
        miArray.append(int(input(f"Dame numero{i+1} para array: ")))
        
    return miArray

#Llamada a la funcion.Usamos FOR-EACH
numero= int(input("Dame elementos array: "))
arrayDevuelto =crearArray(numero)

mensaje = "Los valores del array son: \n"
for valor in arrayDevuelto:
    mensaje += str(valor) + "\n"
    
print(mensaje)    
 
