<?php
/*Crear un formulario que solicite la carga del nombre de usuario. Cuando se presione un botón
crear una cookie para dicho usuario. Luego cada vez que ingrese al formulario mostrar el último
nombre de usuario ingresado.  */

$usuario = "";

if (isset($_COOKIE["usuario"])) {
    $usuario = $_COOKIE["usuario"];
}

if (isset($_POST["username"])) {
    $usuario = $_POST["username"];
    setcookie("usuario", $usuario, time() + (60 * 60 * 24 * 30));
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

    <form method="post" action="form.php">
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="username" required value="<?php echo $usuario; ?>">
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>