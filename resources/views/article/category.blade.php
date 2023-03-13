<a name="inizio"></a>
<x-layout>
    <body class="back-show">

        <div class="container-fluid my-4">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h1 class="font">Categoria {{$category->name}}</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid my-3 font pb-2 ">
            <div class="row justify-content-center">
                @foreach ($articles as $article )
                <div class="col-12 col-md-8 col-lg-3 my-5 justify-content-center d-flex">
                    <div class=" card-wrap" style="width:18rem">
                        <img src="{{Storage::url($article->img)}}" height="" class="img-size">
                        <div class="card-body ">
                            <h5 class="card-title ">{{$article->title}}</h5>
                            <p class="card-text">{{$article->subtitle}}</p>
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

        </body>

        <a href="#inizio">
            <div id="tornasu">
                <img src= "/images/icon-top.png" class="tornasu" width="60px" height="60px">  
            </div>
        </a>
    </x-layout>









