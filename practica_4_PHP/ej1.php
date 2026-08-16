<?php
function doble($i) {
    return $i*2;
}

$a = TRUE;
$b = "xyz";
$c = 'xyz';
$d = 12;

echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);

if (is_int($d)) {
    $d += 4;
}

if (is_string($a)) {
    echo "Cadena: $a";
}

$d = $a ? ++$d : $d*3;
$f = doble($d++);
$g = $f += 10;

echo $a, $b, $c, $d, $f , $g;

/* 
En el siguiente código identificar:
    a• las variables y su tipo:
        $a: boolean
        $b: string
        $c: string
        $d: integer
        $f: integer
        $g: integer


    b• los operadores

        += -> una suma y asignación, es decir que a la variable $d se le suma su propio valor mas 4 y se guarda en la misma variable $d
        ++ -> incremento en 1, es decir que a la variable $d se le suma 1 y se guarda en la misma variable $d
        ? : -> operador ternario,
        * -> multiplicación
        ++ -> incremento en 1


    c• las funciones y sus parámetros
        doble($i) -> función que recibe un parámetro $i y devuelve el doble de su valor
        gettype($var) -> función que recibe una variable y devuelve su tipo de dato
        is_int($var) -> función que recibe una variable y devuelve true si es un entero, false en caso contrario
        is_string($var) -> función que recibe una variable y devuelve true si es una cadena, false en caso contrario


    d• las estructuras de control
        if () {  } -> estructura de control que evalúa si la variable $d es un entero, si es así ejecuta el bloque de código dentro de las llaves 

    e• cuál es la salida por pantalla
        booleanstringstringinteger1xyzxyz184444

*/






?>

