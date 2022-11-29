@extends('part.admin')

@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Daftar Service</h3>
            <a href="{{ route('servis.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Service</th>
                            <th>Gambar</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($serviss as  $servis)

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $servis->nama_service }}</td>
                                <td>
                                    <img src="{{ asset('foto/'. $servis->gambar_service) }}" width="200"  alt="">
                                </td>
                                <td>{{ $servis->deskripsi }}</td>
                                <td>
                                    <a href="/servis/edit/{{ $servis->id }}" class="btn btn-sm btn-warning">Edit</a>

                                    <form onclick="return confirm('anda yakin data di hapus?')" class="d-inline" action="{{ route('servis.destroy',  $servis->id) }}" >
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
