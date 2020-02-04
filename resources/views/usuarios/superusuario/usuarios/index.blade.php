@extends('usuarios.administrador.layouts.main')
@section('status2','show')
@section('linktwo1','active')
@section('content')


<div class="card shadow mb-4">
{{-- <div class="card shadow mb-4">
	<div id="app">
   <example-component></example-component>
</div> --}}


	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Usuarios</h6>

		<form method="GET" action="{{ route('usuarios.index') }}" class=" form-inline   mr-auto">
			@csrf
			@method('GET')
			<div class="form-group">
				<input type="text" class="form-control bg-light border-1 small ml-1" placeholder="Buscar.." aria-label="Buscar" aria-describedby="basic-addon2" name="dato" value="{{$dato->dato}}">

			</div>

			<div class="form-group ml-3">
				<select class="form-control {{-- $errors->has('estatus') ? ' is-invalid' : '' --}}" id="selectPerfil" name="perfil_id">
							<option value="">Seleccione un Perfil</option>
							 @foreach ($perfiles as $perfil)
							<option value="{{$perfil->id}}">{{$perfil->nombre}}</option>
							@endforeach
						</select>
			</div>

			<div class="form-group ml-2">
				<button class="btn btn-primary" type="submit">
						<i class="fas fa-search"></i> Buscar
				</button>
			</div>
		</form>

		<div class="dropdown no-arrow">
			<a href=""data-toggle="modal" data-target="#crear" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-plus"></i> Crear</a>
		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		<table class="table table-hover">
			<thead class="thead-dark">
				<tr class="text-center">
					<th scope="col">id</th>
					<th scope="col">Nombre</th>
					<th scope="col">Email</th>
					<th scope="col">Perfil</th>
					<th scope="col">Activo</th>
					<th scope="col">Dependencia</th>
					<th scope="col">Fecha de Creación</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>
				 @foreach($usuarios as $usuario)
				<tr class="text-center">
					<th><span class="badge badge-secondary">{{$usuario->id}}</span></th>
					<th>{{$usuario->nombre}}</th>
					<th>{{$usuario->email}}</th>
					<th>
						@if ($usuario->perfil->id ==1)
							<span class="badge badge-success">{{$usuario->perfil->nombre}}</span>
						@elseif($usuario->perfil->id ==2)
						<span class="badge badge-warning">{{$usuario->perfil->nombre}}</span>
						@elseif($usuario->perfil->id ==3)
						<span class="badge badge-danger">{{$usuario->perfil->nombre}}</span>
						@elseif($usuario->perfil->id ==4)
						<span class="badge badge-info">{{$usuario->perfil->nombre}}</span>
						@elseif($usuario->perfil->id ==5)
						<span class="badge badge-secondary">{{$usuario->perfil->nombre}}</span>
						@endif
						<th>
							@if ($usuario->activo==1)
								<span class="badge badge-success">Activo</span>
							@else
								<span class="badge badge-danger">Inactivo</span>
							@endif
						</th>
						<th>{{$usuario->dependencia->acronimo}}</th>
						<th>{{$usuario->created_at}}</th>
						<th>
						<a class="btn btn-warning  btn-sm" data-toggle="modal"  data-placement="right" title="Editar" href="#editar" data-datos="{{$usuario}}" >
							Editar
					</a>

						</th>
					</th>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>




</div>
@include('usuarios.superusuario.usuarios.create')
@include('usuarios.superusuario.usuarios.edit')
@endsection

@section('script')
<script type="text/javascript">
	{{-- Capturar el valor del select Perfil --}}
	$("#selectDependencia").hide();
	$("#labelDependencia").hide();

	$("#selectPerfilCrear").change(function(){
		var perfil = $(this).val();

		if (perfil==4 || perfil==5){
			$('#selectDependencia').show();
			$('#labelDependencia').show();
		}else{
			$('#selectDependencia').hide();
			$('#labelDependencia').hide();
		}
	});


	/*Volver abrir la ventana een caso de un error*/
		@if($errors->edit->count()!=0)
		$('#editar').modal('show');
		@elseif($errors->count()!=0)
		$('#crear').modal('show');
		$('#selectPerfil option[value="' +{{ old('perfil_id')}}  +'"]').prop("selected", true);
		$('#selectEstatus option[value="' +{{ old('activo')}}  +'"]').prop("selected", true);
		@endif

		$('#editar').on('show.bs.modal', function(e) {
			var usuario = $(e.relatedTarget).data().datos;

			if (usuario.perfil_id==1 || usuario.perfil_id==2 || usuario.perfil_id==3){
				$('#selectDependenciaEdit').hide();
				$('#labelDependenciaEdit').hide();
			}else{
				$('#selectDependenciaEdit').show();
				$('#labelDependenciaEdit').show();
			}

			$('#selectPerfil option[value="' +usuario.perfil_id+'"]').prop("selected", true);
			$('#selectEstatus option[value="' +usuario.activo+'"]').prop("selected", true);
			$('#nombre').val(usuario.nombre);

			$('#emailEdit').val(usuario.email);
			$('#idUsuario').val(usuario.id);
			$('#selectDependenciaEdit option[value="' +usuario.dependencia_id+'"]').prop("selected", true);






		});

</script>
<script src="{{ asset('js/dataTable.js')}}"></script>
@endsection


