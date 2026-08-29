<?php 
// Ejercicio 1
// - Escribir un script en PHP para poder enviar un correo electrónico, con formato HTML, a
// través del servidor. 


    $destinatario = "xx@xx.com";
    $asunto = "Prueba de correo";
    $mensaje = "<h1>Hola, mundo!</h1><p>Este es un mensaje de prueba.</p>";
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: yo@yo.com\r\n";

    mail($destinatario, $asunto, $mensaje, $headers);
    

?>