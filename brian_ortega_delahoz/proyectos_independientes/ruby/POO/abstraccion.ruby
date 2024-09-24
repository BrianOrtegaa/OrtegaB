class Animal
  attr_accessor :patas

  def hacer_sonido
    raise NotImplementedError
  end
end

class Perro < Animal
  def hacer_sonido
    puts 'Guau!'
  end
end

class Gato < Animal
  def hacer_sonido
    puts 'Miau!'
  end
end

  perro = Perro.new
  perro.patas = 4
  perro.hacer_sonido

  gato = Gato.new
  gato.patas = 4
  gato.hacer_sonido

