<?php

session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página 3</title>
</head>
<body>

<?php

if (isset($_SESSION["nombre"])) {

    echo "Bienvenido " . $_SESSION["nombre"];

} else {

    echo "No puede visitar esta página.";
    
}

?>

<a href="pagina1.php">Volver</a>

</body>
</html>