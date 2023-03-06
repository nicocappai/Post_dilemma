<x-layout>
    <body class=" back-show">
        <div class="container my-2 test-show">
            <div class="row my-5 justify-content-center ">
                <div class="col-12 text-center">
                    <img src="{{Storage::url($article->img)}}" class="img-fluid box-radius " height="320vh" width="380vh">
                </div>
                <div class="col-12 col-md-12 text-white">
                    <h2 class="my-4 text-center">{{$article->title}}</h2>
                    <div class="">
                        <p class="card-text pt-3 text-size">{{$article->body}}</p>
                    </div>
                    <div class="my-0">
                        <p>Redatto da {{$article->user->name}} il {{$article->created_at->format('d/m/Y')}}</p>

                    </div>
                    <a href="{{route('article.index')}}" class="btn card-btn text-white">Torna indietro</a>
                </div>
            </div>
        </div>
    </body>

</x-layout>




