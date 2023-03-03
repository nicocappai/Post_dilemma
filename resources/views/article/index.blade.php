<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="font">Tutti gli articoli</h1>
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
                          <p class="card-text">Categoria:{{$article->category->name}}</p>
                          <p class="card-text">Creato da :{{$article->user->name}}</p>
                          <a href="" class="btn btn-primary">Dettaglio</a>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>

            @endforeach

        </div>

    </div>

</x-layout>
