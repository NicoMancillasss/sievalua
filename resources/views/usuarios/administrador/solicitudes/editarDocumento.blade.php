<!--Modlal Crear -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Editar Documento de {{$solicitud->user->nombre}}</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<strong>Documento:</strong> <p class="text-danger text-justify" id="descripcion_documento"></p>
				<form method="POST" action="{{ route('evaluacion.documentos.editar') }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('POST')
					<div class="form-group">
						<label for="inicio">Seleccione el Nuevo Documento</label>
						<input required="" accept=".pdf" type="file" id="nuevo_documento" name="nuevo_documento" class="form-control {{ $errors->has('nuevo_documento') ? ' is-invalid' : '' }}" value="{{ old('nuevo_documento') }}" >
						@if ($errors->has('nuevo_documento'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('nuevo_documento') }}</strong>
						</span>
						@endif
						<input type="hidden" name="id_documento" id="id_documento">
					</div>
					  
					
					
				
					


					<div class="modal-footer">
						<div class="form-group">
							<button type="button" class="btn btn-secondary hvr-box-shadow-outset" data-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-primary hvr-box-shadow-outset">Actualizar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
