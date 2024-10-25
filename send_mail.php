<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST['message'];
    
    // Reemplaza con tu dirección de correo electrónico
    $to = "maicolsuarez@gmail.com";
    $subject = "Mensaje desde el formulario";
    $headers = "From: justemcastillo@gmail.com\r\n";
    $headers .= "Reply-To: justemcastillo@gmail.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Envía el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "El mensaje ha sido enviado.";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
