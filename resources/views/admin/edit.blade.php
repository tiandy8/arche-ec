@extends('part.admin')
@section('content')

<div class="row">

    <div class="col">
        <div class="card">
            <div class="card-header">
                Form Edit Gambar
            </div>
            <div class="card-body">
                <form action="/product/update-img/{{ $product->id }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                        <img src="{{ url('photos/'. $product->gambar_produk) }}" class="img-fluid" alt="">
                    </div>
                    <div class="form-group">
                        <label for="gambar_produk">Gambar</label>
                        <input type="file" class="form-control" name="gambar_produk">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>


    <div class="col-lg-8">

        <div class="card">
            <div class="card-header">
                Form Edit Data
            </div>
            <div class="card-body">
                <form action="/product/update/{{ $product->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control" value="{{ $product->nama_produk }}">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control"  cols="30" rows="10" style="resize: none">{{ $product->deskripsi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control" value="{{ $product->harga }}">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" name="stok" class="form-control" value="{{ $product->stok }}">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>

    </div>


</div>
</div>


@endsection
