@extends('usuarios.despacho.layouts.main')
@section('content')
<h5 class="text-center">Hallazgos {{$postulacion->evaluacion->ejercicio->año}} </h5>
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark"> Programa:{{$postulacion->evaluacion->programa->nombre}} </h6>
		<div class="dropdown no-arrow">
			<a href="{{route('despacho.asm.crear.despacho',Crypt::encrypt($postulacion->id))}}" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-plus"></i> Crear Hallazgo</a>

		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		<div class="table-responsive ">
			<table class="table table-bordered text-center ">
				<thead class="thead-dark">
					<tr class="">
						<th class="align-middle">No.</th>
						<th class="align-middle">Programa</th>
						<th class="align-middle">Dependencia</th>
						<th class="align-middle">Tipo de Evaluación</th>
						<th class="align-middle">Asm</th>
						<th class="align-middle">Estatus</th>
						<th class="align-middle">Recomendación</th>
						<th class="align-middle">Acciones</th>
					</tr>
				</thead>
				<tbody>
				@foreach($asm as $contador => $as)
					<tr  class="align-middle" style="font-size: 12px;">
					    <td class="align-middle">{{$contador+1}}</td>
						<td class="align-middle">{{$as->programa}}</td>
						<td class="align-middle">{{$as->dependencia}}</td>
						<td class="align-middle">{{$as->tipo_evaluacion}}</td>
						<td class="align-middle">{{$as->asm}}</td>
						<td class="align-middle">
							@if ($as->estatus == 'captura')
								<span class="badge badge-info">{{$as->estatus}}</span>
							@elseif($as->estatus == 'enviado')
								<span class="badge badge-success">{{$as->estatus}}</span>
							@endif
						</td>
						<td class="align-middle">{{$as->recomendacion}}</td>
						@if ($as->estatus == 'captura')
						<td class="align-middle">
							<a href="{{ route('despacho.asm.edit.despacho',[Crypt::encrypt($as->asm_id),Crypt::encrypt($postulacion->id)]) }}" class="btn btn-warning btn-sm mb-3 hvr-box-shadow-outset"><i class="fas fa-pen"></i> Editar</a>
							<a href="#" data-toggle="modal"  data-target="#revision" data-datos="{{$as->asm_id}},"  class="btn btn-primary btn-sm mb-3 hvr-box-shadow-outset"><i class="fas fa-paper-plane"></i> Enviar</a>
						</td>
						@elseif($as->estatus=='enviado')
							<td class="align-middle"><a href="{{route('despacho.asm.ver',[Crypt::encrypt($as->asm_id),Crypt::encrypt($postulacion->id)])}}" class="btn btn-info btn-sm hvr-box-shadow-outset mb-3"><i class="fas fa-search"></i>
                                Ver</a>
                            </td>
						@endif
					</tr>

					@endforeach
				</tbody>
			</table>

		</div>
	</div>





</div>
@include('usuarios.despacho.asm.partials.enviarAsm')
@endsection
@section('script')
	<script type="text/javascript">
	$('#revision').on('show.bs.modal', function(e) {
		var asm = $(e.relatedTarget).data().datos;
		//$('#text_asm').text(asm[1]);
		$('#asm_id').val(asm);


	});
	</script>
@endsection
