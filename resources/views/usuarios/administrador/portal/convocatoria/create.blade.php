<!--Modlal Crear -->
<div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Crear Nueva Convocatoria para el Portal</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="{{ route('administrador.portal.convocatoria.store') }}" enctype="multipart/form-data">
					@csrf
                    @method('POST')
                     
					<div class="form-group">
						<label for="selectEstatus">Ejercicio</label>
						<select name="ejercicio_id" required="" class="form-control {{$errors->has('ejercicio_id') ? ' is-invalid' : '' }}" id="selectEstatus" name="activo">
                            <option value="">Seleccione una Opción</option>
                            @foreach ($ejercicios as $ejercicio)
                                <option value="{{$ejercicio->id}}">{{$ejercicio->año}}</option>
                            @endforeach
							
						</select>
					</div>
				

					<div class="form-group">
						<label for="inicio">Nombre de la convocatoria</label>
						<input required=""   type="text" id="nombre" name="nombre" class="form-control {{ $errors->has('nombre') ? ' is-invalid' : '' }}" value="{{ old('nombre') }}" >
						@if ($errors->has('nombre'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nombre') }}</strong>
                            </span>
						@endif
                    </div>
                    <div class="form-group">
                        <label for="customFileLang">Imagen de la Convocatoria</label>
						<div class="custom-file">
                            <input required type="file" accept=".jpg,.png" class="custom-file-input" id="customFileLang" lang="es"  name="imagenConvocatoria" >
                            <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                        </div>
						@if ($errors->has('imagenConvocatoria'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('imagenConvocatoria') }}</strong>
                            </span>
						@endif
                    </div>
                    <div class="form-group">
						<label for="inicio">Imagen Resultados de la Convocatoria</label>
						<div class="custom-file">
                            <input type="file" accept=".jpg, .png" class="custom-file-input" id="customFileLang" lang="es" name="imagenResultado" >
                            <label class="custom-file-label" for="customFileLang" >Seleccionar Archivo</label>
                        </div>
                         <small id="passwordHelpBlock" class="form-text text-muted">
                         La imagen de resultado final de la convocatoria se puede omitir.
                        </small>
						@if ($errors->has('imagenResultado'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('imagenResultado') }}</strong>
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

