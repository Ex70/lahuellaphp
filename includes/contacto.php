<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

    if($_POST){
        $nombre = $_POST["name"];
        $correo = $_POST["email"];
        $asunto = $_POST["subject"];
        $mensaje = $_POST["message"];
        $destinatario = "lahuella.redes@gmail.com";

        // Datos de la cuenta de correo utilizada para enviar vía SMTP
        $smtpHost = "redimensiona.mx";  // Dominio alternativo brindado en el email de alta 
        $smtpUsuario = "sistemas@redimensiona.mx";  // Mi cuenta de correo
        $smtpClave = "dsCENOv^xCJR";  // Mi contraseña

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Port = 587;
        $mail->IsHTML(true);
        $mail->CharSet = 'UTF-8';

        // VALORES A MODIFICAR //
        $mail->Host = $smtpHost; 
        $mail->Username = $smtpUsuario; 
        $mail->Password = $smtpClave;
        $mail->From = $correo; // Email desde donde envío el correo.
        $mail->FromName = $nombre;
        $mail->AddAddress($destinatario); // Esta es la dirección a donde enviamos los datos del formulario
        $mail->Subject = "=?ISO-8859-1?B?".base64_encode($asunto)."=?=";
        $mensajeHtml = nl2br($mensaje);
        $mail->Body = "
            <html>
            <body>
                <h1>Recibiste un nuevo mensaje desde el formulario de contacto de La Huella</h1>
                <p>Informaci&oacute;n enviada por el usuario de la web.</p>
                <p>Nombre: {$nombre}</p>
                <p>Correo electr&oacute;nico: {$correo}</p>
                <p>Mensaje: {$mensaje}</p>
            </body> 
            </html>
        <br />"; // Texto del email en formato HTML
        $mail->AltBody = "{$mensaje} \n\n "; // Texto sin formato HTML
        // FIN - VALORES A MODIFICAR //
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $estadoEnvio = $mail->Send();
        if($estadoEnvio){
            echo "<script>alert('Formulario Enviado');location.href ='javascript:history.back()';</script>";
        } else {
            echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";
        }
    }else{
        echo "No hay datos que procesar";
        exit();
    }
?> 