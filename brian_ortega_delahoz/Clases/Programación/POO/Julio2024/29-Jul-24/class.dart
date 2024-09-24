class Persona {
  String? mombre;
  int? edad;
  double? estatura;
}

class Videojuego {
  String? mombre;
  String? genero;
  String? tipo;
}

class Celular {
  String? marca;
  String? modelo;
  String? color;
}

void main() {
  Persona brian = Persona();
  brian.mombre = "Brian";
  brian.edad = 20;
  brian.estatura = 1.69;

  Videojuego fortnite = Videojuego();
  fortnite.mombre = "Fortnite";
  fortnite.genero = "Battle Royal";
  fortnite.tipo = "Accion";

  Celular xiaomi = Celular();
  xiaomi.marca = "Xiaomi";
  xiaomi.modelo = "Redmi";
  xiaomi.color = "Blanco";
}
