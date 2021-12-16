<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

</head>

<body>

    <!-- Form-->
    <div class="form">
        <div class="form-toggle"></div>
        <div class="form-panel one">
            <div class="form-header">
                <h1>Iniciar Sesión</h1>
            </div>
            <div class="form-content">
                <form>
                    <div class="form-group">
                        <label for="username">Nombre de usuario</label>
                        <input id="username" type="text" name="username" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input id="password" type="password" name="password" required="required" />
                    </div>
                    <div class="form-group">
                        <label class="form-remember">
                            <input type="checkbox" />Recuérdame
                        </label><a class="form-recovery" href="#">¿Has olvidado tu contraseña?</a>
                    </div>
                    <div class="form-group">
                        <button type="submit">Iniciar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="form-panel two">
            <div class="form-header">
                <h1>Registrar Cuenta</h1>
            </div>
            <div class="form-content">
                <form>
                    <div class="form-group">
                        <label for="email">Correo Electronico</label>
                        <input id="email" type="email" name="email" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="username">Nombre de usuario</label>
                        <input id="username" type="text" name="username" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input id="password" type="password" name="password" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="cpassword">Confirmar Contraseña</label>
                        <input id="cpassword" type="password" name="cpassword" required="required" />
                    </div>
                    <div class="form-group">
                        <button type="submit">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
<script src="../js/login.js"></script>