 <!-- Footer -->
 <footer>
    <div class="container">
      <div class="footer-wrapper">
        <img src="{{ url('assets/logo.svg') }}" alt="" class="logo">

        <div class="footer-content">
          <div class="features">
              <ul>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
                <li><a href="{{ route('service') }}">Service</a></li>
                <li><a href="{{ route('store') }}">Store</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
              </ul>
          </div>
          <div class="socmed">
              <p>Our Socmed</p>
              <a href="https://www.instagram.com/bbezoar"><img src="{{ url('assets/instagram.svg') }}" alt=""></a>
              <a href="https://www.twitter.com/urbiggestfault"><img src="{{ url('assets/twitter.svg') }}" alt=""></a>
              <a href="https://www.facebook.com/meminion.meminion/"> <img src="{{ url('assets/fb.svg') }}" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
