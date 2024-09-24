puts "Ingrese la cantidad de estudiantes: "
n = gets.chomp.to_i

for cantEst in 1..n
    puts "Ingrese la nota 1: "
    not1 = gets.chomp.to_f
  
    puts "Ingrese la nota 2: "
    not2 = gets.chomp.to_f
  
    puts "Ingrese la nota 3: "
    not3 = gets.chomp.to_f

    prom = (not1 + not2 + not3) / 3
    
    if prom >= 6
        puts "Felicidades, Aprobaste!!"
    else
        puts "Reprobaste la materia :("
    end
end
