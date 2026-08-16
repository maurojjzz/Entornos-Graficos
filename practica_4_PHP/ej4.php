<?php /*
Ejercicio 4:
Si el archivo datos.php contiene el código que sigue:

<?php
$color = 'blanco';
$flor = 'clavel';
?>

Indicar las salidas que produce el siguiente código. Justificar

<?php
echo "El $flor $color \n";
include 'datos.php';
echo " El $flor $color";
?> */?>


<?php

    echo "El $flor $color \n";
    include 'datosEj4.php';
    echo "El $flor $color";




/* La salida que produce el código es:
El  
El clavel blanco

porque toma el valor de las variables $flor y $color que están definidas en el archivo datos.php, y luego las imprime en la segunda línea. La primera línea imprime "El clavel" porque la variable $color no está definida en ese momento, por lo que se imprime como una cadena vacía. La segunda línea imprime "El clavel blanco" porque ahora la variable $color tiene el valor 'blanco' definido en el archivo datos.php. */

?>

