@extends('usuarios.dependencias.layouts.main')
@section('status','show')
@section('link','active')
@section('content')

<h5 class="text-center">Aspectos Susceptibles de Mejora {{$asm->ejercicio->año}}</h5>
<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		{{-- <h6 class="m-0 font-weight-bold text-dark"> Programa:{{$asm->programa->nombre}} </h6> --}}
		<div class="dropdown no-arrow">
			<a href="{{route('dependencia.programa.documento.trabajo',$asm->evaluacion_id)}}" class="btn btn-info btn-sm hvr-box-shadow-outset">Regresar</a>
		</div>
	</div>

	<!-- Card Body -->
	<div class="card-body">
		<!-- Card Header - Dropdown -->

		<div class="table-responsive">
			<strong>Asm:</strong>{{$asm->asm}}
			<br>
			<strong>Clasificación:</strong><span class="badge badge-success">{{$asm->aspecto->nombre}}</span>
			<table class="table table-bordered mt-3">
				<thead class="thead-dark">
					<tr class="text-center">
						<th scope="col">Id</th>
						@if ($asm->aspecto=="Institucional")
							<th>Área Coordinadora</th>
						@endif
						@if ($asm->aspecto=="Institucional")
							<th >Acciones a Emprender</th>
						@else
							<th >Actividades</th>
						@endif
						<th>Área responsable</th>
						<th>Nivel de Prioridad</th>
						<th>Fecha Término</th>
						<th>Resultados Esperados</th>
						<th>Productos</th>



					</tr>
				</thead>
				<tbody>
					@foreach ($asm->actividades as $actividad)
						<tr class="text-center" style="font-size: 12px;">
							<td>{{$actividad->id}}</td>
							@if ($asm->aspecto=="Institucional")
								<td>{{$actividad->area_coordinadora}}</td>
							@endif
							<td>{{$actividad->actividad}} </td>
							<td>{{$actividad->area_responsable}}</td>
							<td>{{$actividad->prioridad->nombre}}</td>
							<td>{{$actividad->fecha_termino}}</td>
							<td>{{$actividad->resultados_esperados}}</td>
							<td>{{$actividad->evidencias}}</td>



						</tr>
					@endforeach
				</tbody>
			</table>

		</div>
	</div>





</div>
@endsection
