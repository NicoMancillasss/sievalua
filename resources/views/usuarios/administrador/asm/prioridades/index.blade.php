@extends('usuarios.administrador.layouts.main')
@section('status3','show')
@section('link11','active')
@section('content')
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Prioridades</h6>
		<div class="dropdown no-arrow">
			<a href="" data-toggle="modal" data-target="#crear" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-plus"></i> Crear</a>
		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		<table class="table table-hover">
			<thead class="thead-dark">
				<tr class="text-center">

					<th scope="col">Id</th>
					<th scope="col">Nombre</th>
					<th scope="col">Acciones</th>

				</tr>
			</thead>
			<tbody>
				@foreach ($prioridades as $prioridad)
					<tr class="text-center">
						<td>{{$prioridad->id}}</td>
					<td>{{$prioridad->nombre}}</td>
					<td>
						<a href="#" data-toggle="modal" data-target="#editar"  data-datos="{{$prioridad}}" class="btn btn-warning btn-sm hvr-box-shadow-outset"><i class="fas fa-pen"></i> Editar</a>
					</td>
					</tr>
				@endforeach
			</tbody>
		</table>

	</div>
</div>

@include('usuarios.administrador.asm.prioridades.create')
@include('usuarios.administrador.asm.prioridades.edit')

@endsection
@section('script')
<script>
	$('#editar').on('show.bs.modal', function(e) {
		var prioridades = $(e.relatedTarget).data().datos;
		$('#nombreEdit').val(prioridades.nombre);
		$('#idPrioridad').val(prioridades.id);

	});
</script>
<script src="{{ asset('js/dataTable.js')}}"></script>
@endsection
