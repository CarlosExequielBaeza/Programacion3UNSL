<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Very Deli - Inicio de Sesión</title>
</head>
<body>
    <h1>Envío de paquetería</h1>
    <p>
        Express Point Ru Servicio de entrega de mensajería en la ciudad y en toda Argentina
    </p>

    <!-- Formulario de inicio de sesión -->
    <div>
        <h1>Inicio de sesión</h1>
        <form action="Paginas/login.php" method="POST"> <!-- Cambiado a POST y con la ruta correcta -->
            <div>
                <label for="username">Nombre de usuario</label>
                <input type="text" name="username" required>
            </div>
            <div>
                <label for="password">Contraseña</label>
                <input type="password" name="password" required>
            </div>
            <div>¿Olvidó su contraseña?</div>
            <input type="submit" value="Iniciar sesión">
            <div>
                Quiero hacer el <a href="pages/register.php">Registro</a> <!-- Enlace a la página de registro -->
            </div>
        </form>
    </div>
</body>
</html>