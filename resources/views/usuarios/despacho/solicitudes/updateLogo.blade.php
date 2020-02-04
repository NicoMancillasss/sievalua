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
