<x-layout>
<body class="back-show">
    
    @if (session('message'))
    <div class="alert text-center position-message mt-3">
        <p class="m-0">{{session('message')}}</p>
    </div>
    @endif

    <div class="container-fluid p-5 text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1 text-dashboard">
                Sezione Revisore
            </h1>
        </div>
    </div>
       
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli da revisionare</h2>
              <x-articles-table :articles="$unrevisionedArticles" />
            </div>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli pubblicati</h2>
                <x-articles-table :articles="$acceptedArticles" />
            </div>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli respinti</h2>
                <x-articles-table :articles="$rejectedArticles" />
            </div>
        </div>
    </div>
</body>    
    </x-layout>