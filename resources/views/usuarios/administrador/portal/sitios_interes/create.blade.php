<div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Sitio de Interes</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
            </div>
            <form method="POST" action="{{ route('administrador.portal.sitiosInteres.create') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inicio">Nombre:</label>
                        <input required=""  type="text" id="nombre" name="nombre" class="form-control {{ $errors->has('nombre') ? ' is-invalid' : '' }}" value="{{ old('nombre') }}" >
                        @if ($errors->has('nombre'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="inicio">Link al que se desea ingresar:</label>
                        <input required=""  type="text" id="link" name="link" class="form-control {{ $errors->has('link') ? ' is-invalid' : '' }}" value="{{ old('link') }}" >
                        @if ($errors->has('link'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('link') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="customFileLang">Imagen:</label>
						<div class="custom-file">
                            <input required type="file" accept=".jpg,.png" class="custom-file-input" id="customFileLang" lang="es"  name="imagen" >
                            <label class="custom-file-label" for="customFileLang">Seleccionar Imagen</label>
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
                            <button type="submit" class="btn btn-primary hvr-box-shadow-outset"><i class="fas fa-save"></i> Guardar</button>
                        </div>
                    </div>
                </div>
            </form>
		</div>
    </div>
</div>
