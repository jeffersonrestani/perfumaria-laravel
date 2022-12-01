<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/all.mim.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/css/sb-admin-2.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/hamburgers.min.css">
    <link rel="stylesheet" href="/css/animsition.min.css">
    <link rel="stylesheet" href="/css/select2.min.css">
    <link rel="stylesheet" href="/css/daterangepicker.css">
    <link rel="stylesheet" href="/css/utilLogin.css">
    <link rel="stylesheet" href="/css/mainLogin.css">

</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login90-form validate-form">

                    <span class="login100-form-title p-b-17 p-t-15">
                        <img class="rounded-circle" src=/img/perfume-1.png width=35%>
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="username" placeholder="Usuário">
                        <span class="focus-input100" ></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="pass" placeholder="Senha">
                        <span class="focus-input100" ></span>
                    </div>

                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Lembrar-me
                        </label>
                    </div>

                    <div class="container-login100-form-btn">
                        <a class="login100-form-btn" href="{{ route('brand.create') }}">
                            Login
                        </a>
                    </div>

                    <div class="text-center p-t-30">
                        <a class="txt1" href="#">
                            Esqueceu a senha?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

</body>

</html>
