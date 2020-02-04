@extends('usuarios.administrador.layouts.main')
@section('status','show')
@section('title','Solicitudes')
@section('link0','active')
@section('content')
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Solicitud de la Empresa: {{$solicitud->user->nombre}}</h6>
		<div class="dropdown no-arrow">
			<a href="{{ route('administrador.solicitudes',[$solicitud->ejercicio_id,$solicitud->estatus]) }}" class="btn btn-info btn-sm hvr-box-shadow-outset">Regresar</a>
			<a href="{{ route('administrador.pdf.datosgenerales',$solicitud->id) }}" class="btn btn-danger btn-sm hvr-box-shadow-outset"><i class="fas fa-download"></i>Pdf</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9">
			<div class="card mb-3" >
				<div class="card-header">Datos Generales</div>
				<div class="card-body text-primary">
					<div class="form-group row">
						<div class="col-md-3">
							<label for="name" class="">{{ __('RFC') }}</label>
							<input id="name" type="text" class="form-control @error('rfc') is-invalid @enderror" name="rfc" value="{{ $solicitud->rfc }}" required autocomplete="RFC" readonly="">


						</div>

						<div class="col-md-3">
							<label for="email" class="">{{ __('Teléfono') }}</label>
							<input id="telefono" type="text" class="form-control" name="telefono" value="{{$solicitud->telefono}}" required autocomplete="telefono" readonly="">
						</div>


						<div class="col-md-6">
							<label for="email" class="">{{ __('Redes Sociales') }}</label>
							<input id="representante" type="text" class="form-control @error('redes_sociales') is-invalid @enderror" name="redes_sociales" value="{{ $solicitud->redes_sociales}}" readonly="">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-12">
							<label for="email" class="">{{ __('Correo') }}</label>
							<input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ $solicitud->user->email }}" readonly="">
						</div>
					</div>
					{{-- Datos del Representante --}}
					<div class="form-group row">
						<div class="col-md-6">
							<label for="email" class="">{{ __('Nombre') }}</label>
							<input type="text" class="form-control" name="nombre" value="{{ $solicitud->nombre}}" readonly="">
						</div>


						<div class="col-md-3">
							<label for="email" class="">{{ __('Apellido Paterno') }}</label>
							<input type="text" class="form-control"  value="{{ $solicitud->apellido_paterno}}" readonly="">
						</div>


						<div class="col-md-3">
							<label for="email" class="">{{ __('Apellido Materno') }}</label>
							<input type="text" class="form-control"  value="{{ $solicitud->apellido_materno}}" readonly="">
						</div>
					</div>
					{{-- Datos del domicilio --}}
					<div class="form-group row">
						<div class="col-md-3">
							<label for="email" class="">{{ __('País') }}</label>
							<input type="text" class="form-control"  value="{{ $solicitud->pais->nombre}}" readonly="">
						</div>
						<div class="col-md-3">
							<label for="selectEstatus">Estado</label>
							<input type="text" class="form-control" name="redes_sociales" value="{{ $solicitud->estado->nombre}}" readonly="">
						</div>

						<div class="col-md-3">
							<label for="selectEstatus">Municipio</label>
							<input type="text" class="form-control" name="redes_sociales" value="{{ $solicitud->municipio->nombre}}" readonly="">
						</div>
						<div class="col-md-3">
							<label for="selectEstatus">Colonia</label>
							<input type="text" class="form-control" name="redes_sociales" value="{{ $solicitud->colonia}}" readonly="">
						</div>
					</div>
					{{-- Datos del domicilio especifico --}}
					<div class="form-group row">
						<div class="col-md-2">
							<label for="selectEstatus">Número Exterior </label>
							<input type="text" class="form-control"  value="{{ $solicitud->numero_exterior}}" readonly="">
						</div>
						<div class="col-md-1">
							<label for="selectEstatus">Número Interior </label>
							<input type="text" class="form-control"  value="{{ $solicitud->numero_interior}}" readonly="">
						</div>
						<div class="col-md-2">
							<label for="selectEstatus">Vialidad</label>
							<input type="text" class="form-control"  value="{{ $solicitud->tipoVialidad->nombre}}" readonly="">
						</div>
						<div class="col-md-5">
							<label for="selectEstatus">Nombre Vialidad</label>
							<input type="text" class="form-control"  value="{{ $solicitud->vialidad}}" readonly="">
						</div>
						<div class="col-md-2">
							<label for="selectEstatus">Código Postal</label>
							<input type="text" class="form-control"  value="{{ $solicitud->codigo_postal}}" readonly="">
						</div>
					</div>

					@if (Auth::user()->perfil->id!=5)
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
							<textarea id="datos_generales" class="form-control" name="datos_generales" required="" >@if(isset($solicitud->correccion->datos_generales)){{$solicitud->correccion->datos_generales}} @endif</textarea>

						</div>

					</div>
				</div>
				@if(isset($solicitud->correccion))
				<button type="submit" class="btn btn-info btn-block  hvr-box-shadow-outset">Enviar Correcciones</button>
				@else
				<button type="submit" class="btn btn-info btn-block  hvr-box-shadow-outset">Enviar Correcciones</button>
				@endif
			</form>
			@endif


				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card  mb-3" style="max-width: 18rem;">
				<div class="card-header">Datos RUPCOVA</div>
				<div class="card-body ">
					<h6 class="card-title">Número de Validación:@if (isset($infoProvedor[0]->Numero_Validacion))<span class="badge badge-info">{{$infoProvedor[0]->Numero_Validacion}}</span>
					@endif</h6>
					<h6 class="card-title">Número de Cédula:
						@if ($infoProvedor!=[])
						<span class="badge badge-info"> {{$infoProvedor[0]->Numero_Cedula}}</span>
						@endif
					</h6>

					<h6>Estatus de Cédula:
						@if ($infoProvedor!=[])
						@if ($infoProvedor[0]->Estatus_Cedula =='Vigente')
						<span class="badge badge-success">
							{{$infoProvedor[0]->Estatus_Cedula}}
						</span>
						@else
						<span class="badge badge-danger">
							{{$infoProvedor[0]->Estatus_Cedula}}
						</span>

						@endif
						@endif
					</h6>
					<h6>
						Fecha de Vigencia:
						@if ($infoProvedor!=[])
						<span class="badge badge-info">{{$solicitud->parseFecha($infoProvedor[0]->Fecha_Vigencia)}}</span>
						@endif
					</h6>

					<h6>
						Estatus del Registro
						@if ($infoProvedor!=[])
						<span class="badge badge-info">{{$infoProvedor[0]->Estatus_Registro}}</span>
						@endif
					</h6>


				</div>
			</div>
		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">


		<h6 class="m-0 font-weight-bold text-dark">Evaluaciones Seleccionadas</h6>
		<table class="table table-hover ">
			<thead>
				<tr class="text-center">
					<th scope="col">Año a evaluar</th>
					<th scope="col">Dependencia Participante</th>
					<th scope="col">Política Prorama a Evaluar</th>
					<th scope="col">Tipo Evaluación</th>
					<th scope="col">Estatus</th>
					<th scope="col-3">Acciones</th>
					{{-- <th scope="col">Firma Contrato</th> --}}
				</tr>
			</thead>
			<tbody>
				@foreach($postulaciones as $index =>$postula)
				<tr   @if ($postula->isAceptada()) class="bg-success text-white font-weight-bold text-center" @endif class="text-center">


					<td>{{$postula->evaluacion->ejercicio->año}}</td>
					<td>{{$postula->evaluacion->dependencia->nombre}}</td>
					<td>{{$postula->evaluacion->programa->nombre}}</td>
					<td>{{$postula->evaluacion->tipoEvaluacion->nombre}}</td>
					<td class="text-center">
						@if (Auth::user()->perfil->id !=5)
						@if ($solicitud->estatus!='rechazado')
						@if($postula->estatus==0)
						<span class="badge badge-danger">Rechazada</span>
						@else
						<span class="badge badge-success">Activa</span>
						@endif
					</td>
					<td class="text-center">
						@if($postula->estatus!='0' && $postula->lugar=='' )

						{{-- <a data-toggle="modal" data-target="#confirmacion{{$index}}" href="#confirmacion{{$index}}" class="btn btn-danger btn-sm hvr-box-shadow-outset">Rechazar</a> --}}
						<a class="btn btn-danger mt-1 btn-sm hvr-box-shadow-outset" href="{{ route('administrador.rechazar.solicitud.postula',$postula->id) }}">Rechazar</a>
					</a>

					@endif
					<a class="btn btn-info mt-1 btn-sm hvr-box-shadow-outset" data-toggle="modal" data-toggle="tooltip" data-placement="right" title="" href="{{ route('administrador.ver.documentacion',[$postula->id,$solicitud->id]) }}"  >
						Documentación
					</a>


					@if ($postula->estatus!='0')
					@if ($postula->lugar!='')
					<a class="btn btn-warning mt-1 btn-sm hvr-box-shadow-outset" data-toggle="modal" data-toggle="tooltip" data-placement="right" title="" href="{{ route('administrador.ver.programa.cita',$postula->id) }}"  >
						Editar cita
					</a>
					@else
					@if ($postula->evaluacionAsignada())
					<a class="btn btn-secondary mt-1 btn-sm disabled" data-toggle="modal" data-toggle="tooltip" data-placement="right" title="" href=""  >
						Evaluación Asignada
					</a>
					@else
					<a class="btn btn-success mt-1 btn-sm hvr-box-shadow-outset" data-toggle="modal" data-toggle="tooltip" data-placement="right" title="" href="{{ route('administrador.ver.programa.cita',$postula->id) }}"  >
						Aceptar Evaluación
					</a>
					@endif

					@endif
					@endif
					@else
					<a class="btn btn-info mt-1 btn-sm hvr-box-shadow-outset" data-toggle="modal" data-toggle="tooltip" data-placement="right" title="" href="{{ route('administrador.ver.documentacion',$postula->id) }}"  >
						Documentación
					</a>
					@endif
					@else
					<a class="btn btn-info mt-1 btn-sm hvr-box-shadow-outset" data-toggle="modal" data-toggle="tooltip" data-placement="right" title="" href="{{ route('administrador.ver.documentacion',$postula->id) }}"  >
						Documentación
					</a>
					@endif

				</td>
			{{-- @if ($postula->isAceptada())
				<td class="text-center ">
					<div class="form-check form-check-inline">
                        @if ($postula->firma_contrato==0)
                            <a href="" class="d-flex justify-content-center text-dark hvr-bounce-in" data-toggle="modal" data-target="#firma" data-datos="{{$postula}}"><i class="fas fa-clipboard-check fa-2x text-white"></i></a>
                        @else
                            <i class="fas fa-user-check fa-2x text-white"></i>
                        @endif

					</div>
				</td>
			@endif --}}
			</tr>


		</div>
		<!-- Modal -->
		<div class="modal fade" id="confirmacion{{$index}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">¿Estas Seguro de Rechazar la Evaluación: {{$postula->evaluacion->programa->nombre}}?</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						Una vez rechazada no podrás hacer modificaciones.
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
						@if(isset($solicitud))
						<a class="btn btn-primary" href="{{ route('administrador.desactivarUna.evaluacion',[$solicitud->id,$postula->id]) }}">Aceptar</a>
						@endif

					</div>
				</div>
			</div>
		</div>
		@include('usuarios.administrador.solicitudes.firmaContrato')
		{{--
			@section('script')
			<script type="text/javascript">
				$('#firma').on('show.bs.modal', function(e)
				{
					var postula = $(e.relatedTarget).data().datos;
					var user = new String('{{$postula->solicitud->user->nombre}}');

					console.log(postula);

					$('#firma_contrato').val(postula.firma_contrato);
					$('#dependencia').text(postula.evaluacion.dependencia.nombre);
					$('#programa').text(postula.evaluacion.programa.nombre);
					$('#tipo_evaluacion').text(postula.evaluacion.tipo_evaluacion.nombre);
					$('#user').text(user);
					$('#postula_id').val(postula.id);

				});
			</script>
			@endsection
			--}}
		@endforeach


	</tbody>
