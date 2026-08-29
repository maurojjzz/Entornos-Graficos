<?php

// Ejercicio :
// Escribir un script en PHP para poder enviar
// un correo electrónico, con formato HTML, a
// través del servidor

    $destinatario = "xx@xx.com";
    $asunto = "Prueba de correo";
    $mensaje = "<h1>Hola, mundo!</h1><p>Este es un mensaje de prueba.</p>";

    mail($destinatario, $asunto, $mensaje, "Content-type: text/html");
?>

<?php
    $asunto = "Prueba";
    $cuerpo = '
        <html>
            <head>
                <title>Envio de mail</title>
            </head>
            <body>
                <h1>Hola!</h1>
                <p>
                    <b>Esto es una prueba</b>.
                    xxxxxxxxxxxxxxxxxxxxxxxxxx
                </p>
            </body>
        </html>
    ';

    // Para enviar un correo HTML debe establecerse la cabecera Content-type
    $headers = "MIME-Version:1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859- 1\r\n";
    //dirección del remitente concatenada con otras direcciones
    $headers .= "From: NN<nn@nn.com>\r\n";
    //dirección de respuesta distinta que la del remitente
    $headers .= "Reply-To:ss@ss.com\r\n";
    //direcciones que reciben copia
    $headers .= "Cc:yy@yy.com\r\n";
    //direcciones que reciben copia oculta
    $headers .= "Bcc: zz@zz.com,pp@pp.com\r\n";
    mail($destinatario,$asunto,$cuerpo,$headers)
?>