import 'dart:io';

void main() {
 
  int cantotal = 0;
  double prom = 0;
  int estudiantesmas5 = 0;
  int cantidadmas5 = 0;
  double promMas5 = 0;
  int estudiantesmenos5 = 0;
  int cantidadmenos5 = 0;
  double promMenos5 = 0;
  
  print('Números de aprendices');
  int estudiantes = int.parse(stdin.readLineSync()!);

  for (int i = 1; i <= estudiantes; i++) {
   
    print('Ingrese el aporte hecho por el aprendiz #$i:');
    int aporte = int.parse(stdin.readLineSync()!);
    cantotal += aporte;
    prom = (cantotal / estudiantes);

   
    if (aporte >= 5000) {
      estudiantesmas5++;
      cantidadmas5 += aporte;
      promMas5 = cantidadmas5 / estudiantesmas5;

    } else {
      estudiantesmenos5++;
      cantidadmenos5 += aporte;
      promMenos5 = cantidadmenos5 / estudiantesmenos5;
    }
  }

  print('La cantidad total recaudada fue de $cantotal \n');
  print('El promedio general es: $prom \n');
  print(
      'La cantidad de aprendices que donaron 5000 o más, fueron $estudiantesmas5 y con estos estudiantes fue recaudado: $cantidadmas5 con un promedio de $promMas5 \n');
  print(
      'La cantidad de aprendices que donaron menos de 5000, fueron $estudiantesmenos5 y con estos estudiantes fue recaudado: $cantidadmenos5 con un promedio de $promMenos5');
}
