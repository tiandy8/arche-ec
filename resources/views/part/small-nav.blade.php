<div class="sm-navbar">
    <h3 class="pos-section"><a style="color: black; text-decoration:none;"   href="{{ url('/store') }}">Arche</a> <img src="assets/arrow-right.svg" style="width: 20px" alt="">
        <span>Store</span></h3>

    <div class="searchbar">
        <form action="{{ route('store') }}" method="get">

            <input type="text" name="search" placeholder="Search Products.. " >
            <img src="assets/search-normal.svg"  alt="">

        </form>
    </div>

    <form action="{{ route('store') }}">
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
