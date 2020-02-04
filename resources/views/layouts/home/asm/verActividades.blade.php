@extends('layouts.app')
@section('content')

<h5 class="text-center mt-4">Aspectos Susceptibles de Mejora {{$asm->ejercicio->año}}</h5>
<div class="card shadow m-4">
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark"> Programa:{{$asm->evaluacion->programa->nombre}} </h6>
		<div class="dropdown no-arrow">
			<a href="{{route('asmDepAsm',Crypt::encrypt($asm->evaluacion->id))}}" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-angle-left"></i> Regresar</a>
		</div>
	</div>
    <div class="row">
        <div class="col-10 text-right mt-1"><h6 class="mt-4">Parametros de semaforización: </h6></div>
        <div class="col-2  mt-1"><p class="badge mt-4 mr-3 badge-danger">BAJO</p><p class="badge mt-3 mr-3 badge-warning">MEDIO</p><p class="badge mt-3 mr-3 badge-success">ALTO</p></div>
    </div>
	<!-- Card Body -->
	<div class="card-body">
		<!-- Card Header - Dropdown -->

		<div class="table-responsive">
			<strong>Asm:</strong>{{$asm->asm}}
			<br>
			<div class="progress">
                <div class="progress-bar @if($asm->porcentajeAsm() < 39) bg-danger @elseif($asm->porcentajeAsm() > 39 && $asm->porcentajeAsm() < 79) bg-warning @elseif($asm->porcentajeAsm() > 79) bg-success @endif" role="progressbar" style="width: {{ $asm->porcentajeAsm() }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    {{ $asm->porcentajeAsm() }}%
                </div>
			</div>

            <strong>Clasificación:</strong><span class="badge badge-success">Asm {{$asm->aspecto->nombre}}</span>
            <hr>



			<table width="100%" style="background-color: #FFFFFF;" class="table-bordered table-sm bg-gray-100">

				<tr class="text-center bg-gray-800 text-white" style="background-color: #212529;">

					<th width="30%">Actividades</th>
					<th width="5%">Ponderación</th>
					<th width="8%">Fecha Término</th>
					<th>Avances</th>
				</tr>

				@foreach ($asm->actividades as $actividad)
                    <tr style="font-size: 11px; background-color: #F8F9FC;" >

						<td class="text-center font-weight-bold"> {{$actividad->actividad}} </td>
						<td class="text-center font-weight-bold">{{$actividad->ponderacion}}%</td>
						<td class="text-center">{{$actividad->fecha_termino}}</td>

						<td>
							<table width="100%"  class="table-hover bg-white">
								<tr class="text-center bg-gray-600 text-white" style="background-color: #343A40;">
                                    <th>Estatus</th>
                                    <th>Observación</th>
									<th>Evidencia</th>
									<th>Fecha</th>
									<th>% Avance</th>
								</tr>
								@foreach ($actividad->avance as $avance)
									<tr class="text-center" style="background-color: #eceff1;">
                                        <td>{{$avance->estatus->estatus}}</td>
                                        <td>{{ $avance->observacion }} </td>
										<td><a target="_blank" href="{{ asset('storage/'.$avance->documento_probatorio) }}">Evidencia</a></td>
										<td>{{ $avance->created_at->diffForHumans() }}</td>
										<td >
											<div class="progress" style="background-color: #babdbe;">
                                                <div class="progress-bar bg-danger font-weight-bold" role="progressbar" style="width: {{ $avance->porcentaje_avance }}%; " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    {{ $avance->porcentaje_avance }}%
                                                </div>
											</div>
                                        </td>
									</tr>
								@endforeach

							</table>
						</td>
					</tr>
					<tr style="background-color: #FFFFFF;">
						<td colspan="2" class="text-right font-weight-bold" style="background-color: #F8F9FC">Total</td>
						<td colspan="">
                            <div class="progress">
                                <div class="progress-bar @if($actividad->cantidadAvance() < 39) bg-danger @elseif($actividad->cantidadAvance() > 39 && $actividad->cantidadAvance() < 79) bg-warning @elseif($actividad->cantidadAvance() > 79) bg-success @endif font-weight-bold" role="progressbar" style="width: {{ $actividad->cantidadAvance()}}%; background-color: #babdbe;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
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

@endsection
