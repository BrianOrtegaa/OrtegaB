void main() {
  Perro perro = new Perro();
  perro.patas = 4;
  perro.hacerSonido();

  Gato gato = new Gato();
  gato.patas = 4;
  gato.hacerSonido();
}

abstract class Animal {
  int? patas;

  void hacerSonido();
}

class Perro implements Animal {
  int? patas;
  @override
  void hacerSonido() {
    print('Guau!');
  }
}

class Gato implements Animal {
  int? patas;
  @override
  void hacerSonido() {
    print('Miau!');
  }
}
