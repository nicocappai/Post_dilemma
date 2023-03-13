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
                <h2>Lavora come amministratore</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus obcaecati sed adipisci molestiae alias odio? Quis, ea! Non facere, animi placeat accusantium sunt nemo, odit velit explicabo voluptatum est ad?</p>
                <h2>Lavora come revisore</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores voluptas rem ea, laudantium provident, possimus nisi aut quis ut incidunt ipsa sit soluta commodi perferendis aspernatur asperiores mollitia itaque consequatur!</p>
                <h2>Lavora come redattore</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque assumenda sapiente ipsam distinctio voluptatem vel expedita odit saepe unde minus dolores, fugit excepturi tempore fugiat nemo nesciunt debitis. Nam, culpa.</p>
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