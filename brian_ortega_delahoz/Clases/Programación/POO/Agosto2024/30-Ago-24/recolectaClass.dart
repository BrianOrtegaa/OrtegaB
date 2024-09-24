import 'dart:io';

class Donacion {
  List<double> donaciones = [];
  double totalRecaudado = 0;
  
  void agregarDonacion() {
    print("¿Cuánto va a aportar esta persona?");
    double donacion = double.parse(stdin.readLineSync()!);
    donaciones.add(donacion);
    totalRecaudado += donacion;
    print("Total recaudado hasta ahora: $totalRecaudado");
  }

  void mostrarDonaciones() {
    print("Donaciones:");
    for (int i = 0; i < donaciones.length; i++) {
      print("Persona ${i + 1}: ${donaciones[i]}");
    }
    print(donaciones);
    print("Total recaudado: $totalRecaudado");
  }

  void recaudarDonaciones() {
    while (totalRecaudado < 50000) {
      agregarDonacion();
    }
    print("¡Meta alcanzada!");
    mostrarDonaciones();
  }
}

void main() {
  Donacion donacion = Donacion();
  donacion.recaudarDonaciones();
}