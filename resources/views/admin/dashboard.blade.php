<a name="inizio"></a>
<x-layout>
    <body class="back-show">

        @if (session('message'))
        <div class="alert text-center position-message mt-3">
            <p class="m-0">{{session('message')}}</p>
        </div>
        @endif

        <div class="container-fluid p-5  text-center text-white">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="display-1 text-dashboard">
                        Sezione Amministratore
                    </h1>

                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Richieste per ruolo amministratore</h2>
                    <x-requests-table :roleRequests="$adminRequests" role="amministratore"/>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Richieste per ruolo revisore</h2>
                    <x-requests-table :roleRequests="$revisorRequests" role="revisore"/>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Richieste per ruolo redattore</h2>
                    <x-requests-table :roleRequests="$writerRequests" role="redattore"/>
                </div>
            </div>
        </div>

        <div class="container-fluid p-5  text-center text-white">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="display-1 text-dashboard">
                        I tags della piattaforma
                    </h1>
                    <x-metainfo-table :metaInfos="$tags" metaType="tags"/>
                </div>
            </div>
        </div>
        
        <div class="container-fluid p-5  text-center text-white">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="display-1 text-dashboard">
                       Le Categorie della piattaforma
                    </h1>
                    <x-metainfo-table :metaInfos="$categories" metaType="categorie"/>
                    <form method="POST" action="{{route('admin.storeCategory')}}"  class="d-flex">
                        @csrf
                        <input type="text" name="name" class="form-control m-2" placeholder="Inserisci una nuova categoria">
                        <button type="submit" class="btn btn bg-success text-white">
                            Aggiungi
                        </button>
                    </form>
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
