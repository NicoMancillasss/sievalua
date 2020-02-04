<!--Modlal Crear -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="{{ route('usuarios.update',1) }}">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label for="inicio">Nombre</label>
						<input placeholder="Nombre del usuario" required=""  type="text" id="nombre" name="nombre" class="form-control {{ $errors->has('nombre') ? ' is-invalid' : '' }}" value="{{ old('nombre') }}" >
						@if ($errors->has('nombre'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('nombre') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group">
						<label for="selectEstatus">Tipo</label>
						<select required="" class="form-control {{-- $errors->has('estatus') ? ' is-invalid' : '' --}}" id="selectPerfil" name="perfil_id">
							<option value="">Seleccione una Opción</option>
							@foreach ($perfiles as $perfil)
							<option value="{{$perfil->id}}">{{$perfil->nombre}}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label for="selectEstatus" id="labelDependenciaEdit">Dependencia</label>
						<select  class="form-control hide {{-- $errors->has('estatus') ? ' is-invalid' : '' --}}" id="selectDependenciaEdit" name="dependencia_id">
							<option value="">Seleccione una Opción</option>
							@foreach ($dependencias as $dependencia)
							<option value="{{$dependencia->id}}">{{$dependencia->nombre}}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label for="inicio">Email</label>
						<input placeholder="ejemplo@gmail.com" required=""  type="email" id="emailEdit" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" >
						@if ($errors->has('email'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group">
						<label for="inicio">Password</label>
						<input placeholder="***********" required=""  type="password" id="passwordEdit" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" value="{{ old('password') }}" >
						@if ($errors->has('password'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
						@endif
					</div>

					<div class="form-group">
						<label for="selectEstatus">Estatus</label>
						<select required="" class="form-control {{ $errors->has('estatus') ? ' is-invalid' : '' }}" id="selectEstatus" name="activo">
							<option value="">Seleccione una Opción</option>
							<option value="1">Activo</option>
							<option value="0">Inactivo</option>
						</select>
					</div>
					{{-- <div class="form-group">
						<label for="inicio">Contraseña</label>
						<input  type="password" id="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" value="{{ old('password') }}" >
						@if ($errors->has('password'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
						@endif
					</div>  --}}

					<input type="hidden" name="id" value="{{ old('id') }}" id="idUsuario">



					<div class="modal-footer">
						<div class="form-group">
							<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Actualizar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
