@extends('usuarios.despacho.layouts.main')
@section('status','show')
@section('link','active')
@section('content')
    <div class="card">
  <div class="card-header">
    Historial de Solicitudes
  </div>
  <div class="card-body">
            <div class="table table-responsive">
			<table class="table table-hover">
			<thead class="thead-dark">
				<tr class="text-center">

					<th scope="col" class="align-middle">Folio</th>
					<th scope="col" class="align-middle">Ejercicio</th>
					<th scope="col" class="align-middle">Estatus</th>
					<th scope="col" class="align-middle">Empresa</th>
                    <th scope="col" class="align-middle">Acciones</th>


				</tr>
			</thead>
			<tbody>
                @forelse ($solicitudes as $solicitud)
                    <tr class="text-center">
                        <td>{{$solicitud->folio}}</td>
                        <td>{{$solicitud->ejercicio->año}}</td>
                        <td>
                            @if($solicitud->estatus=='revision')
                            <span class="badge badge-info">         {{$solicitud->estatus}}</span>
                            @elseif($solicitud->estatus=='correccion')
                            <span class="badge badge-warning">      {{$solicitud->estatus}}</span>
                            @elseif($solicitud->estatus=='rechazado')
                                <span class="badge badge-danger">   {{$solicitud->estatus}}</span>
                            @elseif($solicitud->estatus=='aceptado')
                            <span class="badge badge-success">      {{$solicitud->estatus}}</span>
                            @else
                                <span class="badge badge-info">Proceso de Captura</span>
                            @endif
                        </td>
                        <td>{{$solicitud->user->nombre}}</td>
                        <td>
                            @if ($solicitud->estatus=='aceptado')
                                <a href="{{ route('despacho.evaluaciones.aceptadas',Crypt::encrypt($solicitud->id)) }}" class="btn btn-info btn-sm"><i class="fas fa-clipboard-check"></i> Evaluaciones Aceptadas</a>
                            @endif
                        </td>
                    </tr>

                    @empty

                    @endforelse

			</tbody>
		</table>

        </div>
  </div>
</div>
@endsection

