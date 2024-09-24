class Transporte
  attr_accessor :marca
end

class Aereo < Transporte
  attr_accessor :motores
end

class Terrestre < Transporte
  attr_accessor :llantas
end

class Moto < Terrestre
  attr_accessor :casco
  def dis_casco
    if self.casco
      "Si tiene casco"
    else
      "No tiene casco"
    end
  end
end

class Carro < Terrestre
  attr_accessor :aire
  def aire_acondicionado
    if self.aire
      "Si cuenta con aire acondicionado"
    else
      "No cuenta con aire acondicionado"
    end
  end
end

class Avion < Aereo
  def self.manual
    puts "Un avion"
  end
end

Avion.manual

avion = Avion.new
avion.marca = "Avianca"
avion.motores = 3
puts "El avion es marca: #{avion.marca} y tiene #{avion.motores} Motores"

carro = Carro.new
carro.marca = "Mazda"
carro.llantas = 4
carro.aire = true
puts "El carro es marca: #{carro.marca}, tiene #{carro.llantas} Llantas, Aire: #{carro.aire_acondicionado}"

moto = Moto.new
moto.marca = "Suzuki"
moto.llantas = 2
moto.casco = false
puts "La moto es marca: #{moto.marca}, tiene #{moto.llantas} Llantas, Casco: #{moto.dis_casco}"