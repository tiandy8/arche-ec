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
                <h1>Forgot Your Password ?</h1>
            <hr>

            @if (session('error'))
                <p style="color : red;" id="message">{{ session('error') }}</p>
            @endif

            <h3 class="ml-5">Masukkan Username</h3>
            <input type="text" name="username" class="input-lg" placeholder="Masukkan Username">

            <h3 class="ml-5">Masukkan Kode Pemulihan</h3>
            <input type="number" name="pemulihan" class="input-lg" placeholder="Masukkan Kode Pemulihan">


            <button  class="btn" style="margin-top: 50px">Reset</button>
        </form>
      </div>
    </div>

  </section>


</body>
</html>
