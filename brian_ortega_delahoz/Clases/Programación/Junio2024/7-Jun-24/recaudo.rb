
contadormas5000 = 0
acummas5000 = 0

contadormenos5000 = 0
acummenos5000 = 0

puts "Ingresa el número de Aprendices"
num = gets.chomp.to_i

for i in 1..num
    puts "Ingrese el aporte hecho por el aprendiz #$i:"
    aporte = gets.chomp.to_f
    
    if aporte >= 5000
        contadormas5000 = contadormas5000 + 1
        acummas5000 = acummas5000 + aporte
    else
        contadormenos5000 = contadormenos5000 + 1
        acummenos5000 = acummenos5000 + aporte
    end
end

total = acummas5000 +acummenos5000
prom = total / num
prom2 = acummas5000 / contadormas5000
prom3 = acummenos5000 / contadormenos5000


puts "-La cantidad total recogida es: #{total}."
puts "-El promedio del total recogido es: #{prom}"
puts "-Personas que aportaron 5.000 o más: #{contadormas5000}."
puts "-Cantidad total de los que aportaron 5.000 o más: #{acummas5000}."
puts "-Promedio de aporte de los que dieron 5.000 o más: #{prom2}."
puts "-Personas que aportaron menos de 5.000: #{contadormenos5000}."
puts "-Cantidad total de los que aportaron menos de 5.000: #{acummenos5000}."
puts "-Promedio de aporte de los que dieron menos de 5.000: #{prom3}."
