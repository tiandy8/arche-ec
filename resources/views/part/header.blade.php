 <!-- Navbar -->
 <nav>
    <img src="{{ url('assets/logo-yellow.png') }}" alt="Arche" class="logo-y">
    <div class="menu">
      <ul>
        <li><a href="{{ route('index') }}">HOME</a></li>
        <li><a href="{{ route('store') }}">SHOP</a></li>
        <li><a href="{{ route('offline.store') }}">OFFLINE STORE</a></li>
        <li><a href="{{ route('service') }}">SERVICE</a></li>




        @if (Auth::check() < 1)
            <a href="/register" class="btn btn-a">Register</a>
            <a href="/login" class="btn btn-b">Login</a>
        @endif

      </ul>
    </div>
  </nav>
