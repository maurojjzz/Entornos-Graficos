<?php

/*
Crear una página que puede configurarse con distintos estilos CSS. El usuario es quien decide qué
aspecto desea que tenga la página, por medio de un formulario. Luego la página es capaz de
recordar, entre los distintos accesos que realice el usuario, el aspecto que había elegido para
mostrar la web */

$estilo = "claro";

if (isset($_COOKIE["estilo"])) {
    $estilo = $_COOKIE["estilo"];
}

if (isset($_POST["estilo"])) {

    $estilo = $_POST["estilo"];

    // Guardamos la elección durante 30 días
    setcookie(
        "estilo",
        $estilo,
        time() + (60 * 60 * 24 * 30)
    );
}

?>
<html lang="es">
    <head>
        <title>Formulario de Estilo</title>
        <link rel="stylesheet" href="<?php echo $estilo; ?>.css">
    </head>
    <body>
        <form method="post">
            Aquí puedes seleccionar el estilo (color de fondo) que deseas la página:
            <br />
            <select name="estilo">
                <option value="claro" disabled>Claro</option>
                <option value="verde">Verde</option>
                <option value="rosa">Rosa</option>
                <option value="negro">Negro</option>
            </select>
            <input type="submit" value="Actualizar el estilo" />
        </form>
    </body>
</html>
