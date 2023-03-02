<x-layout>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">

                <h1>
                    Crea Articolo
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">

                <form method="post" enctype="multipart/form-data" action="{{route('article.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Titolo</label>
                        <input type="text" class="form-control" name="title" >
                        @error('title')<span class="error bg-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Sottotitolo</label>
                        <input type="text" class="form-control" name="subtitle" >
                        @error('subtitle')<span class="error bg-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Immagine</label>
                        <input type="file" class="form-control" name="img">

                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Testo</label>
                        <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                        @error('body')<span class="error bg-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Categoria:</label>
                        <select name="category" id="category" class="form-control text-capitalize">
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>

                            @endforeach
                        </select>
                        @error('category')<span class="error bg-danger">{{$message}}</span> @enderror
                    </div>
                    <div>
                        <button  class="btn btn-primary">Inserisci Articolo</button>
                        <a href="{{route('homepage')}}" class="btn btn-primary ">Torna alla home</a>
                    </div>

                </form>
            </div>
        </div>
    </div>



</x-layout>
