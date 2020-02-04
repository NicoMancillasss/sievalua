@extends('usuarios.despacho.layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Para continuar con tu registro es necesario que confirmes tu correo electrónico,') }}
                        </div>
                    @endif

                    {{ __('Por lo cual te hemos
                    enviado un enlace de verificación. Te recomendamos verifiques tu bandeja de entrada, si no lo encuentras
                    ahí, por favor revisa tu carpeta de spam o no deseados.  ') }}
                    {{ __('Puedes solicitar otro enlace de verificación') }}, <a href="{{ route('verification.resend') }}">{{ __(' haciendo clic aquí.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
