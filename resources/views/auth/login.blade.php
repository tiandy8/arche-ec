<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk  / Login | Arche Pet</title>
  <link rel="stylesheet" href="{{ asset('reglog/style.css') }}">
</head>
<body>

  <section class="login">
    <div class="container">
      <div class="login-wrapper">
        <h1>LOGIN</h1>
        <hr class="garis-login">
        <div class="log-content">
          <h3>Email</h3>
          <input type="email" class="email" placeholder="Enter Your Email">

          <h3>Password</h3>
          <input type="password" class="password" placeholder="Enter Your Password">

          <div class="opt">
            <a href="#" class="forgot-pw">Forgot Password ?</a>

          <a href="#" class="btn-warning">Login</a>
              Or
          <div class="signupwg">
            <a href="#">
              <img src="assets/google.svg" alt="">
              <span>Sign Up with Google</span>
            </a>
          </div>

          <a href="#" class="no-acc">Not A Member? Sign Up</a>
          </div>

        </div>
      </div>
    </div>
  </section>

</body>
</html>
