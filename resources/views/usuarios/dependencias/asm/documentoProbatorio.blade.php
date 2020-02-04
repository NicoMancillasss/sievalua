<!--Modlal Crear -->
<div class="modal fade" id="documentoProbatorio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Subir documento probatorio </h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			    <form action="{{ route('dependencia.subir.documento.probatorio',1) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
					@csrf
                    @method('POST')
                    
					<br>
						<div class="form-group">
                            <div class="col-md-12">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="documento_probatorio" id="customFileLang" lang="es">
                                    <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                                </div>
                             </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-12">
                                <label for="exampleInputEmail1">Observación</label>
                           <textarea class="form-control" name="observacion" id="observacion"  rows="8">@isset($asm->documento_probatorio) {{$asm->documento_probatorio}}@endisset</textarea>
                                <small id="emailHelp" class="form-text text-muted"></small>
                           </div>
                        </div>
                        <input type="hidden" name="asm_id" id="documento_asm_id" value="">
                        
                    
								
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

