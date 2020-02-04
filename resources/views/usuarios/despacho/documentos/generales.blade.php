@extends('usuarios.despacho.solicitudes.home')
@section('link3','active')
@section('menu1')
@if (isset($solicitud->correccion))
@if ($solicitud->estatus=='correccion')
<div class="alert alert-danger" role="alert">
	<h4 class="alert-heading">¡Tienes correcciones aquí en documentos generales!</h4>
	<p><pre>{{$solicitud->correccion->doc_generales}}</pre></p>
</div>
@endif
@endif
<div class="alert alert-secondary" role="alert">

	<p>Por favor complementa tu registro adjuntando los documentos que a continuación te solicitamos.
		Solo podrás cargar documentos con extensión PDF y de un tamaño menor a 10MB.</p>
	<h6>Al terminar con la carga, haz clic en el botón guardar para habilitar la siguiente sección.</h6>

</div>
<p class="contenedor"></p>
<br>
<div class="row">
@foreach ($catalago as $documento)
		@if ($documento->catalago_documento->tipo_documento=='general')
			<div class="col-6 my-2 h-auto">
			<div class="card
			@if ($documentos->where('catalago_documento_id',$documento->id)->where('solicitud_id',$solicitud->id)->get()->count()>=1)
			@if($documentos->where('catalago_documento_id',$documento->id)->where('solicitud_id',$solicitud->id)->first()->ruta!='')
			border-success
			@endif
			@endif
			h-100 p-3 justify-content-center">
				<div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
				<div class="text-dark text-center mt-3">
					<form method="Post" action="{{route('despacho.documentos.guardar',$solicitud->id)}}" accept-charset="UTF-8" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="form-group text-center">
							<label >
								{{ $documento->catalago_documento->descripcion }}</label>
								<input type="hidden" name="catalago_documento_id" value="{{$documento->id}}">
							<input required="" type="file"  name="{{ $documento->catalago_documento->nombre }}"
							@isset ($documentos->where('catalago_documento_id',$documento->id)->where('solicitud_id',$solicitud->id)->first()->id)
							 @if($documentos->where('catalago_documento_id',$documento->id)->where('solicitud_id',$solicitud->id)->first()->ruta != '')
							      disabled
							      @endif
							  @endisset
							 accept=".pdf"  >
							<br>

							@if ($documentos->where('catalago_documento_id',$documento->id)->where('solicitud_id',$solicitud->id)->get()->count()>=1)
							<div class="mt-2">

								@if($documentos->where('catalago_documento_id',$documento->id)->where('solicitud_id',$solicitud->id)->first()->ruta !='')
								<a href="" class="fa fa-check-circle text-success fa-lg"></a>
								<a class="text-uppercase" href="{{asset('storage/'.$documentos->where('catalago_documento_id',$documento->id)->where('solicitud_id',$solicitud->id)->first()->ruta)}}" target="_blank">
									{{ $documento->catalago_documento->nombre }}</a>
								<a href="{{route('despacho.solicitudes.borrarDocumento',$documentos->where('catalago_documento_id',$documento->id)->where('solicitud_id',$solicitud->id)->first()->id)}}" ><span class="badge badge-danger">Eliminar</span></a>
								@endif
							</div>
							@endif


					</div>
						<div class="form-group">
							@if (isset($documentos->where('catalago_documento_id',$documento->id)->where('solicitud_id',$solicitud->id)->get()->first()->ruta ))
								@if($documentos->where('catalago_documento_id',$documento->id)->where('solicitud_id',$solicitud->id)->get()->first()->ruta == '' )
									<button type="submit"  class="btn btn-primary">Subir Archivo</button>
								@endif

							@else
								<button type="submit"  class="btn btn-primary">Subir Archivo</button>
							@endif

						</div>
					</form>
				</div>
			</div>
		</div>
		@endif
		<br>
@endforeach
</div>

	@if(isset($solicitud))
	@if($solicitud->documentosGenerales())
	@if ($solicitud->estatus!='correccion')
	<a href="{{ route('postulaciones.create') }}" class="btn btn-info btn-block  hvr-box-shadow-outset ">Siguiente</a>
	@endif

	@endif
	@endif


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
