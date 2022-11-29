@extends('part.admin')
@section('content')


<div class="card">
    <div class="card-header">
        Form Tambah Data
    </div>
    <div class="card-body">
        <form action="{{ route('servis.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_service">Nama Service</label>
                <input type="text" name="nama_service" class="form-control">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control"  cols="30" rows="10" style="resize: none"></textarea>
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


@endsection
