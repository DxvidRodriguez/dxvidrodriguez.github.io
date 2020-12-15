<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="es" class="no-js">
<!--<![endif]-->

<head>
    <!-- Page Title -->
    <title>Reticket | Login</title>
    <!-- meta charec set -->
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Meta Description -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="David Rodriguez Ortiz">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
		================================================== -->

    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- animate -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="css/customExtra.css" />
    <!-- Twitter Bootstrap css -->
    <link rel="stylesheet" href="lib/bootstrap/bootstrap.min.css">

    <link rel="icon" type="ico" href="images/icons/boleto02.png" />

</head>

<body id="home">

    <!--
        Home 
        ==================================== -->

    <main class="form-signin">
        <form method="POST" name="form-login" id="form-login">
            <div id="logoReticket">
                <img id="imgLogin" src="images/icons/boleto02.png">
            </div>
            <h1 class="h3 mb-4 text-center" id="txtLogin">Reticket</h1>
            <label for="inputEmail" class="visually-hidden">Email</label>
            <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email " autofocus
                autocomplete="off">
            <div class="input-container">
                <label for="inputPassword" class="visually-hidden">Contraseña</label>
                <input type="password" id="inputPassword" name="inputPassword" class="form-control"
                    placeholder="Contraseña" autocomplete="off">
                <span class="btn-show-pwd">
                    <i class="fas fa-eye" id="show" aria-hidden="true" onclick="show()"></i>
                    <i class="fas fa-eye-slash" id="hide" aria-hidden="true" onclick="show()" style="display:none"></i>
                </span>
            </div>

            <div id="msgSection">
                <span id="msgLogin"></span>
            </div>

            <button class="w-100 btn btn-lg btn-primary" id="btnLogin" type="submit">Iniciar sesión</button>

            <div style="text-align: center">
                <a href="crea-cuenta" id="registerUser">Crear cuenta</a>
            </div>

            <div style="text-align: center; margin-top: 15px;">
                <a href="#" id="forgotPassword">¿Olvidaste tu contraseña?</a>
            </div>

            <p class="mt-3 text-muted text-center">&copy; 2020</p>
        </form>
    </main>


    <!--
        End Home 
        ==================================== -->

    <!-- Javascript Files -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="lib/bootstrap/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/6731221e93.js" crossorigin="anonymous"></script>

    <!-- Javascript Extra Files -->
    <script src="lib/jquery-validate/jquery.validate.js"></script>

    <script src="js/login/funcionesLogin.js"></script>
    <script src="js/login/validateLogin.js"></script>

</body>

</html>