@extends('part.full')

@section('content')


    <section>

        @include('part.sm-menu')

        <div class="pertanda"><h3 class="pos-section" style="margin-left: 30px">Arche <img src="assets/arrow-right.svg" alt="">
            <span>Keranjang Belanja</span></h3></div>

        <div class="container">




                <h1 class="judul-keranjang">Keranjang</h1>
                <hr class="garis-keranjang">

                <div class="cart-items">

                    <div id="inputPreview">
                        <input name="cssCheckbox" id="demo_opt_1" type="checkbox" class="css-checkbox">
                        <label for="demo_opt_1"></label>
                    </div>

                    <img src="{{ url('assets/wskas.jpg') }}" alt="">

                    <div class="cart-details">
                        <h3>HERBAL SN(harga untuk 1 renteng isi 10 bungkus)</h3>
                        <small>Stok: 72</small>
                        <p>Rp70.000</p>


                        <div class="cd-btm">
                            <img src="{{ url('assets/trash.svg') }}" style="width:27px; height:30px;" alt="">
                            <div class="btn-ganti-qty">
                                <button id="decrement" onclick="stepper(this)"> - </button>
                                <input readonly type="number" class="qty-pembelian" min="1" max="7" step="1" value="1" id="my-input">
                                <button id="increment" onclick="stepper(this)"> + </button>
                            </div>
                        </div>

                    </div>

                </div>








                <div class="ringkasan-belanja">

                    <div class="rb-l">
                        <div id="inputPreview">
                            <input name="cssCheckbox" id="demo_opt_1" type="checkbox" class="css-checkbox">
                            <label for="demo_opt_1"> Pilih Semua  </label>
                            |
                            <a href="#" style="text-decoration: none; color:black;">Hapus</a>

                        </div>



                    </div>


                    <div class="rb-m">
                        <h4>Jumlah Barang : ( 0 barang )  </h4>
                    </div>

                    <div class="rb-r">
                        <h4>Total Harga  Rp. 100,000</h4>
                        <a href="#" class="btn-lebar">Checkout</a>
                    </div>
                </div>





        </div>

    </section>




<script src="{{ url('js/custom.js') }}">
</script>

@endsection
