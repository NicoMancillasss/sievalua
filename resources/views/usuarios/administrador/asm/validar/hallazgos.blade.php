@extends('usuarios.administrador.layouts.main')
@section('status3','show')
@section('link7','active')
@section('content')

<h5 class="text-center">Hallazgos {{$postulacion->evaluacion->ejercicio->año}} </h5>
<h4 class="text-center">{{$postulacion->evaluacion->dependencia->nombre}}</h4>
<h4 class="text-center">{{$postulacion->evaluacion->programa->nombre}}</h4>
<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">ASM de  {{$postulacion->solicitud->user->nombre}}</h6>
		<div class="dropdown no-arrow">
			<a href="{{route('administrador.asm.dependencia',$postulacion->evaluacion->ejercicio_id)}}" class="btn btn-info btn-sm">Despachos</a>
		</div>
	</div>



	<!-- Card Body -->
	<div class="card-body row">
		@forelse ($documentos as $documento)
				<div class="card border-left-success shadow h-100 py-2 mb-4 mr-1">
					<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">

						<a target="_blank" href="{{asset('storage/'.$documento->ruta)}}">
							<div class="text-xs font-weight-bold text-success  mb-1">{{$documento->documento->catalogoDocumento->nombre}}</div>
						</a>
						<div class="text-xs font-weight-bold text-secondary  mb-1">{{$documento->documento->catalogoDocumento->descripcion}}</div>

						<div class="col-auto">
						</div>
					</div>
					</div>
				</div>
			</div>
		 @empty

		 @endforelse

		 <div class="col-md-12">
			 <div class="table-responsive">
			<table class="table table-bordered text-center">
				<thead class="thead-dark">
					<tr>
						<th class="align-middle">Asm</th>
						<th class="align-middle">Recomendacion</th>
						<th class="align-middle">Estatus</th>
						<th class="align-middle">Tipo de Evaluación</th>
						<th class="align-middle">Prioridad</th>
						<th class="align-middle">Temas</th>
						<th class="align-middle">Clasificación</th>
						<th class="align-middle">Actores Involucrados</th>
						<th class="align-middle">Acciones</th>


					</tr>
				</thead>
				<tbody>
					@forelse ($asm as $as)
                        <tr>
                            <td class="align-middle">{{$as->asm}}</td>
                            <td class="align-middle">{{$as->recomendacion}}</td>
                            <td class="align-middle">
                                @if ($as->estatus_id==4)
								    <span class="badge badge-info">{{$as->estatus}}</span>
							    @elseif($as->estatus_id==5)
								    <span class="badge badge-success">{{$as->estatus}}</span>
							    @endif
                            </td>
                            <td>{{$as->tipo_evaluacion}}</td>
							<td>{{$as->prioridad}}</td>
                            <td>{{$as->tema->pluck('nombre')}}</td>
                            <td>{{$as->aspecto}}</td>
                            <td>{{dd($as->actor)}}</td>

							<td>
								<a href="" class="btn btn-warning btn-sm">Editar</a>
							</td>
                        </tr>
                    @empty

                    @endforelse
				</tbody>
			</table>

		</div>
		 </div>














</div>
</div>

@endsection
@section('script')
@endsection

