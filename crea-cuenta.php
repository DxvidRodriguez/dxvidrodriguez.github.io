<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <!-- meta charec set -->
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Page Title -->
    <title>Reticket | Crea Cuenta</title>
    <!-- Meta Description -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="David Rodriguez Ortiz">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="lib/mdi-font/css/material-design-iconic-font.css">
    <!-- animate -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/newAccount.css">
    <!-- Twitter Bootstrap css -->
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <!-- Extra CSS-->
    <link rel="stylesheet" href="lib/select2/select2.min.css">
    <link rel="stylesheet" href="lib/datepicker/daterangepicker.css">

    <link rel="icon" type="ico" href="images/icons/boleto02.png" />
</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registro</h2>
                    <form method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <input class="inputForm" type="text" placeholder="Nombre(s)" name="nombreAlta">
                            </div>
                            <div class="col-md-6">
                                <input class="inputForm" type="text" placeholder="Apellidos" name="apellidosAlta">
                            </div>
                        </div>

                        <div class="row p-t-180">
                            <div class="col-md-6">
                                <input class="inputForm" type="text" placeholder="Correo Electrónico" name="correoAlta">
                            </div>
                            <div class="col-md-6">
                                <input class="inputForm" type="text" placeholder="Teléfono Móvil" name="movilAlta">
                            </div>
                        </div>

                        <div class="row p-t-180">
                            <div class="col-md-9">
                                <input class="inputForm" type="text" placeholder="Dirección" name="direccionAlta">
                            </div>
                            <div class="col-md-3">
                                <input class="inputForm" type="text" placeholder="Código Postal" name="zipAlta">
                            </div>
                        </div>

                        <div class="row p-t-180">
                            <div class="col-md-4">
                                <input class="inputForm" type="text" placeholder="Alcaldía/Municipio" name="municipioAlta">
                            </div>
                            <div class="col-md-4">
                                <input class="inputForm" type="text" placeholder="Colonia" name="coloniaAlta">
                            </div>
                            <div class="col-md-4">
                                <input class="inputForm" type="text" placeholder="Ciudad" name="ciudadAlta">
                            </div>
                        </div>

                        <div class="row p-t-180">
                            <div class="col-md-6">
                                <input class="inputForm" type="text" placeholder="Contraseña" name="contrasenaAlta">
                            </div>
                            <div class="col-md-6">
                                <input class="inputForm" type="text" placeholder="Confirmar Contraseña" name="confContrasenaAlta">
                            </div>
                        </div>

                        <div class="row p-t-180">
                            <div class="col-md-6">
                                <select class="inputForm" name="rolAlta">
                                    <option val="">Elige un tipo de perfil</option>
                                    <option val="1">Vendedor</option>
                                    <option val="2">Comprador</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                            <button class="btn btnCrear" type="submit">Crear cuenta</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript Files -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/6731221e93.js" crossorigin="anonymous"></script>

    <!-- Extra JS-->
    <script src="lib/select2/select2.min.js"></script>
    <script src="lib/datepicker/moment.min.js"></script>
    <script src="lib/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->