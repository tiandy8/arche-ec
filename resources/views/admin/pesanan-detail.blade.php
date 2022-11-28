@extends('part.admin')
@section('content')


        <div class="card">
            <div class="card-header">
                Form Edit Data
            </div>
            <div class="card-body">
                    <div class="form-group">
                        <label for="nama_produk">No Invoice</label>
                        <input type="text" disabled class="form-control" value="{{ $data->id }}">
                    </div>

                    <div class="form-group">
                        <label for="nama_produk">Nama Pemesan</label>
                        <input type="text" disabled class="form-control" value="{{ $data->user->name }}">
                    </div>





                        <div class="form-group ">
                            <label for="deskripsi">Produk:

                            </label>
                            <div class="form-control">
                            @foreach ( $data->orderDetail  as $detail )

                                {{ $detail->barang->nama_produk }} = {{ $detail->jumlah }} pcs ,

                            @endforeach
                            </div>
                        </div>



                    <div class="form-group">
                        <label for="deskripsi">alamat</label>
                        <textarea name="deskripsi" class="form-control" disabled  cols="30" rows="10" style="resize: none">{{ $data->user->alamat }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="harga">Total Harga</label>
                        <input type="number" name="harga" class="form-control" value="{{ $data->jumlah_harga }}" disabled>
                    </div>

                    <form action="{{ url('orders/detail/update/'. $data->id) }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="stok">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="unpaid"  {{ $data->status != 'unpaid' ?: 'selected' }} >Belum Dibayar</option>
                                <option value="diproses" {{ $data->status != 'diproses' ?: 'selected' }} >Diproses</option>
                                <option value="dikirim" {{ $data->status != 'dikirim' ?: 'selected' }}>Dikirim</option>
                                <option value="diterima" {{ $data->status != 'diterima' ?: 'selected' }}>Diterima</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </form>

            </div>
        </div>




@endsection
