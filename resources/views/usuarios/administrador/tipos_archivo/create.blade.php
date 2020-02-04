<!--Modlal Crear -->
<div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear Nuevo Tipo de Archivo</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('tiposArchivos.store') }}">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="inicio">Extensión</label><br>
                        <label for="inicio" class="text-xs">Inicia la extensión con un punto .</label>
                        <input required=""  type="text" id="extencion" name="extencion" class="form-control {{ $errors->has('año') ? ' is-invalid' : '' }}" value="{{ old('año') }}" >
                        @if ($errors->has('extencion'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('extencion') }}</strong>
                        </span>
                        @endif
                        <label for="inicio">Descripción</label>
                        <input required=""  type="text" id="descripcion" name="descripcion" class="form-control {{ $errors->has('año') ? ' is-invalid' : '' }}" value="{{ old('año') }}" >
                        @if ($errors->has('descripcion'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('descripcion') }}</strong>
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
