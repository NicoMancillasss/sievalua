@extends('usuarios.administrador.layouts.main')
@section('content')

<h4 class="text-center">Hallazgos de {{$postulacion->evaluacion->programa->nombre}}</h4>
<div class="card shadow mb-4 mt-4">
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Hallazgo de  {{$postulacion->solicitud->user->nombre}}</h6>
		<div class="dropdown no-arrow">
			<a href="{{route('administrador.asm.despacho.hallazgos',$postulacion->evaluacion->ejercicio_id)}}" class="btn btn-info btn-sm">Despachos</a>
		</div>
    </div>

    <div class="text-center mt-5">
        <h5><strong>Aspectos Susceptibles de Mejora Cargados</strong></h5>
    </div>

    <div class="">
        <div class="row card-body text-center">
            <div class="col-sm-12 mb-4 border-bottom-info">
                <div class=" text-center hvr-float-shadow mb-4">
                    <h5 class="card-title m-0 font-weight-bold text-dark mt-4"> ASM </h5>
                    <p class="card-text" id="asmVerr">{{$asm}}</p>
                </div>
            </div>
            {{--
                <div class="col-sm-6 mb-4 ml-0 border-bottom-info">
                    <div class="text-center hvr-float-shadow">
                        <h5 class="card-title font-weight-bold text-dark">Recomendación</h5>
                        <p class="card-text" id="asmRecomendacion">
                        </p>
                    </div>
                </div>
            --}}
        </div>
        <div class="row card-body text-center">

            <div class="col-sm-4 mb-6 border-left-info">
                <div class="text-center hvr-float-shadow">
                    <h5 class="card-title font-weight-bold text-dark">Clasificación</h5>
                    <p class="card-text" id="asmAccion">
                    </p>
                </div>
            </div>

            <div class="col-sm-4 mt-3 border-left-info ">
                <div class="text-center justify-content-between hvr-float-shadow ">
                    <h5 class="card-title font-weight-bold text-dark">Recomendación</h5>
                    <p class="card-text" id="asmJustificacionAccion"></p>
                </div>
            </div>
            <div class="col-sm-4 mb-4 border-left-info ">
                <div class="text-center hvr-float-shadow">
                    <h5 class="card-title font-weight-bold text-dark">Estatus</h5>
                    <p class="card-text" id="asmPrioridadJustificacion">
                    </p>
                </div>
            </div>
        </div>
        <div class="row card-body text-center">
            <div class="col-sm-3 mb-6 border-left-info">
                <div class="text-center hvr-float-shadow">
                    <h5 class="card-title font-weight-bold text-dark">Tipo de Evaluación</h5>
                    <p class="card-text" id="asmEvidencia">
                    </p>
                </div>
            </div>
            {{--
                <div class="col-sm-3 mt-3 border-left-info ">
                    <div class="text-center justify-content-between hvr-float-shadow ">
                        <h5 class="card-title font-weight-bold text-dark">Recomendacion</h5>
                        <p class="card-text" id="asmRecomendacion"></p>
                    </div>
                </div>
            --}}


            <div class="col-sm-3 mb-4 border-left-info">
                <div class="text-center hvr-float-shadow">
                    <h5 class="card-title font-weight-bold text-dark">Prioridad</h5>
                    <p class="card-text" id="asmResultadosEsperados"></p>

                </div>
            </div>
            <div class="col-sm-3 mb-4 border-left-info">
                <div class="text-center hvr-float-shadow">
                    <h5 class="card-title font-weight-bold text-dark">Temas</h5>
                    <p class="card-text" id="asmResultadosEsperados"></p>

                </div>
            </div>
            <div class="col-sm-3 mb-6 border-left-info">
                <div class="text-center hvr-float-shadow">
                    <h5 class="card-title font-weight-bold text-dark">Actores Involucrados</h5>
                    <p class="card-text" id="asmEvidencia">
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
