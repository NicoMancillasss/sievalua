@extends('usuarios.administrador.layouts.main')
@section('status','show')
@section('link1','active')
@section('content')
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Ejercicios</h6>
		<div class="dropdown no-arrow">
			<a href=""data-toggle="modal" data-target="#crear" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-plus"></i> Crear</a>
		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		<table class="table table-hover text-center">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Año</th>
					<th scope="col">Estatus</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($ejercicios as $ejercicio)
				<tr>
					<th><span class="badge badge-success">{{$ejercicio->año}}</span></th>
					<th>
						@if($ejercicio->activo==1)
						<span class="badge badge-success">Activo</span>
						@else
						<span class="badge badge-danger">Inactivo</span>
						@endif
					</th>
					<th>
						<a class="btn btn-warning btn-sm hvr-box-shadow-outset" id=""  href="" data-toggle="modal" data-target="#editar"  data-datos="{{$ejercicio}}" >
							<i class="fas fa-pen"></i> Editar
						</a>
					</th>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>




</div>
@include('usuarios.administrador.ejercicios.create')
@include('usuarios.administrador.ejercicios.edit')
@endsection
@section('script')
<script type="text/javascript">
	@if($errors->edit->count()!=0)
		$('#editar').modal('show');
	@elseif($errors->count()!=0)
		$('#crear').modal('show');
	@endif


	$('#editar').on('show.bs.modal', function(e) {
		var ejercicio = $(e.relatedTarget).data().datos;
		$('#año').val(ejercicio.año);
		$('#idEjercicio').val(ejercicio.id);
		$('#fecha_cierre').val(ejercicio.fecha_cierre);
		$('#activo option[value="' +ejercicio.activo  +'"]').prop("selected", true);
	});

</script>
<script src="{{ asset('js/dataTable.js')}}"></script>
@endsection
