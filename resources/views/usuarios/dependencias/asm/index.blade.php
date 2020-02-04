@extends('usuarios.dependencias.layouts.main')
@section('status','show')
@section('link','active')
@section('content')
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('dependencia.home') }}">Portafolio</a></li>
		<li class="breadcrumb-item"><a href="{{ route('dependencia.ejercicio.programas',$evaluacion->ejercicio_id) }}">Programas</a></li>
		<li class="breadcrumb-item active" aria-current="page">Asm</li>
	</ol>
</nav>



<h5 class="text-center">Aspectos Susceptibles de Mejora {{$evaluacion->ejercicio->año}}</h5>
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark"> Programa: {{$evaluacion->programa->nombre}}</h6>
		<div class="dropdown no-arrow">
			@if($evaluacion->activo==1)
			<a  href="{{ route('dependencia.ejercicio.programa.asm.crear',$evaluacion) }}"
			class="btn btn-info btn-sm hvr-box-shadow-outset mb-2">
			<i class="fas fa-plus"></i> Crear Asm
		</a>
		@endif
		<a href="{{ route('dependencia.ejercicio.programas',$evaluacion->ejercicio_id) }}"
			class="btn btn-info btn-sm hvr-box-shadow-outset mb-2">
			<i class="fas fa-angle-left"></i> Programas
		</a>
	</div>
