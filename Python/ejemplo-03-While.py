'''
Ejemplo-03-WHILE
Dame dos numero entre 0 y 20 y que la diferencia entre ambos sea almenos de 10.
'''
num1= 0   #declaro e inicio la variable
num2 =0

num1= int(input("Dame numero del 0-20: "))
while num1 < 0 or num1 > 20: 
      num1= int(input("Dame numero del 0-20: "))

num2= int(input(f"Dame numero del 0-20 y 10+ que {num1}: "))
while num2 < 0 or num2 > 20 or num2 - num1<10:
      num2= int(input(f"Dame numero del 0-20 y 10+ que {num1}: "))

print(f"Los valores son: {num1} y {num2}")
