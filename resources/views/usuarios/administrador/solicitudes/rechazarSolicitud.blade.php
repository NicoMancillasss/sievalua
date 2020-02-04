@extends('usuarios.administrador.layouts.main')
@section('status','show')
@section('link0','active')
@section('content')
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Rechazar a {{$solicitud->folio}}</h6>
		<div class="dropdown no-arrow">
			<a href="{{ route('administrador.solicitudes',[$solicitud->ejercicio_id,$solicitud->estatus]) }}" class="btn btn-info btn-sm hvr-box-shadow-outset">Regresar</a>
		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		<form method="POST" action="{{route('administrador.rechazar.solicitud',$solicitud->id)}}">
			@method('POST')
			@csrf
			<label>Especifique el porqué se rechaza</label>
			<textarea  required="" class="form-control" name="correcciones">Para efectos de la selección se Diseñó una Metodología, con los principios de legalidad, honradez, transparencia y objetividad, mismos que fueron aplicados a cabalidad, permitiendo obtener los resultados de aquellos que fueron seleccionados positivamente y aquellos que fueron rechazados.</textarea>
			<button type="submit" class="btn btn-info mt-3 hvr-box-shadow-outset">Enviar</button>
		</form>
	</div>




</div>
@endsection