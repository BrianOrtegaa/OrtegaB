import 'dart:convert';
class Colaborador{

  String? nombreCompleto;
  double? aporte;
  int? tipoColaborador;

  Colaborador(Map map){
    this.nombreCompleto = map['nombreCompleto'];
    this.aporte = map['aporte'];
    this.tipoColaborador = map['tipoColaborador'];
  }
}  

void main(){
  String jsonString = '{"nombreCompleto": "Brian Ortega", "tipoColaborador": 1, "aporte": 25.5}';

  Map<String, dynamic> map = jsonDecode(jsonString);
  
  Colaborador col = Colaborador(map);
  print(col.nombreCompleto);
}