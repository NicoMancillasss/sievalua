@extends('usuarios.despacho.layouts.main')
@section('content')
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Solicitud</h6>
		<div class="dropdown no-arrow">
		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		<div class="nav nav-tabs" id="nav-tab" role="tablist">
			<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" >Datos Generales (Anexo 1)</a>
			<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Selección de Evaluaciones</a>
			<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Subir Archivos</a>
		</div>
	</nav>
	<div class="tab-content" id="nav-tabContent">
		<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
			<form method="POST" action=" {{ route('despacho.solicitudes.store') }} " enctype="multipart/form-data" accept-charset="UTF-8">
				@method('POST')
				@csrf
				<div class="form-group row">
					<div class="col-md-3">
						<label for="name" class="">{{ __('RFC') }}</label>
						<input id="name" type="text" class="form-control @error('rfc') is-invalid @enderror" name="rfc" value="{{$solicitud->rfc}}" required autocomplete="RFC" autofocus>
						@error('rfc')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>

					<div class="col-md-3">
						<label for="email" class="">{{ __('Telefono') }}</label>
						<input id="telefono" type="number" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{$solicitud->telefono}}" required autocomplete="telefono" >

						@error('telefono')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>

					<div class="col-md-3">
						<label for="email" class="">{{ __('Representante Legal') }}</label>
						<input id="representante" type="textarea" class="form-control @error('representante') is-invalid @enderror" name="representante_legal" value="{{$solicitud->representante_legal}}" required autocomplete="direccion">
						@error('representante_legal')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					<div class="col-md-3">
						<label for="email" class="">{{ __('Redes Sociales') }}</label>
						<input id="representante" type="text" class="form-control @error('redes_sociales') is-invalid @enderror" name="redes_sociales" value="{{$solicitud->redes_sociales}}" required autocomplete="direccion">
						@error('redes_sociales')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>


				<div class="form-group row">
					<div class="col-md-3">
						<label for="selectEstatus">Estado</label>
						<select class="form-control {{ $errors->has('estado_id') ? ' is-invalid' : '' }}" id="estado" name="estado_id" onchange="municipios(this.value)">
							<option value="">Seleccione una Opción</option>
							@foreach($estados as $estado)
							<option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
							@endforeach
						</select>
						@if ($errors->has('estado_id'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('estado') }}</strong>
						</span>
						@endif
					</div>

					<div class="col-md-3">
						<label for="selectEstatus">Municipio</label>
						<select required="" class="form-control {{ $errors->has('municipio_id') ? ' is-invalid' : '' }}" id="municipio" name="municipio_id" >
							<option value="">Seleccione una Opción</option>

						</select>
						@if ($errors->has('municipio_id'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('municipio_id') }}</strong>
						</span>
						@endif
					</div>

					<div class="col-md-6">
						<label for="email" class="">{{ __('Direccion') }}</label>
						<input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{$solicitud->direccion}}" required autocomplete="direccion">

						@error('direccion')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>

				</div>
			</div>
			<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
				<hr>
				<br>
				<h6 class="m-0 font-weight-bold text-dark">Selecciona las Evaluaciones de tu interés</h6>





			</div>
			<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

				@csrf
				<h6 class="m-0 font-weight-bold text-dark">Documentos Adjuntos .PDF (10MB máximo)</h6>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<div class="col-md-12">
								<input type="file" class="form-control @error('files') is-invalid @enderror" name="files[]" multiple accept=".pdf" required="">
								@error('files')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror

							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<ul class="list-group">
							<li class="list-group-item active">Archivos Adjuntos</li>
							@foreach($rutas as $ruta)
							<li class="list-group-item"><a href="{{asset('storage/Solicitudes/'.$solicitud->folio.'/'.$ruta)}}" target="_blank">{{$ruta}}</a>
							 <a href=""><span class="badge badge-danger">Eliminar</span></a>
							</li>

							@endforeach
						</ul>
					</div>
				</div>
			</form>
		</div>
	</div>



</div>
</div>

<nav>



	@endsection
	@section('script')
	<script type="text/javascript">
		$('select option[value="' +{{$solicitud->estado->id}}+'"]').prop("selected", true);
		function municipios(id){
			$.get("/municipios/"+id,function(response){
				var datos =$('#estado').is(':empty');
				if (datos) {
					document.getElementById('municipio').disabled=true;
				}else{
					document.getElementById('municipio').disabled=false;
				}
				var select = document.getElementById("municipio");
				$('#localidad').empty().append('<option selected="selected" disabled value="">Selecciona una Opción </option>');
				for(index in response) {
					select.options[select.options.length] = new Option(response[index].nombre, response[index].id);
				}
			});
		}
	</script>
	@endsection

