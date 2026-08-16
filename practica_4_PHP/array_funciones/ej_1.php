<?php
/*Ejercicio 1:
Indicar si los siguientes códigos son equivalentes. */
$a = array( 
    'color' => 'rojo',
    'sabor' => 'dulce',
    'forma' => 'redonda',
    'nombre' => 'manzana',
    4
 );

?>

<?php
    $a['color'] = 'rojo';
    $a['sabor'] = 'dulce';
    $a['forma'] = 'redonda';
    $a['nombre'] = 'manzana';
    $a[] = 4;


/* Los dos códigos son equivalentes. */
?>

