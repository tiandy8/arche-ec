
@extends('part.full')

@section('content')

<section class="service">
    <div class="container">


        @include('part.small-nav')

        <div class="services-konten">


            <div class="service-wrap">


                <div class="service-content">
                    <img src="assets/catnip.jpg" class="service-img" alt="">
                    <div class="service-desc">
                        <h3>Pet Hotel</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ipsam doloribus, nemo, ea perspiciatis tempora excepturi commodi enim repellat minus voluptatibus quos fuga, facilis et doloremque quaerat suscipit voluptatem quae.</p>
                        <div class="rating">
                            <img src="assets/star.svg" alt="" style="height:25px;"><p>4.7</p>
                        </div>
                    </div>
                </div>

                <div class="service-content">
                    <img src="assets/catnip.jpg" class="service-img" alt="">
                    <div class="service-desc">
                        <h3>Pet Hotel</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ipsam doloribus, nemo, ea perspiciatis tempora excepturi commodi enim repellat minus voluptatibus quos fuga, facilis et doloremque quaerat suscipit voluptatem quae.</p>
                        <div class="rating">
                            <img src="assets/star.svg" alt="" style="height:25px;"><p>4.7</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </div>
</section>


@endsection
