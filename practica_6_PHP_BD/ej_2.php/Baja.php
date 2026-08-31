<html>
    <head>
        <title>Baja</title>
    </head>
    <body>
        <?php
        $link = mysqli_connect("127.0.0.1", "capitales", "Capitales@123", "Capitales");

            if (!$link) {
                die("Error de conexión: " . mysqli_connect_error());
            }

        $vCiudad = $_POST ['ciudad'];
        $vSql = "SELECT * FROM Ciudades WHERE ciudad='$vCiudad' ";
        $vResultado = mysqli_query($link, $vSql);

        if(mysqli_num_rows($vResultado) == 0)
        {
            echo ("Ciudad Inexistente...!!! <br>");
            echo ("<A href='formBaja.html'>Continuar</A>");
        }
        else{
            //Arma la instrucción SQL y luego la ejecuta
            $vSql= "DELETE FROM Ciudades WHERE ciudad = '$vCiudad' ";

            mysqli_query($link, $vSql);
            echo("La Ciudad fue Borrada<br>");
            echo("<A href='menu.html'>Volver al Menu del ABM</A>");
        }
        
        // Liberar conjunto de resultados
        mysqli_free_result($vResultado);
        // Cerrar la conexion
        mysqli_close($link);
        ?>
    </body>
</html>