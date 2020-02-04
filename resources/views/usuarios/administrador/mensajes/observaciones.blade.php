<div class="modal fade" id="observaciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enviar a observaciones</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('administrador.mensajes.enviar.observacion')}}">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <p id="observacion_mensaje"></p>
                            <label for="inicio">Observación:</label>
                            <input required=""  type="text" id="observacion" name="observacion" maxlength="255" class="form-control {{ $errors->has('observacion') ? ' is-invalid' : '' }}" value="{{ old('observacion') }}" >
                            @if ($errors->has('observacion'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('observacion') }}</strong>
                            </span>
                            @endif
                        </div>
                        <input type="hidden" id="observaciones_mensaje_id" name="observaciones_mensaje_id">
                        
    
    
                        <div class="modal-footer">
                            <div class="form-group">
                                <button type="button" class="btn btn-secondary hvr-box-shadow-outset" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Enviar Correción</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>