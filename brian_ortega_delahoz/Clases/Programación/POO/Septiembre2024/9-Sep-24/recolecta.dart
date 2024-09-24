import "dart:io";
class Colaborador{

  String? _nombreCompleto;
  double _aporte = 0;
  int? _tipoColaborador;


  Colaborador(String nombre, double aporte, int tipo){
    this._nombreCompleto = nombre;
    this._aporte = aporte;
    this._tipoColaborador = tipo;
  }

  String getNombreCompleto() => _nombreCompleto!;

  double getAporte() => _aporte;

  int getTipo() => _tipoColaborador!;

  @override
  String toString(){
    return '{"Nombre": ${this._nombreCompleto}, "Aporte": ${this._aporte}, "Tipo de colaborador": ${this._tipoColaborador}"}';
  }

}

class Recolecta{
  List<Colaborador> _colaboradores = [];
  double? _montoRecaudar;
  double? _balance = 0;

  Recolecta(double mon, double bal){
    this._montoRecaudar = mon;
    this._balance = bal;
  }

  void addColaborador(Colaborador colaborador){
    _colaboradores.add(colaborador);
    _balance = _balance! + colaborador.getAporte();

  }

  bool finalizada() => _balance! >= _montoRecaudar!;

  List<Colaborador> generosos(){
    List<Colaborador> generosos = [];
    for(int i = 0; i < _colaboradores.length; i++ ){
      if(_colaboradores[i].getAporte() > 10000){
        generosos.add(_colaboradores[i]);
      }     
    }
    return generosos;
  }

  double recaudoGeneroso(){
    double total = 0;

    for (int i = 0; i < generosos().length; i++) {
    total += generosos()[i].getAporte();
    }
    return total;
  }

  double promedioGeneroso() => recaudoGeneroso() / generosos().length;

  double recaudoPorTipo(int tipo) {
    double totaltipo = 0;

    for (int i = 0; i < _colaboradores.length; i++) {
      if (_colaboradores[i].getTipo() == tipo) {
        totaltipo = totaltipo + _colaboradores[i].getAporte();
      }
    }
    return totaltipo;
  }

  //Metodo para caluclar el total recaudado
  double totalGeneral() {
    double totalrecaudado = 0;
    for(int i = 0; i < _colaboradores.length; i++){
       totalrecaudado = totalrecaudado + _colaboradores[i].getAporte();
      }
    return totalrecaudado;
  }

}

void main(){

  Recolecta r = Recolecta(50000,0);

  while (!r.finalizada()){
    print('Ingrese su nombre:');
    String nombre = stdin.readLineSync()!;
    print('Monto a aportar:');
    double aporte = double.parse(stdin.readLineSync()!); 
    print('Tipo:');
    int tipo = int.parse(stdin.readLineSync()!);

    Colaborador c = Colaborador(nombre,aporte,tipo);
    r.addColaborador(c);
  }

  print('Total Recolectado por los generosos: ${r.recaudoGeneroso()}');
  print('Total recolectador por los aprendices: ${r.recaudoPorTipo(1)}');
  print('Total recolectador por los instructores: ${r.recaudoPorTipo(2)}');
  print('Total recolectado: ${r.totalGeneral()}');


}