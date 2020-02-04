@extends('usuarios.administrador.layouts.main')
@section('status','show')
@section('link6','active')
@section('content')
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Tipos de Archivos</h6>
		<div class="dropdown no-arrow">
			<a href="" data-toggle="modal" data-target="#crear" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-plus"></i> Crear</a>
		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		<table class="table table-hover table-responsive w-100 d-block d-md-table">
			<thead class="thead-dark">
				<tr class="text-center">
					<th scope="col">Id</th>
					<th scope="col">Extensión</th>
                    <th scope="col">Descripción</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($tipos_archivos as $tipo_archivo)
				<tr class="text-center">
					<td>{{$tipo_archivo->id}}</td>
                    <td>{{$tipo_archivo->extencion}}</td>
					<td>{{$tipo_archivo->descripcion}}</td>
					<td>
						<a href="#" data-toggle="modal" data-target="#editar"  data-datos="{{$tipo_archivo}}" class="btn btn-warning btn-sm hvr-box-shadow-outset"><i class="fas fa-pen"></i> Editar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>
</div>
@include('usuarios.administrador.tipos_archivo.create')
@include('usuarios.administrador.tipos_archivo.edit')
@endsection
@section('script')
<script>
	$('#editar').on('show.bs.modal', function(e) {
		var tipo_archivo = $(e.relatedTarget).data().datos;
        $('#extensionEdit').val(tipo_archivo.extencion);
        $('#descripcionEdit').val(tipo_archivo.descripcion);
		$('#idE').val(tipo_archivo.id);

	});
</script>
@endsection
