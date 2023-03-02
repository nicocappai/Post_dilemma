<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Registrati</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome e Cognome</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Conferma password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary">Registrati</button>
                        <p class="small mt-2">Già registrato?<a href="{{route('login')}}">Clicca qui</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>