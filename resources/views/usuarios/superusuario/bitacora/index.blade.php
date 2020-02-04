@extends('usuarios.administrador.layouts.main')
@section('status2','show')
@section('linktwo1','active')
@section('content')
{{--
	<div id="app">
	@{{ message.data.nombre }}
	</div>

 --}}




<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Bitacora de registro de acciones</h6>
		<div class="dropdown no-arrow">
			<a href=""data-toggle="modal" data-target="#crear" class="btn btn-info btn-sm hvr-box-shadow-outset">Crear</a>
		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">

		<table class="table table-hover table-sm">
			<thead class="thead-dark">
				<tr>
					<th scope="col">No.</th>
					<th scope="col">Usuario</th>
					<th scope="col">Tabla</th>
					<th scope="col">Acción</th>
					<th scope="col">Id_Registro_Modificado</th>
					<th scope="col">Descripción</th>
					<th scope="col">Fecha</th>

				</tr>
			</thead>
			<tbody>
				 @foreach($bitacora as $log)
				<tr>
					<td>{{ $log->id }}</td>
					<td>{{ $log->user->nombre }}</td>
					<td>{{ $log->tabla }}</td>
					<td>{{ $log->accion }}</td>
					<td class="text-center">{{ $log->id_registro_modificado}}</td>
					<td>{{ $log->descripcion}}</td>
					<td>{{ $log->created_at}}</td>

				</tr>
				@endforeach
			</tbody>
		</table>

	</div>




</div>

@endsection
@section('script')

	<script>
		new Vue({
			el: '#app',
			data () {
			return
			{
				message: []
			}
	},
		mounted () {
			axios
			.get('/dependencia/1')
			.then(response => (this.message = response))
		}
	});
	</script>
<script src="{{ asset('js/dataTable.js')}}"></script>
@endsection




