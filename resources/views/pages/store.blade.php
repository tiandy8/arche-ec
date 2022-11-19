@extends('part.full')

@section('content')

<section class="store-content">

    <div class="sm-menu">
        <a href="#"><img src="assets/user.svg" alt=""></a>
        <a href="#"><img src="assets/shopping-cart.svg" alt=""></a>
    </div>

    <div class="container">

        <div class="sm-navbar">
            <h3 class="pos-section">Arche <img src="assets/arrow-right.svg" style="width: 20px" alt="">
                <span>Store</span></h3>

            <div class="searchbar">
                <input type="text" placeholder="Search Products.. " >
                <img src="assets/search-normal.svg" alt="">
            </div>

            <div class="urutkan">
                <span>Urutkan :</span>
                <select name="" id="">
                    <option value=""  >Terbaru</option>
                    <option value=""  >Terlama</option>
                    <option value=""  >A-Z</option>
                    <option value=""  >Z-A</option>
                </select>
            </div>

        </div>
        <div class="store-content">

        <div class="card-sm">

            <div class="card-header">
                <img src="assets/wskas.jpg" alt="">
            </div>
            <div class="card-body">
                <h5>Whiskas</h5>
                <p>Rp. 40.000</p>
                <div class="rating">
                    <img src="assets/star.svg" alt="">
                    <span>4.7</span>
                </div>

            </div>
        </div>

        </div>


    </div>
</section>

@endsection
