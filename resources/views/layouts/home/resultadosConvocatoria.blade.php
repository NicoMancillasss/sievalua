@extends('layouts.app')
@section('content')
<div class="container">
    <div class="justify-content-center">
        
        <div class="m-5">
            @foreach ($convocatorias as $convocatoria)
                <img class="w-100 h-auto" src="{{asset('storage/'.$convocatoria->imagenResultado)}}" alt="">
            @endforeach
        </div>
    </div>
</div>
@endsection