<?php 
// Ejercicio 4:
// Analizar la siguiente función, y escribir un script para probar su funcionamiento:


function comprobar_nombre_usuario($nombre_usuario){
    //compruebo que el tamaño del string sea válido.
    if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
        echo $nombre_usuario . " no es válido<br>";
        return false;
    }
    //compruebo que los caracteres sean los permitidos
    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";

    for ($i=0; $i<strlen($nombre_usuario); $i++){
        if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
            echo $nombre_usuario . " no es válido<br>";
            return false;
        }
    }
    echo $nombre_usuario . " es válido<br>";
    return true;
}


comprobar_nombre_usuario("maurojjzz");

// funcion comprobar_nombre_usuario($nombre_usuario) tomaun paprametro al cual con strlen se calcula si tiene mas de tres caracteres o menos de 20, si no cumple con la condicion devuelve false y un mensaje de que no es valido, si cumple con la condicion se hace un for para recorrer el string y comprobar que cada caracter este en la variable $permitidos, si no esta devuelve false y un mensaje de que no es valido, si cumple con la condicion devuelve true y un mensaje de que es valido.  
?>