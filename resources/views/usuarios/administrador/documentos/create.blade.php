<!--Modlal Crear -->
<div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear Nuevo Documento</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('catalogoDocumentos.store') }}">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="inicio">Nombre del Documento</label>
                        <input required=""  type="text"  name="nombre" class="form-control {{ $errors->has('nombre') ? ' is-invalid' : '' }}" value="{{ old('nombre') }}" >
                        @if ($errors->has('nombre'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="inicio">Descripción del Documento</label>
                        <input required=""  type="text"  name="descripcion"  class="form-control {{ $errors->has('descripcion') ? ' is-invalid' : '' }}" value="{{ old('descripcion') }}" >
                        @if ($errors->has('descripcion'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('descripcion') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="inicio">Tipo de Documento</label>
                        <select required="" class="form-control {{-- $errors->has('estatus') ? ' is-invalid' : '' --}}" id="tipo_documento" name="tipo_documento">
                            <option value="">Seleccione una Opción</option>

                            <option value="general">General</option>
                            <option value="especifico">Especifico</option>
                            <option value="final">Final</option>
                        </select>
                    </div>
                    {{--<div class="form-group">
                            <label for="inicio">Ejercício</label>
                            <select id="año" required="" class="form-control {{-- $errors->has('estatus') ? ' is-invalid' : '' " id="ejercicio_id" name="ejercicio_id">--}}
                              {{--  <option value="">Seleccione una Opción</option>
                                @foreach ($ejercicios as $ejercicio)
                                    <option value="{{$ejercicio->id}}">{{$ejercicio->año}}</option>
                                @endforeach
                            </select>
                        </div>
                    --}}
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
