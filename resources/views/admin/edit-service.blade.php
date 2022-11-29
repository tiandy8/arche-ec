@extends('part.admin')
@section('content')

<div class="row">

    <div class="col">
        <div class="card">
            <div class="card-header">
                Form Edit Gambar
            </div>
            <div class="card-body">
                <form action="/servis/update-img/{{ $services->id }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                        <img src="{{ url('foto/'. $services->gambar_service) }}" class="img-fluid" alt="">
                    </div>
                    <div class="form-group">
                        <label for="gambar_service">Gambar</label>
                        <input type="file" class="form-control" name="gambar_service">
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
                <form action="/servis/update/{{ $services->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_service">Nama Produk</label>
                        <input type="text" name="nama_service" class="form-control" value="{{ $services->nama_service }}">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control"  cols="30" rows="10" style="resize: none">{{ $services->deskripsi }}</textarea>
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
