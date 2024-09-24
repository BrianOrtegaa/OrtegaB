Inicio
    para c = 1 hasta 6
   
        para i = 1 hasta c
            Name = Cells(c, 1)
            numname = Len(Name)
        
            para j = 1 hasta numname
                letras = Substr(Name, j, 1)
                Cells(c, j + 1) = letras
           
            fin para
        
        fin para
   fin para  
Fin
