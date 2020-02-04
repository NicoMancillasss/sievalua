<!--Modlal Correcciones -->
<div class="modal fade" id="correcciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Enviar a correcciones  Avance</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="{{route('administrador.asm.validar.avance','correccion')}}">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label for="inicio">Corrección:</label>
						<textarea required=""  type="text" id="correccion" name="correcciones" class="form-control {{ $errors->has('correcciones') ? ' is-invalid' : '' }}" value="{{ old('correcciones') }}"></textarea>
						@if ($errors->has('correcciones'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('correcciones') }}</strong>
						</span>
						@endif
					</div>

					<input type="hidden" id="correccion_avance_id" name="correccion_avance_id">
					


					<div class="modal-footer">
						<div class="form-group">
							<button type="button" class="btn btn-secondary hvr-box-shadow-outset" data-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-primary hvr-box-shadow-outset">Enviar Correción</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
