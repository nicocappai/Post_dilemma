<x-layout>

    <body class="backg">
        <div class="container-fluid my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <form class="form" method="post" enctype="multipart/form-data" action="{{route('article.store')}}">
                        @csrf
                        <p id="heading">Crea Articolo</p>
                        <div class="field">
                            <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            </svg>
                            <input autocomplete="off" placeholder="Titolo" class="input-field" type="text" name="title" value="{{old('title')}}">
                        </div>
                        @error('title')
                        <div class="error text-white text-center">{{$message}}</div>
                        @enderror
                        <div class="field">
                            <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            </svg>
                            <input autocomplete="off" placeholder="Username" class="input-field"  type="text" name="subtitle" value="{{old('subtitle')}}">
                        </div>
                        @error('subtitle')
                        <div class="error text-white text-center">{{$message}}</div>
                        @enderror
                        <div class="field">
                            <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            </svg>
                            <input autocomplete="off" class="input-field bg-img" type="file" name="img">
                        </div>
                        <div class="field">
                            <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            </svg>
                            <textarea name="body" id="" cols="30" rows="30" class="form-control bg-textarea text-white
                            bg-dark" placeholder="Inserisci il testo">{{old('body')}}</textarea>
                        </div>
                        @error('body')
                        <div class="error text-white text-center">{{$message}}</div>
                        @enderror
                        <div class="">
                            <label  class="form-label text-white">Categoria:</label>
                            <select name="category" id="category" class="form-control text-capitalize  bg-categoria bg-dark">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>

                                @endforeach
                            </select>
                        </div >

                        <label for="tags" class="form-label text-white mb-0 pb-0">Tags:</label>
                        <div class="field mb-0 pb-0">
                            <svg class="input-icon" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            </svg>
                            <input autocomplete="off" placeholder="Inserisci i tags" class="input-field" type="text" name="tags" value="{{old('title')}}">
                        </div>
                        <div class="mt-0">
                            <span class="small fst-italic text-white ms-3 mt-0 pt-0">Dividi ogni tag con una virgola</span>
                        </div>

                        @error('tags')
                        <div class="error text-white text-center">{{$message}}</div>
                        @enderror
                        <div class="row btn mb-2">
                            <div class="col-12 col-md-8 col-lg-6 mt-2">
                                <button class="button1">Inserisci Articolo</button>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 d-flex justify-content-center mt-2">
                                <a class="btn-register btn-home" href="{{route('homepage')}}">
                                    <div class="svg-wrapper-1 ">
                                        <div class="svg-wrapper">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="">Home</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</x-layout>
