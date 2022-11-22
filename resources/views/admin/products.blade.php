@extends('part.admin')

@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Daftar Produk</h3>
            <a href="{{ route('product.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Gambar Produk</th>
                            <th>Harga Produk</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($products as  $product)

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->nama_produk }}</td>
                                <td>
                                    <img src="{{ asset('photos/'.$product->gambar_produk) }}" width="200"  alt="">
                                </td>
                                <td>Rp.{{ number_format( $product->harga) }}</td>
                                <td>{{ $product->stok }}</td>
                                <td>
                                    <a href="/product/edit/{{ $product->id }}" class="btn btn-sm btn-warning">Edit</a>

                                    <form onclick="return confirm('anda yakin data di hapus?')" class="d-inline" action="{{ route('product.destroy',  $product->id) }}" >
                                        @csrf
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
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
