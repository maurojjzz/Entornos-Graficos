<?php
// Ejercicio 2
// - Confeccionar una página de Contacto que presente un formulario para que los visitantes
// puedan enviar consultas al webmaster. 

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "webmaster@ejemplo.com, sixob43314@prorises.com";
    $asunto = "Consulta desde la página web";

    $cuerpo = "
        <h2>Nueva consulta</h2>
        <p><strong>Nombre:</strong> $nombre</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Mensaje:</strong> $mensaje</p>
    ";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "Consulta enviada correctamente";
    } else {
        echo "Error al enviar la consulta";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <form action="ej_2.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" required></textarea>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>