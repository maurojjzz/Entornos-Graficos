<?php 
/*Crear una cookie llamada “contador” que lleve la cuenta en el lado cliente del número de veces que se ha accedido a la página contador.php. Si es la primera vez que se accede, la página dará la bienvenida al usuario. Si ya se ha accedido anteriormente, la página hará uso de la cookie para mostrar el número de veces que se ha visitado dicha página. */ 
$contador = 0; 

if (isset($_COOKIE["contador"])) { 
    $contador = $_COOKIE["contador"]; 
} 

$contador++; 

setcookie("contador", $contador, time() + (60 * 60 * 24 * 30)); 
?> 
<!DOCTYPE html> 
<html lang="en"> 
        <head> 
            <meta charset="UTF-8"> 
            <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
            <title>Document</title> 
        </head> 
        <body> 
            <h2> 
                <?php if($contador == 1) { echo "Bienvenido, es la primera vez que visitas esta página."; } else { echo "Has visitado esta página $contador veces."; } ?> 
            </h2> 
        </body> 
</html>