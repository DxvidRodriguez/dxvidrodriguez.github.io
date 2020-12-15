
$(document).ready(function () {
    $("#form-login").validate({
        rules: {
            inputEmail: {
                required: true,
                email: true
            },
            inputPassword: {
                required: true,
                minlength: 8,
                maxlength: 25
            }
        },
        messages: {
            inputEmail: {
                required: "Ingrese su correo electrónico",
                email: "Ingresa una dirección de correo valida"
            },
            inputPassword: {
                required: "Ingrese su contraseña",
                minlength: "La contraseña es de, al menos, 8 caracteres",
                maxlength: "La contraseña es de máximo 25 caracteres"
            }
        },
        submitHandler: function (form) {
            var datos = $('#form-login').serialize();
            $.ajax({
                type: "POST",
                url: "CxWeb.php?flag=1",
                dataType: "json",
                data: datos,
                success: function (response) {
                    console.log(response);
                    if (response.Msg == "SuccessLogin") {
                        console.log("LoginOK");
                        $("#msgLogin").fadeIn().text("Ingresando");
                        setTimeout(function () {
                            $('#msgLogin').fadeOut('fast');
                        }, 105000);
                        //window.location.href = 'ver-proyectos.php';
                    } else if (response.Msg == 'CuentaDesactivada') {
                        console.log("CuentaD");
                        $("#msgLogin").fadeIn().text("Cuenta aún no activada.");
                        setTimeout(function () {
                            $('#msgLogin').fadeOut('fast');
                        }, 8000);
                        /*$('#actualiza').modal('show'); */
                    } else if (response.Msg == 'ErrorLogin') {
                        console.log("ErrorL");
                        $("#msgLogin").fadeIn().text("Usuario y/o Contraseña Incorrecta");
                        setTimeout(function () {
                            $('#msgLogin').fadeOut('fast');
                        }, 4000);
                    } else {
                        console.log("ErrorS");
                        $("#msgLogin").fadeIn().text("Error al iniciar sesión");
                        setTimeout(function () {
                            $('#msgLogin').fadeOut('fast');
                        }, 4000);
                    }
                }
            });
            return false;
        }
    });
});