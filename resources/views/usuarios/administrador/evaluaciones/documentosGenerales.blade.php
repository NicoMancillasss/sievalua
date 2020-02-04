@extends('usuarios.administrador.layouts.main')
@section('status','show')
@section('link1','active')
@section('content')
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Documentos</h6>
		<div class="dropdown no-arrow">
			{{-- <a href=""data-toggle="modal" data-target="#crear" class="btn btn-info btn-sm hvr-box-shadow-outset">Crear</a> --}}
		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		<form method="POST" action="{{ route('evaluacion.documentos.generales.guardar',$ejercicio_id) }}">
					@csrf
					@method('POST')
					<h6>Catálogo de documentos Generales</h6>

					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Selecciona</th>
								<th>Descripción</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($catalogo as $documento)
							<tr>
								<td>
									<div class="form-check">
										<input name="documentos[]" type="checkbox" class="form-check-input" id="exampleCheck1" value="{{$documento->id}}" @if(in_array($documento->id,$documentosExistentes)) checked @endif>
										<label class="form-check-label" for="exampleCheck1">{{$documento->nombre}}</label>
									</div>
								</td>
								<td  class="text-justify">{{$documento->descripcion}}</td>
							</tr>
							@endforeach
						</tbody>

					</table>


					<div class="modal-footer">
						<div class="form-group">
							<button type="submit" class="btn btn-primary hvr-box-shadow-outset"><i class="fas fa-save"></i> Guardar</button>
						</div>
					</div>
				</form>
	</div>




</div>

@endsection
