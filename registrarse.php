<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu" rel="stylesheet">

    <!-- Estilos -->
    <link rel="stylesheet" href="css/estilos.css">

    <title>Formulario Login y Registro de Usuarios</title>
</head>
<body>

   <!-- Formularios -->
    <div class="contenedor-formularios">
        <!-- Links de los formularios -->
        <ul class="contenedor-tabs">
            <li class="tab tab-segunda active"><a href="#iniciar-sesion">Iniciar Sesión</a></li>
            <li class="tab tab-primera"><a href="#registrarse">Registrarse</a></li>
        </ul>

        <!-- Contenido de los Formularios -->
        <div class="contenido-tab">
            <!-- Iniciar Sesion -->
            <div id="iniciar-sesion">
                <h1>Iniciar Sesión</h1>
                <form action="#" method="post">
                    <div class="contenedor-input">
                        <label>
                            Usuario <span class="req">*</span>
                        </label>
                        <input type="text" required>
                    </div>

                    <div class="contenedor-input">
                        <label>
                            Contraseña <span class="req">*</span>
                        </label>
                        <input type="password" required>
                    </div>
                    <p class="forgot"><a href="#">Se te olvidó la contraseña?</a></p>
                    <input type="submit" class="button button-block" value="Iniciar Sesión">
                </form>
            </div>

            <!-- Registrarse -->
            <div id="registrarse">
                <h1>Registrarse</h1>
                <form action="#" method="post">
                    <div class="fila-arriba">
                        <div class="contenedor-input">
                            <label>
                                Nombre <span class="req">*</span>
                            </label>
                            <input type="text" required >
                        </div>

                        <div class="contenedor-input">
                            <label>
                                Apellido <span class="req">*</span>
                            </label>
                            <input type="text" required>
                        </div>
                    </div>
                    <div class="contenedor-input">
                        <label>
                            Usuario <span class="req">*</span>
                        </label>
                        <input type="text" required>
                    </div>
                    <div class="contenedor-input">
                            <label>
                                Email <span class="req">*</span>
                            </label>
                        <input type="email" required>
                    </div>
                    <div>
                        <label for="vehiculo-checkbox">¿Tiene vehículo?</label>
                        <input type="checkbox" id="vehiculo-checkbox">

                    </div>
                    <div id="vehiculo-form" class="contenedor-input">
                        <h3>Datos del vehículo</h3>
                        <form>
                            <label for="marca">Marca:</label>
                            <input type="text" id="marca" name="marca"><br><br>
                            
                            <label for="modelo">Modelo:</label>
                            <input type="text" id="modelo" name="modelo"><br><br>
                            <label for="peso">Peso permitido:</label>
                            <input type="text" id="peso" name="peso"><br><br>
                            
                            
                            
                            
                        </form>
                    </div>
                    <div class="contenedor-input">
                        <label>
                            Contraseña <span class="req">*</span>
                        </label>
                        <input type="password" required>
                    </div>

                    <div class="contenedor-input">
                        <label>
                            Repetir Contraseña <span class="req">*</span>
                        </label>
                        <input type="password" required>
                    </div>

                    <input type="submit" class="button button-block" value="Registrarse">
                </form>
            </div>
        </div>
    </div>

   <script src="js/jquery.js"></script>
   <script src="js/main.js"></script>

</body>
</html>