<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "galvanfann@gmail.com"; 
    $subject = "Nuevo mensaje de $name";
    $body = "Nombre: $name\nCorreo electrónico: $email\nMensaje:\n$message";
    
    if (mail($to, $subject, $body)) {
        echo "Mensaje enviado correctamente. Gracias por contactarte conmigo.";
    } else {
        echo "Hubo un error al enviar tu mensaje. Por favor, intenta nuevamente.";
    }
}
?>
