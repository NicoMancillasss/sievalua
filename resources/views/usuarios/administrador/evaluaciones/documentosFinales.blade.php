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
		<form method="POST" action="{{ route('evaluacion.documentos.finales.guardar',[$ejercicio,$evaluacion]) }}">
					@csrf
					@method('POST')
					<h6>Catálogo de Documentos Finales</h6>

					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Selecciona Documento
									@error('documentos')
											<span class="text-danger">Debes seleccionar minimo un documento</span>
									@enderror
								</th>
								<th>Descripción</th>
								<th>Tipo de Archivo</th>
							</tr>
						</thead>
						<tbody>
							
							@foreach ($catalogo as $documento)
							<tr>
								<td>
									<div class="form-check">
										<input name="documentos[]" type="checkbox" class="form-check-input " id="exampleCheck1" value="{{$documento->id}}" @if(in_array($documento->id,$documentosExistentes)) checked @endif>
										<label class="form-check-label" for="exampleCheck1">{{$documento->nombre}}</label>
										
									</div>
								</td>
								<td  class="text-justify">{{$documento->descripcion}}</td>
								<td  class="text-justify">
									
									<select class="form-control"  name="archivo{{$documento->id}}"   id="archivo{{$documento->id}}"  >
										<option value="">Selecciona una opción</option>
										@foreach ($tipo_archivos as $id => $extencion)
											<option  value="{{$extencion->id}}" @if ($extencion->id === $extencion->archivoExistente($evaluacion,$documento->id) )) selected @endif  > {{$extencion->extencion}}  </option>
										@endforeach
									</select>
									
	
								</td>
								
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
@section('script')
	<script type='text/javascript'>
		
		function Rellenar(select) { 
			
			console.log(select.name)
		 }
 		
	</script>
	
@endsection
