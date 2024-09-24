class Persona
    attr_accessor :nombre, :edad, :estatura
  end
  
  class Videojuego
    attr_accessor :nombre, :genero, :tipo
  end
  
  class Celular
    attr_accessor :marca, :modelo, :color
  end
  
  persona = Persona.new
  persona.nombre = 'Brian'
  persona.edad = 20
  persona.estatura = 1.69
  
  videojuego = Videojuego.new
  videojuego.nombre = 'Fortnite'
  videojuego.genero = 'Battle Royal'
  videojuego.tipo = 'Accion'
  
  celular = Celular.new
  celular.marca = 'Xiaomi'
  celular.modelo = 'Redmi'
  celular.color = 'Blanco'
  