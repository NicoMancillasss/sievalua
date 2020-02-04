@extends('usuarios.administrador.layouts.main')
@section('content')
@if (count($mensajes)>0)
<div class="jumbotron jumbotron-fluid text-white" style="background-color: #ED6D25">
	<div class="container">
		<h1 class="display-4">Bandeja de Mensajes</h1>
		@if (count($mensajes)<=0)
			<p class="lead">Sin mensajes</p>
		@endif
		@if (count($mensajes)>=0)
			<p class="lead"> </p>
		@endif
	</div>
</div>
	<div class="row">
		<div class="col-6 mb-4">
			<div class="card shadow mb-4">
				<div class="card-header py-3 text-center">
					<h4 class="m-0 font-weight-bold text-primary">Despachos</h4>
				</div>
				@foreach ($mensajes as $mensaje)
				@if ($mensaje->emisor->perfil->id==3)
				
					<div class="card-body text-center">
							<div class="row no-gutters">
								<div class="col h5 mb-0 font-weight-normal text-gray-800">
									<h5 class="card-title"> <b>Envia: </b>  				{{$mensaje->emisor->nombre}}</h5>
									<h6 class="card-text"> <b>Asunto: </b> 					{{$mensaje->txt_solicitud}}</h6>
									<h6 class="card-text"> <b>Modo de solicitud: </b>  		{{$mensaje->modo_solicitud}}</h6>
									<h6 class="card-text"> <b>Fecha Limite: </b>  			{{$mensaje->fecha_limite}}</h6>
									@if (isset($mensaje->doc_evidencia))
										{{--<h6 class="card-text"> <b>Documento de evidencia: </b> 	{{$mensaje->doc_evidencia}}</h6>--}}
										<a href="" class="btn btn-outline-success" target="_blanck" data-toggle="modal" data-target="#myModal"> Ver documento</a>
									@endif
									<h6 class="card-text"> <b>Estatus: </b>  				
										@if ($mensaje->estatus=='enviado')
										<span class="badge badge-success">Enviado</span>
										@endif
										@if ($mensaje->estatus=='visto')
										<span class="badge badge-info">Visto</span>
										@endif
										@if ($mensaje->estatus=='observacion')
										<span class="badge badge-warning">Observación</span>
										@endif
									</h6>
									@if (isset($mensaje->observacion))
										<h6 class="card-text"> <b>Observación Realizada: </b> 	{{$mensaje->observacion}}</h6>
									@endif
									<h6 class="card-text"> <b>Recibio: </b>  				{{$mensaje->receptor->nombre}}</h6>
									<a href="" class="btn btn-danger btn-sm hvr-box-shadow-outset" data-toggle="modal" data-target="#observaciones" data-datos="{{$mensaje}}"><i class="fas fa-exclamation-triangle"></i> Observación</a>
								</div>
							</div>
						</div>
						<div><br><hr class="sidebar-divider my-0"><br></div>
					
					{{--
						<div class="row mt-3">
							<div class="col ml-3 mr-0">
									<ul class="list-group">
											<li class="list-group-item active">Envia</li>
											<li class="list-group-item active">Asunto</li>
											<li class="list-group-item active">Modo de Solicitud</li>
											<li class="list-group-item active">Fecha Limite</li>
										@if (isset($mensaje->doc_evidencia))
											<li class="list-group-item active">Documento de Evidencia</li>
										@endif
											<li class="list-group-item active">Estatus</li>
										@if (isset($mensaje->observacion))
											<li class="list-group-item active">Observacion Realizada</li>
										@endif
											<li class="list-group-item active">Recibio</li>
											</ul>
							</div>
							<div class="col mr-3 ml-0">
									<ul class="list-group">
											<li class="list-group-item">{{$mensaje->emisor->nombre}}</li>
											<li class="list-group-item">{{$mensaje->txt_solicitud}}</li>
											<li class="list-group-item">{{$mensaje->modo_solicitud}}</li>
											<li class="list-group-item">{{$mensaje->fecha_limite}}</li>
										@if (isset($mensaje->doc_evidencia))
											<li class="list-group-item">{{$mensaje->doc_evidencia}}</li>
										@endif
											<li class="list-group-item">
													@if ($mensaje->estatus=='enviado')
													<span class="badge badge-success">Enviado</span>
													@endif
													@if ($mensaje->estatus=='visto')
													<span class="badge badge-info">Visto</span>
													@endif
													@if ($mensaje->estatus=='observacion')
													<span class="badge badge-warning">Observación</span>
													@endif
											</li>
										@if (isset($mensaje->observacion))
											<li class="list-group-item">
												{{$mensaje->observacion}}
											</li>
										@endif
											<li class="list-group-item">{{$mensaje->receptor->nombre}}</li>
											</ul>
							</div>
							
						</div>
						<div class="row">
							<div class="col m-3 text-center">
								<a href="" class="btn btn-danger btn-sm hvr-box-shadow-outset" data-toggle="modal" data-target="#observaciones" data-datos="{{$mensaje}}"><i class="fas fa-exclamation-triangle"></i> Observación</a>
							</div>
							
						</div>
						<div><br><hr class="sidebar-divider my-0"><br></div>
					--}}
				@endif
				@endforeach
			</div>
		</div>
		
	
		<div class="col-6 mb-4">
				<div class="card shadow mb-4">
				<div class="card-header py-3 text-center">
					<h4 class="m-0 font-weight-bold text-primary">Dependencias</h4>
				</div>
				@foreach ($mensajes as $mensaje)
				@if ($mensaje->emisor->perfil->id==4)
				{{--	
					<div class="card-body text-center">
							<div class="row no-gutters">
								<div class="col h5 mb-0 font-weight-normal text-gray-800">
									<h5 class="card-title"> <b>Envio: </b> 					{{$mensaje->emisor->nombre}}</h5>
									<h6 class="card-text"> <b>Asunto: </b>					{{$mensaje->txt_solicitud}}</h6>
									<h6 class="card-text"> <b>Modo de Solicitud: </b> 		{{$mensaje->modo_solicitud}}</h6>
									<h6 class="card-text"> <b>Fecha Limite: </b> 			{{$mensaje->fecha_limite}}</h6>
									<h6 class="card-text"> <b>Documento de evidenia: </b> 	{{$mensaje->doc_evidencia}}</h6>
									<h6 class="card-text"> <b>Estatus: </b> 				
										@if ($mensaje->estatus=='enviado')
										<span class="badge badge-success">Enviado</span>
										@endif
										@if ($mensaje->estatus=='visto')
										<span class="badge badge-info">Visto</span>
										@endif
										@if ($mensaje->estatus=='observacion')
										<span class="badge badge-warning">Observación</span>
										@endif
									</h6>
									@if (isset($mensaje->observacion))
										<h6 class="card-text"> <b>Observación Realizada: </b> 	{{$mensaje->observacion}}</h6>
									@endif
									<h6 class="card-text"> <b>Recibio: </b> 				{{$mensaje->receptor->nombre}}</h6>
									<a href="" class="btn btn-danger btn-sm hvr-box-shadow-outset" data-toggle="modal" data-target="#observaciones" data-datos="{{$mensaje}}"><i class="fas fa-exclamation-triangle"></i> Observación</a>
								</div>
							</div>
						</div>
						<div><br><hr class="sidebar-divider my-0"><br></div>
				--}}
				<div class="row mt-3">
						<div class="col ml-3 mr-0">
								<ul class="list-group">
										<li class="list-group-item active">Envia</li>
										<li class="list-group-item active">Entrega de Información</li>
										<li class="list-group-item active">Modo de Entrega</li>
										<li class="list-group-item active">Fecha de Entrega</li>
									@if (isset($mensaje->doc_evidencia))
										<li class="list-group-item active"><b> Archivo de Evidencia </b> Tipo de Documento</li>
									@endif
										<li class="list-group-item active">Estatus</li>
									@if (isset($mensaje->observacion))
										<li class="list-group-item active">Observacion Realizada</li>
									@endif
										<li class="list-group-item active">Recibio</li>
										</ul>
						</div>
						<div class="col mr-3 ml-0">
								<ul class="list-group">
										<li class="list-group-item">{{$mensaje->emisor->nombre}}</li>
										<li class="list-group-item">{{$mensaje->txt_solicitud}}</li>
										<li class="list-group-item">{{$mensaje->modo_solicitud}}</li>
										<li class="list-group-item">{{$mensaje->fecha_limite}}</li>
									@if (isset($mensaje->doc_evidencia))
										<li class="list-group-item">{{$mensaje->doc_evidencia}}</li>
									@endif
										<li class="list-group-item">
												@if ($mensaje->estatus=='enviado')
												<span class="badge badge-success">Enviado</span>
												@endif
												@if ($mensaje->estatus=='visto')
												<span class="badge badge-info">Visto</span>
												@endif
												@if ($mensaje->estatus=='observacion')
												<span class="badge badge-warning">Observación</span>
												@endif
										</li>
									@if (isset($mensaje->observacion))
										<li class="list-group-item">
											{{$mensaje->observacion}}
										</li>
									@endif
										<li class="list-group-item">{{$mensaje->receptor->nombre}}</li>
										</ul>
						</div>
						
					</div>
					<div class="row">
						<div class="col m-3 text-center">
							<a href="" class="btn btn-danger btn-sm hvr-box-shadow-outset" data-toggle="modal" data-target="#observaciones" data-datos="{{$mensaje}}"><i class="fas fa-exclamation-triangle"></i> Observación</a>
						</div>
					</div>
					<div><br><hr class="sidebar-divider my-0"><br></div>	
				@endif	
				@endforeach
			</div>
		</div>
	</div>
@section('script')
	<script type="text/javascript">
		$('#observaciones').on('show.bs.modal', function(e) {
			var mensaje = $(e.relatedTarget).data().datos;
			console.log(mensaje);
			$('#observaciones_mensaje').text(mensaje.observacion);
			$('#observaciones_mensaje_id').val(mensaje.id);
			if (  mensaje.observaciones !='Ninguna') {
				console.log(mensaje.observaciones);
				$('#correccion').val(mensaje.observaciones);
			}
		});
	</script>
@endsection		

	
@endif
@if (count($mensajes)<=0)
	<div class="jumbotron jumbotron-fluid text-white" style="background-color: #ED6D25">
		<div class="container">
			<h1 class="display-4">Bandeja de Mensajes</h1>
			@if (count($mensajes)<=0)
				<p class="lead">Sin mensajes</p>
			@endif
			@if (count($mensajes)>=0)
				<p class="lead"> </p>
			@endif
		</div>
	</div>
@endif

@include('usuarios.administrador.mensajes.observaciones')
@endsection
