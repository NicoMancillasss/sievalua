@extends('usuarios.administrador.layouts.main')
@section('status3','show')
@section('link6','active')
@section('content')

<h5 class="text-center">Hallazgos {{$ejercicio->año}} </h5>
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-dark">Crear Nuevo Hallazgo</h6>
			<div class="dropdown no-arrow">

				<a href="{{ route('administrador.asm.ejercicios') }}" class="btn btn-info btn-sm"><i class="fas fa-angle-left"></i> Regresar</a>
				@if (Auth::user()->perfil->id!=5)
					<a href="{{ route('administrador.asm.programa.create',$ejercicio->id) }}" class="btn btn-primary btn-sm "> <i class="fas fa-plus"></i> Crear Hallazgo</a>
				@endif
				<a href="{{-- route('administrador.excel.padron.aceptados',$ejercicio->id) --}}" class="btn btn-success btn-sm hvr-box-shadow-outset"><i class="fas fa-download"></i>Excel</a>
			</div>

		</div>
	<!-- Card Body -->
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered table-sm">
				<thead class="thead-dark">
					<tr class="text-center">
						<th>No.</th>
						<th>Programa</th>
						<th>Dependencia</th>
						<th>Despacho</th>
						<th>Tipo de Evaluación</th>
						<th>Asm</th>
						<th>Prioridad</th>
                        {{--
                            <th>Actor</th>
						    <th>Tema</th>
                        --}}
						<th>Recomendación</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
				@foreach($asm as $as)
					<tr class="" style="font-size: 12px;">
						<td>{{ $loop->iteration }} </td>
						<td>{{ $as->programa }} </td>
						<td>{{ $as->dependencia }} </td>
						<td>{{ $as->despacho }} </td>
						<td>{{ $as->tipo_evaluacion }} </td>
						<td>{{ $as->asm }} </td>
						<td>{{ $as->prioridad }} </td>
                        {{--
                            <td></td>
						    <td></td>
                        --}}
					    <td>{{ $as->recomendacion }}</td>

						{{--
							<td>{{$as->evaluacion->programa->nombre}}</td>
						<td>{{$as->evaluacion->dependencia->nombre}}</td>
						<td>{{$as->despacho->nombre}}</td>
						<td>{{$as->evaluacion->tipoEvaluacion->nombre}}</td>
						<td>{{$as->asm}}</td>
						<td>
							@if (isset($as->prioridad))
								{{$as->prioridad->nombre}}
							@else
								Indeterminado
							@endif
						</td>
						<td>
							@if (isset($as->actor))
								@foreach ($as->actor as $actor)
								<p class="mb-1"><i class="fa fa-play-circle" aria-hidden="true"></i> {{$actor->actor->nombre}}</p>

								@endforeach
							@else
								Indeterminado
							@endif
						</td>
						<td>
							@foreach ($as->tema as $tema)
								@if ($tema->tema->nombre=='Otro')
									>{{$tema->tema->nombre}}({{$as->otro_tema}})
								@else
									>{{$tema->tema->nombre}}
								@endif
								<br>
							@endforeach
						</td>
						<td>{{$as->recomendacion}}</td>--}}
						<td><a href="{{ route('administrador.asm.programa.edit',$as->asm_id) }}" class="btn btn-warning btn-sm"><i class="fas fa-pen"></i>Editar</a></td>

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
