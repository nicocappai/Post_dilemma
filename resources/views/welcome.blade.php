
<a name="inizio"></a>
<x-layout>
    <body class="body-welcome">
    @if (session('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
        <div class="alert text-center position-message mt-3">
            <p class="m-0">{{session('message')}}</p>
        </div>
    </div>
    @endif

    <div class="container-fluid altezza-video">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 back-video ">
                <video class="video" autoplay loop muted plays-inline class=" ">
                    <source src="/images/video.mp4" type="video/mp4">
                </video>
            </div>
            <div class="col-12 col-md-8 col-lg-6 pt-5 mt-5 div-video">
                <div class="text-center text-white my-5 pt-5 font-inserire">
                    <h1 class=" black-media-query">
                        Inserire un articolo su <br> Dilemma.it é
                    </h1>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col-4 col-md-4 black-media-query">
                            <i class="fa-regular fa-face-laugh-beam "></i>
                            <h3>Facile</h3>
                        </div>
                        <div class="col-4 col-md-4 black-media-query">
                            <i class="fa-solid fa-gauge-high "></i>
                            <h3 >Veloce</h3>
                        </div>
                        <div class="col-4 col-md-4 black-media-query">
                            <i class="fa-sharp fa-solid fa-lock "></i>
                            <h3 >Sicuro</h3>
                        </div>
                    </div>
                </div>
                </div>
                <form class="d-flex" method="GET" role="search" action="{{route('article.search')}}">
                    <input class="form-control me-2 search" type="search" placeholder="Cosa stai cercando?" aria-label="Search" name="query">
                    <button class="btn btn-success btn-search" type="submit">Cerca</button>
                </form>
            </div>
        </div>
    </div>


        <div class="container-fluid  font my-5">
            <div class="row justify-content-center z-index-welcome">
                <div class="col-12 text-center  ">
                    <h1 class="font">Ultime pubblicazioni</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($articles as $article )
                <div class="col-12 col-md-8 col-lg-3 my-5 justify-content-center d-flex">
                    <div class="card-wrap" style="width:18rem">
                        <img src="{{Storage::url($article->img)}}" height="" class="img-size">
                        <div class="card-body">

                            <p class="small fst-italic text-capitalize">
                            @foreach ($article->tags as $tag)
                                #{{$tag->name}}
                            @endforeach
                            </p>

                            <h5 class="card-title">{{substr($article->title, 0, 25)}}...</h5>
                            <p class="card-text subtitle-card">{{substr($article->subtitle, 0, 30)}}...</p>
                            <div class=" my-3">
                                <p class="card-text">{{substr($article->body, 0, 30)}}...</p>
                            </div>
                            @if ($article->category)
                            <p class="card-text my-2">Categoria: <a class="href-color fst-italic" href="{{route('article.category', ['category' => $article->category->id])}}"> {{ $article->category->name}}</a></p>
                            @else
                            <p class="small text-muted fst-italic text-capitalize justify-content-center d-flex">
                                Non Categorizzato
                            </p>
                            @endif
                            <span class="card-text small fst-italic text-muted d-flex justify-content-center">Tempo di lettura {{$article->readDuration()}} min</span>
                            <div class="card-footer text-center">
                                <p class="card-text"> redatto il {{$article->created_at->format('d/m/Y')}} da <a class="href-color" href="{{route('user.article', ['user' => $article->user->id])}}"> {{ $article->user->name}}</a></p>
                                <a href="{{route('article.show', compact('article'))}}" class="btn card-btn">Leggi</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Sezione contatori -->
        <div class="container-fluid bg-welcome sez_contatori pt-5 pb-5 mt-2 text-white  ">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="d-flex justify-content-center align-items-center"><p class="number mb-0">+</p><p id="firstNumber" class="number mb-0">0</p><p class="number mb-0">%</p></div>
                    <div class="d-flex justify-content-center align-items-center">
                        <div class=" border-bottom linear-counter"></div>
                    </div>

                    <div class="d-flex justify-content-center align-items-center my-3"><p class="ms-2 text-center">50% di visualizzazioni in più rispetto agli articoli display tradizionali</p></div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="d-flex justify-content-center align-items-center"><p id="secondNumber" class="number mb-0">0</p><p class="number mb-0">X</p></div>
                    <div class="d-flex justify-content-center align-items-center">
                        <div class=" border-bottom linear-counter"></div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center my-3 "><p class="ms-2 text-center">Tasso di coinvolgimento 10 volte superiore rispetto agli articoli display tradizionali</p></div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="d-flex justify-content-center align-items-center"><p class="number mb-0">+</p><p id="thirdNumber" class="number mb-0">0</p><p class="number mb-0">%</p></div>
                    <div class="d-flex justify-content-center align-items-center">
                        <div class=" border-bottom linear-counter"></div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center my-3"><p class="ms-2 text-center">Intenzione di visualizzazione superiore del 18% rispetto agli articoli display tradizionali</p></div>
                </div>
            </div>
        </div>
        {{-- swiper2 --}}
        <div class="container-fluid  p-5 z-index-card ">
            <div class="row">
                <div class="col-12">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="tools">
                                        <div class="circle">
                                            <span class="red box"></span>
                                        </div>
                                        <div class="circle">
                                            <span class="yellow box"></span>
                                        </div>
                                        <div class="circle">
                                            <span class="green box"></span>
                                        </div>
                                    </div>
                                    <div class="card__content ps-3 pe-3 pb-3">
                                        <i class="fa-regular fa-user"></i><span><i>   Andrea</i></span>
                                        <p>Il sito è molto ben organizzato e facile da navigare, con una vasta gamma di categorie tra cui scegliere, che vanno dalla tecnologia alla politica, dall'intrattenimento allo sport. C'è sempre qualcosa di nuovo e interessante da leggere.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="tools">
                                        <div class="circle">
                                            <span class="red box"></span>
                                        </div>
                                        <div class="circle">
                                            <span class="yellow box"></span>
                                        </div>
                                        <div class="circle">
                                            <span class="green box"></span>
                                        </div>
                                    </div>
                                    <div class="card__content ps-3 pe-3 pb-3">
                                        <i class="fa-regular fa-user"></i><span><i>   Giorgia</i></span>
                                        <p>La qualità degli articoli pubblicati è davvero alta, con autori che dimostrano di avere una conoscenza approfondita del loro argomento. Inoltre, il sito sembra essere molto attento alla revisione degli articoli prima della pubblicazione.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="tools">
                                        <div class="circle">
                                            <span class="red box"></span>
                                        </div>
                                        <div class="circle">
                                            <span class="yellow box"></span>
                                        </div>
                                        <div class="circle">
                                            <span class="green box"></span>
                                        </div>
                                    </div>
                                    <div class="card__content ps-3 pe-3 pb-3">
                                        <i class="fa-regular fa-user"></i><span><i>   Marco</i></span>
                                        <p>In generale, sono rimasto molto impressionato dal sito Dilemma.it e lo consiglierei a chiunque sia alla ricerca di una piattaforma di qualità per la pubblicazione e la lettura di articoli.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="tools">
                                        <div class="circle">
                                            <span class="red box"></span>
                                        </div>
                                        <div class="circle">
                                            <span class="yellow box"></span>
                                        </div>
                                        <div class="circle">
                                            <span class="green box"></span>
                                        </div>
                                    </div>
                                    <div class="card__content ps-3 pe-3 pb-3">
                                        <i class="fa-regular fa-user"></i><span><i>   Tommaso</i></span>
                                        <p>Ho recentemente avuto l'opportunità di esplorare il sito Dilemma.it, che offre una piattaforma per la pubblicazione di articoli di vario genere. E devo dire che la mia esperienza è stata molto positiva.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="tools">
                                        <div class="circle">
                                            <span class="red box"></span>
                                        </div>
                                        <div class="circle">
                                            <span class="yellow box"></span>
                                        </div>
                                        <div class="circle">
                                            <span class="green box"></span>
                                        </div>
                                    </div>
                                    <div class="card__content ps-3 pe-3 pb-3">
                                        <i class="fa-regular fa-user"></i><span><i>   Sara</i></span>
                                        <p>Ho lavorato come revisore su Dilemma.it e sono rimasta molto soddisfatta dell'esperienza. La grande varietà di annunci rende il lavoro interessante e vario. Consiglio questo sito come un'ottima opportunità di lavoro.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="tools">
                                        <div class="circle">
                                            <span class="red box"></span>
                                        </div>
                                        <div class="circle">
                                            <span class="yellow box"></span>
                                        </div>
                                        <div class="circle">
                                            <span class="green box"></span>
                                        </div>
                                    </div>
                                    <div class="card__content ps-3 pe-3 pb-3">
                                        <i class="fa-regular fa-user"></i><span><i>   Giovanni</i></span>
                                        <p>Come autore, ho avuto l'opportunità di pubblicare alcuni articoli e sono rimasto molto soddisfatto dell'esperienza. Il processo di pubblicazione degli articoli è semplice e veloce. É un'ottima piattaforma per la pubblicazione di articoli.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="swiper-pagination"></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#inizio">
        <div id="tornasu">
            <img src= "images/icon-top.png" class="tornasu" width="60px" height="60px">  
        </div>
    </a>
</body>
</x-layout>
