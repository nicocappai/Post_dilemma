<x-layout>
    @if (session('message'))
    <div class="alert alert-success">
        <p class="m-0">{{session('message')}}</p>
    </div>
    @endif
  
    <div class="row justify-content-center align-content-center my-5">
        <div class="col-12 col-md-8 col-lg-6">
            <form class="d-flex " role="search ">
                <input class="form-control me-2 search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success btn-search" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="font">Home</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($articles as $article )
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="{{Storage::url($article->img)}}" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{$article->title}}</h5>
                          <p class="card-text">{{$article->subtitle}}</p>
                          <p class="card-text">{{$article->body}}</p>
                          <p class="card-text">Categoria: <a href="{{route('article.category', ['category' => $article->category->id])}}"> {{ $article->category->name}}</a></p>
                        <div class="card-footer">
                          <p class="card-text"> redatto il {{$article->created_at->format('d/m/Y')}} da <a href="{{route('user.article', ['user' => $article->user->id])}}"> {{ $article->user->name}}</a></p>
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-success">Leggi</a>

                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>

            @endforeach

        </div>

    </div>

</x-layout>
