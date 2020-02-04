<div class="modal fade" id="firma" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h3 class="modal-title" id="exampleModalCenterTitle"><i class="fas fa-pencil-alt fa-lg"></i> Firma de Contrato</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times-circle"></i>
                    </button>

                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form method="POST" action="{{route('administrador.ver.solicitud.firmaContrato')}}">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <h4>Dependencia Participante: <p id="dependencia"></p></h4> <h5></h5>
                                <h4>Programa a Evaluar: <p id="programa"></p></h4>       <h5></h5>
                                <h4>Tipo de evaluación: <p id="tipo_evaluacion"></p></h4>       <h5></h5>
                                <h4>Quien firma: <p id="user"></p></h4>              <h5></h5>
                                <h6>Si ha firmado contrato presiona firmado y si no cancelar</h6>
                            </div>

                            <input type="hidden" id="postula_id" name="postula_id">

                            <div class="modal-footer">
                                <div class="form-group">
                                    <button type="button" class="btn btn-secondary hvr-box-shadow-outset" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary hvr-box-shadow-outset">Firmado</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
