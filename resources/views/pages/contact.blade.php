<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Arche</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navbar -->
    @include('part.header')
<!-- End of Navbar     -->

<div class="hubungi-kami">
    <div class="container">

        <h3 class="pos-section">Arche <img src="assets/arrow-right.svg" alt="">
            <span>Contact Us</span></h3>

            <div class="hubungi-kami-content">
                <img src="assets/logo-2.png" alt="">
                <h1>Question Or Comments</h1>
                <p>Please fill out the form below and someone from the Arche team will respond within 24 hours!</p>

                <div class="contact-coloumn">
                    <div class="kontak-atas">
                        <span>
                            <h3>Name</h3>
                        <input type="text" class="input-kontak" placeholder="Enter Your Name">
                        </span>
                        <span>
                            <h3>Email</h3>
                        <input type="email" class="input-kontak" placeholder="Enter Your Email">
                        </span>
                    </div>
                    <h3 class="kontak-h3-message">Message</h3>
                    <textarea name="pesan" class="kontak-pesan" cols="50" rows="15" placeholder="Enter Your Message"></textarea>

                    <a href="#" class="kontak-btn">Send</a>
                </div>
    </div>
    <div class="lower-contact">
        <h2>Anda Juga Dapat Menghubungi Kami melalui :</h2>
    <ul class="list kontak">
        <li><img src="assets/story.svg" alt="">
            <p>Melalui Whatsapp
                Layanan Whatsapp <br>
                +62 859-2226-3576 , aktif selama 24 jam</p>
        </li>
        <li><img src="assets/story.svg" alt="">
            <p>Melalui Offline Store kami  <br>
                Anda bisa melihat lokasi offline store kami <a href="offline-store.html">disini</a></p>
        </li>
    </ul>
    </div>
</div>










<!-- footer -->
@include('part.footer')

  <!-- End of footer -->
</body>
</html>