</div>
<!-- Card Body -->
<div class="card-body">

	<div class="alert alert-info text-center" role="alert">
		<h4 class="alert-heading">¡Estos son los Aspectos Susceptibles de Mejora(ASM) que iras cargando conforme a la evaluación del programa!</h4>
		<p>
			Puedes crear todos los ASM que tu creas convenientes, una vez creado cada uno automáticamente se pondrá en un estatus de <span class="badge badge-danger">revisión</span>.
			Una vez aprobado el ASM por la Dirección... cambiará el estatus a <span class="badge badge-success">Aceptado</span> y podrás cargar sus respectivas actividades.
		</p>
	</div>

	<h5><strong>Aspectos Susceptibles de Mejora Cargados</strong></h5>
	<div class="table-responsive">
		<table class="table table-bordered table-sm text-center">
			<thead class="thead-dark">
				<tr class=" ">
					<th scope="col" class="align-middle">Id</th>
					<th width="30%" class="align-middle">Asm</th>
					<th class="align-middle">Estatus</th>
					{{--<th class="align-middle">Recomendación</th>--}}
					<th class="align-middle">Documento Probatorio</th>
					<th class="align-middle">Porcentaje de Cumplimiento</th>

					<th></th>

				</tr>
			</thead>
			<tbody>
				@forelse($asm as $as)
                    @if( $as->estatus_id==2 &&$as->correcciones !='Ninguno')
                    <td colspan="13">
                        <div class="alert alert-danger" role="alert">
                            <strong>¡Corrección!</strong>  El Asm con id:{{$as->id}} Tiene Correcciones.
                            <pre>{{$as->correcciones}}</pre>
                        </div>
                    </td>
                    @endif
                    <tr class="text-center" style="font-size: 12px;">
                        <td class="align-middle">{{$as->id}}</td>
                        <td class="align-middle">
                            <p class="text-center">{{$as->asm}}</p>
                        </td>
                        <td class="align-middle">
                            @if($as->estatus_id==1)
                            <span class="badge badge-danger">{{$as->estatus->estatus}}</span>
                            @elseif($as->estatus_id==2)
                            <span class="badge badge-warning">{{$as->estatus->estatus}}</span>
                            @elseif($as->estatus_id==3)
                            <span class="badge badge-success">{{$as->estatus->estatus}}</span>
                            @elseif($as->estatus_id==4)
                            <span class="badge badge-info">{{$as->estatus->estatus}}</span>
                            @endif

                        </td>
                        {{--
                            <td>
                                <p>{{$as->recomendacion}}</p>
                            </td>
                        --}}
                        <td class="text-center align-middle">
                            @if ($as->porcentaje_asm==100)
                            <!--Formulario para subir el documento probatorio cuando el Asm llegue a su 100% -->
                                @if ($as->documento_probatorio != '')
                                    <a href="{{ asset('storage/'.$as->documento_probatorio) }}">Documento Probatorio</a>
                                @else
                                    <a href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#documentoProbatorio" data-datos="{{$as}}" > {{$as->documento_probatorio !='' ? 'Ver' : 'Subir'}} Documento Probatorio</a>
                                @endif

                            @else
                            <p class="text-center" >Al completar el 100% del Asm se habilitará el campo para el documento probatorio</p>
                            @endif
                        </td>

                        <td class="align-middle">

                            <div class="progress">
                                <div class="progress-bar @if($as->porcentaje_asm < 39) bg-danger @elseif($as->porcentaje_asm > 40 && $as->porcentaje_asm < 79) bg-warning @elseif($as->porcentaje_asm > 80) bg-success @endif" role="progressbar" style="width: {{$as->porcentaje_asm}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$as->porcentaje_asm}} % </div>
                            </div>
                        </td>

                            <td class="text-center">
                                <span class="d-inline-block" tabindex="0" >
                                    <a href="{{ route('dependencia.programa.asm.acciones.asm',[$as->id,$evaluacion]) }}"
                                        class="btn btn-success btn-sm hvr-box-shadow-outset mb-2"
                                        data-toggle="tooltip" title="Actividades {{$as->actividades->count()}}">
                                        <i class="fas fa-list"></i>
                                    </a>
                                </span>

                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Ver Asm">
                                    <a href="{{ route('dependencia.programa.asm.acciones.detalles',[$as,$evaluacion]) }}" class="btn btn-info btn-sm hvr-box-shadow-outset mb-2"><i class="fas fa-search"></i></a>
                                </span>

                                @if($as->estatus_id==3 && $as->activo ==1)
                                {{--  <a href="{{ route('dependencia.programa.asm.acciones.asm',[$as->id,$evaluacion]) }}" class="btn btn-success btn-sm">Actividades {{$as->actividades->count()}}</a> --}}
                                @endif

                                @if(($as->estatus_id==4 || $as->estatus_id==2))
                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Asm">
                                    <a href="{{ route('dependencia.asm.edit',[Crypt::encrypt($as->id),$evaluacion]) }}" class="btn btn-warning btn-sm hvr-box-shadow-outset mb-2"><i class="fas fa-pen"></i></a>
                                </span>


                                @if ($as->actividades->sum('ponderacion')==100)
                                <a class="btn btn-info btn-sm hvr-box-shadow-outset" href="" data-toggle="modal" data-target="#revision"   data-datos="{{$as}}" >
                                    <i class="fas fa-paper-plane"></i> Enviar a Revisión
                                </a>
                                @endif

                                @endif
                                {{--
                                    @if($as->estatus_id==2)
                                    <a href="{{ route('dependencia.asm.edit',[$as->id,$evaluacion]) }}" class="btn btn-warning btn-sm">Corregir Asm</a>
                                    @endif
                                    --}}

                                </td>
                            </tr>
						@empty
						<tr>
							<td colspan="7">Ningún Asm creado</td>
						</tr>
						@endforelse
					</tbody>
				</table>


			</div>
			<div id="accordion">
				<div class="card ">
					<div class="card-header text-white  bg-primary" id="headingOne">
						<h5 class="mb-0">
							<button class="btn text-white " data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Ver Hallazgos recomendados por el despacho
							</button>
						</h5>
					</div>

					<div id="collapseOne" class="collapse show " aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">

							<ul class="list-group">

								<table class="table table-responsive w-100 d-block d-md-table">
									<thead class="thead-dark">
										<tr class="text-center">
											<th scope="col">#</th>
											<th scope="col">Asm</th>
                                            <th scope="col">Recomendado por</th>
                                            <th scope="col">Accion</th>
                                            <th scope="col">Prioridad</th>
											<th scope="col">Acciones</th>
										</tr>
									</thead>
									<tbody>
										@forelse ($asm_recomendados as $recomendado)
										<tr class="text-center">
											<td>{{ $loop->iteration }}          </td>
											<td>{{ $recomendado->asm }}         </td>
                                            <td>{{ $recomendado->user->nombre }}</td>
                                            <td>@isset( $recomendado->accion){{ $recomendado->accion->nombre}} @endisset</td>
                                            <td>@isset( $recomendado->prioridad->nombre) {{ $recomendado->prioridad->nombre}}@endisset</td>
											<td>
                                                <a data-toggle="modal" data-target="#verAsm" data-datos="{{$recomendado}}" href="">
													<span class="badge badge-primary badge-pill"><i class="fas fa-search"></i> Ver</span>
												</a>
												@if (!in_array($recomendado->id,$engloba->pluck('engloba_asm_id')->toArray()))
												<a href="{{route('dependencia.asm.cargar',[$recomendado->id,$evaluacion->id])}}">
													<span class="badge badge-success badge-pill"><i class="fas fa-hand-paper"></i> Tomar</span>
												</a>
												@endif
											</td>
										</tr>
										@empty
										<tr class="text-center">
											<td colspan="6"><h2 class="m-5">Ningún Hallazgo</h2></td>
										</tr>
										@endforelse

									</tbody>
								</table>

							</ul>

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>



	@include('usuarios.dependencias.asm.enviarRevision')
	@include('usuarios.dependencias.asm.verAsm')
	@include('usuarios.dependencias.asm.documentoProbatorio')

	@endsection

	@section('script')
	<script type="text/javascript">
		$('#revision').on('show.bs.modal', function(e) {
			var asm = $(e.relatedTarget).data().datos;
			console.log(asm);
			$('#text_asm').text(asm.asm);
			$('#asm_id').val(asm.id);
		});
		$(document).on('change','input[type="file"]',function(){
			var fileSize = this.files[0].size;
			if(fileSize > 10000000){
				alert('El archivo no debe superar los 10MB');
			$('input[type="file"]').val('');
			var tpl = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Holy guacamole!</strong> El archivo no debe superar los 5MB'
			+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> '
			+'</div>';
			$('.contenedor').html(tpl)
			}
		});
        $('#verAsm').on('show.bs.modal', function(e)
        {
            var recomendado = $(e.relatedTarget).data().datos;
            $('#asmVer').text(recomendado.asm);
            $('#asmJustificacionAccion').text(recomendado.justificacion_accion);
            $('#asmJustificacionPrioridad').text(recomendado.prioridad_justificacion);
            $('#asmRecomendacion').text(recomendado.recomendacion);
            console.log(recomendado);
	    });
		$('#documentoProbatorio').on('show.bs.modal', function(e)
        {
            var asm = $(e.relatedTarget).data().datos;
            $('#documento_asm_id').val(asm.id);
		});
/*
	$("table").tableExport({
		formats: ["xlsx","txt", "csv"], //Tipo de archivos a exportar ("xlsx","txt", "csv", "xls")
		position: 'button',  // Posicion que se muestran los botones puedes ser: (top, bottom)
		bootstrap: true,//Usar lo estilos de css de bootstrap para los botones (true, false)
		fileName: "Listado",    //Nombre del archivo
	});
	*/
	</script>
	@endsection
