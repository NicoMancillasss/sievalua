@extends('usuarios.dependencias.layouts.main')
@section('status','show')
@section('link','active')
@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('dependencia.home') }}">Portafolio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('dependencia.ejercicio.programas',$evaluacion->ejercicio_id) }}">Programas</a></li>
    <li class="breadcrumb-item active" aria-current="page">Documento Institucional</li>
  </ol>
</nav>

<h5 class="text-center">Documento Institucional {{$evaluacion->ejercicio->año}}</h5>
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
			<table class="table table-bordered text-center">
				<thead class="thead-dark">
					<tr class="text-center" >
						<th class="align-middle" scope="col">Id</th>
						<th class="align-middle">Asm</th>
						<th class="align-middle">Área Coordinadora</th>
						<th class="align-middle" >Actividades</th>
						<th class="align-middle" width="30">Área responsable</th>
						<th class="align-middle">Nivel de Prioridad</th>
						<th class="align-middle" width="30">Fecha Término</th>
						<th class="align-middle" width="30">Resultados Esperados</th>
						<th class="align-middle" width="30">Productos</th>



					</tr>
				</thead>
				<tbody>
					@foreach ($asm as $as)
							<tr class="text-center" style="font-size: 12px; background-color: #7B7D87; color: white; font-weight: bold;">
								<td class="align-middle">{{$as->id}}</td>
								<td class="align-middle">{{$as->asm}}</td>
								<td class="align-middle"></td>
								<td class="align-middle"></td>
								<td class="align-middle"></td>
								<td class="align-middle"></td>
								<td class="align-middle"></td>
								<td class="align-middle"></td>
								<td class="align-middle"></td>
								@if ($as->actividades->count()==0)
								<tr style="font-size: 12px;">
									<td class="align-middle"></td>
									<td class="align-middle"></td>
									<td class="align-middle">Ninguno</td>
									<td class="align-middle">Ninguno</td>
									<td class="align-middle">Ninguno</td>
									<td class="align-middle">Ninguno</td>
									<td class="align-middle">Ninguno</td>
									<td class="align-middle">Ninguno</td>
									<td class="align-middle">Ninguno</td>
								</tr>
								@endif
						@foreach ($as->actividades as $actividad)
							<tr style="font-size: 12px;">
								<td class="align-middle">{{$actividad->id}}</td>
								<td class="align-middle"></td>
								<td class="align-middle">{{$actividad->area_coordinadora}}</td>
								<td class="align-middle">{{$actividad->actividad}}</td>
								<td class="align-middle">{{$actividad->area_responsable}}</td>
								<td class="align-middle">
									{{$actividad->prioridad->nombre}}
								</td>
								<td class="align-middle">{{$actividad->fecha_termino}}</td>
								<td class="align-middle">{{$actividad->resultados_esperados}}</td>
								<td class="align-middle">{{$actividad->evidencias}}</td>
							</tr>
						@endforeach
							</tr>
					@endforeach
				</tbody>
			</table>

		</div>
	</div>





</div>

@endsection
