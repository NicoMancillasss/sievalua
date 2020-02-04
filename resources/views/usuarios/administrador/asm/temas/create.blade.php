<!--Modlal Crear -->
<div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear Nuevo Tema</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('temas.store') }}">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="selectEvaluacion">Tipo de Evaluación</label><br>
                        <select name="tipo_evaluacion_id" id="selectEvaluacion" required="" class="form-control">
                            <option value="">Seleccione una Opcion</option>
                            @foreach ($tipos_evaluaciones as $tipo_evaluacion)
                                <option value="{{$tipo_evaluacion->id}}">{{$tipo_evaluacion->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inicio">Nombre de tema</label>
                        <input required=""  type="text" id="nombre" name="nombre" class="form-control {{ $errors->has('año') ? ' is-invalid' : '' }}" value="{{ old('año') }}" >
                        @if ($errors->has('nombre'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nombre') }}</strong>
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
