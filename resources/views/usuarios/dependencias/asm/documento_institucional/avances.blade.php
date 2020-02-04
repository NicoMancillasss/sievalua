@extends('usuarios.dependencias.layouts.main')
@section('status','show')
@section('link','active')
@section('content')
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('dependencia.home') }}">Portafolio</a></li>
		<li class="breadcrumb-item"><a href="{{ route('dependencia.ejercicio.programas',$evaluacion->ejercicio_id) }}">Programas</a></li>
		<li class="breadcrumb-item active" aria-current="page">Avance Documento Institucional</li>
	</ol>
</nav>
<h5 class="text-center">Avances Documento Institucional {{$evaluacion->ejercicio->año}}</h5>
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
			<table class="table table-bordered">
				<thead>
					<tr class="text-center">
						<th scope="col">Id</th>
						<th>Asm</th>
						<th>Área Coordinadora</th>
						<th >Actividades</th>
						<th width="30">Área responsable</th>
						<th>Nivel de Prioridad</th>
						<th width="30">Fecha Término</th>
						<th width="30">Resultados Esperados</th>
						<th width="30">Productos</th>
						<th width="30">% Avance</th>
						<th width="30">Identificación del documento probatorio</th>
						<th width="30">Observaciones</th>



					</tr>
				</thead>
				<tbody>
					@foreach ($asm as $as)
					<tr class="text-center" style="font-size: 12px; background-color: #7B7D87; color: white; font-weight: bold;">
						<td>{{$as->id}}</td>
						<td>{{$as->asm}}</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						@if ($as->actividades->count()==0)
						<tr style="font-size: 12px;">
							<td></td>
							<td></td>
							<td>Ninguno</td>
							<td>Ninguno</td>
							<td>Ninguno</td>
							<td>Ninguno</td>
							<td>Ninguno</td>
							<td>Ninguno</td>
							<td>Ninguno</td>
						</tr>
						@endif
						@foreach ($as->actividades as $actividad)
						<tr style="font-size: 12px;">
							<td>{{$actividad->id}}</td>
							<td></td>
							<td>{{$actividad->area_coordinadora}}</td>
							<td>{{$actividad->actividad}}</td>
							<td>{{$actividad->area_responsable}}</td>
							<td>
								@if ($actividad->nivel_prioridad=='Bajo')
									<span class="badge badge-info">BAJO</span>
								@elseif($actividad->nivel_prioridad=='Medio')
									<span class="badge badge-warning">MEDIO</span>
								@elseif($actividad->nivel_prioridad=='Alto')
									<span class="badge badge-danger">ALTO</span>
								@endif
							</td>
							<td>{{$actividad->fecha_termino}}</td>
							<td>{{$actividad->resultados_esperados}}</td>
							<td>{{$actividad->evidencias}}</td>
							<td><a href="{{ route('dependencia.programa.avance.doc.institucional.asm.actividad.avance',[$actividad,$evaluacion->id]) }}">{{$actividad->cantidadAvance()}} %</a>
								<div class="progress">
									<div class="progress-bar bg-success" role="progressbar" style="width: {{$actividad->cantidadAvance()}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</td>
							<td></td>
							<td></td>
						</tr>
							@if ($loop->last)
								<tr style="font-size: 18px; font-weight: bold">
									<td colspan="7"></td>
									<td colspan="2">Total de avances</td>
									<td>
										312230
									</td>
								</tr>
							@endif
						@endforeach
					</tr>
					@endforeach
				</tbody>
			</table>

		</div>
	</div>





</div>

@endsection

