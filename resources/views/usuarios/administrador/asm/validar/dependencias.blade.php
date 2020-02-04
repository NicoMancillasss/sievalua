@extends('usuarios.administrador.layouts.main')
@section('status3','show')
@section('link7','active')
@section('content')

<h5 class="text-center">Hallazgos Aspectos Susceptibles de Mejora {{$ejercicio->año}} </h5>
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Ejercicios</h6>
            <div class="dropdown no-arrow">
                <a href="{{route('administrador.asm.validar.ejercicios')}}" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-angle-left"></i> Ejercicios</a>
            </div>
		</div>
	<!-- Card Body -->
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead class="thead-dark">
					<tr class="text-center">
						<th>id</th>
						<th>Acrónimo</th>
						<th>Dependencia</th>
						<th>Despacho</th>
						<th>Programa</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($pae as $pa)
					<tr class="text-center" style="font-size: 12px;">
						<td class="align-middle">{{$pa->evaluacion->dependencia->id}}</td>
						<td class="align-middle">{{$pa->evaluacion->dependencia->acronimo}}</td>
						<td class="align-middle">
							<a  href="{{route('administrador.asm.dependencia.asm',[$pa->evaluacion->id])}}" class="">
									{{$pa->evaluacion->dependencia->nombre}}
									@if ($globalasm->where('evaluacion_id',$pa->evaluacion->id)->where('tipo','Dependencia')->where('ejercicio_id',$ejercicio->id)->count() > 0)
										<h6>Asm sin Revisar <span class="badge badge-success">{{$globalasm->where('evaluacion_id',$pa->evaluacion->id)->where('tipo','Dependencia')->where('ejercicio_id',$ejercicio->id)->count()}}</span></h6>
									@endif

							</a>
						</td>
						<td class="align-middle">
							<a  href="{{route('administrador.asm.despacho.hallazgos',$pa)}}" >
                                {{$pa->solicitud->user->nombre}}
							</a>
						</td>
						<td class="align-middle">{{$pa->evaluacion->programa->nombre}}</td>
						<td class="align-middle">
							@if (Auth::user()->perfil->id!=5)
								@if($pa->evaluacion->activo == 1)
								<a href="{{ route('administrador.asm.pae.activo',$pa->evaluacion->id) }}" class="btn btn-danger btn-sm hvr-box-shadow-outset"><i class="fas fa-times"></i> Desactivar Asm</a>
								@else
								<a href="{{ route('administrador.asm.pae.activo',$pa->evaluacion->id) }}" class="btn btn-success btn-sm hvr-box-shadow-outset"> <i class="fa fa-check" aria-hidden="true"></i> Activar Asm</a>
								@endif
							@endif
							<!--Pára desactivar los A sm hay que insertar un nuevo atributo en la tabla evaluaciones de activo,
							cuando el estatus sea 1 dejará crear Asm en caso de lo contrario ya no podra crear nuevos Asm y solamento podra hacer cambios con aquellos asm que esten en estatus de aceptado. -->
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
