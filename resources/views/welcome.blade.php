<x-layout>
    @if (session('message'))
    <div class="alert alert-success text-center">
        <p class="m-0">{{session('message')}}</p>
    </div>
    @endif
 
<div class="container-fluid bg-home">
    <div class="row justify-content-center align-items-center my-5">
        <div class="col-12 col-md-8 col-lg-6 pt-5 my-5">
            <h1 class="text-center text-white my-5 pt-5">Welcome</h1>
            <form class="d-flex" role="search">
                <input class="form-control me-2 search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success btn-search" type="submit">Search</button>
            </form>
        </div>
    </div>
</div>

    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="font">Home</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid my-5 font ">
        <div class="row justify-content-center">
            @foreach ($articles as $article )
            <div class="col-12 col-md-8 col-lg-3 my-5 justify-content-center d-flex">
                <div class="card-wrap ">
                    <div class="">
                        <img src="{{Storage::url($article->img)}}" class=" rounded-start card-img" alt="..." >
                    </div>
                        <div class="card-body">
                          <h5 class="card-title">{{$article->title}}</h5>
                          <p class="card-text">{{$article->subtitle}}</p>
                          <div class="mostly-customized-scrollbar my-3">
                            <p class="card-text">{{$article->body}}</p>
                        </div>
                          <p class="card-text">Categoria: <a class="href-color" href="{{route('article.category', ['category' => $article->category->id])}}"> {{ $article->category->name}}</a></p>
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

<!-- Sezione contatori -->
<div class="container-fluid sez_contatori pt-3 pb-5">
    <div class="row">
      <div class="col-12 col-md-4">
        <div class="d-flex justify-content-center align-items-center"><p class="number mb-0">+</p><p id="firstNumber" class="number mb-0">0</p><p class="number mb-0">%</p></div>
        <div class="d-flex justify-content-lg-center">-----------------</div>
        <div class="d-flex justify-content-center align-items-center"><p class="ms-2">50% di visualizzazioni in più rispetto agli annunci display tradizionali</p></div>
      </div>
      <div class="col-12 col-md-4">
        <div class="d-flex justify-content-center align-items-center"><p id="secondNumber" class="number mb-0">0</p><p class="number mb-0">X</p></div>
        <div class="d-flex justify-content-lg-center">-----------------</div>
        <div class="d-flex justify-content-center align-items-center"><p class="ms-2">Tasso di coinvolgimento 10 volte superiore rispetto agli annunci display tradizionali</p></div>
      </div>
      <div class="col-12 col-md-4">
        <div class="d-flex justify-content-center align-items-center"><p class="number mb-0">+</p><p id="thirdNumber" class="number mb-0">0</p><p class="number mb-0">%</p></div>
        <div class="d-flex justify-content-lg-center">-----------------</div>
        <div class="d-flex justify-content-center align-items-center"><p class="ms-2">Intenzione di acquisto superiore del 18% rispetto agli annunci display tradizionali</p></div>
      </div>
    </div>
  </div>    

</x-layout>
