import 'dart:io';

void main() {
  print("Ingrese un número:");
  int numero = int.parse(stdin.readLineSync()!);

  print("Tabla de multiplicación del $numero:");
  for (int i = 0; i <= 10; i++) {
    print("$numero x $i = ${numero * i}");
  }
}