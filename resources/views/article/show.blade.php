<x-layout>
    <body class=" back-show">
        <div class="container my-2 test-show">
            <div class="row my-5 ">
                <div class="col-5 ">
                    <img src="{{Storage::url($article->img)}}" class="img-fluid box-radius " height="220vh" width="280vh">
                </div>
                <div class="col-12 col-md-5 text-center">
                    <h2 class="my-4">{{$article->title}}</h2>
                    <p class="card-text pt-3">{{$article->body}}</p>
                    <div class="my-0">
                        <p>Redatto da {{$article->user->name}} il {{$article->created_at->format('d/m/Y')}}</p>

                    </div>
                    <a href="{{route('article.index')}}" class="btn card-btn text-white">Torna indietro</a>
                </div>
            </div>
        </div>
    </body>


</x-layout>





