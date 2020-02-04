@extends('usuarios.despacho.layouts.main')
@section('content')

@if ($solicitud->estatus=='revision')
<div class="alert alert-secondary" role="alert">
	<p class="text-justify">
		Apreciable Evaluador, te notificamos que tu solicitud de registro se encuentra en el proceso de revisión, te
		pedimos que estés atento a tu correo electrónico y a esta plataforma, en los que se te informará si tu
		registro requiere que realices alguna corrección, o haz sido elegido para realizar alguna evaluación.
	</p>

</div>
@elseif($solicitud->estatus=='rechazado')
<div class="alert alert-danger" role="alert">
	<h4 class="alert-heading">
		Estimado Evaluador. Te informamos que derivado de la revisión a tu solicitud
		y documentación presentada esta ha sido denegada por las siguientes causas:
	</h4>
	<h4 class="text-justify font-italic">{{$solicitud->descripcion_rechazo}}</h4>

</div>
@endif

<div class="card shadow mb-4">

	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Solicitudes</h6>
		<div class="dropdown no-arrow">
		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		<div class="alert alert-info text-center row" role="alert">
			<div class="col-12">
                <h4 class="alert-heading">¡Bienvenido!</h4>
                <p>Te mostramos las evaluaciones aceptadas en las cuales estan los programas a los que fuiste seleccionado.</p>
                <hr>
                <p class="mb-0">Puedes dar clic en Evaluaciones Aceptadas y mostrará la pantalla para seguir con el proceso. </p>
            </div>
            {{-- <div class="col-2">
                <a href=""data-toggle="modal" data-target="#crear" class="hvr-bob"><i class="fas fa-upload fa-5x text-secondary"></i></a>
                <h3 class="text-secondary mt-3">Subir logo</h3>
            </div> --}}
        </div>

		<div class="table table-responsive">
			<table class="table table-hover">
			<thead class="thead-dark">
				<tr class="text-center">

					<th scope="col">Folio</th>
					<th scope="col">Ejercicio</th>
					<th scope="col">Estatus</th>
					<th scope="col">Empresa</th>
					@if ($solicitud->estatus=='aceptado')
					<th scope="col">Acciones</th>
                    @endif
                    {{-- <th scope="col"></th> --}}


				</tr>
			</thead>
			<tbody>
				<tr class="text-center">
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
					<td>{{$solicitud->user->nombre}}</td>
						@if ($solicitud->estatus=='aceptado')
							<td>
                                <a href="{{ route('despacho.evaluaciones.aceptadas',Crypt::encrypt($solicitud->id)) }}" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-clipboard-check"></i>
                                    Evaluaciones Aceptadas
                                </a>
							</td>
						@endif
					{{-- <td>
                        <a href="{{ route('despacho.mensajes.index',$solicitud->id)}}" class="text-center"><i class="text-success fas fa-sms fa-2x"></i></a>
                    </td> --}}
				</tr>

			</tbody>
		</table>

		</div>
	</div>




</div>
@include('usuarios.despacho.solicitudes.createLogo')
@include('usuarios.despacho.solicitudes.updateLogo')

@endsection
@section('script')
<script type="text/javascript">
    @if($errors->edit->count()!=0)
		$('#editar').modal('show');
		@elseif($errors->count()!=0)
        $('#crear').modal('show');
    @endif
    $('#editar').on('show.bs.modal', function(e) {
        var usuario = $(e.relatedTarget).data().datos;

        $('#nombre').val(usuario.nombre);

    });
</script>
@endsection
