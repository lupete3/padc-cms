

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PADC | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">

    <div class="login-box">
        <div class="login-logo">
            <a href="{{route('home.index')}}"><b>PADC</b> asbl</a>
        </div>
    <!-- /.login-logo -->
    <div class="card">

        @if(session('status'))
            <div class="alert alert-danger" >
                {{session('status')}}
            </div>
        @endif
        <x-auth-session-status class="alert alert-danger" :status="session('status')" />

        <div class="card-body login-card-body">
        <p class="login-box-msg">Connectez-vous pour accéder à votre session</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group mb-3">
            <input type="email" class="form-control" :value="__('Email')" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus>
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-7">
                <div class="icheck-primary">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">
                    Rester connecté
                </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-5">
                <button type="submit" class="btn btn-primary btn-block">Connexion</button>
            </div>
            <!-- /.col -->
            </div>
        </form>
        <!-- /.social-auth-links -->

        <p class="mb-1">
            <a href="{{ route('password.request') }}">J'ai oublié mon mot de passe</a>
        </p>
        </div>
        <!-- /.login-card-body -->
    </div>
    </div>
<!-- /.login-box -->
<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
