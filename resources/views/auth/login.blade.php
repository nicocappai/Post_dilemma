<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Login</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mt-2">
                    <button type="submit" class="btn btn-primary">Accedi</button>
                    <p class="small mt-2">Non sei registrato?<a href="{{route('register')}}">Clicca qui</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>