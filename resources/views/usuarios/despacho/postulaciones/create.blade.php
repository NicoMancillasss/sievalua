@extends('usuarios.despacho.solicitudes.home')
@section('link2','active')
@section('menu1')

<form action="{{ route('postulaciones.store') }}" method="post">
	@method('post')
	@csrf
	<div class="alert alert-secondary" role="alert">
		<p>
			A continuación se muestran las evaluaciones disponibles, por favor selecciona aquellas en las que desees
			participar haciendo clic en la casilla correspondiente
		</p>
	</div>
	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col"></th>
				<th scope="col">Año a Evaluar</th>
				<th scope="col">Dependencia/Entidad</th>
				<th scope="col">Política Programa a Evaluar</th>
				<th scope="col">Tipo Evaluación</th>
				<th scope="col">Producto Entregable</th>
			</tr>
		</thead>
		<tbody>
			@foreach($evaluaciones as $evaluacions => $evaluacion)
			<tr>
				<td>
					<input class="" type="checkbox" value="{{$evaluacion->id}}" id="defaultCheck1" name="evaluaciones[]"
					 @if(in_array($evaluacion->id,$listaPostulaciones)) checked @endif>
					
				</td>
				<td>{{$evaluacion->ejercicio->año}}</td>

				<td>{{$evaluacion->dependencia->nombre}}  ({{$evaluacion->dependencia->acronimo}}) </td>
				<td>{{$evaluacion->programa->nombre}}</td>
				<td>{{$evaluacion->tipoEvaluacion->nombre}}</td>
				<td>{{$evaluacion->entregable}}</td>
			</tr>
			@endforeach

		</tbody>
	</table>

	<button type="submit" class="btn btn-info">Guardar/Siguiente</button>
</form>


@endsection