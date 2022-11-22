<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | Arche</title>
  <link rel="stylesheet" href="{{ asset('reglog/style.css') }}">
</head>
<body id="body-reg">
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
                <input type="password" id="password" onkeyup="checkpassword(this)" class="input" name="password" placeholder="Enter Your Password">

            </div>
            <div class="wrap-2">


                <h3>Username</h3>
                <input type="text" class="input" name="username" placeholder="Enter Username">

                <h3>Phone Number</h3>
                <input type="number" class="input" name="phone" placeholder="Enter Your Email">

                <h3>Confirm Password</h3>
                <input type="password" id="confirm" onkeyup="checkpassword(this)" class="input" name="repassword" placeholder="Enter Your Password">
            </div>



            </div>

            <h3 class="ml-5">Kode Pemulihan</h3>
            <input type="number" name="pemulihan" class="input-lg" placeholder="Buat Kode Pemulihan">


            @if (session('error'))
                <p style="color : red;" id="message">{{ session('error') }}</p>
            @endif
            <i style="color : red;" id="message"></i>

            <button  class="btn" id="register">Register</button>
            {{-- disabled --}}
        </form>
      </div>
    </div>

  </section>

  <script type="text/javascript">

        function checkpassword(el) {
            // var password = document.getElementById('password'),
            //     repassword = document.getElementById('confirm'),
            //     message  = document.getElementById('message'),
            //     regis    = document.getElementById('register');
            // if(password.value != repassword.value){
            //     message.innerHTML = "Password & Konfirmasi password tidak sesuai.";
            // }else{
            //     message.innerHTML = "";
            //     regis.removeAttribute('disabled');
            // }
        }
    </script>
</body>
</html>
