<x-layout>
    @if (session('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
        <div class="alert text-center position-message mt-3">
            <p class="m-0">{{session('message')}}</p>
        </div>
    </div>
    @endif

<body class="back-show">
    <div class="container-fluid my-3">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Lavora con noi</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid p-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h2><br> Lavora come amministratore</h2>
                <p>Come amministratore avrai la responsabilità di gestire la logistica e le risorse del team di scrittura, garantendo la qualità dei risultati e il rispetto delle scadenze.</p>
                <h2>Lavora come revisore</h2>
                <p> Come revisore sarai il garante della qualità dei contenuti e ti occuperai di rivedere e correggere gli articoli scritti dal team di scrittura.</p>
                <h2>Lavora come redattore</h2>
                <p>Come writer ti occuperai di creare contenuti originali e coinvolgenti per il nostro pubblico. Se sei motivato, creativo e hai un'ottima padronanza della lingua italiana, inviaci la tua candidatura per far parte del nostro team. Siamo alla ricerca di persone che abbiano voglia di crescere e migliorare continuamente, e che si impegnino a fornire sempre il massimo per raggiungere gli obiettivi. Unisciti a noi per diventare parte di una squadra di professionisti appassionati di scrittura e creatività!</p>
            </div>

            <div class="col-12 col-md-6">
                <form method="POST" class="form p-5" action="{{route('careers.submit')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="role" class="form-label text-white">Per quale ruolo ti stai candidando?</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">Scegli qui</option>
                            <option value="admin">Amministratore</option>
                            <option value="revisor">Revisore</option>
                            <option value="writer">Redattore</option>
                        </select>
                    </div>
                    @error('role')
                    <div class="error text-white text-center">{{$message}}</div>
                    @enderror
                    <div class="mb-3">
                      <label for="email" class="form-label text-white">Email</label>
                      <input type="text" name="email" class="form-control" id="email" value="{{old('email') ?? Auth::user()->email}}" >
                    </div>
                    @error('email')
                    <div class="error text-white text-center">{{$message}}</div>
                    @enderror
                    <div class="mb-3">
                      <label for="message" class="form-label text-white">Parlaci di te</label>
                     <textarea name="message" class="form-control" id="message" cols="30" rows="10">{{old('message')}}</textarea>
                    </div>
                    @error('message')
                    <div class="error text-white text-center">{{$message}}</div>
                    @enderror
                    <button type="submit" class="btn btn-careers">Invia la candidatura</button>
                  </form>
            </div>
        </div>
    </div>
</body>
</x-layout>