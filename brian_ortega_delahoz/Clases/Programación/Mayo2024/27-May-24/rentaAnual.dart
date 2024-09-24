import 'dart:io';

void main() {
  print("Ingrese su renta anual");
  int renta_anual = int.parse(stdin.readLineSync()!);

  if (renta_anual <= 10) {
    double op = (renta_anual * 20) / 100;
    double resul = renta_anual - op;
    print('Su valor a pagar con el descuento aplicado es de: $resul');
  } else {
    if (renta_anual <= 100) {
      double op = (renta_anual * 10) / 100;
      double resul = renta_anual - op;
      print('Su valor a pagar con el descuento aplicado es de: $resul');
    } else {
      if (renta_anual <= 1000) {
        double op = (renta_anual * 5) / 100;
        double resul = renta_anual - op;
        print('Su valor a pagar con el descuento aplicado es de: $resul');
      } else {
        if (renta_anual > 1000) {
          double op = (renta_anual * 1) / 100;
          double resul = renta_anual - op;
          print('Su valor a pagar con el descuento aplicado es de: $resul');
        }
      }
    }
  }
}
