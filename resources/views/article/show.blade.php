<a name="inizio"></a>
<x-layout>
    <body class="back-show">
        <div class="container-fluid my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 ms-2">
                    <img src="{{Storage::url($article->img)}}" class="img-fluid img-show-articolo " alt="...">
                </div>
                <div class="col-6 col-md-3 col-lg-3 flex-column d-flex align-items-center justify-content-center">
                    <h2 class="my-4 text-center">{{substr($article->title, 0, 20)}}</h2>
                    <h5 class="my-4 text-center">{{substr($article->subtitle, 0, 30)}}</h5>
                    <p class="card-text text-size">Redatto da {{$article->user->name}} il {{$article->created_at->format('d/m/Y')}}</p>
                </div>
                <div class="col-12  my-5 p-5 ">
                    <p class="card-text pt-3 text-size text-start" id="article-body">{{$article->body}}</p>
                </div>
                <div class="col-12 col-md-8 col-lg-6 d-flex justify-content-center">
                @if (Auth::user() && Auth::user()->is_revisor && $article->is_accepted == 0)
                    <a href="{{route('revisor.acceptArticle' , compact('article'))}}" class="btn card-btn text-white my-4 mx-2">Accetta articolo</a>
                    <a href="{{route('revisor.rejectArticle' , compact('article'))}}" class="btn card-btn text-white my-4 mx-2">Rifiuta articolo</a>
                @endif
                    <a href="{{URL::previous()}}" class="btn card-btn text-white mx-2 my-4 text-center">Torna indietro</a>
                </div>
            </div>
        </div>
    </body>
    <a href="#inizio">
        <div id="tornasu">
            <img src= "/images/icon-top.png" class="tornasu" width="60px" height="60px">  
        </div>
    </a>
</x-layout>



