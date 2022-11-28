@extends('part.full')


@section('content')


<section>
    @include('part.sm-menu')

    <div class="container">
        <div class="mid-inv">

            <h1>Daftar Pesanan</h1>



            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Kode INV</th>
                        <th>Tanggal Pemesanan</th>
                        <th>Total Harga</th>
                        <th>Status Pemesanan</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($datas as $data)


                        <tr class="iney">


                    @if(Auth::user()->id == $data->user_id)

                            <td>{{ $data->id }}</td>
                            <td>{{ $data->tanggal }}</td>
                            <td>Rp. {{ number_format($data->jumlah_harga) }}</td>
                            <td>{{ $data->status }}</td>
                            <td><a href="{{ url('invoice/' . $data->id) }}" class="btn" style="padding: 7px 15px ">Detail</a></td>

                     @endif

                        </tr>


                    @endforeach




                    <!-- and so on... -->
                </tbody>

            </table>


        </div>

    </div>
</section>


@endsection
