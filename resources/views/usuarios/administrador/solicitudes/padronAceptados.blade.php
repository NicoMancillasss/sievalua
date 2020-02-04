@extends('usuarios.administrador.layouts.main')
@section('status','show')
@section('link0','active')
@section('content')

<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Padrón de Aceptados {{$ejercicio->año}}</h6>
		<div class="dropdown no-arrow">
			<a href="{{ route('administrador.solicitudes',[$ejercicio->id,$estatus]) }}" class="btn btn-info btn-sm hvr-box-shadow-outset">Regresar</a>
			<a href="{{ route('administrador.pdf.padron.aceptados',$ejercicio->id) }}" class="btn btn-danger btn-sm hvr-box-shadow-outset"><i class="fas fa-download"></i>Pdf</a>
			<a href="{{ route('administrador.excel.padron.aceptados',$ejercicio->id) }}" class="btn btn-success btn-sm hvr-box-shadow-outset"><i class="fas fa-download"></i>Excel</a>
		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr class="text-center">
						<th scope="col">Folio</th>
						<th scope="col">Despacho</th>
						<th scope="col">Dependencia</th>
						<th scope="col">Evaluaciones Aceptadas</th>
						<th scope="col">Fecha Cita</th>
						<th scope="col">Lugar</th>

					</tr>
				</thead>
				<tbody>


					@foreach($aceptados as $aceptado)
					<tr class="text-center">
						<td>{{$aceptado->folio}}</td>
						<td>{{$aceptado->user->nombre}}</td>
						<td>
							@foreach($aceptado->postula->where('estatus',1)->where('cita','<>','') as $postulacion)
							{{$postulacion->evaluacion->dependencia->nombre}}
							<br>
							@endforeach
						</td>
						<td>
						@foreach($aceptado->postula->where('estatus',1)->where('cita','<>','') as $postulacion)
							<i class=" far fa-check-square"></i>{{$postulacion->evaluacion->programa->nombre}}
							<br>
						@endforeach
						</td>


						<td>
							@foreach($aceptado->postula->where('estatus',1)->where('cita','<>','') as $postulacion)
							<i class="far fa-clock"></i> {{$postulacion->parseFecha()}}
							<br>
							@endforeach
						</td>

						<td>
							@foreach($aceptado->postula->where('estatus',1)->where('cita','<>','') as $postulacion)
							<i class="fas fa-map-marker-alt"></i> {{$postulacion->lugar}}
							<br>
							@endforeach
						</td>
					</tr>

					@endforeach

				</tbody>
			</table>
		</div>

	</div>




</div>


@endsection
@section('script')
    <script src="{{ asset('js/dataTable.js')}}"></script>
@endsection
