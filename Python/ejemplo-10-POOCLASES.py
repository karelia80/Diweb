'''
POO Clases
'''
class Camion:
    #constructor donde declaramos atributos
    def __init__(self)-> None:
        self.modelo= input("Dame modelo camion: ")
        self.potencia =int(input("Dame potencia"))
        electrico=input("Es electrico? (si|no)")
        self.electrico= True if electrico == "si" else False

    def __str__(self)->str:
        return (f"Datos camion \n"
                f"modelo: {self.modelo} HP\n "
                f"Potencia: {self.potencia} CV\n"
                f"Electrico: {'si' if self.electrico else 'No'}")
        
micamion = Camion()
print(micamion)