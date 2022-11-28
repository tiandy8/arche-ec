@extends('part.admin')

@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Daftar Pesanan</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Invoice</th>
                            <th>Alamat Pengiriman</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($datas as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->user->alamat }}</td>
                                <td>{{ $data->jumlah_harga }}</td>
                                <td>{{ $data->status }}</td>
                                <td>
                                    <a href="/orders/detail/{{ $data->id }}" class="btn btn-sm btn-warning">Detail</a>


                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td class="text-center" colspan="6">Data Kosong</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
