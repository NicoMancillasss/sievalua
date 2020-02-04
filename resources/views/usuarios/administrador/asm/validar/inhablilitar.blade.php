<!--Modlal Correcciones -->
<div class="modal fade" id="inhabilitar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Alerta</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<p>
					¿Esta seguro de cerrar todos los asm para el  registro de actividades y acciones a los Asm a <span class="badge badge-danger" id="dependencia">{{$evaluacion->dependencia->nombre}}</span>?
				</p>
				

					<div class="modal-footer">
						<div class="form-group">
							<button type="button" class="btn btn-secondary hvr-box-shadow-outset" data-dismiss="modal">Cancelar</button>
							<a href="{{route('administrador.valida.dependencia.asm.desactivado',['desactivarTodos',$evaluacion])}}" class="btn btn-danger hvr-box-shadow-outset">Cerrar Todos los Asm</a>
						</div>
					</div>
				
			</div>
		</div>
	</div>
</div>
