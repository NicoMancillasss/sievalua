@extends('usuarios.dependencias.layouts.main')
@section('status','show')
@section('link','active')
@section('content')
{{-- <h5>El despacho que te evaluará es: {{Auth::user()->despachoEvaluador()->nombre}}</h5>
<h5>con el programa: {{Auth::user()->evaluacion()->evaluacion->programa->nombre}}</h5> --}}
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('dependencia.home') }}">Portafolio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('dependencia.ejercicio.programas',$evaluacion->ejercicio_id) }}">Programas</a></li>
    <li class="breadcrumb-item" ><a href="{{ route('dependencia.ejercicio.programa.asm',[Crypt::encrypt($actividad->asm->ejercicio_id),Crypt::encrypt($evaluacion->id)]) }}">Asm</a></li>
    <li class="breadcrumb-item" ><a href="{{ route('dependencia.programa.asm.acciones.asm',[$actividad->asm->id,$evaluacion->id]) }}">Actividades</a></li>
    <li class="breadcrumb-item active" aria-current="page">Avances</li>
  </ol>
</nav>


<h5 class="text-center">Aspectos Susceptibles de Mejora  {{$actividad->asm->ejercicio->año}}</h5>
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark"> Programa: {{$actividad->asm->evaluacion->programa->nombre}}</h6>
		<div class="dropdown no-arrow">
			<a href="{{ route('dependencia.programa.asm.acciones.asm',[$actividad->asm->id,$evaluacion->id]) }}" class="btn btn-info btn-sm hvr-box-shadow-outset">Actividades</a>


		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">

		<div class="alert alert-info text-center" role="alert">
			<h4 class="alert-heading">¡Avances!</h4>
			<p> <span class="badge badge-success">100%</span> </p>
		</div>

		<h6><strong>Aspecto Suceptible de Mejora:</strong> {{$actividad->asm->asm}}</h6>
		<h6><strong>Actividad:</strong> {{$actividad->actividad}}</h6>
		<h6><strong>Área Responsable:</strong> {{$actividad->area_responsable}}</h6>
		<h6><strong>Fecha Término:</strong> {{$actividad->fecha_termino}}</h6>
		<h6><strong>Resultados Esperados:</strong> {{$actividad->resultados_esperados}}</h6>
		<h6><strong>Productos:</strong> {{$actividad->evidencias}}</h6>
		<form action="{{ route('dependencia.programa.asm.actividad.avance.guardar',$actividad->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
			@csrf
			@method('POST')
			<div class="table-responsive">
				<div class="form-group row">
					<div class="col-md-2">
						<h6><strong>Porcentaje de Avance:</strong></h6>
					</div>
					<div class="col-md-10">
						<input  type="number" id="porcentaje_avance" min="0" max="100" name="porcentaje_avance" class="form-control {{ $errors->has('porcentaje_avance') ? ' is-invalid' : '' }}" value="{{ old('porcentaje_avance') }}" >
						@if ($errors->has('porcentaje_avance'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('porcentaje_avance') }}</strong>
						</span>
						@endif
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-2">
						<h6><strong>Evidencia:</strong></h6>
					</div>
					<div class="col-md-10">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="documento_probatorio" id="customFileLang" lang="es">
							<label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-2">
						<h6><strong>Observaciones:</strong></h6>
					</div>
					<div class="col-md-10">
						<input  type="text" id="observacion" name="observacion" class="form-control {{ $errors->has('observacion') ? ' is-invalid' : '' }}" value="{{ old('observacion') }}" >
						@if ($errors->has('observacion'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('observacion') }}</strong>
						</span>
						@endif
					</div>
				</div>
				<div class="form-group ">
					<button type="submit" class="btn btn-info btn-block  hvr-box-shadow-outset">Registrar Avance</button>
				</div>
			</form>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Actividad</th>
						<th>Porcentaje de Avance %</th>
						<th>Evidencia</th>
						<th>Observación</th>
                        <th>Fecha</th>
						<th>Acciones</th>

					</tr>
				</thead>
				<tbody>
					@foreach ($avances as $avance)
					<tr class="text-center {{$avance->estatus_id==2? 'alert-danger text-dark ' : ''}}" data-toggle="tooltip" data-placement="bottom" title="{{$avance->estatus_id==2 && isset($avance->correccion)? $avance->correccion  : ''}}">
                        @if ($avance->estatus_id==2)
                            <td class="bg-danger text-white align-middle">{{$avance->id }}</td>
                        @else
                            <td>{{$avance->id}}</td>
                        @endif
						<td>{{$avance->actividad->actividad}}</td>
						<td>{{$avance->porcentaje_avance}} %</td>
						<td><a href="{{ asset('storage/'.$avance->documento_probatorio) }}">Documento probatorio</a></td>
						<td>{{$avance->observacion}}</td>
                        <td>{{$avance->created_at}}</td>

						<td>
							@if ($avance->estatus_id == 2)
								<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Hacer Corrección">
									<a class="btn btn-warning btn-sm hvr-box-shadow-outset mb-2" href="" data-toggle="modal" data-target="#edit"  data-datos="{{$avance}}" >
										<i class="fas fa-edit"></i>
									</a>
								</span>
							@endif
                        </td>
						{{-- <td>
							<form method="POST" action="{{ route('dependencia.programa.asm.actividad.avance.eliminar', $avance->id) }}" role="form">
								@csrf
								@method('delete')

								<button type="submit" class="btn btn-danger btn-sm hvr-box-shadow-outset">Eliminar</button>
							</form>
						</td> --}}
					</tr>
					@endforeach
					<tr >
						<td class="text-right" colspan="2"><strong>Total</strong></td>
						<th>{{$avances->sum('porcentaje_avance')}} %</th>
					</tr>
				</tbody>
			</table>

		</div>
	</div>





</div>
@include('usuarios.dependencias.asm.actividades.avance.edit')
@endsection
@section('script')
	<script  type="text/javascript">
		$('#edit').on('show.bs.modal', function(e) {
			var avance = $(e.relatedTarget).data().datos;
			$("#edit_actividad").val(avance.actividad.actividad);
			$("#edit_observacion").val(avance.observacion);
			$("#edit_porcentaje_avance").val(avance.porcentaje_avance+"%");
			$("#correccion_avance_id").val(avance.id);


		});
	</script>
@endsection

