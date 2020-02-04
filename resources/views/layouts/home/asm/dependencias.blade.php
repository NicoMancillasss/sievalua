@extends('layouts.app')
@section('content')

<h5 class="text-center m-4">Aspectos Susceptibles de Mejora {{$evaluacion->ejercicio->año}} </h5>
<h4 class="text-center">{{$evaluacion->dependencia->nombre}}</h4>
<div class="card shadow m-4">
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">ASM</h6>
        <div class="dropdown no-arrow">
			<a href="{{route('asmDetalles',Crypt::encrypt($evaluacion->ejercicio->id))}}" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-angle-left"></i> Regresar</a>
		</div>
	</div>


	<!-- Card Body -->
	<div class="card-body mt-3 mb-5">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-sm text-center">
				<thead class="thead-dark">
					<tr>
						<th colspan="4"></th>
						<th class="text-center" colspan="12">Meses
							<span class="badge badge-success mr-3">Fecha de inicio de asm</span> <span class="badge badge-danger">Fecha de fin de asm</span>
                        </th>
                        <th></th>
					</tr>
					<tr>
						<th class="align-middle">No.</th>
						<th class="align-middle">Programa</th>
                        <th class="align-middle">Avance General</th>
                        <th class="align-middle">Tipo Evaluacion</th>
						<td class="align-middle font-weight-bold" style="background-color: #babdbe">Enero</td>
						<td class="align-middle font-weight-bold" style="background-color: #babdbe">Feberero</td>
						<td class="align-middle font-weight-bold" style="background-color: #babdbe">Marzo</td>
						<td class="align-middle font-weight-bold" style="background-color: #babdbe">Abril</td>
						<td class="align-middle font-weight-bold" style="background-color: #babdbe">Mayo</td>
						<td class="align-middle font-weight-bold" style="background-color: #babdbe">Junio</td>
						<td class="align-middle font-weight-bold" style="background-color: #babdbe">Julio</td>
						<td class="align-middle font-weight-bold" style="background-color: #babdbe">Agosto</td>
						<td class="align-middle font-weight-bold" style="background-color: #babdbe">septiembre</td>
						<td class="align-middle font-weight-bold" style="background-color: #babdbe">octubre</td>
						<td class="align-middle font-weight-bold" style="background-color: #babdbe">Noviembre</td>
						<td class="align-middle font-weight-bold" style="background-color: #babdbe">Diciembre</td>
						<td class="align-middle font-weight-bold text-white" style="background-color: #212529">Acciones</td>


					</tr>
				</thead>
				<tbody>
					@foreach($asm as $as)
					<tr class="" style="font-size: 10px;">
						<td class="align-middle">{{$loop->iteration}}</td>
						<td class="align-middle">{{$as->programa}}</td>
						<td class="align-middle">
							{{-- <div class="progress">
                                <div class="progress-bar @if($as->porcentajeAsm() < 39) bg-danger @elseif($as->porcentajeAsm() > 39 && $as->porcentajeAsm() < 79) bg-warning @elseif($as->porcentajeAsm() > 79) bg-success @endif" role="progressbar" style="width: {{ $as->porcentajeAsm() }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    {{ $as->porcentajeAsm() }}%
                                </div>
                            </div> --}}
                        </td>
                        <td class="align-middle">{{$as->tipo_evaluacion}}</td>

                        <td class="align-middle {{ substr($as->fecha_termino,5,2) === ('01') ? 'bg-danger' : '' }} {{ substr($as->created_at,5,2) === ('01') ? 'bg-success' : '' }} text-white ">{{ substr($as->fecha_termino,5,2) === ('01') ? $as->fecha_termino : '' }} {{ substr($as->created_at,5,2) === ('01') ? $as->created_at : '' }}</td>

						<td class="align-middle {{ substr($as->fecha_termino,5,2) === ('02') ? 'bg-danger' : '' }} {{ substr($as->created_at,5,2) === ('02') ? 'bg-success' : '' }} text-white ">{{ substr($as->fecha_termino,5,2) === ('02') ? $as->fecha_termino : '' }} {{ substr($as->created_at,5,2) === ('02') ? $as->created_at : '' }}</td>

						<td class="align-middle {{ substr($as->fecha_termino,5,2) === ('03') ? 'bg-danger' : '' }} {{ substr($as->created_at,5,2) === ('03') ? 'bg-success' : '' }} text-white ">{{ substr($as->fecha_termino,5,2) === ('03') ? $as->fecha_termino : '' }} {{ substr($as->created_at,5,2) === ('03') ? $as->created_at : '' }}</td>

						<td class="align-middle {{ substr($as->fecha_termino,5,2) === ('04') ? 'bg-danger' : '' }} {{ substr($as->created_at,5,2) === ('04') ? 'bg-success' : '' }} text-white ">{{ substr($as->fecha_termino,5,2) === ('04') ? $as->fecha_termino : '' }} {{ substr($as->created_at,5,2) === ('04') ? $as->created_at : '' }}</td>

						<td class="align-middle {{ substr($as->fecha_termino,5,2) === ('05') ? 'bg-danger' : '' }} {{ substr($as->created_at,5,2) === ('05') ? 'bg-success' : '' }} text-white ">{{ substr($as->fecha_termino,5,2) === ('05') ? $as->fecha_termino : '' }} {{ substr($as->created_at,5,2) === ('05') ? $as->created_at : '' }}</td>

						<td class="align-middle {{ substr($as->fecha_termino,5,2) === ('06') ? 'bg-danger' : '' }} {{ substr($as->created_at,5,2) === ('06') ? 'bg-success' : '' }} text-white ">{{ substr($as->fecha_termino,5,2) === ('06') ? $as->fecha_termino : '' }} {{ substr($as->created_at,5,2) === ('06') ? $as->created_at : '' }}</td>

						<td class="align-middle {{ substr($as->fecha_termino,5,2) === ('07') ? 'bg-danger' : '' }} {{ substr($as->created_at,5,2) === ('07') ? 'bg-success' : '' }} text-white ">{{ substr($as->fecha_termino,5,2) === ('07') ? $as->fecha_termino : '' }} {{ substr($as->created_at,5,2) === ('07') ? $as->created_at : '' }}</td>

						<td class="align-middle {{ substr($as->fecha_termino,5,2) === ('08') ? 'bg-danger' : '' }} {{ substr($as->created_at,5,2) === ('08') ? 'bg-success' : '' }} text-white ">{{ substr($as->fecha_termino,5,2) === ('08') ? $as->fecha_termino : '' }} {{ substr($as->created_at,5,2) === ('08') ? $as->created_at : '' }}</td>

						<td class="align-middle {{ substr($as->fecha_termino,5,2) === ('09') ? 'bg-danger' : '' }} {{ substr($as->created_at,5,2) === ('09') ? 'bg-success' : '' }} text-white ">{{ substr($as->fecha_termino,5,2) === ('09') ? $as->fecha_termino : '' }} {{ substr($as->created_at,5,2) === ('09') ? $as->created_at : '' }}</td>

						<td class="align-middle {{ substr($as->fecha_termino,5,2) === ('10') ? 'bg-danger' : '' }} {{ substr($as->created_at,5,2) === ('10') ? 'bg-success' : '' }} text-white ">{{ substr($as->fecha_termino,5,2) === ('10') ? $as->fecha_termino : '' }} {{ substr($as->created_at,5,2) === ('10') ? $as->created_at : '' }}</td>

						<td class="align-middle {{ substr($as->fecha_termino,5,2) === ('11') ? 'bg-danger' : '' }} {{ substr($as->created_at,5,2) === ('11') ? 'bg-success' : '' }} text-white ">{{ substr($as->fecha_termino,5,2) === ('11') ? $as->fecha_termino : '' }} {{ substr($as->created_at,5,2) === ('11') ? $as->created_at : '' }}</td>

						<td class="align-middle {{ substr($as->fecha_termino,5,2) === ('12') ? 'bg-danger' : '' }} {{ substr($as->created_at,5,2) === ('12') ? 'bg-success' : '' }} text-white ">{{ substr($as->fecha_termino,5,2) === ('12') ? $as->fecha_termino : '' }} {{ substr($as->created_at,5,2) === ('12') ? $as->created_at : '' }}</td>
						<td class="text-center align-middle">
							{{-- <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Ver Asm">
									<a data-toggle="modal" data-target="#verAsmm" data-datos="{{ $as }}" class="btn btn-info btn-sm hvr-box-shadow-outset mb-2" href="route('administrador.valida.dependencia.asm.desactivado',['activar',$as->id])"   >
										<i class="fas fa-search"></i>
									</a>
                            </span> --}}
							<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Actividades {{--$as->actividades->count() --}}">
									<a class="btn btn-primary btn-sm hvr-box-shadow-outset mb-2" href="{{ route('asmActividades',Crypt::encrypt($as->id)) }}"   >
										<i class="fas fa-list"></i>
									</a>
							</span>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>

		</div>
	</div>
</div>
@include('layouts.home.asm.verAsm')
@endsection

@section('script')
<script>
    $('#verAsmm').on('show.bs.modal', function(e) {
		var asm = $(e.relatedTarget).data().datos;

		console.log(asm. "gasd");

        $('#asmVerr').text(asm.asm);
        $('#asmDocumentoRef').text(asm.documento_referencia);
        $('#asmEstatus').text(asm.estatus);
        $('#asmEvaluacion').text(asm.tipo_evaluacion);
        $('#asmEvidencia').text(asm.evidencia);
        $('#asmJustificacionAccion').text(asm.justificacion_accion);
        $('#asmPrioridadJustificacion').text(asm.prioridad_justificacion);
        $('#asmRecomendacion').text(asm.recomendacion);
        $('#asmResultadosEsperados').text(asm.resultados_esperados);
	});

</script>
@endsection
