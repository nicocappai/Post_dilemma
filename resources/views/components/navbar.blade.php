<div class="container-fluid font" id="nav">
    <div class="row justify-content-center  ">
        <div class="col-12 col-md-8 col-lg-12 ">
            <nav class="navbar navbar-expand-lg bg_color nav-border">
                <div class="container-fluid">
                    <a href="{{route('homepage')}}">
                        <img class="logo-size"
                         src="/images/logo2penna.png" alt="">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto">
                            <li><a class="nav-link text-white" href="{{route('careers')}}">Lavora con noi</a></li>
                             <li class="nav-item">
                                    <a class="nav-link text-white" href="{{route('article.index')}}">Tutti gli articoli</a>
                            </li>
                             <div class="nav-item dropend list-unstyled ">
                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Categorie
                                </a>
                                <ul class="dropdown-menu padding-dropdown">
                                    @foreach ($categories as $category)
                                    <li><a class="dropdown-item" href="{{route('article.category' , $category)}}">{{$category->name}}</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                     @endforeach
                                </ul>
                            </div>
                        </ul>
                        @guest

                        <ul>
                            <li class="nav-item dropdown maargin">
                                <a class="nav-link dropdown-toggle text-white margin-benvenuto" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Benvenuto Ospite
                                </a>
                                <ul class="dropdown-menu color">
                                    <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                                    <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                                </ul>
                            </li>
                        </ul>
                        @else
                        <ul>
                            <li class="nav-item dropdown align-content-centerd maargin">
                                <a class="nav-link dropdown-toggle text-white margin-benvenuto" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user mx-1"></i>
                                    Benvenuto {{Auth::user()->name}}
                                </a>
                                <ul class="dropdown-menu">
                                    {{-- <li><a class="dropdown-item" href="{{route('article.create')}}">Crea Articolo</a></li>
                                    <li><hr class="dropdown-divider"></li> --}}
                                    @if(Auth::user()->is_admin)
                                    <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard Admin</a></li>
                                    @endif
                                    @if(Auth::user()->is_revisor)
                                    <li><a class="dropdown-item" href="{{route('revisor.dashboard')}}">Dashboard del Revisore</a></li>
                                    {{-- <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bd-danger">
                                        {{App\Models\Article::unrevisionedCount()}}
                                        <span class="visually-hidden">unread messages</span>
                                    </span> --}}
                                    @endif
                                    @if(Auth::user()->is_writer)
                                    <li><a class="dropdown-item" href="{{route('writer.dashboard')}}">Dashboard del Redattore</a></li>
                                    @endif
                                    @if(Auth::user()->is_writer)
                                    <li><a class="dropdown-item" href="{{route('article.create')}}">Crea Articolo</a></li>
                                    @endif
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="{{route('logout')}}"
                                        onclick="event.preventDefault();
                                        document.getElementById('form-logout').
                                        submit();">Logout</a>
                                    </li>
                                    <form action="{{route('logout')}}" method="POST" class="d-none" id="form-logout">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        </ul>

                        @endguest
                        <!-- ===== Style Switcher Start ===== -->
                        <a href="#" class="me-1">
                        <div class=" day-night s-icon style-switcher-toggler ">
                            <i class="fas fa-moon text-white fs-4 mx-1"></i>
                        </div>
                        </a>
                        <!-- ===== Style Switcher End ===== -->
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>


