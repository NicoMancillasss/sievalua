@extends('usuarios.dependencias.layouts.main')
@section('status','show')
@section('link','active')
@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('dependencia.home') }}">Portafolio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('dependencia.ejercicio.programas',$evaluacion->ejercicio_id) }}">Programas</a></li>
    <li class="breadcrumb-item" ><a href="{{ route('dependencia.ejercicio.programa.asm',[Crypt::encrypt($asm->ejercicio_id),Crypt::encrypt($evaluacion->id)]) }}">Asm</a></li>
    <li class="breadcrumb-item active" aria-current="page">Actividades</li>
  </ol>
</nav>
<h5 class="text-center">Aspectos Susceptibles de Mejora {{$asm->ejercicio->año}}</h5>
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark"> Programa:{{$asm->evaluacion->programa->nombre}} </h6>
		<div class="dropdown no-arrow">
			<a href="{{ route('dependencia.ejercicio.programa.asm',[Crypt::encrypt($asm->ejercicio_id),Crypt::encrypt($evaluacion->id)]) }}" class="btn btn-info btn-sm hvr-box-shadow-outset mt-1"><i class="fas fa-angle-left"></i> Asm</a>

			@if($asm->estatus_id ==1 || $asm->estatus_id ==4)
				<a href=""data-toggle="modal" data-target="#crear" class="btn btn-info btn-sm hvr-box-shadow-outset mt-1"> <i class="fas fa-plus"></i> Agregar Actividad</a>
				@if ($asm->actividades->sum('ponderacion')==100 && $asm->estatus_id== 4 )
					<a class="btn btn-info btn-sm hvr-box-shadow-outset mt-1" href="" data-toggle="modal" data-target="#revision"   data-datos="{{$asm}}" >
								<i class="fas fa-paper-plane"></i> Enviar a Revisión
					</a>
				@endif
			@endif
		</div>
	</div>

	<!-- Card Body -->
	<div class="card-body">

		<div class="alert alert-info text-center" role="alert">
			<h4 class="alert-heading">¡Una vez creado el asm tendrás que cargar sus respectivas actividades!</h4>
			<p>Puedes crear las actividades que creas necesarias dando una ponderación a cada una hasta completar el <span class="badge badge-success">100%</span> </p>
		</div>

		<div class="table-responsive">
            <div class="m-3">
                <strong>Asm: </strong> {{$asm->asm}}
                <br>
                <br>
                <strong>Clasificación: </strong><span class="badge badge-success"> {{$asm->aspecto->nombre}}</span>
            </div>
			<table class="table table-bordered">
				<thead class="thead-dark">
					<tr class="text-center">
						<th class="align-middle" scope="col">Id</th>
						@if ($asm->aspecto=="Institucional")
							<th class="align-middle">Área Coordinadora</th>
						@endif
						@if ($asm->aspecto=="Institucional")
							<th class="align-middle" >Acciones a Emprender</th>
						@else
							<th class="align-middle" >Actividades</th>
						@endif
						<th class="align-middle">Área responsable</th>
						<th class="align-middle">Nivel de Prioridad</th>
						<th class="align-middle">Fecha Término</th>
						<th class="align-middle">Resultados Esperados</th>
						<th class="align-middle">Productos</th>
						<th class="align-middle">Ponderación</th>
						<th class="align-middle">% Avance</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@forelse ($asm->actividades as $actividad)
                    <tr class="text-center" style="font-size: 12px;">
							<td class="align-middle">{{$actividad->id}}</td>
							@if ($asm->aspecto=="Institucional")
								<td class="align-middle">{{$actividad->area_coordinadora}}</td>
							@endif
							<td class="align-middle">{{$actividad->actividad}} </td>
							<td class="align-middle">{{$actividad->area_responsable}}</td>
							<td class="align-middle">{{$actividad->prioridad->nombre}}</td>
							<td class="align-middle">{{$actividad->fecha_termino}}</td>
							<td class="align-middle">{{$actividad->resultados_esperados}}</td>
							<td class="align-middle">{{$actividad->evidencias}}</td>
							<td class="text-center align-middle">{{$actividad->ponderacion}} %</td>
							<td class="text-center align-middle">{{$actividad->cantidadAvance()}} %</td>
							<td class="align-middle">
								@if($asm->estatus_id==2 || $asm->estatus_id==4)
                                    <a  href="" data-toggle="modal" data-target="#editar" data-datos="{{ $actividad }}"
                                        class="btn btn-warning btn-sm hvr-box-shadow-outset mb-2"><i class="fas fa-pen"></i> Editar
                                    </a>
								@endif

								@if($asm->estatus_id==3 && $asm->activo==1)

									<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Registrar Avance">
										<a href="{{ route('dependencia.programa.asm.actividad.avance',[$actividad,$evaluacion->id]) }}" class="btn btn-success btn-sm hvr-box-shadow-outset mb-2"><i class="fas fa-plus"></i> </a>

									</span>

								@endif
							</td>

						</tr>
						@if ($loop->last)
							<tr>
								<td class="text-right align-middle" colspan="7"><strong>Total:</strong></td>
								<td class="text-center align-middle" colspan="">{{$asm->actividades->sum('ponderacion')}}%</td>
							</tr>
						@endif
					@empty
						<tr>
							<td colspan="10" class="text-center align-middle">Ninguna actividad</td>
						</tr>

					@endforelse
				</tbody>
			</table>

		</div>
	</div>





</div>
@include('usuarios.dependencias.asm.actividades.create')
@include('usuarios.dependencias.asm.enviarRevision')
@include('usuarios.dependencias.asm.actividades.edit')
@endsection

@section('script')
	<script type="text/javascript">

	@if($errors->edit->count()!=0)
		$('#editar').modal('show');
	@elseif($errors->count()!=0)
		$('#crear').modal('show');
	@endif

	$('#editar').on('show.bs.modal', function(e) {
		var actividad = $(e.relatedTarget).data().datos;
		//console.log(actividad.ponderacion);
		$('#actividad_edit').val(actividad.actividad);
		$('#area_responsable_edit').val(actividad.area_responsable);
		$('#fecha_termino_edit').val(actividad.fecha_termino);
		$('#resultados_esperados_edit').val(actividad.resultados_esperados);
		$('#actividad_id').val(actividad.id);
		$('#ponderacionEdit').val(actividad.ponderacion);



	});

	$('#revision').on('show.bs.modal', function(e) {
			var asm = $(e.relatedTarget).data().datos;
			console.log(asm);
			$('#text_asm').text(asm.asm);
			$('#asm_id').val(asm.id);
		});





</script>
@endsection

