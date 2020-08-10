<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
  <title>Login | MedBook</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- App css -->
  <link href="admin/assets/css/bootstrap-custom.min.css" rel="stylesheet" type="text/css" />
  <link href="admin/assets/css/app.min.css" rel="stylesheet" type="text/css" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="admin/assets/images/favicon.png">
</head>
<body>
  <!-- WRAPPER -->
  <div id="wrapper" class="d-flex align-items-center justify-content-center">
    <div class="auth-box ">
      <div class="left">
        <div class="content">
          <div class="header">
            <div class="logo text-center">
              @include('admin.errors')
              @if (session('warning'))
                          <div class="alert alert-danger">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              {{ session('warning') }}
                          </div>
                         @endif 
              <h1>MedBook</h1>
            </div>
            <p class="lead">Login to your account</p>
          </div>
          <form class="form-auth-small" method="post" action="login">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="signin-email" class="control-label sr-only">Email</label>
              <input type="email" class="form-control" id="signin-email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="signin-password" class="control-label sr-only">Password</label>
              <input type="password" class="form-control" id="signin-password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <label class="fancy-checkbox element-left custom-bgcolor-blue">
                <input type="checkbox">
                <span class="text-muted">Remember me</span>
              </label>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
            <div class="bottom">
              {{-- <span class="helper-text d-block">Don't have an account? <a href="/">Register</a></span> --}}
              <span class="helper-text"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Forgot password?</a></span>
            </div>
          </form>
        </div>
      </div>
      <div class="right">
        <div class="overlay"></div>
        <div class="content text">
          <h1 class="heading">Medbook - Health Records Management System</h1>
          {{-- <p>by The Develovers</p> --}}
        </div>
      </div>
    </div>
  </div>
  <!-- END WRAPPER -->
</body>

</html>