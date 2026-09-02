<!-- Ejercicio N° 5
Realizar una página donde carguemos en un formulario el nombre de usuario y clave de un cliente.
Luego realizar una segunda página donde se creen dos variables de sesión. Y como última página
crear una tercera en la cual se recuperen los valores almacenados en las variables de sesión
anterior.  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <form action="pagina2.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required>
        <br><br>
        <label for="clave">Clave:</label>
        <input type="password" name="clave" id="clave" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>