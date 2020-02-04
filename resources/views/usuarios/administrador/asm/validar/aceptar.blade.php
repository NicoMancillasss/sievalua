<!--Modlal Crear -->
<div class="modal fade" id="aceptar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Aceptar Asm</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="{{route('administrador.asm.aceptar')}}">
					@csrf
					@method('POST')
					<div class="form-group">
						<p>
							¿Estas seguro de aceptar el aspecto suceptible de mejora?
							<p id="text_asm"></p>
						</p>
					</div>
					 <input type="hidden" id="asm_id" name="asm_id">
					


					<div class="modal-footer">
						<div class="form-group">
							<button type="button" class="btn btn-secondary hvr-box-shadow-outset" data-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-primary hvr-box-shadow-outset">Aceptar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
