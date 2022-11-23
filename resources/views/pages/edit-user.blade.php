@extends('part.full')


@section('content')

    <section class="user">
        <div class="container">
            <div class="pengguna">
                <h1>Profil Pengguna</h1>

                {{-- <img src="{{ url('assets/catnip.jpg') }}" alt=""> --}}
                <form action="/user/update/{{ $user->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="profile-pic-div">
                    <img src="{{ url('profil/'. $user->foto_profil) }}" alt="{{ asset('assets/pp.jpg') }}" id="photo">
                    <input type="file" name="foto_profil" id="file">
                    <label for="file"  id="uploadBtn">Choose Photo</label>
                  </div>

                <div class="user-cred" id="pp-card">


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


                </div>


                </form>


            </div>

        </div>
    </section>

    <script>
        //declearing html elements

const imgDiv = document.querySelector('.profile-pic-div');
const img = document.querySelector('#photo');
const file = document.querySelector('#file');
const uploadBtn = document.querySelector('#uploadBtn');

//if user hover on img div

imgDiv.addEventListener('mouseenter', function(){
    uploadBtn.style.display = "block";
});

//if we hover out from img div

imgDiv.addEventListener('mouseleave', function(){
    uploadBtn.style.display = "none";
});

//lets work for image showing functionality when we choose an image to upload

//when we choose a foto to upload

file.addEventListener('change', function(){
    //this refers to file
    const choosedFile = this.files[0];

    if (choosedFile) {

        const reader = new FileReader(); //FileReader is a predefined function of JS

        reader.addEventListener('load', function(){
            img.setAttribute('src', reader.result);
        });

        reader.readAsDataURL(choosedFile);

        //Allright is done

        //please like the video
        //comment if have any issue related to vide & also rate my work in comment section

        //And aslo please subscribe for more tutorial like this

        //thanks for watching
    }
});
    </script>



@endsection
