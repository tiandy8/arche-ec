@extends('part.full')


@section('content')

    <section class="invo">

        @include('part.sm-menu')
        <div class="container">



            <div class="top-inv">
                <img src="{{ url('assets/logo-2.png') }}"  alt="">


                <p>
                    Jl. Gandaria V No.90, RW.2, Jagakarsa, Kec. Jagakarsa
                    <span>+62 859-2226-3576 </span>
                </p>
            </div>


            <div class="mid-inv">

                <h1>Invoice</h1>

                <div class="penjelasanInv">
                    <span>No Invoice        : {{ $data->id }}</span>
                    <span>
                    Tanggal Pembelian : {{ $data->tanggal }}

                    </span>
                    <span>Alamat Pembelian : <br><br> {{ Auth::user()->alamat }}</span>
                </div>


                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Qty</th>
                            <th>Harga/pcs</th>
                            <th>Total</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data->orderDetail as $detail)
                        <tr class="active-row">
                            <td>{{  $detail->barang->nama_produk }}</td>
                            <td>{{  $detail->jumlah }}</td>
                            <td>Rp. {{  number_format($detail->barang->harga) }}</td>
                            <td>Rp. {{  number_format($detail->jumlah_harga) }}</td>
                        </tr>
                        @endforeach
                        <!-- and so on... -->
                    </tbody>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Total</td>
                            <td>Rp. {{ number_format($data->jumlah_harga) }}</td>
                        </tr>

                    </tbody>
                </table>


            </div>



                <div class="bot-inv">

                    @if ($data->status == 'unpaid')

                        <h3 class="bayarke">Bayar Ke :</h3>

                        <p> 0392173271887 ( <img src="{{ url('assets/bca.svg') }}" style="width:50px; " alt="BCA"> ) an. ARCHE</p>
                        <p> 0889437863432 (<img src="{{ url('assets/gopay.svg') }}" style="width:50px; " alt="GOPAY">,<img src="{{ url('assets/dana.svg') }}" style="width:50px; " alt="DANA">,<img src="{{ url('assets/qris.svg') }}" style="width:50px; " alt="qris">,<img src="{{ url('assets/ovov.svg') }}" style="width:50px; " alt="OVO">)</p>

                    @else

                        <h3 class="bayarke" style=" padding:10px;">Status Pemesanan : {{ $data->status }}</h3>

                    @endif



                </div>





        </div>
    </section>




@endsection
