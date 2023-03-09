<x-layout>
    <body class="back-show">

        <div class="container-fluid p-5  text-center text-white">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="display-1 text-dashboard">
                        Sezione Amministratore
                    </h1>

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
                </div>
            </div>
        </div>

        @if (session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
        @endif

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
    </body>
</x-layout>
