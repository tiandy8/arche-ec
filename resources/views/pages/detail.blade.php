@extends('part.full')
@section('content')

<section class="deprod">

    <span class="mendoan">
        @if (Auth::check() >= 1)

            @include('part.sm-menu')

        @endif

    </span>


    <div class="container">

        <div class="pertanda">
            <h3 class="pos-section"><a style="color: black; text-decoration:none;" href="{{ url('/store') }}">Arche</a> <img src="{{ url('assets/arrow-right.svg') }}" style="width: 20px" alt="">
                <span>Detail</span></h3>
        </div>

        <div class="detail-produk">

            <div class="top-detail">

                <img class="gambar-detail-produk" src="{{ url('photos/' . $data->gambar_produk)}}" alt="">

                <div class="info-produk">
                    <h2>{{ $data->nama_produk }}</h2>
                    <div class="rating">
                        <img src="{{ url('assets/star.svg') }}" alt="" style="height:20px;"><p>4.7</p>
                    </div>
                    <h3>Rp.{{ number_format($data->harga)}}</h3>
                    <hr class="garis-produk">



                            <div class="btn-ganti-qty">
                                <button id="decrement" onclick="stepper(this)"> - </button>
                                <input readonly type="number" class="qty-pembelian" min="1" max="{{ $data->stok }}" step="1" value="1" id="my-input">
                                <button id="increment" onclick="stepper(this)"> + </button>
                            </div>

                    <p class="stok-total">Stock: <span>{{ $data->stok }}</span></p>

                    <p id="subtotal">Subtotal:  <span>Rp. {{ number_format($data->harga   )  }} </span></p>

                    <div id="tombolan">
                        <a href="#" class="btn-beli">Beli</a>
                        <a href="#" class="btn-keranjang">+ Keranjang</a>
                    </div>

                </div>
            </div>


            <div class="bot-detail">
                <p class="deskprod">Deskripsi Produk</p>


                  <p style="font-size: 18px; line-height: 33px; ">{{ $data->deskripsi }}</p>

            </div>

        </div>

    </div>
</section>

<script src="{{ url('js/custom.js') }}">
</script>

@endsection
