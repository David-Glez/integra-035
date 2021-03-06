<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio de Sesión</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    
</head>
<body class="hold-transition login-page">
    <div class="login-box">

        <div class="card">
            <img src="/img/integra.png"  class="card-img-top" width="80%" alt="Integra Automation"/>
            <div class="card-bpdy login-card-body">
                
                <form action="{{ url('/login') }}" method="post">
                    @csrf
                    <!-- en esta parte hay que cambiar todo el campo a tet y los valores por la variable de nombre de usuario-->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="usuario" placeholder="Usuario">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @if ($errors->has('usuario'))
                            <span class="help-block">
                                <strong>{{ $errors->first('usuario') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!-- Mismo caso para la contraseña, se cambia por el nombre del campo de la bd -->
                    <div class="input-group mb-3 has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                    </div>
                </form>

              <!---------  <a href="{{ url('/password/reset') }}">I forgot my password</a><br>
                <a href="{{ url('/register') }}" class="text-center">Register a new membership</a>--->
            </div>
        </div>
    </div>

    <!-- /.login-logo -->
    {{-- <div class="login-box-body">
        <!--<p class="login-box-msg"></p>--->

        <form method="post" action="{{ url('/login') }}">
            @csrf
            <!-- en esta parte hay que cambiar todo el campo a tet y los valores por la variable de nombre de usuario-->
            <div class="form-group has-feedback ">
                <input type="text" class="form-control" name="usuario"  placeholder="Usuario">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('usuario'))
                    <span class="help-block">
                    <strong>{{ $errors->first('usuario') }}</strong>
                </span>
                @endif
            </div>
            <!-- Mismo caso para la contraseña, se cambia por el nombre del campo de la bd -->
            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Contraseña" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

            </div>
            <div class="row">
               <!-- <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>-->
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

      <!-------  <a href="{{ url('/password/reset') }}">I forgot my password</a><br>
        <a href="{{ url('/register') }}" class="text-center">Register a new membership</a>-->------->

    </div> --}}

    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.min.js"></script>
</body>
</html>
