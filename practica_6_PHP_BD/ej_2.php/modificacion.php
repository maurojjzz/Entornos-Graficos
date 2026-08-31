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


        $vciudad = $_POST['ciudad'];

        //Arma la instrucción SQL y luego la ejecuta
        $vSql = "SELECT * FROM Ciudades WHERE ciudad ='$vciudad' ";

        $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));

        $fila = mysqli_fetch_array($vResultado);

        if(mysqli_num_rows($vResultado) == 0) {
            echo ("Ciudad Inexistente...!!! <br>");
            echo ("<A href='formModificacion.html'>Continuar</A>");
        }
        else{
    ?>
        <FORM action="Modi.php" method="POST" name="FormModi">
            <table width="356">
                <input type="number" name="id"  value="<?php echo($fila['id']); ?>" hidden>
                <tr>
                    <td width="103"> Ciudad: </td>
                    <td width="243"> 
                        <input
                            type="text" 
                            name="ciudad" 
                            value="<?php echo($fila['ciudad']); ?>"
                        >
                    </td>
                </tr>

                <tr>
                    <td> Pais: </td>
                    <td> 
                        <input
                            type="text" 
                            name="pais" 
                            value="<?php echo($fila['pais']); ?>"
                        >
                    </td>
                </tr>

                <tr>
                    <td> Habitantes: </td>
                    <td> 
                        <input
                            type="number"
                            name="habitantes" 
                            value="<?php echo($fila['habitantes']); ?>"
                        >
                    </td>
                </tr>

                <tr>
                    <td> Superficie: </td>
                    <td> 
                        <input
                            type="number"
                            step="0.01" 
                            name="superficie" 
                            value="<?php echo($fila['superficie']); ?>"
                        >
                    </td>
                </tr>

                <tr>
                    <td> Tiene Metro: </td>
                    <td> 
                        <input
                            type="checkbox" 
                            name="tieneMetro" 
                            value="<?php echo($fila['tieneMetro']); ?>"
                            <?php if($fila['tieneMetro'] == 1) echo "checked"; ?>
                        >
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center"> 
                        <input type="SUBMIT" name="Submit" value="Modificar">
                    </td>
                </tr>
            </table>
        </FORM>
        <?php
        }
        // Liberar conjunto de resultados
        mysqli_free_result($vResultado);
        // Cerrar la conexion
        mysqli_close($link);
        ?>
    </body>
</html>