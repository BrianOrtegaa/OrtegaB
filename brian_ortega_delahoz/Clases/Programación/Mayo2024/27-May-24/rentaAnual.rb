puts "Ingrese su cantidad de renta anual:"
renta_anual = gets.chomp.to_f

if renta_anual <= 10
    ren = (renta_anual*20)/100
    resul = renta_anual - ren
     puts "Su valor a pagar con el descuento aplicado es de: #{resul}"
     
else
    if 
        renta_anual <= 100
        ren = (renta_anual*10)/100
        resul = renta_anual - ren
         puts "Su valor a pagar con el descuento aplicado es de: #{resul}"
    else
        if 
            renta_anual <= 1000
            ren = (renta_anual*5)/100
            resul = renta_anual - ren
             puts "Su valor a pagar con el descuento aplicado es de: #{resul}"
        else
            if 
                renta_anual > 1000
                ren = (renta_anual*1)/100
                resul = renta_anual - ren
                 puts "Su valor a pagar con el descuento aplicado es de: #{resul}"
            else
            end
        end
    end
end