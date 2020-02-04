@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                <h5 class="card-title text-center">Inicio de sesión</h5>
                <form class="form-signin" method="POST" action="{{ route('login') }}">
                    @csrf
                  
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  autofocus placeholder="Correo Electrónico">
                        <label for="inputEmail">Correo Electrónico</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
        
                    <div class="form-label-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <label for="inputPassword">Contraseña</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror   
                    </div>
        
                    <div class="custom-control custom-checkbox mb-3 form-check">
                        <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember">Recordar Contraseña</label>
                    </div>

                    <button class="btn btn-lg btn-primary btn-block " type="submit">{{ __('Accesar') }}</button>

                    @if (Route::has('password.request'))
                    <a class="btn btn-lg btn-danger btn-block" href="{{ route('password.request') }}">{{ __('Olvidaste tu contraseña?') }}</a>
                    @endif

                    @if($ejercicio->activo()>0 && strtotime(date('Y/m/d')) <= strtotime($ejercicio->ejercicioActivo()))
                    <hr class="my-4">
                    <h6 class="text-center my-3">¿Estas interesado en participar como despacho evaluador y aún no tienes, cuenta?</h6>
                    <a class="btn btn-lg btn-success btn-block" href="{{route('register')}}">Regístrate aquí</a>
                    @endif
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection