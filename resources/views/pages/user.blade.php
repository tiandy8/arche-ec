@extends('part.full')


@section('content')

    <section class="user">
        <div class="container">
            <div class="pengguna">
                <h1>Profil Pengguna</h1>

                <img src="{{ url('assets/catnip.jpg') }}" alt="">

                <div class="user-cred">

                    <span>Nama:</span>
                    <p>{{ $user->name }}</p>
                    <span>Email:</span>
                    <p>{{ $user->email }}</p>
                    <span>Nomor Telepon:</span>
                    <p>{{ $user->phone }}</p>
                    <span>Alamat:</span>
                    <p>{{ $user->alamat }}</p>


                    <div class="aksi">
                        <a href="/user/edit/{{ Auth::id() }}" class="btn-lg">Edit</a>
                        <a href="{{ route('logout') }}" class="btn-lg-red">Log Out</a>
                    </div>

                </div>



            </div>

        </div>
    </section>




@endsection
