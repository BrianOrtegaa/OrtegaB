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
}
