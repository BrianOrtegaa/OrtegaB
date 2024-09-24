class Transporte{
    String? marca;
}

class Aereo extends Transporte{
    int? motores;
}
class Terrestre extends Transporte{
    int? llantas;
}
class Moto extends Terrestre{
    bool? casco;
}
class Carro extends Terrestre{
    bool? aire;
}
class Avion extends Aereo{
    static void manual() => print("Un avion");
}

void main(){
    Avion.manual();

    Avion avion = new Avion();
    avion.marca = "Avianca";
    avion.motores = 3;
    print("El avion es marca: ${avion.marca} y tiene ${avion.motores} Motores");

    Carro carro = new Carro();
    carro.marca = "Mazda";
    carro.llantas = 4;
    carro.aire = true;
    var aireacon = carro.aire == true ? "Si cuenta con aire acondicionado" : "No cuenta con aire acondicionado";
    print("El carro es marca: ${carro.marca}, tiene ${carro.llantas} Llantas, Aire: $aireacon");

    Moto moto = new Moto();
    moto.marca = "Suzuki";
    moto.llantas = 2;
    moto.casco = true;
    var casco = moto.casco == true ? "Si tiene casco" : "No tiene casco";
    print("La moto es marca: ${moto.marca}, tiene ${moto.llantas} Llantas, Casco: $casco");
}