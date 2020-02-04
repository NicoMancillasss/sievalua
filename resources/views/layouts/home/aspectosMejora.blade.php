@extends('layouts.app')
@section('content')
<div class="" >
    <img src="{{asset('imagenes/principal/banners/banner03.jpg')}}" class="w-100" alt="">
</div>
<div class="row">
<hr>
</div>
<div class="shadow p-3 m-3 rounded text-center ">
    <h1 class="display-4 mb-5">Aspectos Susceptibles de Mejora</h1>
        <div class="jumbotron jumbotron-fluid ">
            <div class=" row justify-content-center">
                @foreach ($ejercicios as $ejercicio)
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <a href="{{route('asmDetalles',Crypt::encrypt($ejercicio->id))}}">
                            <h1 class="btn btn-info btn-lg hvr-box-shadow-outset font-weight-bold text-lg">{{$ejercicio->año}}</h1>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
</div>
@endsection
