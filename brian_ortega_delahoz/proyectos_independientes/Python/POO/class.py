class Persona:
    def __init__(self, nombre=None, edad=None, estatura=None):
        self.nombre = nombre
        self.edad = edad
        self.estatura = estatura

class Videojuego:
    def __init__(self, nombre=None, genero=None, tipo=None):
        self.nombre = nombre
        self.genero = genero
        self.tipo = tipo

class Celular:
    def __init__(self, marca=None, modelo=None, color=None):
        self.marca = marca
        self.modelo = modelo
        self.color = color

def main():
    brian = Persona("Brian", 20, 1.69)
    fortnite = Videojuego("Fortnite", "Battle Royal", "Accion")
    xiaomi = Celular("Xiaomi", "Redmi", "Blanco")

    print("Persona:")
    print(f"Nombre: {brian.nombre}")
    print(f"Edad: {brian.edad}")
    print(f"Estatura: {brian.estatura}")

    print("\nVideojuego:")
    print(f"Nombre: {fortnite.nombre}")
    print(f"Género: {fortnite.genero}")
    print(f"Tipo: {fortnite.tipo}")

    print("\nCelular:")
    print(f"Marca: {xiaomi.marca}")
    print(f"Modelo: {xiaomi.modelo}")
    print(f"Color: {xiaomi.color}")

if __name__ == "__main__":
    main()