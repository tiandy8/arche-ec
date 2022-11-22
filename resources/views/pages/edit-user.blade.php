@extends('part.full')


@section('content')

    <section class="user">
        <div class="container">
            <div class="pengguna">
                <h1>Profil Pengguna</h1>

                <img src="{{ url('assets/catnip.jpg') }}" alt="">

                <div class="user-cred">

                    <form action="/user/update/{{ $user->id }}" method="post">
                        @csrf
                        <div class="fc">
                            <span>Nama:</span>
                            <input type="text" value="{{ $user->name }}" name="name" >
                        </div>
                        <div class="fc">
                            <span>Email:</span>
                            <input type="email" value="{{ $user->email }}" name="email">
                        </div>
                        <div class="fc">
                            <span>Nomor Telepon:</span>
                            <input type="number" value="{{ $user->phone }}" name="phone">
                        </div>
                        <div class="fc">
                            <span>Alamat:</span>
                            <textarea name="alamat" id="" cols="30" rows="10">{{ $user->alamat }}</textarea>
                        </div>
                        <div class="aksi">
                            <button class="btn-lg-green" style="border: none;">Save</button>
                        </div>
                    </form>

                </div>



            </div>

        </div>
    </section>




@endsection
