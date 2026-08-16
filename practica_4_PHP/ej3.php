<?php 
/*Ejercicio 3: 

Explicar para qué se utiliza el siguiente código: 

*/

?>

<html>
    <head>
        <title>Documento 1</title>
    </head>
    <body>
        <?php
            echo "<table width = 90% border = '1' >";
            $row = 5;
            $col = 2;
            for ($r = 1; $r <= $row; $r++) {
                echo "<tr>";
                for ($c = 1; $c <= $col;$c++) {
                    echo "<td>&nbsp;</td>\n";
                } 
                echo "</tr>\n";
            }
            echo "</table>\n";
        ?>
    </body>
</html>

<?php
/*A)
    Se utiliza para crear una tabla que tiene 5 filas y 2 columnas, y cada celda está vacía. El código utiliza bucles for para iterar a través de las filas y columnas, creando las etiquetas <tr> para las filas y <td> para las celdas.


    Ejercicio B):
*/?>


<html>
    <head><title>Documento 2</title></head>
    <body>
        <?php
            if (!isset($_POST['submit'])) {
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    Edad: <input name="age" size="2">
                    <input type="submit" name="submit" value="Ir">
                </form>
                <?php
            } else {
                $age = $_POST['age'];
                if ($age >= 21) {
                    echo 'Mayor de edad';
                } else {
                    echo 'Menor de edad';
                }
            }
        ?>
    </body>
</html>

<?php /* 

    Muestra un formulario si la variable $_POST['submit'] no está definida al principio el formulario cuenta conun input de edad y un boton de enviar que es el que controla el if. Como el IF esta negado una vez que se envia el formulario ahi aparecera lo definido en la seccion "else" que en este caso dependiendo de cuanto se ingreso en el input de edad se mostrara un mensaje que dira "Mayor de edad" o "Menor de edad".


*/