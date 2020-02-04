@extends('usuarios.dependencias.layouts.main')
@section('status','show')
@section('link','active')
@section('content')
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('dependencia.home') }}">Portafolio</a></li>
		<li class="breadcrumb-item active" aria-current="page">Programas</li>
	</ol>
</nav>
<div class="card shadow mb-4">

	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Programas {{$ejercicio->año}}</h6>
		<div class="dropdown no-arrow">
			<a href="{{ route('dependencia.home') }}" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-angle-left"></i> Ejercicios</a>
		</div>
	</div>

	<!-- Card Body -->
	<div class="card-body">

		{{-- Mensajes --}}

    @if (count($seleccionadas)==0)
        <div class="card-body container">
			<div class=" text-center" role="alert">
				<h2 class="alert-heading">¡No existen programas seleccionados a evaluar!</h2>
            </div>
        </div>
    @else
        <!-- Card Body -->
		<div class="card-body">
			<div class="alert alert-info text-center" role="alert">
				<h4 class="alert-heading">¡Estos son los programas en los que fuiste seleccionado para evaluar!</h4>
				<p>	Seguido de los programas se dividen los aspectos susceptibles de mejora en sus cuatro clasificaciones
				   	(Específicos,Institucionales,Interinstitucionales,Intergubernamentales). Así como el documento de trabajo
					e institucional con sus respectivos avances, que se irán llenando conforme cargues tus aspectos susceptibles de mejora.
				</p>
				<hr>
				<p class="mb-0">Puedes dar clic en cada uno de los ejercicios mostrados en pantalla para seguir con el proceso. </p>
			</div>
			<div class="table-responsive">
				<table class="table table-bordered text-center">
					<thead class="thead-dark">
						<tr class="align-middle">
							<th class="align-middle" scope="col">Programa</th>
							<th class="align-middle" scope="col">Aspectos Específicos</th>
							<th class="align-middle" scope="col">Aspectos Institucionales</th>
							<th class="align-middle" scope="col">Aspectos interinstitucionales</th>
							<th class="align-middle" scope="col">Aspectos intergubernamentales</th>
							{{-- <th scope="col">Despacho Evaluador</th> --}}
						</tr>
					</thead>
					<tbody>
						@foreach($seleccionadas as $evaluacion)
						<tr class="align-middle">
							{{-- parametros 1=ejercicio, 2=programa --}}
							<th><a href="{{ route('dependencia.ejercicio.programa.asm',[encrypt($evaluacion->evaluacion->ejercicio->id),encrypt($evaluacion->evaluacion->id)]) }}">{{$evaluacion->evaluacion->programa->nombre}} </a><br><span class="badge badge-success">({{$evaluacion->evaluacion->tipoEvaluacion->nombre}})</span></th>
							<th class="align-middle">
								<a href="{{ route('dependencia.programa.clasificacion.aspecto',[$evaluacion->evaluacion->id,1]) }}">{{$asm->cantidadClasificacion($evaluacion->evaluacion->id,1)}}</a>
							</th>
							<th class="align-middle"><a href="{{ route('dependencia.programa.clasificacion.aspecto',[$evaluacion->evaluacion->id,2]) }}">{{$asm->cantidadClasificacion($evaluacion->evaluacion->id,2)}}</a></th>
							<th class="align-middle"><a href="{{ route('dependencia.programa.clasificacion.aspecto',[$evaluacion->evaluacion->id,3]) }}">{{$asm->cantidadClasificacion($evaluacion->evaluacion->id,3)}}</a></th>
							<th class="align-middle"><a href="{{ route('dependencia.programa.clasificacion.aspecto',[$evaluacion->evaluacion->id,4]) }}">{{$asm->cantidadClasificacion($evaluacion->evaluacion->id,4)}}</a></th>
							{{-- <th>{{$evaluacion->solicitud->user->nombre}}</th> --}}
						</tr>
						<tr>
							<th class="align-middle" colspan="5">
								<a href="{{ route('dependencia.programa.documento.trabajo',$evaluacion->evaluacion) }}" class="btn btn-primary btn-sm hvr-box-shadow-outset mb-2"> <i class="fas fa-file"></i> Documento de Trabajo</a>
								<a href="{{ route('dependencia.programa.documento.institucional',$evaluacion->evaluacion) }}" class="btn btn-primary btn-sm hvr-box-shadow-outset mb-2"> <i class="fas fa-file"></i> Documento Institucional</a>
								<a href="{{ route('dependencia.programa.documento.trabajo.avances',$evaluacion->evaluacion) }}" class="btn btn-primary btn-sm hvr-box-shadow-outset mb-2"> <i class="fas fa-file"></i> Avances Documento Trabajo</a>
								<a href="{{ route('dependencia.programa.documento.institucional.avances',$evaluacion->evaluacion) }}" class="btn btn-primary btn-sm hvr-box-shadow-outset mb-2"> <i class="fas fa-file"></i> Avances Documento Institucional</a>
							</th>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>

        </div>
    @endif
    </div>
</div>
	@endsection
