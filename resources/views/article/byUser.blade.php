<a name="inizio"></a>
<x-layout>
<body class="back-show">    
    <div class="container-fluid my-4">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="font">Autore {{$user->name}}</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justy-content-around">
            @foreach ($articles as $article )
            <div class="col-12 col-md-8 col-lg-3 my-5 justify-content-center d-flex">
                <div class="card-wrap  "style="width:19rem">
                        <img src="{{Storage::url($article->img)}}"height="" class="img-size" >
  
                        <div class="card-body">
  
                          <h5 class="card-title">{{$article->title}}</h5>
                          <p class="card-text">{{$article->subtitle}}</p>
                          <div class=" my-3">
                            <p class="card-text  ">{{substr($article->body, 0, 30)}}...</p>
                        </div>
                        @if ($article->category)
                        <p class="card-text my-2">Categoria: <a class="href-color fst-italic" href="{{route('article.category', ['category' => $article->category->id])}}"> {{ $article->category->name}}</a></p>
                        @else
                        <p class="small text-muted fst-italic text-capitalize justify-content-center d-flex">
                            Non Categorizzato
                        </p>
                        @endif
                        <div class="card-footer text-center">
                          <p class="small fst-italic text-capitalize">
                              @foreach ($article->tags as $tag )
                              #{{$tag->name}}
  
                              @endforeach
                          </p>
                          <p class="card-text"> redatto il {{$article->created_at->format('d/m/Y')}} da <a class="href-color" href="{{route('user.article', ['user' => $article->user->id])}}"> {{ $article->user->name}}</a></p>
                            <a href="{{route('article.show', compact('article'))}}" class="btn card-btn">Leggi</a>
                        </div>
  
                        </div>
  
                  </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
<a href="#inizio">
    <div id="tornasu">
        <img src= "/images/icon-top.png" class="tornasu" width="60px" height="60px">  
    </div>
</a>    
</x-layout>
