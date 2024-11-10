<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('img/wedd.png')}}" rel="icon">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="background"></div>
  <div class="login-container col-5" id="loginContainer">
    <div class="login-header">
      <h2>Welcome to <span> Wedayyy</span></h2>
      <p class="text-white">Register to your account</p>
    </div>
    <div class="login-form">
      <form action="/registerProses" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col">
            <div class="input-group">
              <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="Nama" required>
            </div>
          </div>
          <div class="col">
            <div class="input-group">
              <i class="fas fa-user"></i>
              <input type="text" name="email" placeholder="Email" required>
            </div>
          </div>
        </div>
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="text" name="profesi" placeholder="Profesi">
        </div>
        <label for="">Foto</label>
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="file" name="image" placeholder="Password">
        </div>
        <button type="submit">Register</button>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>