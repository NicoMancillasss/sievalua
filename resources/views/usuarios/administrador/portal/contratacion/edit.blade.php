<!--Modlal Crear -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Editar Contratación</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="{{ route('administrador.portal.contratacion.update') }}" enctype="multipart/form-data">
					@csrf
                    @method('PUT')
                    <input type="hidden" id="co_id" name="co_id">

					<div class="form-group">
						<label for="inicio">Titulo: </label>
						<input required=""  type="text" id="tituloCO" name="titulo" class="form-control {{ $errors->has('titulo') ? ' is-invalid' : '' }}" value="{{ old('titulo') }}" >
						@if ($errors->has('titulo'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('titulo') }}</strong>
                            </span>
						@endif
                    </div>
                    <div class="form-group">
						<label for="inicio">Descripción: </label>
						<input required=""  type="text" id="descripcionCO" name="descripcion" class="form-control {{ $errors->has('descripcion') ? ' is-invalid' : '' }}" value="{{ old('descripcion') }}" >
						@if ($errors->has('descripcion'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('descripcion') }}</strong>
                            </span>
						@endif
                    </div>
                    <div class="form-group">
                        <label for="customFileLang">Documento: </label>
						<div class="custom-file">
                            <input accept=".jpg, .png"  type="file" class="custom-file-input " id="customFileLang" lang="es"  name="documento" >
                            <label class="custom-file-label documento" id="documentoCO" for="customFileLang">Seleccionar Documento</label>
                        </div>
						@if ($errors->has('documento'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('documento') }}</strong>
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

