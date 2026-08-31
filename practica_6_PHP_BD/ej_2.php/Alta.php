<html>
    <head>
        <title>Alta Usuario</title>
    </head>
    <body>
        <?php 
            $link = mysqli_connect("127.0.0.1", "capitales", "Capitales@123", "Capitales");

            if (!$link) {
                die("Error de conexión: " . mysqli_connect_error());
            }

            //Captura datos desde el Form anterior
            $vCiudad = $_POST['Nom'];
            $vPais = $_POST['Pais'];
            $vHabitantes = $_POST['Habitantes'];
            $vSuperficie = $_POST['Superficie'];
            $vTieneMetro = isset($_POST['TieneMetro']) ? 1 : 0;

            $vSql = "SELECT Count(ciudad) as canti FROM Ciudades WHERE ciudad='$vCiudad' AND pais='$vPais'";

            $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;

            $vCantCiudades = mysqli_fetch_assoc($vResultado);

            if ($vCantCiudades ['canti']!=0){
                echo ("La Ciudad ya Existe<br>");
                echo ("<A href='Menu.html'>VOLVER AL ABM</A>");
            } else {
                $vSql = "INSERT INTO Ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
                values ('$vCiudad', '$vPais', '$vHabitantes', '$vSuperficie', '$vTieneMetro')";

                mysqli_query($link, $vSql) or die (mysqli_error($link));
                
                echo("La Ciudad fue Registrada, Pronto recibirás un email, confirmandote la actualizaciòn a
                nuestra pagina<br>");
                echo ("<A href='menu.html'>VOLVER AL MENU</A>");
                // Liberar conjunto de resultados
                mysqli_free_result($vResultado);
            }

            // Cerrar la conexion
            mysqli_close($link);
        ?>
    </body>
</html>