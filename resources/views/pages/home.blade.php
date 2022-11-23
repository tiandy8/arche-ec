<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Arche Pet | Home</title>
</head>
<body>

  <section class="hero">
    <img src="assets/logo.svg" id="logo" alt="">
    <div class="container">
      <div class="h-c">
        <div class="h-t">
          <h1>
            Love Your <span class="text-yellow">Pets</span>
          </h1>
          <p>"Providing <span class="text-yellow">Needed</span> For <span class="text-yellow">Your Love</span>ly Pets. "</p>

          <a href="{{ route('store') }}" class="btn-yellow">SHOP NOW!</a>

        </div>

        <div class="h-i">
          <img src="assets/cat-nobg.png" alt="">
        </div>

        <div class="clear"></div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" class="wave-effect" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L20,208C40,192,80,160,120,154.7C160,149,200,171,240,186.7C280,203,320,213,360,197.3C400,181,440,139,480,122.7C520,107,560,117,600,138.7C640,160,680,192,720,202.7C760,213,800,203,840,181.3C880,160,920,128,960,106.7C1000,85,1040,75,1080,80C1120,85,1160,107,1200,101.3C1240,96,1280,64,1320,48C1360,32,1400,32,1420,32L1440,32L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
  </section>


  <!-- section 1 -->
  <section class="kenapa-arche">
    <div class="container">
      <h1>Why Arche?</h1>
      <div class="slide-container">
        <div class="slide-content">
          <div class="card-wrapper">

            <div class="card">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="assets//joint.svg" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Improves Joint Health</h2>
                <p class="description">
                  Added glucosamine
                  and chondroitin
                </p>
              </div>
            </div>

            <div class="card">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="assets//love.svg" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Natural Nutrients</h2>
                <p class="description">Contributes to
                  your dog’s overall health
                </p>
              </div>
            </div>

            <div class="card">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="assets/feed.svg" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Hydrates and Nourishes</h2>
                <p class="description">Boost flavor
                  for picky eaters
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>

      <a href="{{ route('faq') }}" class="btn-yellow" id="lm-btn">Learn More</a>
    </div>
  </section>

<!-- Hot Offers -->
<section class="offers-tab">
  <div class="container">
    <div class="offers-wrapper">
      <h1>Hot <span>Offers</span></h1>


      @forelse ($datas as $data)

            <div class="offer-1">



                    <div class="items-big">
                        <img class="produk-besar" src="{{ url('photos/'. $data->gambar_produk) }}" alt="">

                        <div class="tawaran-desc">

                            <p>
                                {{ $data->nama_produk }}
                            </p>
                            <span>Rp.{{ number_format($data->harga) }}</span>

                            <a href="/store" class="btn-sm">Go to Shop</a>

                        </div>


                    </div>



                    <div class="items-sm">
                        <img class="produk-kecil" src="{{ url('photos/'. $data->gambar_produk) }}" alt="">
                    </div>


            </div>

            @empty

            <p>There's no Hot Offer's now :D</p>

            @endforelse


            {{-- <div class="offer-2">
                <div class="items-sm">
                    <img class="produk-kecil" src="{{ url('photos/'. $data->gambar_produk) }}" alt="">
                </div>
                <div class="items-big">

                </div>
            </div> --}}





    </div>
  </div>

</section>



<!-- Our Services -->
<section class="services">
  <div class="container">
    <h1>Our Services</h1>

    <div class="services-wrapper">
      <div class="rectangle" id="s-1">
        <div class="bg-rectangle"></div>
        <img src="assets/headset.svg" alt="">
        <div class="services-content">
          <h3>Pet Clinic</h3>
          <p>Apoquel is an oral tablet that works differently than other allergy medications. It goes straight to the source to help relieve itch and inflammation at its core—addressing the underlying cause of irritation</p>
          <a href="#" class="btn">Explore</a>
        </div>
      </div>

      <div class="rectangle" id="s-2">
        <div class="bg-rectangle" id="ss-2"></div>
        <img src="assets/baju.png" alt="">
        <div class="services-content">
          <h3>Clothes</h3>
          <p>Is your dog at the top of his/her fashion game? Don't forget a dog bikini or swim trunks for your pet's next vacation! Whether poolside, at the beach, or on the yacht, your pooch will look summer-ready</p>
          <a href="#" class="btn">Explore</a>
        </div>

      </div>

      <div class="rectangle" id="s-3">
        <div class="bg-rectangle"></div>

        <img src="assets/sciccors.svg" alt="">
        <div class="services-content">
          <h3>Breed-specific Haircuts</h3>
          <p>Regular grooming is essential to your pet's health as it helps prevent skin issues such as matting.</p>
          <a href="#" class="btn">Explore</a>
        </div>
    </div>

    </div>
  </div>

</section>

<!-- Our Locations -->

  <section class="loc">
    <div class="container">
      <h1>Visit Our Store
          <hr>

      </h1>
      <div class="loc-wrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d279.7707707814663!2d106.81559090927043!3d-6.332081294915467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ef55badebb25%3A0xb33718351614cd96!2sSOTO%20TANGKAR%20%26%20SATE%20KUAH%20SAPI%20MANTAP%20JAYA!5e0!3m2!1sid!2sid!4v1666005698784!5m2!1sid!2sid" width="500" height="350" style="border:2px solid #FBBD08; border-radius: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <p>






          <span>Location :</span><br><br>

              Jl. Gandaria V No.90, RW.2, Jagakarsa, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12620

            <br><br>

          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur officia nemo, quam veniam quis voluptas nobis, voluptatum et, quo inventore nulla! Dignissimos minima nesciunt deserunt! Nemo at hic dolores animi sed, consequuntur rem id vitae enim officiis eveniet! Nostrum aliquam ducimus laboriosam. Libero, iusto eius!



            </p>
      </div>
    </div>
  </section>

  @include('part.footer')

</body>
</html>
