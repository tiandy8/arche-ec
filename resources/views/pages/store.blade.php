@extends('part.full')

@section('content')

<section class="store-content">



    @if (Auth::check() >= 1)
        @include('part.sm-menu')

    @endif


    <div class="container">

        @include('part.small-nav')


        <div class="store-content">


            <div class="p-w">
                <div class="card-p">
                    <img src="assets/catnip.jpg" alt="Denim Jeans" style="width:100%">

                    <h3>Lorem ipsum dolor sit amet.</h3>

                    <p class="price">Rp.40,000</p>

                    <div class="rating">
                        <img src="assets/star.svg" alt="" style="height:25px;"><p>4.7</p>
                    </div>

                </div>

                <div class="card-p">
                    <img src="assets/wskas.jpg" alt="Denim Jeans" style="width:100%">

                    <h3>Whiskas</h3>

                    <p class="price">Rp.40,000</p>

                    <div class="rating">
                        <img src="assets/star.svg" alt="" style="height:25px;"><p>4.7</p>
                    </div>

                </div>

                <div class="card-p">
                    <img src="assets/wskas.jpg" alt="Denim Jeans" style="width:100%">

                    <h3>Whiskas</h2>

                    <p class="price">Rp.40,000</p>

                    <div class="rating">
                        <img src="assets/star.svg" alt="" style="height:25px;"><p>4.7</p>
                    </div>

                </div>

                <div class="card-p">
                    <img src="assets/wskas.jpg" alt="Denim Jeans" style="width:100%">

                    <h3>Whiskas</h3>

                    <p class="price">Rp.40,000</p>

                    <div class="rating">
                        <img src="assets/star.svg" alt="" style="height:25px;"><p>4.7</p>
                    </div>

                </div>
            </div>




        </div>


    </div>
</section>

@endsection
