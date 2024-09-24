inicio

    Name = Cells(1, 1)
    para i = 1 hasta 9
        Cells(1, i) = Name
        para h = i hasta 100000000
        fin para
        Cells(1, i) = ""
        Cells(1, 1) = ""
    fin para
    Cells(1, 10) = Name
    
fin
