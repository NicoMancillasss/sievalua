@extends('layouts.app')
@section('content')
<div class="container">
    <div class="justify-content-center">
        <div class="m-5">
            @foreach ($convocatorias as $convocatoria)
                <h1 class="text-center">{{$convocatoria->nombre}}</h1>
                <img class="w-100 h-auto" src="{{asset('storage/'.$convocatoria->imagenConvocatoria)}}" alt="">
            @endforeach

        </div>
        <h2 class="text-center">
            Si estas interesado en la convocatoria te invitamos a que te registres
        </h2>
        <a href="{{route('register')}}"><button type="button" class="btn btn-primary btn-lg btn-block mt-5 my-5">REGISTRARME EN LA CONVOCATORIA</button></a>
    </div>
</div>
@endsection
