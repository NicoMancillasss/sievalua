<!--Modlal Crear -->
<div class="modal fade" id="revision" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Aceptar Asm</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="{{route('dependencia.enviar.asm.revision')}}">
					@csrf
					@method('POST')
					<div class="form-group">
						<p>
							¿Esta seguro de enviar a revisión este Asm ?
							<p><strong>Nota:</strong>Una vez enviado no podrás hacer modificaciones hasta su posterior corrección o Aceptación.</p>
							<p id="text_asm"></p>
						</p>
					</div>
					 <input type="hidden" id="asm_id" name="asm_id">



					<div class="modal-footer">
						<div class="form-group">
							<button type="button" class="btn btn-secondary hvr-box-shadow-outset" data-dismiss="modal"><i class="fas fa-times"></i> Cancelar</button>
							<button type="submit" class="btn btn-primary hvr-box-shadow-outset">Aceptar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
