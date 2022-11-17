<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript">

    $(function() {

      $('.faq-points').find('img').click(function() { // mencari gambar yang ada di class faq-points
          var self = this; // meletakkan pointer ke elment yang di klik

          /*
            DOM => DOcument Obeject Model (kita bisa mengambil element dokumen dengan lebih pendek dibanding pakai js)
            document.getElementById("namaid");
            document.getElementsByClassName("namaclass");
            $("#namaid")
            $(".namaclass")
          */

          if(!$(self).parents('.faq-points').hasClass("show")){

            $(self).attr("src", 'assets/minus-square.svg');
            $(self).parents('.faq-points').addClass('show'); // tambahkan class show
            $(self).parents('.faq-points').find('p').slideDown();
          }else{

            $('.faq-points').find('img').attr("src", 'assets/add-square.svg');
            $(self).parents('.faq-points').removeClass('show');
            $(self).parents('.faq-points').find('p').slideUp();
          }
        });
    });
  </script>
  <title>FAQ | Arche</title>
</head>
<body>

   <!-- Navbar -->
   @include('part.header')
<!-- End of Navbar     -->

<!-- Isi FAQ -->

<section class="faq-section">
   <div class="long-nav">
      <h1>FAQ'S</h1>
   </div>
   <div class="container">
    <h3 class="pos-section">Arche <img src="assets/arrow-right.svg" alt="">
      <span>Events</span></h3>

      <div class="faq-wrapper">
        <div class="faq-points">
          <img src="assets/add-square.svg" alt="">
          <div class="faq-text">
            <h2>Mengapa Arche Lebih Baik Daripada Toko Yang Lain</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi cum id voluptatem repellat quos animi, obcaecati corporis cupiditate consequatur repellendus, maxime in totam error corrupti temporibus quo rerum, dolores ipsum?</p>
          </div>
        </div>

        <div class="faq-points">
          <img src="assets/add-square.svg" alt="">
          <div class="faq-text">
            <h2>Mengapa Arche Lebih Baik Daripada Toko Yang Lain</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi cum id voluptatem repellat quos animi, obcaecati corporis cupiditate consequatur repellendus, maxime in totam error corrupti temporibus quo rerum, dolores ipsum?</p>
          </div>
        </div>

        <div class="faq-points">
          <img src="assets/add-square.svg"" alt="">
          <div class="faq-text">
            <h2>Mengapa Arche Lebih Baik Daripada Toko Yang Lain</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi cum id voluptatem repellat quos animi, obcaecati corporis cupiditate consequatur repellendus, maxime in totam error corrupti temporibus quo rerum, dolores ipsum?</p>
          </div>
        </div>
      </div>
   </div>
</section>

<!-- end of faq -->

<!-- footer -->
@include('part.footer')

  <!-- End of footer -->
</body>
</html>
