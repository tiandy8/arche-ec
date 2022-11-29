@extends('part.full')

@section('content')



<section class="faq-section">
    <div class="long-nav">
       <h1>FAQ'S</h1>
    </div>
    <div class="container">
        <div class="pertanda">
            <h3 class="pos-section">Arche <img src="assets/arrow-right.svg" alt="">
                <span>FAQ</span></h3>

        </div>

       <div class="faq-wrapper">
         <div class="faq-points">
           <img src="assets/add-square.svg" alt="">
           <div class="faq-text">
             <h2>Mengapa Arche Lebih Baik Daripada Toko Yang Lain</h2>
           <p>	Bermitra dengan organisasi atau perkumpulan pecinta hewan yang dimana mereka akan diberi akses dan potongan harga sesuai dengan kontrak kerja sama yang sudah disepakati sebelumnya.</p>
           </div>
         </div>

         <div class="faq-points">
           <img src="assets/add-square.svg" alt="">
           <div class="faq-text">
             <h2>Target pasar ARCHE PET SHOP </h2>
           <p>adalah orang orang yang hobi memelihara hewan yang berada di wilayah toko.</p>
           </div>
         </div>

         <div class="faq-points">
            <img src="assets/add-square.svg" alt="">
            <div class="faq-text">
              <h2>Dasar Pemikiran ARCHE PET SHOP </h2>
            <p>Menciptakan peluang usaha dibidang pet shop merupakan salah satu bentuk usaha yang potensial dalam rangka pendapatan laba yang besar, salah satunya usaha per service yang bisa mendapatkan sebuah nilai potensial keuntungan di lingkungan perkotaan maupun perdesaan.
                Berawal dari banyaknya minat warga Indonesia terhadap hewan peliharaan dan demi memenuhi kebutuhan serta permintaan masyarakat untuk kebutuhan hewan peliharaan kesayangannya, kami hadir untuk memenuhi itu semua.
                </p>
            </div>
          </div>


         <div class="faq-points">
           <img src="assets/add-square.svg" alt="">
           <div class="faq-text">
             <h2>Jam Operasional ARCHE PET</h2>
           <p>•	24 jam pet health untuk keadaan darurat</p>
           </div>
         </div>
       </div>
    </div>
 </section>








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

@endsection
