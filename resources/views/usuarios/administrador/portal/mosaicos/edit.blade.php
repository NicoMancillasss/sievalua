<!--Modlal Crear -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Editar Nuevo Mosaico</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="{{ route('administrador.portal.mosaicos.update') }}" enctype="multipart/form-data">
					@csrf
                    @method('PUT')
                    <input type="hidden" id="mosaico_id" name="mosaico_id">

					<div class="form-group">
						<label for="inicio">Nombre</label>
						<input required=""  type="text" id="nombreMosaico" name="nombre" class="form-control {{ $errors->has('nombre') ? ' is-invalid' : '' }}" value="{{ old('nombre') }}" >
						@if ($errors->has('nombre'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nombre') }}</strong>
                            </span>
						@endif
                    </div>
                    <div class="form-group">
						<label for="inicio">Link</label>
						<input required=""  type="text" id="linkMosaico" name="link" class="form-control {{ $errors->has('link') ? ' is-invalid' : '' }}" value="{{ old('link') }}" >
						@if ($errors->has('link'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('link') }}</strong>
                            </span>
						@endif
                    </div>
                    <div class="form-group">
                        <label for="customFileLang">Imagen del mosaico</label>
                        <label for="customFileLang">Recomendación de dimensiones de imagen: 380 X 380 px</label>
						<div class="custom-file">
                            <input accept=".jpg, .png" required type="file" class="custom-file-input " id="customFileLang" lang="es"  name="imagen" >
                            <label class="custom-file-label imagen" id="imagenMosaico" for="customFileLang">Seleccionar Archivo</label>
                        </div>
						@if ($errors->has('imagen'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('imagen') }}</strong>
                            </span>
						@endif
                    </div>
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

