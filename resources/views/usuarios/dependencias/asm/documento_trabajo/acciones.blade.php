@extends('usuarios.dependencias.layouts.main')
@section('status','show')
@section('link','active')
@section('content')

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('dependencia.home') }}">Portafolio</a></li>
		<li class="breadcrumb-item"><a href="{{ route('dependencia.ejercicio.programas',$evaluacion->ejercicio_id) }}">Programas</a></li>
		<li class="breadcrumb-item"><a href="{{ route('dependencia.programa.documento.trabajo.avances',$evaluacion->id) }}">Avance Documento Institucional</a></li>
		<li class="breadcrumb-item active" aria-current="page">Avances</li>
	</ol>
</nav>

<h5 class="text-center">Aspectos Susceptibles de Mejora  {{$actividad->asm->ejercicio->año}}</h5>
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark"> Programa: {{$actividad->asm->programa->nombre}}</h6>
		<div class="dropdown no-arrow">
			<a href="{{ route('dependencia.programa.documento.trabajo.avances',$evaluacion->id) }}" class="btn btn-info btn-sm hvr-box-shadow-outset">Avance Documento de Trabajo</a>


		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		<h6><strong>Aspecto Suceptible de Mejora:</strong> {{$actividad->asm->asm}}</h6>
		<h6><strong>Actividad:</strong> {{$actividad->actividad}}</h6>
		<h6><strong>Área Responsable:</strong> {{$actividad->area_responsable}}</h6>
		<h6><strong>Fecha Término:</strong> {{$actividad->fecha_termino}}</h6>
		<h6><strong>Resultados Esperados:</strong> {{$actividad->resultados_esperados}}</h6>
		<h6><strong>Productos:</strong> {{$actividad->evidencias}}</h6>
		<form action="{{ route('dependencia.programa.asm.actividad.avance.guardar',$actividad->id) }}" method="POST">
			@csrf
			@method('POST')
			<div class="table-responsive">
				<div class="form-group row">
					<div class="col-md-2">
						<h6><strong>Porcentaje de Avance:</strong></h6>
					</div>
					<div class="col-md-10">
						<div class="progress">
							<div class="progress-bar bg-success" role="progressbar" style="width: {{$actividad->cantidadAvance()}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$actividad->cantidadAvance()}}%</div>
						</div>
						<br>
						<input  type="number" id="porcentaje_avance" name="porcentaje_avance" class="form-control {{ $errors->has('porcentaje_avance') ? ' is-invalid' : '' }}" value="{{ old('porcentaje_avance') }}" >
						@if ($errors->has('porcentaje_avance'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('porcentaje_avance') }}</strong>
						</span>
						@endif
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-2">
						<h6><strong>Identificación del documento probatorio:</strong></h6>
					</div>
					<div class="col-md-10">
						<input  type="text" id="documento_probatorio" name="documento_probatorio" class="form-control {{ $errors->has('documento_probatorio') ? ' is-invalid' : '' }}" value="{{ old('documento_probatorio') }}" >
						@if ($errors->has('documento_probatorio'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('documento_probatorio') }}</strong>
						</span>
						@endif
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
					<tr class="text-center">
						<th>Id</th>
						<th>Actividad</th>
						<th>Porcentaje de Avance %</th>
						<th>Documento Probatorio</th>
						<th>Observación</th>
						<th>Fecha</th>



					</tr>
				</thead>
				<tbody>
					@foreach ($avances as $avance)
					<tr class="text-center">
						<td>{{$avance->id}}</td>
						<td>{{$avance->actividad->actividad}}</td>
						<td>{{$avance->porcentaje_avance}} %</td>
						<td>{{$avance->documento_probatorio}}</td>
						<td>{{$avance->observacion}}</td>
						<td>{{$avance->created_at}}</td>
						<td>
							<form method="POST" action="{{ route('dependencia.programa.asm.actividad.avance.eliminar', $avance->id) }}" role="form">
								@csrf
								@method('delete')

								<button type="submit" class="btn btn-danger btn-sm hvr-box-shadow-outset">Eliminar</button>
							</form>
						</td>
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

@endsection

