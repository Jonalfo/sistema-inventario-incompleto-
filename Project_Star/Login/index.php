<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="logo.png">
    <title>Project Star</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="post">
            
                <h1>Crea tu Cuenta</h1>
                <span>Ingresa tus datos personales</span>
                <input type="email" name="usuario"placeholder="Usuario" />
                <input type="password" name="clave"placeholder="Contraseña" />
                <button>Registrarse</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form method="post">
            <?php
			include("../controlador.php");
			?>
                <h1>Iniciar Sesión</h1>
                <span>Ingresa tus datos personales</span>
                <input type="text" name="usuario" placeholder="Usuario" />
                <input type="password" name="clave"placeholder="Contraseña" />
                <button name="btn_ingresar">Entrar</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>¿Ya tienes una cuenta?</h1>
                    <p>¡Inicia sesión con tus datos y disfruta nuevamente de nuestros servicios!</p>
                    <button class="ghost" id="signIn">Iniciar Sesión</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>¿No tienes una cuenta?</h1>
                    <p>¡No te preocupes, ingresa tus datos para registrarte y podrás disfrutar de nuestros servicios!</p>
                    <button class="ghost" id="signUp">Registrarse</button>
                </div>
            </div>
        </div>
        </div>
<script src="codigo.js"></script>
</body>
</html>