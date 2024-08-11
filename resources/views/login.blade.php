<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Website Pariwisata </title>
  <link rel="shortcut icon" href="img/logo.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css')}}">

</head>

<body class="hold-transition login-page" style="background-image: url('img/4.jpg'); height: 500px; width: 100%; background-size: cover;
 background-repeat: no-repeat; background-position: center;">
  <div class="login-box" style="margin-top: 150px;">

    <div class="card card-outline" style="padding: 30px;">
      <div class="card-header text-center">
        <a href="/login" class="h1"><b>Masuk Akun</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg" style="font-size: 12px;">Masukkan email dan password anda</p>

        <form action="/loginuser" method="post" class="form-login">
          @csrf
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-4 text-center">
              <button type="submit" class="btn btn-primary btn-block" style="background-color: rgb(251, 153, 16); border:none;">Masuk</button>
            </div>
          </div>
          <p class="mb-0" style="margin-top: 20px;">
            Belum Punya Akun? <a href="/register" class="text-center">&nbsp;Register</a>
          </p>
        </form>

      </div>
    </div>
  </div>

  <script src="{{asset('template/plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('template/dist/js/adminlte.min.js')}}"></script>
</body>

</html>