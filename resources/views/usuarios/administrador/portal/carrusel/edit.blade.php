<!--Modlal Crear -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Editar Carrusel</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="{{ route('administrador.portal.carrusel.update') }}" enctype="multipart/form-data">
					@csrf
                    @method('PUT')
                    <input type="hidden" id="carrusel_id" name="carrusel_id">

					<div class="form-group">
						<label for="inicio">Titulo</label>
						<input required=""  type="text" id="tituloImagen" name="titulo" class="form-control {{ $errors->has('titulo') ? ' is-invalid' : '' }}" value="{{ old('titulo') }}" >
						@if ($errors->has('titulo'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('titulo') }}</strong>
                            </span>
						@endif
                    </div>
                    <div class="form-group">
						<label for="inicio">Link</label>
						<input required=""  type="text" id="linkImagen" name="link" class="form-control {{ $errors->has('link') ? ' is-invalid' : '' }}" value="{{ old('link') }}" >
						@if ($errors->has('link'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('link') }}</strong>
                            </span>
						@endif
                    </div>
                    <div class="form-group">
						<label for="inicio">Descripción</label>
						<input required=""  type="text" id="descripcionImagen" name="descripcion" class="form-control {{ $errors->has('descripcion') ? ' is-invalid' : '' }}" value="{{ old('descripcion') }}" >
						@if ($errors->has('descripcion'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('descripcion') }}</strong>
                            </span>
						@endif
                    </div>
                    <div class="form-group">
                        <label for="customFileLang">Imagen del carrusel</label>
                        <label for="customFileLang">Recomendación de dimensiones de imagen: 1120 X 290 px</label>
						<div class="custom-file">
                            <input accept=".jpg, .png"  type="file" class="custom-file-input " id="customFileLang" lang="es"  name="imagenCarrusel" >
                            <label class="custom-file-label imagen" id="imagenCarrusel" for="customFileLang">Seleccionar Archivo</label>
                        </div>
						@if ($errors->has('imagenCarrusel'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('imagenCarrusel') }}</strong>
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

