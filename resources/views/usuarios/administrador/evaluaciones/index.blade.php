@extends('usuarios.administrador.layouts.main')
@section('status','show')
@section('link2','active')
@section('content')
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">PAE Evaluaciones</h6>
		<div class="dropdown no-arrow">
			<a href=""data-toggle="modal" data-target="#crear" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-plus"></i> Crear</a>
		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		<table class="table table-striped table-responsive">
			<thead class="thead-dark">
				<tr class="text-center">
					<th class="align-middle" scope="col">Dependencia</th>
					<th class="align-middle" scope="col">Ejercicio</th>
					<th class="align-middle" scope="col">Programa</th>
					<th class="align-middle" scope="col">Tipo de Evaluación</th>
					<th class="align-middle" scope="col">Entregable</th>
					<th class="align-middle" scope="col">Documentos</th>
				</tr>
			</thead>
			<tbody>

				@foreach ($evaluaciones as $year =>$evaluacion)

				<tr>
					<td class="align-middle">
						<span class="badge badge-danger">{{$evaluacion[0]->ejercicio->año}}</span>
					</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td class="text-center">

						<a href="{{ route('evaluacion.documentos.generales',$evaluacion[0]->ejercicio->id) }}" data-toggle="tooltip" data-placement="top" title="Documentos Generales"> <i class="fas fa-file-alt fa-2x text-success hvr-bounce-in"></i></a>
					</td>

				</tr>

				@foreach ($evaluacion as $eva)
				<tr class="text-center">
					<td class="align-middle">{{$eva->dependencia->nombre}}</td>
					<td class="align-middle">{{$eva->ejercicio->año}}</td>
					<td class="align-middle">{{$eva->programa->nombre}}</td>
					<td class="align-middle">{{$eva->tipoEvaluacion->nombre}}</td>
					<td class="align-middle">{{$eva->entregable}}</td>
					<td class="text-center align-middle">
                            <a href="{{ route('evaluacion.documentos.especificos',[$evaluacion[0]->ejercicio->id,$eva->id]) }}" data-toggle="tooltip" data-placement="top" title="Documentos Especificos"> <i class="fas fa-file-alt fa-2x text-secondary hvr-bounce-in"></i></a>
                            <i class="fas fa-minus text-gray-300"></i>
                            <a href="{{ route('evaluacion.documentos.finales',[$evaluacion[0]->ejercicio->id,$eva->id]) }}" data-toggle="tooltip" data-placement="top" title="Documentos Finales"> <i class="fas fa-file-alt fa-2x text-warning hvr-bounce-in"></i></a>
					</td>
				</tr>
				@endforeach
				@endforeach
			</tbody>
		</table>

	</div>




</div>
@include('usuarios.administrador.evaluaciones.create')
@endsection
@section('script')

@endsection
