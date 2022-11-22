<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk  / Login | Arche Pet</title>
  <link rel="stylesheet" href="{{ asset('reglog/style.css') }}">
</head>
<body class="body-login">

  <section class="login">
    <div class="container">
      <div class="login-wrapper">
        <h1>LOGIN</h1>
        <hr class="garis-login">
        <div class="log-content">
            @if (session('error'))
                <p class="text-danger" style="color: red;">{{ session('error') }}</p>
            @elseif (session('status'))
                <p class="text-success" style="color: green;">{{ session('status') }}</p>
            @endif
          <form action="{{ route('login.store') }}" method="post">
             @csrf
                <h3>Email</h3>
                <input type="email" class="email" name="email" placeholder="Enter Your Email">

                <h3>Password</h3>
                <input type="password" class="password" name="password" placeholder="Enter Your Password">

                <div class="opt">
                    <a href="{{ route('forgot.password') }}" class="forgot-pw">Forgot Password ?</a>

                <button  class="btn-warning">Login</button>
                    Or
                <div class="signupwg">
                    <a href="#">
                    <img src="assets/google.svg" alt="">
                    <span>Sign Up with Google</span>
                    </a>
                </div>
            </form>

          <a href="{{ route('register') }}" class="no-acc">Not A Member? Sign Up</a>
          </div>

        </div>
      </div>
    </div>
  </section>

</body>
</html>
