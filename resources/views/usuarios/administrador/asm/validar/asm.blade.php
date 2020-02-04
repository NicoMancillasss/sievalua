@extends('usuarios.administrador.layouts.main')
@section('status3','show')
@section('link7','active')
@section('content')

<h5 class="text-center">Aspectos Susceptibles de Mejora {{$evaluacion->ejercicio->año}} </h5>
<h4 class="text-center">{{$evaluacion->dependencia->nombre}}</h4>
<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">ASM</h6>
		<div class="dropdown no-arrow">
			<a href="{{route('administrador.asm.dependencia',$evaluacion->ejercicio_id)}}" class="btn btn-info btn-sm hvr-box-shadow-outset">Dependencias</a>
			<a class="btn btn-warning btn-sm hvr-box-shadow-outset" href="" data-toggle="modal" data-target="#inhabilitar"  data-datos="" >
				Cerrar Todos los Asm
			</a>
		</div>
	</div>


	<!-- Card Body -->
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered table-sm text-center">
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
                        <th class="align-middle">Estatus</th>
                        <th class="align-middle">Tipo Evaluacion</th>
						<td class="align-middle">Enero</td>
						<td class="align-middle">Feberero</td>
						<td class="align-middle">Marzo</td>
						<td class="align-middle">Abril</td>
						<td class="align-middle">Mayo</td>
						<td class="align-middle">Junio</td>
						<td class="align-middle">Julio</td>
						<td class="align-middle">Agosto</td>
						<td class="align-middle">septiembre</td>
						<td class="align-middle">octubre</td>
						<td class="align-middle">Noviembre</td>
						<td class="align-middle">Diciembre</td>
						<td class="align-middle">Acciones</td>


					</tr>
				</thead>
				<tbody>
					@foreach($asm as $as)
					<tr class="" style="font-size: 10px;">
						<td class="align-middle">{{$loop->iteration}}</td>
						<td class="align-middle">{{$as->programa}}</td>
						<td class="align-middle">
							@if($as->estatus_id==1)
							<span class="badge badge-danger">{{$as->estatus}}</span>
							@elseif($as->estatus_id==2)
							<span class="badge badge-warning">{{$as->estatus}}</span>
							@elseif($as->estatus_id==3)
							<span class="badge badge-success">{{$as->estatus}}</span>
							@else
							<span class="badge badge-primary">Sin concluir su redacción</span>
							@endif


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
							@if (Auth::user()->perfil->id!=5)

							@if($as->estatus_id==1)
							<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Aceptar Asm">
								<a class="btn btn-success btn-sm hvr-box-shadow-outset mb-2" href=""  data-toggle="modal" data-target="#aceptar"  data-datos="{{collect($as)}}" >
									<i class="fas fa-vote-yea"></i>
								</a>
							</span>

							<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Enviar Asm a corrección">
								<a class="btn btn-warning btn-sm hvr-box-shadow-outset mb-2" href="" data-toggle="modal" data-target="#correcciones"  data-datos="{{collect($as)}}" >
									<i class="fas fa-edit"></i>
								</a>
							</span>
							@endif
							@if($as->estatus_id==2)
							<a class="btn btn-warning btn-sm hvr-box-shadow-outset mb-2" href="" data-toggle="modal" data-target="#correcciones"  data-datos="{{collect($as)}}" >
								Editar Corrección
							</a>
							@endif
							@if($as->estatus_id==3 && $as->activo==1)
								<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Desactivar Asm">
									<a class="btn btn-danger btn-sm hvr-box-shadow-outset mb-2" href="{{route('administrador.valida.dependencia.asm.desactivado',['desactivar',$as->id])}}" >
										<i class="fas fa-minus-circle"></i>
									</a>
								</span>
							@endif
							<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Activar Asm">
								@if($as->estatus_id==3 && $as->activo==0)
									<a class="btn btn-success btn-sm hvr-box-shadow-outset mb-2" href="{{route('administrador.valida.dependencia.asm.desactivado',['activar',$as->id])}}"   >
										<i class="fas fa-clipboard-check"></i>
									</a>
								@endif
							</span>
							@endif
							<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Ver Asm">
									<a data-toggle="modal" data-target="#verAsmm" data-datos="{{--$as--}}" class="btn btn-info btn-sm hvr-box-shadow-outset mb-2" href="{{--route('administrador.valida.dependencia.asm.desactivado',['activar',$as->id])--}}"   >
										<i class="fas fa-search"></i>
									</a>
							</span>
							<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Actividades {{--$as->actividades->count() --}}">
									<a class="btn btn-primary btn-sm hvr-box-shadow-outset mb-2" href="{{ route('administrador.asm.actividades',[$as->id]) }}">
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

<div class="container">
    <svg id="gantt"></svg>
</div>

@include('usuarios.administrador.asm.validar.aceptar')
@include('usuarios.administrador.asm.validar.correcciones')
@include('usuarios.administrador.asm.validar.inhablilitar')
@include('usuarios.administrador.asm.validar.verAsm')
@endsection
@section('script')
<script type="text/javascript">
	$('#aceptar').on('show.bs.modal', function(e) {
		var asm = $(e.relatedTarget).data().datos;
		console.log(asm);
		$('#text_asm').text(asm.asm);
		$('#asm_id').val(asm.id);


	});

	$('#correcciones').on('show.bs.modal', function(e) {
		var asm = $(e.relatedTarget).data().datos;
		console.log(asm);
		$('#correccion_asm').text(asm.asm);
		$('#correccion_asm_id').val(asm.id);
		if (  asm.correcciones !='Ninguna') {
			console.log(asm.correcciones);
			$('#correccion').val(asm.correcciones);
		}


	});


	$('#verAsmm').on('show.bs.modal', function(e) {
		var asm = $(e.relatedTarget).data().datos;
		console.log(asm);
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

	$('#inhabilitar').on('show.bs.modal', function(e) {
	});

    var tasks = [
    {
        id: 'Task 1',
        name: 'Redesign website',
        start: '2016-12-28',
        end: '2016-12-31',
        progress: 20,
        dependencies: 'Task 2, Task 3'
    }
    ]
    var gantt = new Gantt("#gantt", tasks, {
        header_height: 50,
        column_width: 30,
        step: 24,
        view_modes: ['Quarter Day', 'Half Day', 'Day', 'Week', 'Month'],
        bar_height: 20,
        bar_corner_radius: 3,
        arrow_curve: 5,
        padding: 18,
        view_mode: 'Week',
        date_format: 'DD-MM-YYYY'
    });



</script>
@endsection
