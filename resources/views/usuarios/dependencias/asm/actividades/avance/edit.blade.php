<!--Modlal Correcciones -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Editar Avance Avance</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
            <form method="POST" action="{{route('dependencia.programa.asm.actividad.avance.editar')}}" enctype="multipart/form-data">
					@csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="">Actividad</label>
                        <input type="text" name="actividad" id="edit_actividad" class="form-control" disabled>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="">Porcentaje de Avance</label>
                            <input type="text" name="edit_porcentaje_avance" id="edit_porcentaje_avance" class="form-control" value="" disabled>
                        </div>
                        <div class="col-md-8">
                            <label for="">Evidencia</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="documento_probatorio" id="customFileLang" lang="es" required>
                                <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
						    </div>
                        </div>
                    </div>

					<div class="form-group">
						<label for="inicio">Observaciones:</label>
						<textarea required=""  type="text" id="edit_observacion" name="observacion" class="form-control {{ $errors->has('observacion') ? ' is-invalid' : '' }}" value="{{ old('observacion') }}"></textarea>
						@if ($errors->has('observacion'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('observacion') }}</strong>
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
