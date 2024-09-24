puts "Ingrese un número:"
numero = gets.chomp.to_i

puts "Tabla de multiplicación del #{numero}:"

for i in 1..10
    ope = numero*i
    puts "#{numero} x #{i} = #{ope}"
end    