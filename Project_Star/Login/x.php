<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body class="img js-fullheight">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Inicio de Sesión</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">¿Tienes una cuenta?</h3>

                        <form method="post" class="signin-form">
						<?php
							include("../controlador.php");
							?>
                            <div class="form-group">
                                <input name="usuario" type="text" class="form-control" placeholder="Usuario" required>
                            </div>
                            <div class="form-group">
                                <input name="clave" type="password" class="form-control"
                                    placeholder="Contraseña" required>
                                
                            </div>
                            <div class="form-group">
                                <button name="btn_ingresar" type="submit"
                                    class="form-control btn btn-primary submit px-3">Entrar</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Recuérdame
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                
                            </div>
                        </form>

                    </div>
                </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
