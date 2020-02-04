<div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ver mensaje</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('despacho.mensajes.show')}}">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        
                        <h5 class="card-title"> <b>Envio: </b> 					{{$mensaje->emisor->nombre}}</h5>
                        <h6 class="card-text"> <b>Asunto: </b>					{{$mensaje->txt_solicitud}}</h6>
                        <h6 class="card-text"> <b>Modo de Solicitud: </b> 		{{$mensaje->modo_solicitud}}</h6>
                        <h6 class="card-text"> <b>Fecha Limite: </b> 			{{$mensaje->fecha_limite}}</h6>
                        @if (isset($mensaje->doc_evidencia))
                            <h6 class="card-text"> <b>Documento de evidenia: </b> 	{{$mensaje->doc_evidencia}}</h6>
                        @endif                        <h6 class="card-text"> <b>Estatus: </b> 				{{$mensaje->estatus}}</h6>
                        <h6 class="card-text"> <b>De: </b> 				        {{$mensaje->receptor->nombre}}</h6>
                        
                    </div>
                    
                    <input type="hidden" id="mensaje_id" name="mensaje_id">

                    <div class="modal-footer">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Aceptar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>