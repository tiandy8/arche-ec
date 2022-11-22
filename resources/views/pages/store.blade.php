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

            @foreach ( $datas as $data )


                <div class="card-p">
                    <img src="{{ asset('photos/'.$data->gambar_produk) }}" alt="Denim Jeans" style="width:100%">

                    <h3>{{ $data->nama_produk }}</h3>

                    <p class="price">Rp.{{ number_format($data->harga) }}</p>

                    <div class="rating">
                        <img src="assets/star.svg" alt="" style="height:25px;"><p>4.7</p>
                    </div>
                </div>


            @endforeach

        </div>



        </div>


    </div>
</section>

@endsection
