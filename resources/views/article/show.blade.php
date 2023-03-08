<x-layout>
    <body class="back-show">
        <div class="container my-5">
            <div class="row align-items-center">
                <div class="col-12 col-md-5 ms-2">
                    <img src="{{Storage::url($article->img)}}" class="img-fluid img-show" alt="...">
                </div>
                <div class="col-12 col-md-6 justify-content-center align-items-center">
                    <h2 class="my-4 text-center">{{$article->title}}</h2>
                    <p class="card-text pt-3 text-size">{{$article->body}}</p>
                    <p class="card-text text-size">Redatto da {{$article->user->name}} il {{$article->created_at->format('d/m/Y')}}</p>
                    <div class="d-flex justify-content-center">
                        @if(Auth::user() && Auth::user()->is_revisor)
                            <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn card-btn text-white my-4 me-4">Accetta articolo</a>
                            <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn card-btn text-white my-4 me-4">Rifiuta articolo</a>
                        @endif
                    <a href="{{route('article.index')}}" class="btn card-btn text-white my-4">Torna indietro</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-layout>




