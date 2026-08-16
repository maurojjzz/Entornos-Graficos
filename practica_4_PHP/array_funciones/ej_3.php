<?php 
// Ejercicio 3:
// En cada caso, indicar las salidas correspondientes:

$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
segundos, del $fun[mday]/$fun[mon]/$fun[year]";

 // Salida: (hagamos de cuenta q ingrese este ejercicio a las 13:20 del 16/08/2026) 
 
//  Has entrado en esta pagina a las 13 horas, con 20 minutos y 0 segundos, del 16/08/2026


// EJERCICIO B)
?>

<?php
    function sumar($sumando1,$sumando2){
        $suma=$sumando1+$sumando2;
        echo $sumando1."+".$sumando2."=".$suma;
    }
    sumar(5,6);

    // SAlida: 5+6=11
?>