</table>
<hr>


<div class="row">
	<div class="col-md-12">
		<ul class="list-group">
			<li class="list-group-item active">Dcumentos Generales</li>

			@foreach ($documentos as $documento)

			<li class="list-group-item"><a href="{{asset('storage/'.$documento->ruta)}}" target="_blank">
				{{$documento->documento->catalago_documento->descripcion}}
			</a>
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
		{{-- Foreach de Dcumentos Generales --}}




	</ul>
</div>
<div class="col-md-9">
				{{--
				@if ($solicitud->estatus!='rechazado')
				<h6 class="m-0 font-weight-bold text-dark">Programar Cita</h6>
				<form method="POST" action="{{route('administrador.programarCita',$solicitud->id)}}">
					@method('POST')
					@csrf
					<div class="form-group row">
						<div class="col-md-12">
							<label>Fecha y Hora</label>

							<input type="datetime-local" name="fecha_hora" required="" value="{{$solicitud->cita}}" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-12">

							<input type="text" required="" name="lugar" class="form-control" value="{{$solicitud->lugar}}" placeholder="Lugar donde se deberá presentar">
						</div>
					</div>
					@if ($solicitud->lugar!='')
					<button class="btn btn-warning">Editar Cita</button>
					@else
					<button class="btn btn-warning">Programar Cita</button>
					@endif
				</form>
				@endif
				--}}
			</div>
		</div>

	</div>

	<!--aurome -->



	@if (Auth::user()->perfil->id!=5)
	@include('usuarios.administrador.solicitudes.editarDocumento')
	@include('usuarios.administrador.solicitudes.enviarCorreccion')

	@endif
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
			console.log(documento.id);
			$('#nombre_documento').text(documento.documento.catalago_documento.descripcion);
			$('#correccion1').val(documento.correccion);
			$('#id_documento_correccion').val(documento.id);
			$('#documento').val(documento.documento.catalago_documento.descripcion);
		});

    </script>
    <script src="{{ asset('js/dataTable.js')}}"></script>
	@endsection
