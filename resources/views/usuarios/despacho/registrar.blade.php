<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group row">

        <div class="col-md-6">
            <label for="name" class="">{{ __('Nombre de la Empresa') }}</label>
            <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" >

            @error('nombre')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>

        <div class="col-md-6">
            <label for="email" class="">{{ __('Correo Electrónico') }}</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
    </div>

<div class="form-group row">
    <div class="col-md-12">
        <label for="email" class="">{{ __('Direccion') }}</label>
        <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('email') }}" required autocomplete="direccion">

        @error('direccion')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">

    <div class="col-md-6">
        <label for="name" class="">{{ __('RFC') }}</label>
        <input id="name" type="text" class="form-control @error('rfc') is-invalid @enderror" name="rfc" value="{{ old('rfc') }}" required autocomplete="RFC" autofocus>
        @error('rfc')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="email" class="">{{ __('Télefono') }}</label>
        <input id="telefono" type="number" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono">

        @error('telefonoip')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <div class="col-md-12">
        <label for="email" class="">{{ __('Representante Legal') }}</label>
        <input id="representante" type="textarea" class="form-control @error('representante') is-invalid @enderror" name="representante_legal" value="{{ old('representante_legal') }}" required autocomplete="direccion">
        @error('representante_legal')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<div class="form-group row">
    <div class="col-md-6">
        <label for="password" class="">{{ __('Contraseña') }}</label>

        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>Contraseña no Coincide</strong>
        </span>
        @endif
    </div>

    <div class="col-md-6">
        <label for="password-confirm" class="">{{ __('Confirmar Contraseña') }}</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    </div>
</div>


<div class="form-group">
    <div class="float-right">
        <button type="submit" class="btn btn-primary">
        {{ __('Register') }}
        </button>
    </div>
</div>

</form>
