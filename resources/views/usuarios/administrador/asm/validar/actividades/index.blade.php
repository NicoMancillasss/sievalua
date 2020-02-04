@extends('usuarios.administrador.layouts.main')
@section('status3','show')
@section('link7','active')
@section('content')

<h5 class="text-center">Aspectos Susceptibles de Mejora {{$asm->ejercicio->año}}</h5>
<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark"> Programa:{{$asm->evaluacion->programa->nombre}} </h6>
		<div class="dropdown no-arrow">
			<a href="{{route('administrador.asm.dependencia.asm',$asm->evaluacion_id)}}" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-angle-left"></i> Regresar</a>
		</div>
	</div>

	<!-- Card Body -->
	<div class="card-body">
		<!-- Card Header - Dropdown -->

		<div class="table-responsive">
			<strong>Asm:</strong>{{$asm->asm}}
			<br>
			<div class="progress">
  				<div class="progress-bar bg-success" role="progressbar" style="width: {{ $asm->porcentajeAsm() }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  					{{ $asm->porcentajeAsm() }}%
  				</div>
			</div>

            <strong>Clasificación:</strong><span class="badge badge-success">Asm {{$asm->aspecto->nombre}}</span>
            <hr>



			<table width="100%" class="table-bordered table-sm bg-gray-100">

				<tr class="text-center bg-gray-800 text-white">

					<th width="30%">Actividades</th>
					<th width="5%">Ponderación</th>
					<th width="8%">Fecha Término</th>
					<th>Avances</th>
				</tr>

				@foreach ($asm->actividades as $actividad)
                    <tr style="font-size: 11px">

						<td class="text-justify"> {{$actividad->actividad}} </td>
						<td class="text-center">{{$actividad->ponderacion}}%</td>
						<td class="text-center">{{$actividad->fecha_termino}}</td>

						<td>
							<table width="100%"  class="table-hover bg-white">
								<tr class="text-center bg-gray-600 text-white">
									<th>Estatus</th>
									<th>Observación</th>
									<th>Evidencia</th>
									<th>Fecha</th>
									<th>% Avance</th>
									<td>Acciones</td>
								</tr>
								@foreach ($actividad->avance as $avance)
									<tr class="{{$avance->estatus->estatus=='corrección'? 'text-center alert-danger text-dark' : ''}}">
										<td>{{$avance->estatus->estatus}}</td>
										<td>{{ $avance->observacion }} </td>
										<td><a href="{{ asset('storage/'.$avance->documento_probatorio) }}">Evidencia</a></td>
										<td>{{ $avance->created_at->diffForHumans() }}</td>
										<td>
											<div class="progress">
  												<div class="progress-bar bg-danger" role="progressbar" style="width: {{ $avance->porcentaje_avance }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  													{{ $avance->porcentaje_avance }}%
  												</div>
											</div>
                                        </td>
                                        <td class="text-center">
											@if (Auth::user()->perfil->id!=5)
												@if ( $avance->estatus_id ==1 )
													<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Aceptar Avance">
															<a class="btn btn-success btn-sm hvr-box-shadow-outset mb-2" href=""  data-toggle="modal" data-target="#aceptar"  data-datos="{{$avance}}" >
																<i class="fas fa-vote-yea"></i>
															</a>
														</span>
													@elseif($avance->estatus_id ==3)
														<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Revocar Avance">
														<a class="btn btn-danger btn-sm hvr-box-shadow-outset mb-2" href=""  data-toggle="modal" data-target="#aceptar"  data-datos="{{$avance}}" >
															<i class="fas fa-vote-yea"></i>
														</a>
													</span>
													@endif

												@if ($avance->estatus_id != 3)
													<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title=" {{$avance->estatus_id == '2' ? 'Enviar corrección' : 'Enviar a corrección'}} ">
														<a class="btn btn-warning btn-sm hvr-box-shadow-outset mb-2" href="" data-toggle="modal" data-target="#correcciones"  data-datos="{{$avance}}" >
															<i class="fas fa-edit"></i>
														</a>
													</span>

												@endif
											@endif
										</td>
									</tr>
								@endforeach

							</table>
						</td>
					</tr>
					<tr>
						<td colspan="2" class="text-right">Total</td>
						<td colspan="">
							<div class="progress">
  								<div class="progress-bar bg-primary" role="progressbar" style="width: {{ $actividad->cantidadAvance()}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    {{ $actividad->cantidadAvance() }}%
  								</div>
							</div>
						</td>
					</tr>
				@endforeach
			</table>



		</div>
	</div>





</div>
@include('usuarios.administrador.asm.validar.actividades.correcciones')
@include('usuarios.administrador.asm.validar.actividades.aceptar')
@endsection
@section('script')
	<script  type="text/javascript">



		$('#aceptar').on('show.bs.modal', function(e) {
			var avance = $(e.relatedTarget).data().datos;
			$("#avance_id").val(avance.id);



		});
		$('#correcciones').on('show.bs.modal', function(e) {
			var avance = $(e.relatedTarget).data().datos;
			$("#correccion_avance_id").val(avance.id);
			console.log(avance);


		});
	</script>
@endsection

