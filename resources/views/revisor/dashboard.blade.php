<a name="inizio"></a>
<x-layout>
<body class="back-show body-dashboard">
    
    @if (session('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
        <div class="alert text-center position-message mt-3">
            <p class="m-0">{{session('message')}}</p>
        </div>
    </div>
    @endif

    <div class="container-fluid p-5 text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1 text-dashboard">
                Sezione Revisore
            </h1>
        </div>
    </div>
       
    <div class="container-fluid my-md-5 p-5">
        <div class="row justify-content-between">
            <div class="col-12">
                <h2>Articoli da revisionare</h2>
              <x-articles-table :articles="$unrevisionedArticles" />
            </div>
        </div>
    </div>
    
    <div class="container-fluid my-md-5 p-5">
        <div class="row justify-content-between">
            <div class="col-12">
                <h2>Articoli pubblicati</h2>
                <x-articles-table :articles="$acceptedArticles" />
            </div>
        </div>
    </div>
    
    <div class="container-fluid my-md-5 p-5">
        <div class="row justify-content-between">
            <div class="col-12">
                <h2>Articoli respinti</h2>
                <x-articles-table :articles="$rejectedArticles" />
            </div>
        </div>
    </div>
</body>   
<a href="#inizio">
    <div id="tornasu">
        <img src= "/images/icon-top.png" class="tornasu" width="60px" height="60px">  
    </div>
</a> 
</x-layout>