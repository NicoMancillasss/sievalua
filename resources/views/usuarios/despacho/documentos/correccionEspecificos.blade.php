@extends('usuarios.despacho.solicitudes.home')
@section('link4','active')
@section('menu1')

@if (isset($solicitud->correccion))
@if ($solicitud->correccion->doc_especificos!='' && $solicitud->estatus=='correccion')
<div class="alert alert-danger" role="alert">
	<h4 class="alert-heading">¡Tienes correcciones aquí en Documentos especificos!</h4>
	<p><pre>{{--$solicitud->correccion->doc_especificos--}}</pre></p>
</div>
@endif
@endif
<div class="alert alert-secondary" role="alert">
	<p>Deberás agregar la documentación específica de cada una de las evaluaciones que seleccionaste en el paso anterior.

		<br>Una vez completa la información, haz clic en el botón Enviar mi Solicitud.</p>
		<h6><strong>Te recordamos que solo podrás cargar documentos con extensión PDF y de un tamaño menor a 10MB.</strong></h6>
	</div>
	@foreach ($postulaciones as $postula)
	<br>
	<h6><strong>Evaluación: {{ $postula->evaluacion->programa->nombre}}</strong></h6>
	<p class="contenedor"></p>
	<br>
	<div class="">
		<form action="{{ route('despacho.documentosespecificos.guardar',$postula->id) }}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="row">
				@foreach ($catalago->where('evaluacion_id',$postula->evaluacion_id) as $documento)
				<div class="col-6 my-2 ">
					@if ($documento->catalago_documento->tipo_documento=='especifico')
					<div class="card
					@if($documentos->where('catalago_documento_id',$documento->id)->get()->count()>=1)
					@isset ($documentos->where('catalago_documento_id',$documento->id)->where('postulacion_id',$postula->id)->where('solicitud_id',$postula->solicitud_id)->first()->correccion)
					border-danger
					@endif
					@endisset
					h-100 p-3 justify-content-center ">
					<div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
					<div class="text-dark text-center mt-3">
						<div class="form-group text-center">
							<label for="">
								{{ $documento->catalago_documento->descripcion}}
							</label>

							<input accept=".pdf"  type="file" class="form-control" name="{{ $documento->catalago_documento->nombre}}"
							@isset ($documentos->where('catalago_documento_id',$documento->id)->where('postulacion_id',$postula->id)->where('solicitud_id',$postula->solicitud_id)->first()->ruta)
							@if($documentos->where('catalago_documento_id',$documento->id)->where('postulacion_id',$postula->id)->where('solicitud_id',$postula->solicitud_id)->first()->correccion =='')
							disabled
							@endif
							@if($documentos->where('catalago_documento_id',$documento->id)->where('postulacion_id',$postula->id)->where('solicitud_id',$postula->solicitud_id)->first()->ruta =='' && $documentos->where('catalago_documento_id',$documento->id)->where('postulacion_id',$postula->id)->where('solicitud_id',$postula->solicitud_id)->first()->correccion !='')
							enabled
							@endif
							@if($documentos->where('catalago_documento_id',$documento->id)->where('postulacion_id',$postula->id)->where('solicitud_id',$postula->solicitud_id)->first()->ruta !='' && $documentos->where('catalago_documento_id',$documento->id)->where('postulacion_id',$postula->id)->where('solicitud_id',$postula->solicitud_id)->first()->correccion !='')
							disabled
							@endif
							@endisset

							>
							<br>
							@if($documentos->where('catalago_documento_id',$documento->id)->get()->count()>=1)
							@isset ($documentos->where('catalago_documento_id',$documento->id)->where('postulacion_id',$postula->id)->where('solicitud_id',$postula->solicitud_id)->first()->ruta)
							@if ($documentos->where('catalago_documento_id',$documento->id)->where('postulacion_id',$postula->id)->where('solicitud_id',$postula->solicitud_id)->first()->correccion !='')
														<p  class="text-danger"><strong>Correcciones:</strong>
														{{$documentos->where('catalago_documento_id',$documento->id)->where('postulacion_id',$postula->id)->where('solicitud_id',$postula->solicitud_id)->first()->correccion}}
																			</p>
													@endif

							@if($documentos->where('catalago_documento_id',$documento->id)->where('postulacion_id',$postula->id)->where('solicitud_id',$postula->solicitud_id)->first()->ruta !='')
							<a href="" class="fa fa-check-circle text-success fa-lg"></a>
							<a class="text-uppercase" target="_blank" href="{{asset('storage/'.$documentos->where('catalago_documento_id',$documento->id)->where('postulacion_id',$postula->id)->where('solicitud_id',$postula->solicitud_id)->first()->ruta)}}"> {{ $documento->catalago_documento->nombre }}</a>


							@if($documentos->where('catalago_documento_id',$documento->id)->where('postulacion_id',$postula->id)->where('solicitud_id',$postula->solicitud_id)->first()->correccion!='')
							<a href="{{route('despacho.solicitudes.borrarDocumentoEspecifico',$documentos->where('catalago_documento_id',$documento->id)->where('postulacion_id',$postula->id)->where('solicitud_id',$postula->solicitud_id)->first()->id)}}"><span class="badge badge-danger">Eliminar</span></a>

							@endif
							@endif
							@endif
							@endisset
						</div>
					</div>
				</div>
				@endif
			</div>
			<br>
			@endforeach
		</div>

		<button type="submit"  class="btn btn-info btn-block  hvr-box-shadow-outset">Subir Archivos</button>



	</form>
</div>
<hr>
@endforeach
<div class="card-footer text-muted">
	@if(isset($solicitud->postula))
	@if ($solicitud->postula->count()>0)
	<a data-toggle="modal" data-target="#confirmacion" href="#confirmacion" class="btn btn-info btn-sm hvr-box-shadow-outset float-right">Enviar mi Solicitud</a>
	@endif

	@endif
</div>
@endsection
@section('script')
<script>
	$(window).scroll(function() {
		sessionStorage.scrollTop = $(this).scrollTop();
	});

	$(document).ready(function() {
		if (sessionStorage.scrollTop != "undefined") {
			$(window).scrollTop(sessionStorage.scrollTop);
		}
	});


	function myFunction(){
		$("form").submit();
	}

	$(document).on('change','input[type="file"]',function(){
		var fileSize = this.files[0].size;
		if(fileSize > 10000000){
			alert('El archivo no debe superar los 10MB');
			$('input[type="file"]').val('');
		/*var tpl = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Holy guacamole!</strong> El archivo no debe superar los 5MB'

		+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> '
		+'</div>';

		$('.contenedor').html(tpl)*/
	}
});

</script>
@endsection
