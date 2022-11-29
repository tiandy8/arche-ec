 <!-- Navbar -->
 <nav>
    <img src="{{ url('assets/logo-yellow.png') }}" alt="Arche" class="logo-y">
    <div class="menu" id="myTopnav">
      <ul>
        <li><a href="{{ route('index') }}">HOME</a></li>
        <li><a href="{{ route('store') }}">SHOP</a></li>
        <li><a href="{{ route('offline.store') }}">OFFLINE STORE</a></li>
        <li><a href="{{ route('service') }}">SERVICE</a></li>





        @if (Auth::check() < 1)
            <a href="/register" class="btn btn-a" >Register</a>
            <a href="/login" class="btn btn-b">Login</a>
        @endif

      </ul>

    </div>
    <a href="javascript:void(0);" class="hamboorger" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
  </nav>


  <script>
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
        function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "menu") {
            x.className += " responsive";
        } else {
            x.className = "menu";
        }
        }
  </script>


