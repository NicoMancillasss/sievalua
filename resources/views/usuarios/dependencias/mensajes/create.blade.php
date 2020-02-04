@extends('usuarios.dependencias.layouts.main')
@section('content')
<div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-dark">Mensaje Nuevo</h6>
        </div>

        <form method="POST" action=" {{ route('dependencia.mensajes.store',[$postula]) }} " enctype="multipart/form-data" accept-charset="UTF-8">
            @method('POST')
            @csrf
            <div class="form-group m-5">
                <div class="alert alert-info" role="alert">
                    <h4 class="alert-heading">¡ Nuevo Mensaje de confirmación !</h4>
                    <p></p>
                    <hr>
                    <p class="mb-0">Puedes dar clic en Aceptar para enviar el mensaje. </p>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="txt_solicitud">Entrega de información: </label>
                        <input required type="text" class="form-control" name="txt_solicitud"/>
                    </div>
                </div>
                {{--
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="modo_solicitud">Modo de Entrega: </label>
                            <select required  class="form-control" id="modo_solicitud" name="modo_solicitud">
                                <option value="">Seleccione una Opción</option>
                                <option value="Correo">Correo</option>
                                <option value="Oficio">Oficio</option>
                                <option value="Oficio">Otros</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label>Fecha de Entrega: </label>
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
                            <label for="">Despacho: </label>
                            <select name="despacho_id" class="form-control" id="despacho_id">
                                <option value="{{$postula->solicitud->user->id}}">{{$postula->solicitud->user->nombre}}</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="exampleFormControlFile1"> <b> Archivo de evidencia </b></label> <br>
                            <label for="">Tipo de documento</label>
                            <input type="text" class="form-control" id="doc_evidencia" name="doc_evidencia">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">

                        </div>
                    </div>
                --}}
                <div class="modal-footer justify-content-center ">
                    <button type="submit" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </form>

</div>
@endsection
