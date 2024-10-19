<?php
session_start();
include 'conexion.php'; // Incluir tu archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta para verificar el usuario y contraseña
    $sql = "SELECT * FROM usuarios WHERE username = '$username' AND contraseña = '$password'";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;  // Iniciar sesión
        header("Location: pagprincipal.php");  // Redirigir después de login
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>