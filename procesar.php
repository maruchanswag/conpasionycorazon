<?php
// Iniciar sesión en la base de datos (reemplace con sus credenciales)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Falló la conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$uname = $_POST['uname'];
$psw = $_POST['psw'];

// Preparar consulta SQL (considerando correo o teléfono)
$sql = "SELECT * FROM usuarios WHERE (email = ? OR telefono = ?) AND contraseña = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $uname, $uname, $psw);

// Ejecutar la consulta
$stmt->execute();

// Comprobar si el usuario existe
if ($stmt->fetch()) {
    // Iniciar sesión exitosa
    session_start();
    $_SESSION['usuario'] = $uname; // Almacenar el nombre de usuario en la sesión
    header("Location: inicio.php"); // Redirigir al sitio principal
} else {
    // Error de inicio de sesión
    header("Location: login.php?error=1"); // Redirigir al login con mensaje de error
}

$stmt->close();
$conn->close();
?>
