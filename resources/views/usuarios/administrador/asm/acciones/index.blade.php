@extends('usuarios.administrador.layouts.main')
@section('status3','show')
@section('link10','active')
@section('content')
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Acciones</h6>
		<div class="dropdown no-arrow">
			<a href="" data-toggle="modal" data-target="#crear" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-plus"></i> Crear</a>
		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		<table class="table table-hover">
			<thead class="thead-dark">
				<tr class="text-center">

					<th  class="align-middle" scope="col">id</th>
					<th  class="align-middle" scope="col">Nombre</th>
					<th  class="align-middle" scope="col">Descripción</th>
					<th  class="align-middle" scope="col">Acciones</th>

				</tr>
			</thead>
			<tbody>
				@foreach ($acciones as $accion)
					<tr class="text-center">
						<td class="align-middle" >{{$accion->id}}</td>
                        <td class="align-middle" >{{$accion->nombre}}</td>
                        <td class="align-middle" >{{$accion->descripcion}}</td>
                        <td class="align-middle" >
                            <a href="#" data-toggle="modal" data-target="#editar"  data-datos="{{$accion}}" class="btn btn-warning btn-sm hvr-box-shadow-outset"><i class="fas fa-pen"></i> Editar</a>
                        </td>
					</tr>
				@endforeach
			</tbody>
		</table>

	</div>
</div>

@include('usuarios.administrador.asm.acciones.create')
@include('usuarios.administrador.asm.acciones.edit')

@endsection
@section('script')
<script>
	$('#editar').on('show.bs.modal', function(e) {
		var accion = $(e.relatedTarget).data().datos;
		$('#nombreEdit').val(accion.nombre);
        $('#descripcionEdit').val(accion.descripcion);
		$('#idAccion').val(accion.id);

	});
</script>
<script src="{{ asset('js/dataTable.js')}}"></script>
@endsection
