'''
Ejemplo MATRICES
'''
import random
def pintaMatriz(filas, columnas):  #2 filas y 3 columnas
    #IMPORTANTE declaramos la matriz a 0
    matriz=[]
    for i in range(filas):
        fila=[]
        for j in range(columnas):
            aleatorio = random.randint(1,10)
            fila.append(aleatorio)
        matriz.append(fila)
            
    #pintamos la matriz
    for fila in matriz:
        filaformateada= "\t" .join(str(valor) for valor in fila)#\t para poner un espacio
        print(filaformateada)
    
#llamo a la funcion  
#pintaMatriz(2,3)

fila =int(input("Dame filas de la matriz: "))
col =int(input("Dame fila Columnas; "))
pintaMatriz(fila, col)


         