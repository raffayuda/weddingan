<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="{{asset('img/wedd.png')}}" rel="icon">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="background"></div>
  <div class="login-container col-5" id="loginContainer">
      @if ($message = Session::get('fail'))
          <div class="alert alert-info alert-dismissible fade show" role="alert">
              {{$message}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
    <div class="login-header">
      <h2>Welcome to <span> Wedayyy</span></h2>
      <p class="text-white">Login to your account</p>
    </div>
    <div class="login-form">
      <form action="/loginProses" method="POST">
        @csrf
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input type="text" name="email" placeholder="Email" required>
        </div>
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="row">
          <div class="col">
            <a class="btn btn-info col-12" href="{{URL::previous()}}">Back</a>
          </div>
          <div class="col">
            <button class="btn btn-info" type="submit">Login</button>
          </div>
        </div>
      </form>
    </div>
    <p class="mt-3 text-white">Don't you have an account yet? <a href="/register" class="text-white"> Sign up now</a></p>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>