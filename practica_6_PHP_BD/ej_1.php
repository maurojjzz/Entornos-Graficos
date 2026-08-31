<?php
/*Ejercicio 1: Completar

a)Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es
necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función

    mysqli_connect(), que permite establecer una conexión con un servidor MySQL.

b) Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios:

    -Host, Usuario y Contraseña. El host es el nombre del servidor de base de datos al que se desea conectar, el usuario es el nombre de usuario con el que se desea autenticar y la contraseña es la clave asociada a ese usuario.

c) Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función

    mysqli_select_db(), que permite seleccionar la base de datos con la que se desea trabajar.

d) Esta función debe pasar como parámetro

    La variable que contiene al mysqli_connect() y el nombre de la base de datos que se desea seleccionar.
    mysqli_select_db($vConexion, $vNombreBD); 

e) La función mysqli_query () se utiliza para

    Para ejecutar una sentencia sql

f) y requiere como parámetros

    La variable que contiene la conexión a la base de datos y la sentencia sql que se desea ejecutar.

g) La cláusula or die() se utiliza para

    Mostrar un mensaje de error si la consulta falla. Controlar que hacer en caso de error

h) y la función mysqli_error () se puede usar para

    Obtener información sobre el error que ocurrió durante la ejecución de la consulta.


Si la función mysqli_query() es exitosa, el conjunto resultante retornado se almacena en una variable, por ejemplo
$vResult, y a continuación se puede ejecutar el siguiente código (explicarlo):


    while ($fila = mysqli_fetch_array($vResultado))
    {
        ?>
        <tr>
            <td><?php echo ($fila[0]); ?></td>
            <td><?php echo ($fila[1]); ?></td>
            <td><?php echo ($fila[2]); ?></td>
        </tr>
        <tr>
        <td colspan="5">
        <?php
    }
    mysqli_free_result($vResultado);
    mysqli_close($link);

    La función mysqli_fetch_array() se utiliza para obtener una fila del conjunto de resultados devuelto por la consulta SQL. Esta función devuelve un array asociativo y/o numérico que contiene los datos de la fila actual.

*/

?>