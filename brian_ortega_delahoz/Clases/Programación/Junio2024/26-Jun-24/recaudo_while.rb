
numEst = 0
cantotal = 0
prom = 0


estudiantesmas5 = 0
cantidadmas5 = 0
promMas5 = 0


estudiantesmenos5 = 0
cantidadmenos5 = 0
promMenos5 = 0

while cantotal < 100000

  puts "Ingrese el aporte hecho por el aprendiz:"
  aporte = gets.chomp.to_f
  numEst += 1
  cantotal += aporte
  prom = cantotal / numEst

  if aporte >= 5000
    estudiantesmas5++
    cantidadmas5 += aporte
    promMas5 = (cantidadmas5 / estudiantesmas5)

  else
    estudiantesmenos5++
    cantidadmenos5 += aporte
    promMenos5 = (cantidadmenos5 / estudiantesmenos5)
  end
end

puts "La cantidad de estudiantes que donaron fue #{numEst} \n"
puts "La cantidad total recaudada fue de #{cantotal} \n"
puts "El promedio general es de #{prom} \n"
puts "La cantidad de aprendices que donaron 5000 o mas, fueron #{estudiantesmas5} y con estos estudiantes fue recaudado: #{cantidadmas5} con un promedio de #{promMas5} \n"
puts "La cantidad de aprendices que donaron menos de 5000, fueron #{estudiantesmenos5} y con estos estudiantes fue recaudado: #{cantidadmenos5} con un promedio de #{promMenos5}"
