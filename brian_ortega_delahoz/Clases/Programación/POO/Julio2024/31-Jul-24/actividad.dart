class Celular{
  String? marca;
  String? modelo;
  String? color;
  int? serie;

  Celular(String marca, int serie){
    this.marca = marca;
    this.serie = serie;
  }

}

void main(){
  Celular cel = new Celular("samsung", 2000);
  cel.modelo = "A51";
  cel.color = "Blanco";

  print("El Celular es marca: ${cel.marca}, La serie es: ${cel.serie}, El modelo es: ${cel.modelo} y el color es: ${cel.color}");



}  