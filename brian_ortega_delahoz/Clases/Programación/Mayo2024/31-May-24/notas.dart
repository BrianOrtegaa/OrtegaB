import 'dart:io';

void main(){
 print("Ingresar la cantidad de estudiantes:");
  int a = int.parse(stdin.readLineSync()!);
  for (int i = 1; i <= a; i++) {
    print("Ingresa tu primera nota:");
    double n1 = double.parse(stdin.readLineSync()!);

    print("Ingresa tu segunda nota:");
    double n2 = double.parse(stdin.readLineSync()!);

    print("Ingresa tu tercera nota:");
    double n3 = double.parse(stdin.readLineSync()!);

    double promedio = (n1+n2+n3)/3;

    if(promedio>=6){
      print("Felicidades, Aprobaste!!");

    }else{
      print("Reprobaste :(");
    }


}
 }
