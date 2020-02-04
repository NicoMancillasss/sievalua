@extends('usuarios.dependencias.layouts.main')
@section('status','show')
@section('link','active')
@section('content')

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('dependencia.home') }}">Portafolio</a></li>
		<li class="breadcrumb-item"><a href="{{ route('dependencia.ejercicio.programas',$evaluacion->ejercicio_id) }}">Programas</a></li>
		<li class="breadcrumb-item active" aria-current="page">Avance Documento de Trabajo</li>
	</ol>
</nav>

<h5 class="text-center">Avances Documento de Trabajo {{$evaluacion->ejercicio->año}}</h5>
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark"> Programa: {{$evaluacion->programa->nombre}} </h6>
		<div class="dropdown no-arrow">

			<a href="{{ route('dependencia.ejercicio.programas',$evaluacion->ejercicio_id) }}" class="btn btn-info btn-sm hvr-box-shadow-outset">Programas</a>

		</div>
	</div>

	<!-- Card Body -->
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered table-sm">
				<thead>
					<tr class="text-center">
						<th>Id</th>
						<th>Asm</th>
						<th >Actividades</th>
						<th>Área responsable</th>
						<th>Nivel de Prioridad</th>
						<th>Fecha Término</th>
						<th>Resultados Esperados</th>
						<th>Productos/Evidencias</th>
						<th>Total % Avance</th>
						<th>Identificación del Documento Probatorio</th>
						<th>Observaciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($asm as $as)
					<tr class="text-center" style="font-size: 12px; ">
						<td>{{$as->id}}</td>
						<td>{{$as->asm}}</td>
						<td class="text-center"><a href="{{ route('dependencia.asm.actividades',$as->id) }}">{{$as->actividades->count()}}</a></td>
						<td>{{$as->area_responsable}}</td>
						<td class="text-center">{{$as->nivel_prioridad}}</td>
						<td>{{$as->fecha_termino}}</td>
						<td>{{$as->resultados_esperados}}</td>
						<td>{{$as->evidencia}}</td>
						<td class="text-center">{{$as->porcentajeAsm()}}</td>
						<td>{{$as->documento_referencia}}</td>
						<td></td>
					</tr>
					@endforeach
				</tbody>
			</table>

		</div>
	</div>





</div>

@endsection

