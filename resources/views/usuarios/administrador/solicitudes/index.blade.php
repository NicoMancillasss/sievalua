@extends('usuarios.administrador.layouts.main')
@section('status','show')
@section('title','Solicitudes')
@section('link0','active')
@section('content')
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Solicitudes
		@if ($estatus=='aceptado')
			de Aceptados
		@endif
		@if ($estatus=='rechazado')
			de Rechazadas
		@endif
		@if ($estatus=='revision')
			en Revisión
		@endif
		@if ($estatus=='correccion')
			en Corrección
		@endif
		</h6>

		<div class="dropdown no-arrow">

			@if ($estatus=='aceptado')

				<a href="{{ route('administrador.ver.solicitudes.ejercicios') }}" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-angle-left"></i> Regresar</a>
			@if (Auth::user()->perfil->id!=5)
			<a class="btn btn-warning  btn-sm mr-2 hvr-box-shadow-outset"  data-placement="right" href="{{route('administrador.ver.padron.aceptados',$ejercicio)}}"><i class="fas fa-clipboard-check"></i> Padron de Aceptados</a>
			@endif

			@endif
			@if ($estatus=='revision')

				<a href="{{ route('administrador.ver.solicitudes.ejercicios') }}" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-angle-left"></i> Regresar</a>

			@endif

			@if ($estatus=='rechazado')

				<a href="{{ route('administrador.ver.solicitudes.ejercicios') }}" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-angle-left"></i> Regresar</a>
				@if (Auth::user()->perfil->id!=5)
				<a class="btn btn-warning  btn-sm mr-2 hvr-box-shadow-outset"  data-placement="right" href="{{route('administrador.pdf.padron.rechazados',$ejercicio)}}"><i class="fas fa-clipboard-list"></i> Padron de Rechazados</a>
				@endif

			@endif
			@if ($estatus=='correccion')

				<a href="{{ route('administrador.ver.solicitudes.ejercicios') }}" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-angle-left"></i> Regresar</a>

			@endif


		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-hover">
			<thead class="thead-dark">
				<tr class="text-center">
					<th scope="col">Id</th>
					<th scope="col">Folio</th>
					<th scope="col">Ejercicio</th>
					<th scope="col">Estatus</th>
					<th scope="col">Empresa</th>
					<th class="text-center">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($solicitudes as $solicitud)
				<tr class="text-center">
					<th>{{$solicitud->id}}</th>
					<th>{{$solicitud->folio}}</th>
					<td>{{$solicitud->ejercicio->año}}</td>
					<th>
						@if($solicitud->estatus=='revision')
						<span class="badge badge-info">{{$solicitud->estatus}}</span>
						@elseif($solicitud->estatus=='correccion')
						<span class="badge badge-warning">{{$solicitud->estatus}}</span>
						@elseif($solicitud->estatus=='rechazado')
							<span class="badge badge-danger">{{$solicitud->estatus}}</span>
						@elseif($solicitud->estatus=='aceptado')
						<span class="badge badge-success">{{$solicitud->estatus}}</span>
						@endif
					</th>
					<th>{{$solicitud->user->nombre}}</th>
					<th >

					<div class="text-center">
						@if (Auth::user()->perfil->id!=5)
							@if ($solicitud->estatus!='rechazado' && $solicitud->estatus!='aceptado')

						<a class="btn btn-success  btn-sm hvr-box-shadow-outset" data-toggle="modal" data-toggle="tooltip" data-placement="right" title="Editar" href="{{route('administrador.ver.solicitud',$solicitud->id)}}" data-datos="" >
							<i class="fas fa-search"></i> Revisar
						</a>

						{{--
							@if ($solicitud->estatus=='correccion')
						<a class="btn btn-warning  btn-sm" data-toggle="modal" data-toggle="tooltip" data-placement="right"data-datos="" href="{{ route('administrador.correccion.solicitud',$solicitud->id) }}">
							Editar correcciones
						</a>
						@else
						<a class="btn btn-warning  btn-sm" data-toggle="modal" data-toggle="tooltip" data-placement="right"data-datos="" href="{{ route('administrador.correccion.solicitud',$solicitud->id) }}">
							Enviar a correcciones
						</a>
						@endif
							--}}
						<a class="btn btn-danger  btn-sm hvr-box-shadow-outset" data-toggle="modal" data-toggle="tooltip" data-placement="right"data-datos="" href="{{ route('administrador.ver.rechazar.solicitud',$solicitud->id) }}">
							<i class="fas fa-times"></i> Rechazar todas las evaluaciónes
						</a>
						@endif

						@if ($solicitud->estatus=='aceptado')

						<a class="btn btn-success  btn-sm hvr-box-shadow-outset" data-toggle="modal" data-toggle="tooltip" data-placement="right" title="Ver a detalle" href="{{route('administrador.ver.solicitud',$solicitud->id)}}" data-datos="" >
							<i class="fas fa-search"></i>
						</a>


						@endif
						@if ($solicitud->estatus=='rechazado')
						<a class="btn btn-info  btn-sm hvr-box-shadow-outset" data-toggle="modal" data-toggle="tooltip" data-placement="right"data-datos="" href="{{route('administrador.ver.solicitud',$solicitud->id)}}">
							<i class="fas fa-search"></i> Ver
						</a>
						@endif
						@else
						<a class="btn btn-success  btn-sm hvr-box-shadow-outset" data-toggle="modal" data-toggle="tooltip" data-placement="right" title="Editar" href="{{route('administrador.ver.solicitud',$solicitud->id)}}" data-datos="" >
							<i class="fas fa-clipboard-list"></i> Revisar
						</a>
						@endif
					</div>

					</th>
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
