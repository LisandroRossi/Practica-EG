<?php
    $asunto = "$nombre te recomienda visitar nuestro sitio";
    $mensaje = "
    <html>
    <head>
        <title>Recomendación de $nombre</title>
    </head>
    <body>
        <p>Hola $nombre_amigo,</p>
        <p>$nombre ha recomendado que visites nuestro sitio web: <a href='$url'>$url</a></p>
        <p>¡Esperamos que lo disfrutes!</p>
        <p>Saludos,<br>El equipo de $nombre_del_sitio</p>
    </body>
    </html>
    ";

    $cabeceras = "MIME-Version: 1.0" . "\r\n";
    $cabeceras .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    $cabeceras .= "From: $email" . "\r\n";
    $cabeceras .= "Reply-To: $email" . "\r\n";

    if (mail($email_amigo, $asunto, $mensaje, $cabeceras)) {
        echo "Gracias por recomendar nuestro sitio. ¡Tu amigo recibirá la invitación pronto!";
    } else {
        echo "Hubo un error al enviar la recomendación. Por favor, intenta nuevamente.";
    }
?>