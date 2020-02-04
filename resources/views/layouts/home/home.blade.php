@extends('layouts.app')
@section('content')

    {{--
        @if($ejercicio->activo()>0 && strtotime(date('Y/m/d')) <= strtotime($ejercicio->ejercicioActivo()))
        <div class="alert alert-danger"><h2 class="text-center">AVISO</h2><h3 class="text-center">
        Se informa a los Despachos Externos interesados a participar en la <a href="{{ route ('convocatoria')}}">Convocatoria
                para realizar las Evaluaciones al Desempeño contempladas en el Programa Anual de
                Evaluación 2019</a>, que el plazo para el registro concluye el último minuto del día
            05 de agosto de 2019.</h3></div>
    @endif
        --}}

{{--
<div class="" >
    <div class="card card-image" id="bannerP" >
        <div class=" text-right text-light rgba-stylish-strong py-5 px-4">
            <div class="py-5 hvr-grow text-center">
                <h1 id="h1B" class="card-title h1 my-4 py-2"><i class="far fa-file-alt"></i></i> Resultados de la convocatoria 2019</h1>
                <p id="h1P" class="mb-4 pb-2 px-md-5 mx-md-5">Clic en el siguiente link para ver los resultados</p>
                <a id="h1A" class="btn btn-light"  href="{{route('resultados.convocatoria')}}"></i> Ver Resultados</a>
            </div>
        </div>
    </div>
</div>
--}}

<div class="bd-example " >
    <div id="carouselExampleCaptions" class="carousel slide docc" data-ride="carousel">
        <ol class="carousel-indicators ">
            @foreach ($imagenes as $imagen)
                <li data-target="#carouselExampleCaptions" data-slide-to="{{$imagen->id}}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner" id="boxx">

            @foreach ($imagenes as $imagen)
                <div class="carousel-item {{$v = ($var == 0) ? "active" : " "}}" id="tw">
                    <img src="{{asset('storage/'.$imagen->imagen)}}" class="d-block w-100" alt="...">
                    <div id="titleH" class="carousel-caption d-none d-md-block hvr-grow align-middle">
                        <h1 style="text-shadow: 2px 2px 12px black; font-size: 40px;" >{{$imagen->titulo}}</h1>
                        <h3><a style="text-shadow: 2px 2px 12px white;" href="{{$imagen->link}}"><i class="fas fa-hand-point-right fa-1x"></i>{{$imagen->descripcion}}</a></h3>
                    </div>
                </div>
                {{$var++}}
            @endforeach
        </div>

        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<div class="">

    <div class="container m-5">
        <h5 class="font-weight-bold">EVALUACIÓN</h5>
        <p class="pt-3">
            La evaluación constituye el proceso de aplicación de un método sistemático
            que permite conocer, explicar y valorar el diseño, la operación, los resultados
            y el impacto de Intervenciones gubernamentales; así como la generación de
            recomendaciones de mejora.
        </p>
    </div>

    <div class="row m-5">
        @foreach ($mosaicos as $mosaico)
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                <div class=" m-2 hvr-bob">
                    <a href="{{$mosaico->link}}"><img src="{{asset('storage/'.$mosaico->imagen)}}" alt="{{$mosaico->nombre}}" class="image" style="width:100%"></a>
                </div>
            </div>
        @endforeach
    </div>

</div>

<div class="sI navbar-nav navbar-expand-lg position-relative mx-auto">
    <div class="mx-auto text-center">
        <h1 class="txtS font-weight-bold text-light mt-4">SITIOS DE INTERÉS</h1>
    </div>
</div>
<div class="row w-auto m-5">
    @foreach ($sitios as $sitio)
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 ">
            <a href="{{$sitio->link}}" target="_blank" class="hvr-bob">
                <img src="{{asset('storage/'.$sitio->imagen)}}" class="h-100 w-100" alt="{{$sitio->nombre}}">
            </a>
        </div>
    @endforeach

</div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('.carousel').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            });
        });
    </script>
@endsection
