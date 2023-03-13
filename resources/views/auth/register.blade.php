<x-layout>
  @if (session('message'))
  <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
      <div class="alert text-center position-message mt-3">
          <p class="m-0">{{session('message')}}</p>
      </div>
  </div>
  @endif
  <body class="back-show"> 
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{route('register')}}" class="form font">
                    @csrf
                    <p id="heading">Registrati</p>
                     <div class="field">
                    <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"></path>
                    </svg>
                      <input autocomplete="off" placeholder="Nome" class="input-field" type="text" name="name">
                    </div>
                    @error('name')
                    <div class="error text-white text-center">{{$message}}</div>
                    @enderror
                    <div class="field">
                    <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"></path>
                    </svg>
                      <input autocomplete="off" placeholder="Email" class="input-field" type="email" name="email">
                    </div>
                    @error('email')
                    <div class="error text-white text-center">{{$message}}</div>
                    @enderror
                    <div class="field">
                    <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
                    </svg>
                      <input placeholder="Password" class="input-field" type="password" name="password">
                    </div>
                    @error('password')
                    <div class="error text-white text-center">{{$message}}</div>
                    @enderror
                    <div class="field">
                        <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
                        </svg>
                          <input placeholder="Conferma Password" class="input-field" type="password"  name="password_confirmation">
                        </div>
                        @error('password_confirmation')
                        <div class="error text-white text-center">{{$message}}</div>
                        @enderror
                        <div class="btn">
                            <button class="button1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registrati&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                            <a class="btn-register " href="{{route('login')}}">
                              <div class="svg-wrapper-1">
                                <div class="svg-wrapper">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                                  </svg>
                                </div>
                              </div>
                              <span class="">Accedi</span>
                          </a>
                        </div>
                </form>
            </div>
        </div>
    </div>
  </body>
</x-layout>