<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" data-aos="fade-down" data-aos-delay="500">
    <div class="container">
      <a class="navbar-brand" href="{{ URL('/') }}">
        <img src="{{ URL::asset('client/images/logo.png') }}" class="img img-rounded" style="width: 60px;" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="{{ URL('/') }}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{ URL('/practice') }}" class="nav-link">Practice Areas</a></li>
          {{-- <li class="nav-item"><a href="{{ URL('/cases') }}" class="nav-link">Cases</a></li> --}}
          <li class="nav-item"><a href="{{ URL('/about') }}" class="nav-link">About</a></li>
          <li class="nav-item"><a href="{{ URL('/payment') }}" class="nav-link">E-Payment</a></li>
          {{-- <li class="nav-item"><a href="{{ URL('/Media') }}" class="nav-link">Media</a></li> --}}
          <li class="nav-item"><a href="{{ URL('/blog') }}" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="{{ URL('/contact') }}" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="{{ URL('/login') }}" target="_blank" class="nav-link">E-Filling Account</a></li>
        </ul>
      </div>
    </div>
  </nav>
