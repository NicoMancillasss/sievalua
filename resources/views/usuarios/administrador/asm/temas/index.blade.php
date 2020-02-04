@extends('usuarios.administrador.layouts.main')
@section('status3','show')
@section('link8','active')
@section('content')
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Temas</h6>
		<div class="dropdown no-arrow">
			<a href="" data-toggle="modal" data-target="#crear" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-plus"></i> Crear</a>
		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		<table class="table table-hover text-center">
			<thead class="thead-dark">
				<tr>
					<th  class="align-middle" scope="col">No.</th>
					<th  class="align-middle" scope="col">Tipo de evaluación</th>
					<th  class="align-middle" scope="col">Nombre</th>
					<th  class="align-middle" scope="col">Acciones</th>

				</tr>
			</thead>
			<tbody>
				@foreach ($temas as $tema)
					<tr>
						<td class="align-middle" >{{ $loop->iteration }} </td>
						<td class="align-middle" >{{$tema->tipo_evaluacion->nombre}}</td>
						<td class="align-middle" >{{$tema->nombre}}</td>
						<td class="align-middle" >
							<a href="#" data-toggle="modal" data-target="#editar"  data-datos="{{$tema}}" class="btn btn-warning btn-sm hvr-box-shadow-outset"><i class="fas fa-pen"></i> Editar</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

	</div>
</div>

@include('usuarios.administrador.asm.temas.create')
@include('usuarios.administrador.asm.temas.edit')

@endsection
@section('script')
<script>
	$('#editar').on('show.bs.modal', function(e) {
		var tema = $(e.relatedTarget).data().datos;
        $('#nombreEdit').val(tema.nombre);
        $('#tipoEdit option[value="'+tema.tipo_evaluacion +'"]').prop("selected", true);
		$('#idTema').val(tema.id);

	});
</script>
<script src="{{ asset('js/dataTable.js')}}"></script>
@endsection
