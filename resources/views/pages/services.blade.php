
@extends('part.full')

@section('content')

<section class="service">

    @if (Auth::check() >= 1)
        @include('part.sm-menu')

    @endif


    <div class="container">


        <div class="sm-navbar">
            <div class="pertanda">
                <h3 class="pos-section"><a style="color: black; text-decoration:none;"   href="{{ url('/store') }}">Arche</a> <img src="assets/arrow-right.svg" style="width: 20px" alt="">
                    <span><a style="color: black; text-decoration:none;" href="{{ route('service') }}">Service</a></span></h3>

            </div>
            <div class="searchbar" style="margin-top: 10px">
                <form action="{{ route('service') }}" method="get">

                    <input type="text" name="search" placeholder="Search Products.. " >
                    <img src="assets/search-normal.svg"  alt="">

                </form>
            </div>

            <form action="{{ route('service') }}">
                <div class="urutkan">
                    <span>Urutkan :   </span>

                        <select name="order" id="" onchange="form.submit()">
                            <option disabled selected>Urutkan Berdasarkan</option>x1
                            <option value="latest" {{ request('order') != 'latest' ?: 'selected' }}  >Terbaru</option>
                            <option value="oldest" {{ request('order') != 'oldest' ?: 'selected' }}  >Terlama</option>
                            <option value="title_asc" {{ request('order') != 'title_asc' ?: 'selected' }}  >A-Z</option>
                            <option value="title_desc" {{ request('order') !='title_desc' ?: 'selected' }} >Z-A</option>
                        </select>

                </div>
            </form>


        </div>



        <div class="services-konten">


            <div class="service-wrap">



                @forelse ( $datas as $data )

                    <div class="service-content">
                        <img src="{{ url('foto/' . $data->gambar_service) }}" class="service-img" alt="">
                        <div class="service-desc">
                            <h3>{{ $data->nama_service }}</h3>
                            <p>{{ $data->deskripsi }}</p>
                            <div class="rating">
                                <img src="assets/star.svg" alt="" style="height:25px;"><p>4.7</p>
                            </div>
                            <div class="reserv-e">
                                 Interested ? <a href="https://wa.me/085788961266?text=I%20am%20interested%20in%20your%20{{ $data->nama_service }}" class="btn-small">Reserve Now!..</a>
                            </div>
                        </div>
                    </div>


                @empty
                <div class="peringatan">
                    <p>Maaf, Tidak ada Barang yang tersedia saat ini!..</p>
                </div>
                @endforelse



            </div>
        </div>



    </div>
</section>


@endsection
