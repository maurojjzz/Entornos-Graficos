<?php
// Ejercicio 3
// Escribir un script para que un visitante recomiende el sitio a un amigo.

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombre = $_POST["nombre"];
    $emailAmigo = $_POST["email_amigo"];

    $asunto = "$nombre te recomienda este sitio";

    $mensaje = "
        <h2>¡Hola!</h2>
        <p>$nombre te recomienda visitar nuestro sitio web.</p>
        <p>
            <a href='http://localhost:8000'>
                Visitar sitio
            </a>
        </p>
    ";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: noreply@misitio.com\r\n";

    if (mail($emailAmigo, $asunto, $mensaje, $headers)) {
        echo "Recomendación enviada correctamente";
    } else {
        echo "Error al enviar la recomendación";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recomendar sitio</title>
</head>

<body>

    <h1>Recomendá este sitio a un amigo</h1>

    <form action="ej_3.php" method="POST">

        <label for="nombre">Tu nombre:</label>
        <input
            type="text"
            id="nombre"
            name="nombre"
            required
        >

        <br><br>

        <label for="email_amigo">Email de tu amigo:</label>
        <input
            type="email"
            id="email_amigo"
            name="email_amigo"
            required
        >

        <br><br>

        <input type="submit" value="Recomendar">

    </form>

</body>
</html>