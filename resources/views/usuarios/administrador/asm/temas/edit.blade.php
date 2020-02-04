<!--Modlal Edit -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('temas.update',1) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="selectEvaluacion">Tipo de Evaluación</label><br>
                        <select name="tipo_evaluacion_id" id="tipoEdit" required="" class="form-control">
                            <option value="">Seleccione una Opcion</option>
                            @foreach ($tipos_evaluaciones as $tipo_evaluacion)
                                <option value="{{$tipo_evaluacion->id}}">{{$tipo_evaluacion->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inicio">Nombre</label>
                        <input required=""  type="text" id="nombreEdit" name="nombre" class="form-control {{ $errors->has('nombre') ? ' is-invalid' : '' }}" value="{{ old('nombre') }}" >
                        @if ($errors->has('nombre'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                        @endif
                    </div>
                    <input type="hidden" name="id" value="{{ old('id') }}" id="idTema">

                    <div class="modal-footer">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary hvr-box-shadow-outset"><i class="fas fa-pen"></i> Editar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
