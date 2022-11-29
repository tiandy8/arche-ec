@extends('part.full')

@section('content')


    <section>

        @include('part.sm-menu')

        <div class="pertanda"><h3 class="pos-section" style="margin-left: 30px">Arche <img src="assets/arrow-right.svg" alt="">
            <span>Keranjang Belanja</span></h3></div>

        <div class="container">




                <h1 class="judul-keranjang">Keranjang</h1>
                <hr class="garis-keranjang">

                @php
                    $jml = 0;
                @endphp
                @foreach ($barangs as $barang)
                @php
                    $jml += $barang->jumlah_harga;
                @endphp

                <div class="cart-items">
                    <img src="{{ url('photos/' . $barang->barang->gambar_produk) }}" alt="">
                    <div class="cart-details">
                        <h3>{{ $barang->barang->nama_produk }}</h3>
                        <small>Stok: {{ $barang->barang->stok }}</small>
                        <p>Rp{{ str_replace(',','.', number_format($barang->barang->harga)) }}                  <span style="margin-left: 10%; font-weight:600;">Subtotal : Rp{{ str_replace(',','.', number_format($barang->barang->harga * $barang->jumlah)) }} </span></p>
                        <div class="cd-btm">
                            <a href="{{ url('/cart/apus-brg/'. $barang->barang_id) }}"><img src="{{ url('assets/trash.svg') }}" style="width:27px; height:30px;" alt=""></a>

                            <form action="{{ url('/cart/ganti-qty/'. $barang->barang_id) }}" method="post">
                                @csrf
                                <div class="btn-ganti-qty">
                                    <button id="decrement" onclick="stepper(this, 'my-input{{ $barang->id }}', 'decrement')" type="button"> - </button>
                                    <input readonly type="number" name="jumlah_pesan" class="qty-pembelian" min="1" max="{{ $barang->barang->stok }}" step="1" value="{{ $barang->jumlah  }}" id="my-input{{ $barang->id }}">
                                    <button id="increment" onclick="stepper(this, 'my-input{{ $barang->id }}', 'increment')" type="button"> + </button>
                                </div>
                                <button id="updet" class="btn">Update</button>
                            </form>
                        </div>
                    </div>
                </div>



                @endforeach








                <div class="ringkasan-belanja">

                    <div class="rb-l">
                        <div id="inputPreview">

                            <a href="{{ route('apus.semua') }}" style="text-decoration:none; color:black;">Hapus Semua</a>

                        </div>



                    </div>


                    <div class="rb-m">
                        <h4>Jumlah Barang : ( {{ count($barangs) }} barang )  </h4>
                    </div>

                    <div class="rb-r">
                        <form method="post" action="checkout">
                            @csrf
                            <h4>Total Harga  Rp. {{  str_replace(',','.', number_format($jml)) }}</h4>
                            <input type="hidden" value="{{  $jml }}" name="total">
                            @if ($jml >= 1)
                                <button type="submit" name="checkout" value="checkout" class="btn-lebar">Checkout</button>
                            @else
                                <button disabled type="submit" name="checkout" style="background: grey  ; opacity:0.5;" value="checkout" class="btn-lebar">Checkout</button>

                            @endif
                        </form>
                    </div>
                </div>





        </div>

    </section>




<script src="{{ url('js/custom.js') }}">
</script>

@endsection
