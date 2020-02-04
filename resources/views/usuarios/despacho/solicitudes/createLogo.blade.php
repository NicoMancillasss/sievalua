<!--Modlal Crear -->
<div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Subir logo de despacho</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="{{ route('logo.store')}} " enctype="multipart/form-data">
					@csrf
					@method('POST')
					<div class="form-group">
                        <label for="customFileLang">Logo:</label>
						<div class="custom-file">
                            <input required type="file" accept=".jpg,.png" class="custom-file-input file" id="logo" lang="es"  name="logo" >
                            <label class="custom-file-label" for="customFileLang">Seleccionar Imagen</label>
                        </div>
						@if ($errors->has('logo'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('logo') }}</strong>
                            </span>
						@endif
                    </div>

					<div class="modal-footer">
						<div class="form-group">
							<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
