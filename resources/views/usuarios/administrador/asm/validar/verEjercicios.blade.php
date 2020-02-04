@extends('usuarios.administrador.layouts.main')
@section('status3','show')
@section('link7','active')
@section('content')
{{-- <h5>El despacho que te evaluará es: {{Auth::user()->despachoEvaluador()->nombre}}</h5>
<h5>con el programa: {{Auth::user()->evaluacion()->evaluacion->programa->nombre}}</h5> --}}
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Ejercicios{{-- que tocaron --}}</h6>
		<div class="dropdown no-arrow">
			{{-- <a href=""data-toggle="modal" data-target="#crear" class="btn btn-info btn-sm hvr-box-shadow-outset">Crear</a> --}}
		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		{{-- <table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">Programa</th>
					<th scope="col">Despacho Evaluador</th>

				</tr>
			</thead>
			<tbody>
				@foreach(Auth::user()->despachoEvaluador() as $evaluacion)
				<tr>
					<th>{{$evaluacion->evaluacion->programa->nombre}}</th>
					<th>{{$evaluacion->solicitud->user->nombre}}</th>
				</tr>
				@endforeach
			</tbody>
		</table> --}}
		<table class="table table-hover">
			<thead class="thead-dark">
				<tr class="text-center">
					<th scope="col">Año</th>
					<th scope="col">Estatus</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($ejercicios as $ejercicio)
				<tr class="text-center">
					<th><span class="badge badge-success">{{$ejercicio->año}}</span> - <span class="badge badge-success">{{$ejercicio->año+1}}</span></th>
					<th>
						@if($ejercicio->activo==1)
						<span class="badge badge-success">Activo</span>
						@else
						<span class="badge badge-danger">Inactivo</span>
						@endif
					</th>
					<th>
						<a class="btn btn-warning btn-sm hvr-box-shadow-outset" href="{{ route('administrador.asm.dependencia',$ejercicio->id) }}" >
							<i class="fas fa-building"></i> Dependencias <span class="badge badge-light">{{$globalasm->where('ejercicio_id',$ejercicio->id)->where('tipo','Dependencia')->count()}}</span>
						</a>
					</th>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>




</div>
@endsection
@section('script')
    <script src="{{ asset('js/dataTable.js')}}"></script>
@endsection
