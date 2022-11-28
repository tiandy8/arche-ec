<div class="sm-menu">





    <a href="{{ url('/user/' . Auth::id() )  }}"><img src="{{ url('assets/user.svg') }}" alt=""></a>


    <a href="{{ route('cart') }}"><img src="{{ url('assets/shopping-cart.svg') }}" alt=""></a>

    <a href="{{ route('daftar.pesanan') }}"><img style="width: 100%" src="{{ url('assets/clipboard.svg') }}" alt=""></a>


</div>
