@extends('layouts.app')
@section('content')
<div class="" >
    <img src="{{asset('imagenes/principal/banners/banner01.jpg')}}" class="w-100" alt="">
</div>
<div class="container">

    <div class="container m-5">

        <h5 class="font-weight-bold">EVALUACIÓN</h5>
        <p class="pt-3">
            La evaluación constituye el proceso de aplicación de un método sistemático
            que permite conocer, explicar y valorar el diseño, la operación, los resultados
            y el impacto de Intervenciones gubernamentales; así como la generación de
            recomendaciones de mejora.
        </p>
    </div>

    <div class="contenedor my-5">
        <div class="">
            <a href="{{route('marcoJuridico')}}" class="hvr-grow">
                <img src="{{asset('imagenes/principal/plataforma-planeacion-02.jpg')}}" class="h-100 w-100 " alt="">
            </a>
        </div>
        <div class="">
            <a href="{{route('evaluaciones')}}" class="hvr-grow">
                <img src="{{asset('imagenes/principal/plataforma-planeacion-13.jpg')}}" class="h-100 w-100 " alt="">
            </a>
        </div>
        <div class="">
            <a href="{{route('aspectosMejora')}}" class="hvr-grow">
                <img src="{{asset('imagenes/principal/plataforma-planeacion-05.jpg')}}" class="h-100 w-100 " alt="">
            </a>
        </div>
        <div class="">
            <a href="{{route('terminosReferencia')}}" class="hvr-grow">
                <img src="{{asset('imagenes/principal/plataforma-planeacion-07.jpg')}}" class="h-100 w-100 " alt="">
            </a>
        </div>
        <div class="">
            <a href="{{route('indicadores')}}" class="hvr-grow">
                <img src="{{asset('imagenes/principal/plataforma-planeacion-03.jpg')}}" class="h-100 w-100 " alt="">
            </a>
        </div>
        <div class="medio">
            <a href="{{route('convocatoria')}}" class="">
                <img src="{{asset('imagenes/principal/medioConvocatoria.png')}}" class="h-100 w-100 " alt="">
            </a>
        </div>
        <div class="">
            <a href="{{route('lineamientos')}}" class="hvr-grow">
                <img src="{{asset('imagenes/principal/plataforma-planeacion-10.jpg')}}" class="h-100 w-100 " alt="">
            </a>
        </div>
        <div class="">
            <a href="{{route('sEE')}}" class="hvr-grow">
                <img src="{{asset('imagenes/principal/plataforma-planeacion-01.jpg')}}" class="h-100 w-100 " alt="">
            </a>
        </div>
        <div class="">
            <a href="{{route('totalEvaluaciones')}}" class="hvr-grow">
                <img src="{{asset('imagenes/principal/plataforma-planeacion-11.jpg')}}" class="h-100 w-100 " alt="">
            </a>
        </div>
        <div class="">
            <a href="{{route('evaluacionGlobal')}}" class="hvr-grow">
                <img src="{{asset('imagenes/principal/plataforma-planeacion-09.jpg')}}" class="h-100 w-100 " alt="">
            </a>
        </div>
        <div class="">
            <a href="{{route('totalEvaluaciones')}}" class="hvr-grow">
                <img src="{{asset('imagenes/principal/plataforma-planeacion-12.jpg')}}" class="h-100 w-100 " alt="">
            </a>
        </div>
        <div class="">
            <a href="{{route('evaluaciones')}}" class="hvr-grow">
                <img src="{{asset('imagenes/principal/plataforma-planeacion-14.jpg')}}" class="h-100 w-100 " alt="">
            </a>
        </div>
        <div class="">
            <a href="{{route('contratacion')}}" class="hvr-grow">
                <img src="{{asset('imagenes/principal/plataforma-planeacion-15.jpg')}}" class="h-100 w-100 " alt="">
            </a>
        </div>
        <div class="">
            <a href="{{route('convocatoria')}}" class="hvr-grow">
                <img src="{{asset('imagenes/principal/plataforma-planeacion-16.jpg')}}" class="h-100 w-100 " alt="">
            </a>
        </div>
        <div class="">
            <a href="{{route('sitiosInteres')}}" class="hvr-grow">
                <img src="{{asset('imagenes/principal/plataforma-planeacion-06.jpg')}}" class="h-100 w-100 " alt="">
            </a>
        </div>
    </div>
</div>

<div class="sI navbar-nav navbar-expand-lg position-relative mx-auto">
    <div class="mx-auto">
        <h1 class="txtS font-weight-bold text-light">SITIOS DE INTERÉS</h1>
    </div>
</div>
<div class="row w-auto m-5">
    <div class="col-2">
        <a href="http://funcionpublica.zacatecas.gob.mx/sse.php" target="_blank" class="hvr-bob">
            <img src="{{asset('imagenes/principal/sitios-interes-01.png')}}" class="h-100 w-100" alt="">
        </a>
    </div>
    <div class="col-2">
        <a href="https://www.coneval.org.mx/Paginas/principal.aspx" target="_blank" class="hvr-wobble-to-top-right">
            <img src="{{asset('imagenes/principal/sitios-interes-04.png')}}" class="h-100 w-100" alt="">
        </a>
    </div>
    <div class="col-2">
        <a href="https://www.gob.mx/hacienda" target="_blank" class="hvr-grow-rotate">
            <img src="{{asset('imagenes/principal/sitios-interes-05.png')}}" class="h-100 w-100" alt="">
        </a>
    </div>
    <div class="col-2">
        <a href="https://www.transparenciapresupuestaria.gob.mx/" target="_blank" class="hvr-bounce-in">
            <img src="{{asset('imagenes/principal/sitios-interes-03.png')}}" class="h-100 w-100" alt="">
        </a>
    </div>
    <div class="col-2">
        <a href="https://indyce.zacatecas.gob.mx/#!/" target="_blank" class="hvr-hang">
            <img src="{{asset('imagenes/principal/sitios-interes-02.png')}}" class="h-100 w-100" alt="">
        </a>
    </div>
    <div class="col-2">
        <a href="http://www.finanzas.gob.mx/" target="_blank" class="hvr-wobble-horizontal">
            <img src="{{asset('imagenes/principal/sitios-interes-06.png')}}" class="h-100 w-100" alt="">
        </a>
    </div>
</div>
@endsection

@section('script')

@endsection
