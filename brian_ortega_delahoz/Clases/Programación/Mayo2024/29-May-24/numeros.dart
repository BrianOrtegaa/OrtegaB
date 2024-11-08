import 'dart:io';

void main() {
  print('Ingrese un número entero');
  int num = int.parse(stdin.readLineSync()!);
  if (num < 0) {
    print('Tu número es "negativo"');
  } else {
    if (num > 0) {
      print('Tu número es "positivo"');
    } else {
      print('Tu número es "0"');
    }
  }

  Aprendiz aprendiz = Aprendiz(nombre: "A", apellido: "b");
}

class Aprendiz {
  String? nombre;
  String? apellido;

  Aprendiz({this.nombre, this.apellido});

  String getNombre() {
    return "El nombre es: ${this.nombre}";
  }

  void setNombre(String n) {
    this.nombre = n;
  }

  @override
  String toString() {
    return "El nombre es: ${this.nombre} y el apellido es: ${this.apellido}";
  }
}
