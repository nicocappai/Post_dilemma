<div class="container-fluid  font  ">
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
                            <li class="nav-item dropdown text-white list-unstyled">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Categorie
                                </a>
                                <ul class="dropdown-menu">
                                    @foreach ($categories as $category)
                                    <li><a class="dropdown-item" href="{{route('article.category' , $category)}}">{{$category->name}}</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    @endforeach
                                </ul>
                            </li>
                        </div>
                    </div>
                </nav>
            </div>


        </div>

    </div>
</div>
