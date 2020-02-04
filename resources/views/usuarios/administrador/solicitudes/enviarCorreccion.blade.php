<!--Modlal Crear -->
<div class="modal fade" id="correccion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Enviar Correccion a {{$solicitud->user->nombre}}</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<strong>Documento:</strong> <p class="text-danger text-justify" id="nombre_documento"></p>
				<form method="POST" action="{{route('administrador.enviar.correccion.solicitud',$solicitud->id)}}" method="post" >
					@csrf
					@method('POST')
					<div class="form-group">
						<label for="inicio">Correccion:</label>
						<input  accept=".pdf" type="text" id="correccion1" name="correccion" class="form-control {{ $errors->has('correccion') ? ' is-invalid' : '' }}" value="" >
						@if ($errors->has('correccion'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('correccion') }}</strong>
						</span>
						@endif
						<input type="hidden" name="id_documento_correccion" id="id_documento_correccion">
						<input type="hidden" name="documento" id="documento">
						<input type="hidden" name="seccion" id="seccion" value="doc_generales">
					</div>
					  
					
					
				
					


					<div class="modal-footer">
						<div class="form-group">
							<button type="button" class="btn btn-secondary hvr-box-shadow-outset" data-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-primary hvr-box-shadow-outset">Enviar Corrección</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
