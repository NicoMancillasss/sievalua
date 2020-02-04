<!--Modlal Crear -->
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
                <form method="POST" action="{{ route('catalogoDocumentos.update',1) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nombre">Nombre del Documento</label>
                        <input id="nombre" required=""  type="text" name="nombre" class="form-control {{ $errors->has('nombre') ? ' is-invalid' : '' }}" value="{{ old('nombre') }}">
                        @if ($errors->has('nombre'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea rows="5" class="form-control" name="descripcion" id="descripcion"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo de Documento</label>
                        <select id="tipo_documento" required="" class="form-control {{-- $errors->has('estatus') ? ' is-invalid' : '' --}}" id="tipoDocumento" name="tipo_documento">
                            <option value="">Seleccione una Opcion</option>
                            <option value="general">General</option>
                            <option value="especifico">Especifico</option>
                        </select>
                    </div>
                   {{-- <div class="form-group">
                        <label for="inicio">Ejercicio</label>
                        <select id="ejercicio_id" required="" class="form-control {{-- $errors->has('estatus') ? ' is-invalid' : '' " id="ejercicio_id" name="ejercicio_id">--}}
                         {{--   <option value="">Seleccione una Opción</option>
                            @foreach ($ejercicios as $ejercicio)
                                <option value="{{$ejercicio->id}}">{{$ejercicio->año}}</option>
                            @endforeach
                        </select>
                    </div>
                    --}}
                    <input type="hidden" name="id" value="{{ old('id') }}" id="idDocumento">

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
