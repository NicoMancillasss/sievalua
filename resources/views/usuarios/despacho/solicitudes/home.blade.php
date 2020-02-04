@extends('usuarios.despacho.layouts.main')
@section('content')
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Solicitud</h6>
		<div class="dropdown no-arrow">
			@if(isset($solicitud->postula))
			@if ($solicitud->postula->count()>0)
				<a data-toggle="modal" data-target="#confirmacion" href="#confirmacion" class="btn btn-info btn-sm hvr-box-shadow-outset">Enviar mi Solicitud</a>
			@endif

			@endif
		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		<nav>
			<div class="nav nav-tabs" id="nav-tab" role="tablist">
			
				@if (isset($solicitud->correccion))
					@if ($solicitud->correccion->datos_generales=='' && $solicitud->estatus=='correccion')
						<a class="nav-item nav-link disabled @yield('link1')" href=""  >Datos Generales (Anexo 1)</a>
						@else
					<a class="nav-item nav-link @yield('link1')" href="{{route('despacho.solicitudes.index')}}"  >Datos Generales (Anexo 1)</a>
					@endif

				@else
					<a class="nav-item nav-link @yield('link1')" href="{{route('despacho.solicitudes.index')}}"  >Datos Generales (Anexo 1)</a>
				
				@endif


				@if(isset($solicitud))
					@if (isset($solicitud->correccion))
						@if ($solicitud->correccion->doc_generales=='' && $solicitud->estatus=='correccion')
							<a class="nav-item nav-link disabled"  href=""  >Documentos Generales</a>
							@else
							<a class="nav-item nav-link @yield('link3') "  href="{{route('documentos.create')}}"  >Documentos Generales</a>
						@endif
					@else
							<a class="nav-item nav-link @yield('link3') "  href="{{route('documentos.create')}}"  >Documentos Generales</a>
					@endif
				
				@endif


				
					@isset ($solicitud)
					   @if($solicitud->documentosGenerales())
						@if ($solicitud->estatus!='correccion')
							<a class="nav-item nav-link @yield('link2')"  href="{{route('postulaciones.create')}}" >Seleccion de la Evaluación</a>
						@endif 
					@endisset
					
					
				@endif

				@if(isset($solicitud))
				
					@if (isset($solicitud->correccion))
						@if ($solicitud->correccion->doc_especificos=='' && $solicitud->estatus=='correccion')
							<a class="nav-item nav-link disabled @yield('link4') "  href="" >Documentos Específicos</a>
							@else
					<a class="nav-item nav-link @yield('link4') "  href="{{route('documentosEspecificos.create')}}" >Documentos Específicos</a>
						@endif
						@else
						@if ($solicitud->postulaciones())
						    <a class="nav-item nav-link @yield('link4') "  href="{{route('documentosEspecificos.create')}}" >Documentos Específicos</a>
						@endif

					@endif
				@endif

			</div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
			<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
				@yield('menu1')
			</div>
		</div>
	</div>
</div>

<nav>
	

	<!-- Modal -->
	<div class="modal fade" id="confirmacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
						Estas a punto de enviar tu solicitud a revisión. Te pedimos que antes de enviarla verifiques la información
						que registraste, ya que una vez enviada no podrás realizar cambios o modificaciones.
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary hvr-box-shadow-outset" data-dismiss="modal">Cancelar</button>
					@if(isset($solicitud))
					<a class="btn btn-primary" href="{{route('despacho.solicitudes.enviar',$solicitud->id)}} ">Aceptar</a>
					@endif

				</div>
			</div>
		</div>
	</div>


	

	@endsection