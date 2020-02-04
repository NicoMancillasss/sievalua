<!--Modlal Crear -->
<div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Crear Nuevo Ejercicio</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="{{ route('ejercicios.store') }}">
					@csrf
					@method('POST')
					<div class="form-group">
						<label for="inicio">Año</label>
						<input required=""  type="number" id="año" name="año" class="form-control {{ $errors->has('año') ? ' is-invalid' : '' }}" value="{{ old('año') }}" >
						@if ($errors->has('año'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('año') }}</strong>
						</span>
						@endif
					</div>
					  <!--
					<div class="form-group">
						<label for="selectEstatus">Estatus</label>
						<select required="" class="form-control {{-- $errors->has('estatus') ? ' is-invalid' : '' --}}" id="selectEstatus" name="activo">
							<option value="">Seleccione una Opcion</option>
							<option id="activo" value="1">Activo</option>
							<option id="inactivo" value="0">Inactivo</option>
						</select>
					</div>
				-->



					<div class="modal-footer">
						<div class="form-group">
							<button type="submit" class="btn btn-primary hvr-box-shadow-outset"><i class="fas fa-save"></i> Guardar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
