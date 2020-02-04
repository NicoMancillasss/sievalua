@extends('layouts.app')
@section('content')
<div class="" >
    <img src="{{asset('imagenes/principal/banners/banner05.jpg')}}" class="w-100" alt="">
</div>
<div class="container">

    <div class="container m-5">

        <h5>EVALUACIÓN</h5>
        <p class="pt-3">
            La evaluación constituye el proceso de aplicación de un método sistemático
            que permite conocer, explicar y valorar el diseño, la operación, los resultados
            y el impacto de Intervenciones gubernamentales; así como la generación de
            recomendaciones de mejora.
        </p>
    </div>
</div>
<div class="container-fluid">
    <div class="row mb-5">
        @if ($sistemaEstEva->count()==0)
            <div class=" col-12 card shadow m-4">
                <div class="jumbotron jumbotron-fluid mt-4">
                    <div class="container">
                        <h1 class="display-4">No se han encontrado registros</h1>
                    </div>
                </div>
            </div>
        @else
            @foreach ($sistemaEstEva as $see)
                <div class="col-4">
                    <a href="{{$see->link}}" target="_blanck">
                        <button type="button" class="hvr-bob btn1 btn btn-info btn-lg btn-block "><i class="fas fa-users"></i>{{$see->nombre}}</button>
                    </a>
                </div>
            @endforeach
        @endif

    </div>
</div>
@endsection
