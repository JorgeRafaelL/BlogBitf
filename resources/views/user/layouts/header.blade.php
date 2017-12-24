<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">


       <!-- Authentication Links -->
       @guest
       <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('publicaciones') }}">Publicaciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="post.html">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
      </li>
      <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registrate</a></li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('publicaciones') }}">Publicaciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="post.html">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact</a>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="color: white;">
          {{ Auth::user()->name }} <span class="caret" ></span>
        </a>

        <ul class="dropdown-menu" role="menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Salir
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </li>
    @endguest



  </ul>
</div>
</div>
</nav>

<!-- Page Header -->
<header class="masthead" style="background-image: url(@yield('bg-img'))">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>@yield('title')</h1>
          <span class="subheading">@yield('sub-title')</span>
        </div>
      </div>
    </div>
  </div>
</header>