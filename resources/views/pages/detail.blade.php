@extends('part.full')
@section('content')

<section class="deprod">
    <div class="container">

        <h3 class="pos-section">Arche <img src="{{ url('assets/arrow-right.svg') }}" style="width: 20px" alt="">
            <span>Detail</span></h3>

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



                    <div class="input-group inline-group">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-secondary btn-minus">
                            <i class="fa fa-minus"></i>
                          </button>
                        </div>

                        {{request()->input('quantity')}}

                            <input class="form-control quantity" min="0" name="quantity" value="" type="number">


                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary btn-plus">
                            <i class="fa fa-plus"></i>
                          </button>
                        </div>
                    </div>

                    <p class="stok-total">Stock: <span>{{ $data->stok }}</span></p>

                    <p id="subtotal">Subtotal:  <span>{{ $data->harga * $nameValue }}</span></p>

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

@endsection
