<div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Agregar nueva imagen al carrusel</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
            </div>
            <form method="POST" action="{{ route('administrador.portal.carrusel.create') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inicio">Titulo:</label>
                        <input required=""  type="text" id="titulo" name="titulo" class="form-control {{ $errors->has('titulo') ? ' is-invalid' : '' }}" value="{{ old('titulo') }}" >
                        @if ($errors->has('titulo'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('titulo') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="inicio">Descripción:</label>
                        <input required=""  type="text" id="descripcion" name="descripcion" class="form-control {{ $errors->has('descripcion') ? ' is-invalid' : '' }}" value="{{ old('descripcion') }}" >
                        @if ($errors->has('descripcion'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('descripcion') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="inicio">Link al que se desea ingresar:</label>
                        <input type="text" id="link" name="link" class="form-control {{ $errors->has('link') ? ' is-invalid' : '' }}" value="#" >
                        @if ($errors->has('link'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('link') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="customFileLang">Imagen:</label>
                        <label for="customFileLang">Recomendación de dimensiones de imagen: 1120 X 290 px</label>
						<div class="custom-file">
                            <input required type="file" accept=".jpg,.png" class="custom-file-input file" id="file" lang="es"  name="imagen" >
                            <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                        </div>
						@if ($errors->has('imagen'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('imagen') }}</strong>
                            </span>
						@endif
                    </div>

                    <div class="modal-footer">
                        <div class="form-group">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary hvr-box-shadow-outset"><i class="fas fa-save"></i>Guardar</button>
                        </div>
                    </div>
                </div>
            </form>
		</div>
    </div>
</div>

