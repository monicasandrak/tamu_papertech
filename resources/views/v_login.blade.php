
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Login</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('template3')}}/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('template3')}}/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('template3')}}/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('template3')}}/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('template3')}}/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a>Form Login</a>
            
            <!-- <small>Sistem Informasi Visitor dan Klinik PT. Papertech Indonesia</small> -->
        </div>
        <div class="card">
            <div class="body">
                <form action="{{route('postlogin')}}" method="POST">
                    <div class="msg">Login to start your session</div>
                    @csrf
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                        @error('username')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>  
                    @enderror
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>  
                    @enderror
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" {{old ('remember') ? 'checked' : '' }} id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-light-green waves-effect" type="submit">LOGIN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6 align-right">
                            <a href="{route ('password.request') }}">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="{{asset('template3')}}/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('template3')}}/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('template3')}}/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="{{asset('template3')}}/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="{{asset('template3')}}/js/admin.js"></script>
    <script src="{{asset('template3')}}/js/pages/examples/sign-in.js"></script>
</body>

</html>