<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin <sup>Arche</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('products') }}">
            <i class="fas fa-fw fa-warehouse"></i>
            <span>Produk</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('pesan') }}">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Daftar Pesan</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" onclick="document.getElementById('logout-form').submit()" href="#">
            <i class="fas fa-fw fa-leave"></i>
            <span>LogOut</span></a>
            <form id="logout-form" action="{{ route('logout') }}">
                @csrf
            </form>
    </li>


</ul>
