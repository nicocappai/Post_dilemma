<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="font">Categoria {{$category->name}}</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justy-content-around">
            @foreach ($articles as $article )
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="card">
                       <img src="{{Storage::url($article->img)}}" class="img-fluid rounded-start" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$article->title}}</h5>
                          <p class="card-text">{{$article->subtitle}}</p>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                            <p class="card-text">Redatto il {{$article->created_at->format('d/m/Y')}} da <a href="{{route('user.article', ['user' => $article->user->id])}}"> {{ $article->user->name}}</a></p>
                        <a href="{{route('article.show', compact('article'))}}" class="btn btn-success">Leggi</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
