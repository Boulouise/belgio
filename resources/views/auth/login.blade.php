

@extends('layouts.appLogin')

@section('content')



<br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-3"><small>S'authentifier</small></div>
             
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              
              <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control @error('email') is-invalid @enderror" placeholder="Email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                          <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                              </span>
                         @enderror
                </div>
                </div>
               
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" type="password">
                    @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                  </div>
                </div>
               
                <div class="custom-control custom-control-alternative custom-checkbox">
                 
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Mémoriser') }}
                                    </label>
                </div>
                 <div class="text-center">
                 <!-- <button type="button" class="btn btn-primary my-4">Sign in</button>-->
                   <button type="submit" class="btn btn-primary my-4">
                                    {{ __('Connexion') }}
                   </button>
                </div> 
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <!-- <div class="col-6">
            @if (Route::has('password.request'))
                                    <a class="text-light  btn btn-link" href="{{ route('password.request') }}">
                                      <small>  {{ __('Mot de passe oublié ?') }}</small>
                                    </a>
                                @endif
            </div> -->
          </div>
        </div>
      </div>
    </div>
    @endsection