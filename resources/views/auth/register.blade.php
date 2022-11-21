<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | Arche</title>
  <link rel="stylesheet" href="{{ asset('reglog/style.css') }}">
</head>
<body>
  <section class="register">
    <div class="container">
      <div class="content">
        <form action="{{ route('register.store') }}" method="POST">
            @csrf
                <h1>Register</h1>
            <hr>
            <div class="wrap">
            <div class="wrap-1">

                <h3>Nama</h3>
                <input type="text" class="input" name="name" placeholder="Enter Your Name">

                <h3>Email</h3>
                <input type="email" class="input" name="email" placeholder="Enter Your Email">

                <h3>Password</h3>
                <input type="password" class="input" name="password" placeholder="Enter Your Password">

            </div>
            <div class="wrap-2">


                <h3>Username</h3>
                <input type="text" class="input" name="username" placeholder="Enter Username">

                <h3>Phone Number</h3>
                <input type="number" class="input" name="phone" placeholder="Enter Your Email">

                <h3>Confirm Password</h3>
                <input type="password" class="input" name="password" placeholder="Enter Your Password">

            </div>
            </div>
            <button  class="btn">Register</button>
        </form>
      </div>
    </div>

  </section>
</body>
</html>
