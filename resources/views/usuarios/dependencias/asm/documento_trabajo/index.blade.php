@extends('usuarios.dependencias.layouts.main')
@section('status','show')
@section('link','active')
@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('dependencia.home') }}">Portafolio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('dependencia.ejercicio.programas',$evaluacion->ejercicio_id) }}">Programas</a></li>
    <li class="breadcrumb-item active" aria-current="page">Documento de Trabajo</li>
  </ol>
</nav>
<h5 class="text-center">Documento de Trabajo {{$evaluacion->ejercicio->año}}</h5>
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
					<tr ><th colspan="9" class="text-center">Documento de Trabajo</th></tr>
					<tr class="text-center" style="background-color: #5A5C69;  color: white; font-weight: bold;">
						<th>Id</th>
						<th>Asm</th>
						<th>Actividades</th>
						<th>Área responsable</th>
						<th>Nivel de Prioridad</th>
						<th>Fecha Término</th>
						<th>Resultados Esperados</th>
						<th>Productos</th>



					</tr>
				</thead>
				<tbody>

					@foreach ($asm as $as)
					<tr style="font-size:12px" class="text-center" >
						<td>{{$as->id}}</td>
						<td>{{$as->asm}}</td>
						<td class="text-center"><a href="{{ route('dependencia.asm.actividades',$as->id) }}">{{$as->actividades->count()}}</a></td>
						<td>{{$as->area_responsable}}</td>
						<td class="text-center">{{$as->prioridad->nombre}}</td>
						<td>{{$as->fecha_termino}}</td>
						<td>{{$as->resultados_esperados}}</td>
						<td>{{$as->evidencia}}</td>
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
						</tr>
						@endif

					</tr>
					@endforeach
				</tbody>
			</table>

		</div>
	</div>





</div>

@endsection

