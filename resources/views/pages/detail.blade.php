@extends('part.full')
@section('content')

<section class="deprod">
    <div class="container">

        <h3 class="pos-section">Arche <img src="{{ url('assets/arrow-right.svg') }}" style="width: 20px" alt="">
            <span>Detail</span></h3>

        <div class="detail-produk">

            <div class="top-detail">

                <img class="gambar-detail-produk" src="{{ url('photos/catnip.jpg')}}" alt="">

                <div class="info-produk">
                    <h2>Whiskas Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, odit!</h2>
                    <div class="rating">
                        <img src="{{ url('assets/star.svg') }}" alt="" style="height:20px;"><p>4.7</p>
                    </div>
                    <h3>Rp. 40,000</h3>
                    <hr class="garis-produk">
                    <p class="stok-total">Stock: <span>99999</span></p>

                    <p id="subtotal">Subtotal:  <span> Rp 80,0000</span></p>

                    <div id="tombolan">
                        <a href="#" class="btn-beli">Beli</a>
                        <a href="#" class="btn-keranjang">+ Keranjang</a>
                    </div>

                </div>
            </div>


            <div class="bot-detail">
                <p class="deskprod">Deskripsi Produk</p>


                  <p style="font-size: 18px; line-height: 33px; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ea enim architecto, quidem ipsum cupiditate modi consequuntur cum? Soluta iure deserunt suscipit recusandae dolore tenetur deleniti. Assumenda eius molestias quas ratione, impedit aspernatur quod, rerum ipsa nihil dolore adipisci odio sunt quisquam magni. Hic iusto, incidunt neque voluptas minima eveniet molestiae aliquam id obcaecati reprehenderit aliquid nemo eligendi aut, nihil est ducimus laudantium laboriosam nostrum deserunt. Rem fugit unde at! Voluptas recusandae culpa aut, eius tempora commodi minima omnis natus beatae magnam, veritatis sed corporis eligendi itaque saepe officia blanditiis aliquam sequi eveniet, ipsam eos laboriosam consectetur soluta. Officiis mollitia nihil non libero eveniet harum facilis obcaecati ad autem, totam porro. Totam at veritatis laudantium rem placeat. Veniam, soluta nulla.</p>

            </div>

        </div>

    </div>
</section>

@endsection
