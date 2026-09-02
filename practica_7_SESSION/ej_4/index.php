<?php 
/*
Confeccionar una página que simule ser la de un periódico. La misma debe permitir configurar qué
tipo de titular deseamos que aparezca al visitarla, pudiendo ser:

Noticia política, Noticia económica o Noticia deportiva.

Mediante tres objetos de tipo radio, permitir seleccionar qué titular debe mostrar el periódico.
Almacenar en una cookie el tipo de titular que desea ver el cliente. La primera vez que visita el
sitio deben aparecer los tres titulares. Disponer un hipervínculo a una tercer página que borre la
cookie creada. 
*/

    $noticia = null;

    if (isset($_GET["borrar"])) {
        setcookie("noticia", "", time() - 1);
        $noticia = null;
    }

    if (isset($_COOKIE["noticia"])) {
        $noticia = $_COOKIE["noticia"];
    }

    if (isset($_POST["noticia"])) {
        $noticia = $_POST["noticia"];
        setcookie("noticia", $noticia, time() + (60 * 60 * 24 * 30));
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Periódico</h1>

    <?php 
        if ($noticia == null) {

            echo "<h2>Noticia política</h2>";
            echo "<p>Nuevo debate político en el Congreso.</p>";

            echo "<h2>Noticia económica</h2>";
            echo "<p>La economía registra nuevos cambios.</p>";

            echo "<h2>Noticia deportiva</h2>";
            echo "<p>Gran victoria en el campeonato.</p>";

        } else {

            if ($noticia == "politica") {
                echo "<h2>Noticia política</h2>";
                echo "<p>Nuevo debate político en el Congreso.</p>";
            }

            if ($noticia == "economica") {
                echo "<h2>Noticia económica</h2>";
                echo "<p>La economía registra nuevos cambios.</p>";
            }

            if ($noticia == "deportiva") {
                echo "<h2>Noticia deportiva</h2>";
                echo "<p>Gran victoria en el campeonato.</p>";
            }
        }
    ?>

    <form action="" method="post">
        <label for="politica">Noticia política</label>
        <input type="radio" id="politica" name="noticia" value="politica">
        <br>
        <label for="economica">Noticia económica</label>
        <input type="radio" id="economica" name="noticia" value="economica">
        <br>
        <label for="deportiva">Noticia deportiva</label>
        <input type="radio" id="deportiva" name="noticia" value="deportiva">
        <br>
        <input type="submit" value="Enviar">

    </form>

    <a href="?borrar=1">Borrar preferencia</a>


    
</body>
</html>