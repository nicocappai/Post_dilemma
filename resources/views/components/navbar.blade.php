<div class="container-fluid background-header font  ">
  <div class="row justify-content-center  ">
      <div class="col-12 col-md-8 col-lg-12 ">
<nav class="navbar navbar-expand-lg bg_color">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        @guest
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto Ospite
          </a>
          <ul class="dropdown-menu color">
            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
          </ul>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('article.create')}}">Crea Articolo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{route('article.index')}}">Tutti gli articoli</a>
          </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('logout')}}"
              onclick="event.preventDefault();
              document.getElementById('form-logout').
              submit();">Logout</a></li>
              <form action="{{route('logout')}}" method="POST" class="d-none" id="form-logout">
                @csrf
              </form>
          </ul>
        </li>
        @endguest
        </ul>
      </div>
    </div>
  </nav>
</div>
<div class="altezza">

</div>
<div class="row justify-content-center align-content-center">
  <div class="col-12 col-md-8 col-lg-6">
    <form class="d-flex " role="search">
        <input class="form-control me-2 search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success btn-search" type="submit">Search</button>
      </form>
  </div>

</div>
</div>
</div>