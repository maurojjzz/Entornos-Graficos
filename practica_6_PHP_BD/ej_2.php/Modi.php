<html>    
    <head>
        <title>Modificacion</title>
    </head>
    <body>
        <?php
            $link = mysqli_connect("127.0.0.1", "capitales", "Capitales@123", "Capitales");

            if (!$link) {
                die("Error de conexión: " . mysqli_connect_error());
            }
            
            //Captura datos desde el Form anterior
            $vId = $_POST['id'];
            $vCiudad = $_POST['ciudad'];
            $vPais = $_POST['pais'];
            $vHabitantes = $_POST['habitantes'];
            $vSuperficie = $_POST['superficie'];
            $vTieneMetro = (isset($_POST['tieneMetro'])) ? 1 : 0;

            $vSql = "UPDATE Ciudades SET ciudad='$vCiudad', pais='$vPais', habitantes='$vHabitantes', superficie='$vSuperficie', tieneMetro='$vTieneMetro' WHERE id='$vId'";

            mysqli_query($link,$vSql) or die (mysqli_error($link));

            echo("La Ciudad fue Modificada<br>");
            echo("<A href= 'menu.html'>Volver al Menu del ABM</A>");
            // Cerrar la conexion
            mysqli_close($link);
        ?>
    </body>
</html>