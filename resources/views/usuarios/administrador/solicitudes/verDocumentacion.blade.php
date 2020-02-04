@extends('usuarios.administrador.layouts.main')
@section('status','show')
@section('link0','active')
@section('content')
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Evaluacion: {{$postula->evaluacion->programa->nombre}} a {{$postula->evaluacion->dependencia->nombre}}</h6>
		<div class="dropdown no-arrow">
			<a href="{{ route('administrador.ver.solicitud',$postula->solicitud_id) }}" class="btn btn-info btn-sm hvr-box-shadow-outset">Regresar</a>
		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">

		<ul class="list-group">
			<li class="list-group-item ">	<h6 class="m-0 font-weight-bold text-dark">Documentos Específicos</h6>
			</li>
			@foreach ($postula->repositorioDocumento as $documento)
			<li class="list-group-item"><a href="{{asset('storage/'.$documento->ruta)}}" target="_blank">
				{{$documento->documento->catalago_documento->descripcion}}</a>
				@if (Auth::user()->perfil->id!=5)
				<a href="" data-toggle="modal" data-target="#editar"  data-datos="{{$documento}}"><span class="badge badge-danger">Editar Documento</span></a>

				@if($documento->correccion =='')
						<a href="" data-toggle="modal" data-target="#correccion"  data-datos="{{$documento}}"><span class="badge badge-warning">Enviar Corrección</span></a>
					@else
						<a href="" data-toggle="modal" data-target="#correccion"  data-datos="{{$documento}}"><span class="badge badge-success">Editar Corrección</span></a>
					
					@endif
				@endif
			</li>
			@endforeach
		</ul>


		

	</div>

	<!--aurome -->




</div>

<!--Modlal Crear -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Editar Documento Especifico a {{$postula->solicitud->user->nombre}}</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<strong>Documento:</strong><p class="text-danger text-justify" id="descripcion_documento"></p>
				<form method="POST" action="{{ route('evaluacion.documentos.editar') }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('POST')
					<div class="form-group">
						<label for="inicio">Seleccione el Nuevo Documento</label>
						<input required="" accept=".pdf" type="file" id="nuevo_documento" name="nuevo_documento" class="form-control {{ $errors->has('nuevo_documento') ? ' is-invalid' : '' }}" value="{{ old('nuevo_documento') }}" >
						@if ($errors->has('nuevo_documento'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('nuevo_documento') }}</strong>
						</span>
						@endif
						<input type="hidden" name="id_documento" id="id_documento">
					</div>
					  
					
					
				
					


					<div class="modal-footer">
						<div class="form-group">
							<button type="button" class="btn btn-secondary hvr-box-shadow-outset" data-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-primary">Actualizar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<!--Modlal Crear -->
<div class="modal fade" id="correccion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Enviar Correccion a </h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<strong>Documento:</strong> <p class="text-danger text-justify" id="nombre_documento"></p>
				<form method="POST" action="{{route('administrador.enviar.correccion.solicitud',$postula->solicitud->id)}}" method="post" >
					@csrf
					@method('POST')
					<div class="form-group">
						<label for="inicio">Correccion:</label>
						<input  accept=".pdf" type="text" id="correccion2" name="correccion" class="form-control {{ $errors->has('correccion') ? ' is-invalid' : '' }}" value="" >
						@if ($errors->has('correccion'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('correccion') }}</strong>
						</span>
						@endif
						<input type="hidden" name="id_documento_correccion" id="id_documento_correccion">
						<input type="hidden" name="documento" id="documento">
						<input type="hidden" name="seccion" id="seccion" value="doc_especificos">
					</div>
					  
					
					
				
					


					<div class="modal-footer">
						<div class="form-group">
							<button type="button" class="btn btn-secondary hvr-box-shadow-outset" data-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-primary">Enviar Corrección</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


@endsection
@section('script')
	<script type="text/javascript">
		$('#editar').on('show.bs.modal', function(e) {
		var documento = $(e.relatedTarget).data().datos;
		console.log(documento);
		$('#descripcion_documento').text(documento.documento.catalago_documento.descripcion);
		$('#id_documento').val(documento.id);
		
	});

		$('#correccion').on('show.bs.modal', function(e) {
		var documento = $(e.relatedTarget).data().datos;
		console.log(documento);
		$('#nombre_documento').text(documento.documento.catalago_documento.descripcion);
		$('#correccion2').val(documento.correccion);
		$('#documento').val(documento.documento.catalago_documento.descripcion);
		$('#id_documento_correccion').val(documento.id);
		
	});

	</script>
@endsection