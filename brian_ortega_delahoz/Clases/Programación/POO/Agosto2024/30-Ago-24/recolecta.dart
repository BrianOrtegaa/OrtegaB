import 'dart:io';
void main() {
  List<double> donaciones = [];
  double totalRecaudado = 0;
  
  while (totalRecaudado < 50000) {
    print("¿Cuánto va a aportar esta persona?");
    double donacion = double.parse(stdin.readLineSync()!);
    donaciones.add(donacion);
    totalRecaudado += donacion;
    print("Total recaudado hasta ahora: $totalRecaudado");
  }

  print("Meta alcanzada!");
  print("Donaciones:");
  for (int i = 0; i < donaciones.length; i++) {
    print("Persona ${i + 1}: ${donaciones[i]}");
  }
  print(donaciones);
  print("Total recaudado: $totalRecaudado");
  
}