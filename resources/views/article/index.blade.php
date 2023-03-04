<x-layout>
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="font">Tutti gli articoli</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid my-5 font ">
      <div class="row justify-content-center">
          @foreach ($articles as $article )
          <div class="col-12 col-md-8 col-lg-3 my-5 justify-content-center d-flex">
              <div class="card-wrap ">
                  <div class="">
                      <img src="{{Storage::url($article->img)}}" class=" rounded-start card-img" alt="...">
                  </div>
                      <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-text">{{$article->subtitle}}</p>
                        <div class="mostly-customized-scrollbar my-3">
                          <p class="card-text  ">{{$article->body}}</p>
                      </div>
                        <p class="card-text">Categoria: <a href="{{route('article.category', ['category' => $article->category->id])}}"> {{ $article->category->name}}</a></p>
                      <div class="card-footer text-center">
                        <p class="card-text"> redatto il {{$article->created_at->format('d/m/Y')}} da <a href="{{route('user.article', ['user' => $article->user->id])}}"> {{ $article->user->name}}</a></p>
                          <a href="{{route('article.show', compact('article'))}}" class="btn card-btn">Leggi</a>
                      </div>
                      </div>
                </div>
          </div>

          @endforeach

      </div>

  </div>


</x-layout>
