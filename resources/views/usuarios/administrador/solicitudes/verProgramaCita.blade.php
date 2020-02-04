@extends('usuarios.administrador.layouts.main')
@section('status','show')
@section('link0','active')
@section('content')
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Evaluacion: {{$postula->evaluacion->programa->nombre}} a {{$postula->evaluacion->dependencia->nombre}}</h6>
		<div class="dropdown no-arrow">
			<a href="{{ route('administrador.ver.solicitud',$postula->solicitud_id) }}" class="btn btn-info btn-sm hvr-box-shadow-outset">Regresar</a>
		</div>
	</div>
	<!-- Card Body -->
	<div class="row"> 
			<div class="col-6 ml-5 card-body">

			<h6 class="m-0 font-weight-bold text-dark">Programar Cita</h6>
			<form method="POST" action="{{route('administrador.programarCita',$postula->id)}}">
				@method('POST')
				@csrf
				<div class="form-group row">
					<div class="col mt-2">
						<label>Fecha y Hora</label>
						
							<input type="datetime-local" name="fecha_hora" required="" value="{{ $postula->cita }}" class="form-control">
						
						</div>
					</div>

				<div class="form-group row">
					<div class="col">

						<input type="text" required="" name="lugar" class="form-control" value="{{ $postula->lugar }}" placeholder="Lugar donde se deberá presentar">
					</div>
				</div>
			
				
				@if ($postula->lugar!='')
				<button class="btn btn-warning">Editar Cita</button>
				@else
				<button class="btn btn-warning">Programar Cita</button>
				@endif
				
			</form>
		</div>
	</div>
	<!--aurome -->
</div>
@endsection