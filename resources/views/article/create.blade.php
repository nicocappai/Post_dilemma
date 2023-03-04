<x-layout>

    <body class="backg">
        
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <form class="form" method="post" enctype="multipart/form-data" action="{{route('article.store')}}">
                    @csrf
                    <p id="heading">Crea Articolo</p>
                    <div class="field">
                        <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        </svg>
                          <input autocomplete="off" placeholder="Titolo" class="input-field" type="text" name="title">
                          @error('title')<span class="error bg-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="field">
                            <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            </svg>
                              <input autocomplete="off" placeholder="Username" class="input-field"  type="text" name="subtitle">
                              @error('subtitle')<span class="error bg-danger">{{$message}}</span> @enderror
                            </div>
                    <div class="field">
                    <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    </svg>
                      <input autocomplete="off" class="input-field bg-img" type="file" name="img">
                    </div>
                    <div class="field">
                    <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    </svg>
                    <textarea name="body" id="" cols="30" rows="10" class="form-control bg-textarea text-white
                     bg-dark" placeholder="Inserisci il testo"></textarea>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label text-white">Categoria:</label>
                        <select name="category" id="category" class="form-control text-capitalize  bg-categoria bg-dark">
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
            
                            @endforeach
                        </select>
                        @error('category')<span class="error bg-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="btn">
                    <button class="button1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inserisci Articolo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                    <a class="btn-register " href="{{route('homepage')}}">
                        <div class="svg-wrapper-1">
                          <div class="svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                              <path fill="none" d="M0 0h24v24H0z"></path>
                              <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                            </svg>
                          </div>
                        </div>
                        <span class="">Home</span>
                    </a>
                </form>
            </div>
        </div>
    </div>
</body>
</x-layout>
