Inicio
    
    cantotal = 0
    prom = 0
    estudiantesmas5 = 0
    cantidadmas5 = 0
    promMas5 = 0
    estudiantesmenos5 = 0
    cantidadmenos5 = 0
    promMenos5 = 0
    numEst = 0
    
    MQ cantotal < 100000
        numEst = numEst + 1
        leer "Ingrese la cantidad que desea aportar", aporte
        cantotal = cantotal + aporte
        prom = cantidad / numEst
        si aporte >= 5000 entonces
            estudiantesmas5 ++
            cantidadmas5 = cantidadmas5 + aporte 
            promMas5 = cantidadmas5 / estudiantesmas5
        sino 
            estudiantesmenos5 ++
            cantidadmenos5 = cantidadmenos5 + aporte
            promMenos5 = cantidadmenos5 / estudiantesmenos5
        fin si
    fin MQ
    Esc "La cantidad de Estudiantes que donaron fue" + numEst
    Esc "La cantidad total recaudada fue de" + cantotal
    Esc "El promedio general es de" + prom
    Esc "La cantidad de aprendices que donaron 5000 o mas, fueron" estudiantesmas5 + "Y con estos estudiantes fue reacudado:" + cantidadmas5 + "Con un promedio de" + promMas5
    Esc "La cantidad de aprendices que donaron menos de 5000, fueron" + estudiantesmenos5 + "Y con estos estudiantes fue recaudado:" + cantidadmenos5 + "con un promedio de" + promMenos5
Fin               