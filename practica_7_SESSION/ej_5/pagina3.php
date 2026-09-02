<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina 3</title>
</head>
<body>
    <?php
    echo "Usuario: " . $_SESSION['usuario'] . "<br>";
    echo "Clave: " . $_SESSION['clave'] . "<br>";
    ?>
</body>
</html>