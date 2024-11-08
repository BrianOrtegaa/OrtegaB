void main() {
  Logistica logistica = LogisticaMar();
  Transporte transporte = logistica.crearTransporte();
  transporte.entregar();
}

abstract class Logistica {
  Transporte crearTransporte();
}

class LogisticaTerrestre implements Logistica {
  @override
  Transporte crearTransporte() {
    return Camion();
  }
}

class LogisticaMar implements Logistica {
  @override
  Transporte crearTransporte() {
    return Barco();
  }
}

abstract class Transporte {
  void entregar();
}

class Camion implements Transporte {
  @override
  void entregar() {
    print('Se entrega en Camión');
  }
}

class Barco implements Transporte {
  @override
  void entregar() {
    print('Se entrega en Barco');
  }
}
