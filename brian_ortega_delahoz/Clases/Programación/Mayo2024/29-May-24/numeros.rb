puts "Ingrese un número entero"
num = gets.chomp.to_i
if num < 0
  puts "Tu número es 'Negativo'"
else
  if num > 0
    print "Tu número es 'Positivo'"
  else
    puts "Tu número es '0'"
  end
end
