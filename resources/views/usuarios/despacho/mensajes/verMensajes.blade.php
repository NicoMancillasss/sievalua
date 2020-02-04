@extends('usuarios.despacho.mensajes.chat')
@section('mensajes')

<div class="selected-user sticky-top text-center">
    <span class="name">{{ $postula->evaluacion->dependencia->nombre}}</span>
</div>
<div class="chat-container">
@forelse ($mensaje as $msg)
    <ul class="chat-box chatContainerScroll">
        @if ( $msg->receptor_id==Auth::user()->id )
            <li class="chat-left">
                <div class="chat-avatar">
                    <img src="https://cdn.pixabay.com/photo/2017/02/23/13/05/profile-2092113_960_720.png" alt="Retail Admin">
                    <div class="chat-name">{{ $postula->evaluacion->dependencia->nombre }}</div>
                </div>
                <a href="#" role="button" class="btn popovers" data-toggle="popover" title="" data-content="test content <a href='' title='test add link'>link on content</a>" data-original-title="test title">
                    <div class="chat-text">
                        {{$msg->txt_solicitud}}
                    </div>
                </a>
                <div class="chat-hour">{{$msg->created_at}}<span class="fa fa-check-circle"></span></div>
            </li>
        @elseif($msg->receptor_id==$usuario)
            <li class="chat-right" >
                <div class="chat-hour">{{$msg->created_at}}<span class="fa fa-check-circle"></span></div>
                <a href="#" role="button" class="btn popovers" data-toggle="popover" title="" data-content="test content <a href='' title='test add link'>link on content</a>" data-original-title="test title">
                    <div class="chat-text">
                        {{$msg->txt_solicitud}}
                    </div>
                </a>
                <div class="chat-avatar">
                    <img src="http://koppaldentist.com/images/female.png" alt="Retail Admin">
                    <div class="chat-name">{{ $postula->solicitud->user->nombre}}</div>
                </div>
            </li>
        @endif
    </ul>
@empty
    <div class="alert alert-success shadow p-3 mb-5  rounded text-center" role="alert">
        <h4 class="alert-heading"><b>Sin mensajes!</b></h4>
        <p>Llena tu solicitud para poder enviarle y notificarle a la dependencia seleccionada</p>
        <hr>
        <p class="mb-0"><b>Feliz Navidad</b></p>
    </div>
@endforelse
<div class="container-fluid text-center">
    <button class="btn btn-info " type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Quiero enviar mensaje
    </button>
</div>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <form method="POST" action=" {{ route('despacho.mensajes.store',[$postula, $postula->solicitud->id]) }} " enctype="multipart/form-data" accept-charset="UTF-8">
                @method('POST')
                @csrf
                <div class="shadow p-3 mb-5 bg-white rounded">
                    <div class="row justify-content-center ">
                        <div class="col-12">
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-outline-success d-flex justify-content-end"><i class="fa fa-paper-plane"></i></button>
                            </div>
                            <label for="txt_solicitud">Solicitud: </label>

                            <input required type="text" class="form-control" name="txt_solicitud"/>
                        </div>
                    </div>
                    {{--
                        <div class="row d-flex d-flex align-items-center">
                            <div class="col-lg-4">
                                <label for="modo_solicitud">Modo de Entrega: </label>
                                <select required  class="form-control" id="modo_solicitud" name="modo_solicitud">
                                    <option value="">Seleccione una Opción</option>
                                    <option value="Correo">Correo</option>
                                    <option value="Oficio">Oficio</option>
                                    <option value="Oficio">Otros</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Fecha de Entrega: </label>
                                <input required=""  type="date" id="fecha_limite" name="fecha_limite" class="form-control {{ $errors->has('fecha_limite') ? ' is-invalid' : '' }}" value="{{ old('fecha_limite') }}" >
                                @if ($errors->has('fecha_limite'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('fecha_limite') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="col-lg-4">
                                <label for="exampleFormControlFile1"> <b> Archivo de evidencia </b></label> <br>
                                <input type="file" class="form-control-file" id="doc_evidencia" name="doc_evidencia">
                            </div>
                        </div>
                    --}}
                </div>
            </form>
        </div>
    </div>


</div>

@endsection
