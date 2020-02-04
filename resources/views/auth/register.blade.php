@extends('layouts.app')
@section('content')

<div class="container">
  <div class="card card-signin shadow mb-4 m-5">
    <!-- Card Header - Dropdown -->
    <div class="card-header  py-3 d-flex flex-row align-items-center justify-content-between bg-secondary">
      <h6 class="m-0 card-title  text-white">Registro de Despachos</h6>
      <div class="dropdown no-arrow">
      </div>
    </div>
    <!-- Card Body -->
    <div class="card-body">
      <form method="POST" class="form-signin" action="{{ route('register') }}">
        @csrf

        <div class="form-group row">

          <div class="col-md-4">
            <label for="name" class="">{{ __('RFC') }}</label>
            <input maxlength="13" minlength="12" id="rfc_temporal" type="text" class="form-control @error('rfc_temporal') is-invalid @enderror" name="rfc_temporal" value="{{old('rfc_temporal')}}" required >
            @error('rfc_temporal')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="col-md-4">
           <label for="name" class="">{{ __('Nombre de la Empresa o Razón Social') }}</label>
           <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" >

           @error('nombre')
           <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        
        <div class="col-md-4">
          <label for="selectEstatus">Tipo de Persona</label>
          <select required="" class="form-control {{ $errors->has('pais_id') ? ' is-invalid' : '' }}" id="pais" name="tipo_persona" onchange="">
            <option value="">Seleccione una Opción</option>
            <option value="fisica">Física</option>
            <option value="moral">Moral</option>

          </select>
          @if ($errors->has('tipo_persona'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('tipo_persona') }}</strong>
          </span>
          @endif
        </div>

        

      </div>

      <div class="form-group row" >
        <div class="col-md-4"> 
          <label for="email" class="">{{ __('Correo Electrónico') }}</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>

          @if ($errors->has('email'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
          @endif
        </div>
        <div class="col-md-4"> 
          <label for="password" class="">{{ __('Contraseña') }}</label>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          @if ($errors->has('password'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
          </span>

          @endif
          <small id="passwordHelpBlock" class="form-text text-muted">
            Su contraseña debe tener entre 8 y 20 caracteres, debe contener letras y números, y no debe contener espacios, caracteres especiales o emoji.
          </small>
        </div>
        <div class="col-md-4"> 
          <label for="password-confirm" class="">{{ __('Confirmar Contraseña') }}</label>
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
      </div>


      <div class="form-group">
        <div class="col-auto">
          <button type="submit" class="btn btn-lg btn-primary text-uppercase">
            {{ __('Registrar') }}
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
@endsection
