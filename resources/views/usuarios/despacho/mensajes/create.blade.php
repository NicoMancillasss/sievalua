@extends('usuarios.despacho.layouts.main')
@section('content')
<div class="card shadow mb-4">
    <form method="POST" action=" {{ route('despacho.mensajes.store',[$evaluacion->id, $solicitud]) }} " enctype="multipart/form-data" accept-charset="UTF-8">
        @method('POST')
        @csrf
        <div class="form-group m-5">
            <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">¡ Nuevo Mensaje !</h4>
                <p></p>
                <hr>
                <p class="mb-0">Puedes dar clic en Aceptar para enviar el mensaje. </p>
            </div>
            <div class="form-group row">
                <div class="col-12">
                    <label for="txt_solicitud">Solicitud: </label>
                    <input required type="text" class="form-control" name="txt_solicitud"/>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-6">
                    <label for="modo_solicitud">Modo de Solicitud: </label>
                    <select required  class="form-control" id="modo_solicitud" name="modo_solicitud">
                        <option value="">Seleccione una Opción</option>
                        <option value="Correo">Correo</option>
                        <option value="Oficio">Oficio</option>
                        <option value="Otros">Otros</option>
                    </select>
                </div>
                <div class="col-6">
                    <label>Fecha Limite</label>
                    <input required=""  type="date" id="fecha_limite" name="fecha_limite" class="form-control {{ $errors->has('fecha_limite') ? ' is-invalid' : '' }}" value="{{ old('fecha_limite') }}" >
                    @if ($errors->has('fecha_limite'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('fecha_limite') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-6">
                    <label for="">Dependecia</label>
                    <select name="dependencia_id" class="form-control" id="dependencia_id">
                            <option value="{{$evaluacion->evaluacion->dependencia->user->id}}">{{$evaluacion->evaluacion->dependencia->nombre}}</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="exampleFormControlFile1">Archivo de evidencia</label>
                    <input type="file" class="form-control-file" id="doc_evidencia" name="doc_evidencia">

                </div>
            </div>
            <div class="form-group row">
                <div class="col-6">

                </div>
            </div>
            <div class="modal-footer justify-content-center ">
                <button type="submit" class="btn btn-success" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </form>
</div>
@endsection
