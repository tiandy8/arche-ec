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

            @forelse ( $datas as $data )


               <a href="/detail-produk/{{ $data->id }}" id="product-cage">
                    <div class="card-p">
                        <img src="{{ asset('photos/'.$data->gambar_produk) }}" alt="Denim Jeans" style="width:100%">

                        <h3>{{ $data->nama_produk }}</h3>

                        <p class="price">Rp.{{ number_format($data->harga) }}</p>

                        <div class="rating">
                            <img src="{{ url('assets/star.svg') }}" alt="" style="height:25px;"><p>4.7</p>
                        </div>
                    </div>
               </a>


            @empty

               Maaf, Tidak ada Produk yang tersedia saat ini



            @endforelse

        </div>



        </div>


    </div>
</section>

@endsection
