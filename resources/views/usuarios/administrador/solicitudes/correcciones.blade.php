@extends('usuarios.administrador.layouts.main')
@section('status','show')
@section('link0','active')
@section('content')
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Correcciones a {{$solicitud->folio}}</h6>
		<div class="dropdown no-arrow">
			<a href="{{ route('administrador.solicitudes',[$solicitud->ejercicio_id,$solicitud->estatus]) }}" class="btn btn-info btn-sm hvr-box-shadow-outset">Regresar</a>
		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		@if (isset($solicitud->correccion))
		<form method="post" action="{{route('administrador.editar.correccion.solicitud',[$solicitud->correccion->id,$solicitud->id])}}">
			@method('PUT')
			@csrf

			@else
			<form method="post" action="{{route('administrador.enviar.correccion.solicitud',$solicitud->id)}}">
				@method('POST')
				@csrf
				@endif


				<div class="form-group ">
					<div class=" row ">
						<div class="col-md-2">
							Correcciones Datos Generales
						</div>
						<div class="col-md-10">
							<label>Lista de Correcciones</label>
							<textarea id="datos_generales" class="form-control" name="datos_generales" >@if(isset($solicitud->correccion->datos_generales)){{$solicitud->correccion->datos_generales}} @endif</textarea>	

						</div>

					</div>
				</div>

				{{-- 
					<div class="form-group ">
					<div class=" row ">
						<div class="col-md-2">
							Correcciones Documentos Generales
						</div>
						<div class="col-md-10">
							<label>Lista de Correcciones</label>
							<textarea id="doc_generales" onchange="conver()" class="form-control" name="doc_generales">@if(isset($solicitud->correccion->doc_generales)){{$solicitud->correccion->doc_generales}} @endif</textarea>	

						</div>

					</div>
				</div>
				<div class="form-group ">
					<div class=" row ">
						<div class="col-md-2">
							Correcciones Documentos Específicos
						</div>
						<div class="col-md-10">
							<label>Lista de Correcciones</label>
							<textarea id="doc_especificos"  class="form-control" name="doc_especificos">@if(isset($solicitud->correccion->doc_especificos)){{$solicitud->correccion->doc_especificos}} @endif</textarea>	

						</div>

					</div>
				</div>
				--}}
				@if(isset($solicitud->correccion))
				<button type="submit" class="btn btn-info hvr-box-shadow-outset">Editar Correcciones</button>
				@else
				<button type="submit" class="btn btn-info hvr-box-shadow-outset">Enviar Correcciones</button>
				@endif
			</form>
		</div>




	</div>

	@endsection

	@section('script')
	<script type="text/javascript">

		$(document).ready(function(){
			var texto = $('#doc_generales').val();
			texto = texto.replace(/\n/g, "<br />");
			var texto = $('#datos_generales').val();
			texto = texto.replace(/\n/g, "<br />");
			var texto = $('#doc_especificos').val();
			texto = texto.replace(/\n/g, "<br />");
			
		});

	</script>
	@endsection
