@extends('usuarios.despacho.layouts.main')
@section('content')
@if (count($mensajes)>0)
<div class="jumbotron jumbotron-fluid text-white" style="background-color: #98C340">
	<div class="container">
		<h1 class="display-4">Bandeja de Mensajes</h1>
			<p class="lead"> </p>
	</div>
</div>
    <div class="m-5">
		<div class="card-header p-3 d-flex flex-row align-items-center justify-content-between">
			<h4 class="font-weight-bold">Historial de mensajes</h4>
		</div>
	<br>
	<div class="row justify-content-center">
			<h5 class="font-weight-bold">Mensajes recibidos</h5>
    </div>
    <div class="card shadow mb-4">
		<div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Entrega de Información</th>
                            <th scope="col">Modo de Entrega</th>
                            <th scope="col">Fecha de Entrega</th>
                            <th scope="col"> <b> Archivo de evidencia.</b> <br> Tipo de documento</th>
                            <th scope="col">Estatus</th>
                            <th scope="col">De</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mensajes as $mensaje)
                            @if ($usuario->id == $mensaje->receptor_id)
                                <tr>
                                    <td>{{$mensaje->txt_solicitud}}</td>
                                    <td>{{$mensaje->modo_solicitud}}</td>
                                    <td>{{$mensaje->fecha_limite}}</td>
                                    <td>
                                        {{$mensaje->doc_evidencia}}
                                    </td>
                                    <td>
                                        @if ($mensaje->estatus=='enviado')
                                            <span class="badge badge-primary"> Recibido </span>
                                        @endif
                                        @if ($mensaje->estatus=='visto')
                                            <span class="badge badge-primary"> Recibido </span>
                                        @endif
                                        @if ($mensaje->estatus=='observacion')
                                            <span class="badge badge-warning"> Observación </span>
                                        @endif

                                    </td>
                                    <td>{{$mensaje->emisor->nombre}}</td>
                                    <td>
                                        <a href="" class="btn btn-outline-success" data-toggle="modal" data-target="#show" data-datos="{{$mensaje}}"><i class="fas fa-comment"></i> Ver Mensaje</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
		<div class="row justify-content-center">
				<h5 class=" font-weight-bold">Mensajes enviados</h5>
        </div>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Solicitud</th>
                                <th scope="col">Modo de Solicitud</th>
                                <th scope="col">Fecha Limite</th>
                                <th scope="col">Dococumento evidencia</th>
                                <th scope="col">Estatus</th>
                                <th scope="col">Dependencia</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mensajes as $mensaje)
                                @if ($usuario->id == $mensaje->emisor_id)
                                    <tr>
                                        <td>{{$mensaje->txt_solicitud}}</td>
                                        <td>{{$mensaje->modo_solicitud}}</td>
                                        <td>{{$mensaje->fecha_limite}}</td>
                                        <td>
                                        @if (isset($mensaje->doc_evidencia))
                                            <a href="" class="btn btn-outline-success" data-toggle="modal" data-target="#archivo" data-datos="{{$mensaje}}"><i class="fas fa-comment"></i> Ver Documento</a>
                                        @endif
                                        </td>
                                        <td>
                                            @if ($mensaje->estatus=='enviado')
                                                <span class="badge badge-success"> Enviado </span>
                                            @endif
                                            @if ($mensaje->estatus=='observacion')
                                                <span class="badge badge-warning"> Observación </span>
                                            @endif
                                            @if ($mensaje->estatus=='visto')
                                                <span class="badge badge-info"> Visto </span>
                                            @endif
                                        </td>
                                        <td>{{$mensaje->receptor->nombre}}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
	</div>




	@include('usuarios.despacho.mensajes.show')

	@section('script')
	<script type="text/javascript">
		$('#show').on('show.bs.modal', function(e) {
			var mensaje = $(e.relatedTarget).data().datos;
			console.log(mensaje.doc_evidencia);
            $('#mensajedoc').text(mensaje.doc_evidencia);
            $('#mensaje').text(mensaje.estatus);
            $('#mensaje_id').val(mensaje.id);

		});
	</script>
	@endsection

	@include('usuarios.despacho.mensajes.doc_evidencia')

	@section('script')
	<script type="text/javascript">
		$('#archivo').on('archivo.bs.modal', function(e) {
			var mensaje = $(e.relatedTarget).data().datos;
            console.log(mensaje);
            alert('qui');
			$('#mensaje_doc').text(mensaje.doc_evidencia);
            $('#mensaje_id').val(mensaje.id);
            console.log($('#documento').val());
		});
	</script>
	@endsection

@endif
@if (count($mensajes)<=0)
	<div class="jumbotron jumbotron-fluid text-white" style="background-color: #98C340">
		<div class="container">
			<h1 class="display-4">Bandeja de Mensajes</h1>
				<p class="lead">Sin mensajes</p>
		</div>
	</div>
@endif
@endsection


