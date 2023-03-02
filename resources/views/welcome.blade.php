<x-layout>
    @if (session('message'))
    <div class="alert alert-success">
        <p class="m-0">{{session('message')}}</p>
    </div>
    @endif
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>The Aulab Post</h1>


            </div>
        </div>
    </div>

    @if ($articles->isNotEmpty())
    @foreach ($articles as $article)
    <div class=" col-12 col-md-8 col-lg-4">
        <x-card-create

        :article="$article"


        />


    </div>
    @endforeach
    @endif



</x-layout>
