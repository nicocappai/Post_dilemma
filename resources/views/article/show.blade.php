<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6">
                <img src="{{Storage::url($article->img)}}" class="img-fluid rounded-start" alt="...">
                <div class="text-center">
                    <h2>{{$article->subtitle}}</h2>
                    <div class="my-3 text-muted fst-italic">
                        <p>Redatto da {{$article->user->name}} il {{$article->created_at->format('d/m/Y')}}</p>
                    </div>
                </div>
                <p class="card-text">{{$article->body}}</p>
                <div class="text-center">
                   <a href="{{route('article.index')}}" class="btn btn-info text-white my-5">Torna indietro</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>