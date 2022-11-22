<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password | Arche</title>
  <link rel="stylesheet" href="{{ asset('reglog/style.css') }}">
</head>
<body id="body-reg">
  <section class="register">
    <div class="container">
      <div class="content">
        <form action="{{ route('forgot.send') }}" method="POST">
            @csrf
                <h1>Reset Your Password</h1>
            <hr>

            @if (session('error'))
                <p style="color : red;" id="message">{{ session('error') }}</p>
            @endif

            <h3 class="ml-5">Your Username : Handoko</h3>

            <h3 class="ml-5">Masukkan Password Baru</h3>
            <input type="password" name="password" class="input-lg" placeholder="Masukkan Password Baru">


            <button  class="btn" style="margin-top: 50px">Reset</button>
        </form>
      </div>
    </div>

  </section>


</body>
</html>
