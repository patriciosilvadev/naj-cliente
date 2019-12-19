<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/ampleAdmin/dist/css/style.min.css" rel="stylesheet">
        <title>Login</title>
    </head>
    <body class="hold-transition login-page" style="background-color: #b2e0f4;">
        <div class="main-wrapper">
            <div class="preloader">
                <div class="lds-ripple">
                    <div class="lds-pos"></div>
                    <div class="lds-pos"></div>
                </div>
            </div>

            <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
                <div class="auth-box">
                    <div id="loginform">
                        <div class="logo">
                            <h2 class="font-medium mb-3">NAJ- Area Cliente</h2>
                            <h5 class="font-medium mb-3">Faça login para iniciar sua sessão</h5>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <form class="form-horizontal mt-3" id="loginform" method="post" action="login">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                        </div>
                                        <input type="text" name="login" id="login" class="form-control form-control-lg" placeholder="Login" aria-label="Login" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                                        </div>
                                        <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Senha" aria-label="Password" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="form-group text-center">
                                        <div class="col-xs-12 pb-3">
                                            <button class="btn btn-block btn-lg btn-info" type="submit">Entrar</button>
                                        </div>
                                    </div>

                                    <input type="hidden" name="_method" value="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                            </div>

                            <br>
                            @if(Session::has('loginFails'))
                                <p class="alert {{ Session::get('alertClass', 'alert-info') }}">{{ Session::get('loginFails') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="/js/jquery.js"></script>
        <script src="/ampleAdmin/assets/libs/jquery/dist/jquery.min.js"></script>        
        <script src="/ampleAdmin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="/ampleAdmin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>        
        <script>
            $('[data-toggle="tooltip"]').tooltip();
            $(".preloader").fadeOut();
            $('#to-recover').on("click", function() {
                $("#loginform").slideUp();
                $("#recoverform").fadeIn();
            });
        </script>
    </body>
</html>