@extends('usuarios.despacho.solicitudes.home')
@section('link1','active')
@section('menu1')


@if(isset($solicitud))
@if (isset($solicitud->correccion))
@if ($solicitud->correccion->datos_generales!='' && $solicitud->estatus=='correccion')
<div class="alert alert-danger" role="alert">
	<h4 class="alert-heading">¡Tienes correcciones aquí en datos generales!</h4>
	<p><pre>{{$solicitud->correccion->datos_generales}}</pre></p>
</div>
@endif
@endif

<form method="PUT" action=" {{ route('despacho.solicitudes.update',$solicitud->id) }} " enctype="multipart/form-data" accept-charset="UTF-8">
	@method('PUT')
	@csrf
	@else
	<form method="POST" action=" {{ route('despacho.solicitudes.store') }} " enctype="multipart/form-data" accept-charset="UTF-8">
		@method('POST')
		@csrf
		@endif
		{{-- Alerta de seguimiento de mensajes --}}
<div class="alert alert-secondary" role="alert">
	<p>Por favor completa este apartado con la información correspondiente a tus Datos Generales, al terminar haz
		clic en el botón “Guardar/Siguiente” para continuar con tu registro.</p>
</div>

		<div class="form-group row">
			<div class="col-md-3">
				<label for="name" class="">{{ __('RFC') }}</label>

				<input id="rfc" type="text" class="form-control @error('rfc') is-invalid @enderror" name="rfc" value="
				@if (isset($api[0]->rfc))
					{{$api[0]->rfc}}
					@else
				{{Auth::user()->rfc_temporal}}
				@endif
				@if(isset($solicitud->rfc)){{$solicitud->rfc}}
				@endif" required

				@if (Auth::user()->tipo_persona == 'fisica')}
				maxlength="13"
				@elseif(Auth::user()->tipo_persona == 'moral')
				maxlength="12"
				@endif autofocus>
				@error('rfc')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>

			<div class="col-md-3">
				<label for="email" class="">{{ __('Teléfono Celular') }}</label>

				<input id="telefono" type="tel" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="
				@if (isset($api[0]->telefono))
					{{$api[0]->telefono}}
				@endif
				@if(isset($solicitud->telefono)) {{$solicitud->telefono}} @endif" required autocomplete="telefono" >

				@error('telefono')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
			<div class="col-md-3">
				<label for="email" class="">{{ __('Teléfono Fijo') }}</label>
				<input placeholder="Teléfono Fijo" id="telefono2" type="tel" class="form-control @error('telefono_oficina') is-invalid @enderror" name="telefono_oficina" value="{{old('telefono_oficina')}}@if(isset($solicitud->telefono_oficina)) {{$solicitud->telefono_oficina}} @endif" >
				@error('telefono_oficina')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>

            <div class="col-md-3">
                <label for="email" class="">{{ __('Redes Sociales') }}</label>
                <input placeholder="Link Red Social" id="representante" type="text" class="form-control @error('redes_sociales') is-invalid @enderror" maxlength="200" name="redes_sociales" value="{{old('redes_sociales') }} @if(isset($solicitud->redes_sociales)){{$solicitud->redes_sociales}} @endif" required autocomplete="direccion">
                @error('redes_sociales')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        {{-- <div class="form-group row">
            <div class="col-md-6">
				<label for="customFileLang">Logo:</label>
                <div class="custom-file">
                    <input required type="file" accept=".img .png" class="custom-file-input" id="customFileLang" lang="es"  name="logo" >
                    <label class="custom-file-label" for="customFileLang">Seleccionar Logo</label>
                </div>
                @if ($errors->has('logo'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('logo') }}</strong>
                    </span>
                @endif
			</div>
        </div> --}}

			<h6>Representante Legal</h6>
		<div class="form-group row">
			<div class="col-md-4">
				<label for="nombre" class="">{{ __('Nombre') }}</label>

				<input placeholder="Nombre" id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="@if(isset($solicitud->nombre)){{$solicitud->nombre}} @endif" required >

				@error('representante_legal')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>

			<div class="col-md-4">
				<label for="ap_paterno" class="">{{ __('Apellido Paterno') }}</label>
				<input placeholder="Apellido Paterno" id="ap_paterno" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" type="text" maxlength="25" class="form-control  @error('apellido_paterno') is-invalid @enderror" name="apellido_paterno" value="{{old('apellido_paterno')}}@if(isset($solicitud->apellido_paterno)){{$solicitud->apellido_paterno}} @endif" required >
				@error('apellido_paterno')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
			<div class="col-md-4">
				<label for="ap_materno" class="">{{ __('Apellido Materno') }}</label>
				<input placeholder="Apellido Materno"  id="ap_materno" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" type="text" maxlength="25" class="form-control  @error('apellido_paterno') is-invalid @enderror" name="apellido_materno" value="{{old('apellido_materno')}}@if(isset($solicitud->apellido_materno)){{$solicitud->apellido_materno}} @endif" required >
				@error('representante_legal')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>

		</div>
		<hr>
		<h6> Domicilio Fiscal</h6>
		<hr>
		<div class="form-group row">
			<div class="col-md-3">
				<label for="selectEstatus">País</label>
				<select required="" class="form-control {{ $errors->has('pais_id') ? ' is-invalid' : '' }}" id="pais" name="pais_id" onchange="estados(this.value)">
					<option value="">Seleccione una Opción</option>
					@foreach($paises as $pais)
					<option value="{{ $pais->id }}">{{ $pais->nombre }}</option>
					@endforeach
				</select>
				@if ($errors->has('pais_id'))
				<span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('estado') }}</strong>
				</span>
				@endif
			</div>
			<div class="col-md-3">
				<label for="selectEstatus">Estado</label>
				<select required="" class="form-control {{ $errors->has('estado_id') ? ' is-invalid' : '' }}" id="estado" name="estado_id"  onchange="municipios(this.value)">
					<option value="">Seleccione una Opción</option>

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

			<div class="col-md-3">
				<label for="email" class="">{{ __('Colonia') }}</label>
				<input placeholder="Colonia" id="colonia" type="text" class="form-control @error('colonia') is-invalid @enderror" name="colonia" value="{{old('colonia')}}@if(isset($solicitud->colonia)){{$solicitud->colonia}} @endif" required autocomplete="direccion">

				@error('colonia')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>

		</div>

		<div class="form-group row">
			<div class="col-md-3">
				<label for="selectEstatus">Tipo de Vialidad</label>
				<select required="" class="form-control {{ $errors->has('vialidad_id') ? ' is-invalid' : '' }}" id="vialidad" name="vialidad_id">
					<option value="">Seleccione una Opción</option>
					@foreach($vialidades as $vialidad)
					<option value="{{ $vialidad->id }}">{{ $vialidad->nombre }}</option>
					@endforeach
				</select>
				@if ($errors->has('vialidad_id'))
				<span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('estado') }}</strong>
				</span>
				@endif
			</div>
			<div class="col-md-3">
				<label for="email" class="">{{ __('Nombre de la Vialidad') }}</label>
				<input placeholder="Nombre de la vialidad" id="colonia" type="text" class="form-control @error('colonia') is-invalid @enderror" name="vialidad" value="{{old('vialidad')}}@if(isset($solicitud->vialidad)){{$solicitud->vialidad}} @endif" required autocomplete="direccion">

				@error('colonia')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>

			<div class="col-md-2">
				<label for="Exterior" class="">{{ __('Número Exterior') }}</label>
				<input placeholder="Núm Exterior" id="exterior" type="text" maxlength="6" class="form-control @error('numero_exterior') is-invalid @enderror" name="numero_exterior"  value="{{old('numero_exterior')}}@if(isset($solicitud->numero_exterior)){{$solicitud->numero_exterior}} @endif" required autocomplete="direccion">

				@error('numero_exterior')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
			<div class="col-md-2">
				<label for="Interior" class="">{{ __('Número Interior') }}</label>
				<input placeholder="Núm Interior" id="interior" type="text" maxlength="6" class="form-control @error('direccion') is-invalid @enderror"  name="numero_interior" value="{{old('numero_interior')}}@if(isset($solicitud->numero_interior)){{$solicitud->numero_interior}} @endif" autocomplete="direccion">

				@error('direccion')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
			<div class="col-md-2">
				<label for="Interior" class="">{{ __('Código Postal') }}</label>
				<input placeholder="Código Postal" id="codigo_postal" type="text" maxlength="6" class="form-control @error('direccion') is-invalid @enderror"  name="codigo_postal" value="{{old('codigo_postal')}}@if(isset($solicitud->codigo_postal)){{$solicitud->codigo_postal}} @endif" required autocomplete="direccion">

				@error('direccion')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>

		</div>
		@if(isset($solicitud))
		<button type="submit" class="btn btn-info">Actualizar</button>
		@else
		<button type="submit" class="btn btn-info">Guardar/Siguiente</button>
		@endif
	</form>
<!-- Modal Aviso Rupcova No esta vigente -->
	<div class="modal fade" id="existeRfc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"> Aviso</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center">
					Estimado usuario.
					No encontramos tu RFC en el
					Registro Único de Proveedores y Contratistas Validados (RUPCOVA).
					<br> Te invitamos a que lo efectúes en la dirección
					<a href="http://rupcova.zacatecas.gob.mx" target="_blanck">http://rupcova.zacatecas.gob.mx</a>
					<br> Te recordamos que la cédula de proveedor es indispensable para pertenecer al Padrón de Evaluadores.

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
				</div>
			</div>
		</div>
	</div>

<!-- Modal Aviso Rupcova Si esta vigente -->
	<div class="modal fade" id="existeRfcc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"> Aviso</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center">
					Te recordamos que tu cédula de proveedor no podrá estar
					vencida durante el proceso de prestación de servicios.
					<br> Para consultar la vigencia de tu cédula visita.
					<br>
					<a href="http://rupcova.zacatecas.gob.mx" target="_blanck">http://rupcova.zacatecas.gob.mx</a>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="bienvenida" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog text-center modal-lg " role="document">
			<div class="modal-content text-center ">
				<div class="modal-header text-center ">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="row">
					<div class="col-4 d-flex justify-content-end align-items-center">
						<img class="h-60 w-50 "src="{{asset('imagenes/SIEVALUA-vertical.png')}}" alt="">
					</div>
					<div class="col-8">
						<div class="modal-body text-black mr-5">
							{!! Session::get('modal') !!}
							<h2 class="pt-4 mt-4">BIENVENIDO, {{ Auth::user()->nombre }}</h2>
							<h3 class="mb-5">HEMOS COMPLETADO TU REGISTRO</h3>
						</div>
					</div>
				</div>

				<div class="modal-footer justify-content-center ">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Aceptar</button>
				</div>
			</div>
		</div>
	</div>

	@endsection
	@section('script')


	<script type="text/javascript">

	$('#bienvenida').modal('show');

		@if(isset($solicitud->pais_id))
		$('#pais option[value="' +{{$solicitud->pais_id}} +'"]').prop("selected", true);
		@endif
		@if(isset($solicitud->vialidad_id))
		$('#vialidad option[value="' +{{$solicitud->vialidad_id}} +'"]').prop("selected", true);
		@endif


		@if(isset($solicitud->estado_id))
		$.get("/estados/"+{{$solicitud->pais_id}},function(response){
			if (response.length ==0){

				$('#estado').empty().append('<option selected="selected" disabled value="0">N/A</option>');

			}else{

				var select = document.getElementById("estado");
				for(index in response) {
					select.options[select.options.length] = new Option(response[index].nombre, response[index].id);
				}

			}


			$('#estado option[value="' +{{$solicitud->estado_id}}+'"]').prop("selected", true);
		});
		@endif

		@if(isset($solicitud->municipio_id))

		$.get("/municipios/"+{{$solicitud->estado_id}},function(response){
			var select = document.getElementById("municipio");


			@if ($solicitud->pais_id!= 108)
			$('#estado').empty().append('<option selected="selected" disabled value="0">N/A</option>');
			$('#municipio').empty().append('<option selected="selected" disabled value="0">N/A</option>');
			@else
			for(index in response) {
				select.options[select.options.length] = new Option(response[index].nombre, response[index].id);
			}

			$('#municipio option[value="' +{{$solicitud->municipio_id}}+'"]').prop("selected", true);
			@endif

		});
		@endif


		function estados(id){

			$.get("/estados/"+id,function(response){
				console.log(response);
				if (response.length ==0){

					$('#estado').empty().append('<option selected="selected" disabled value="0">N/A</option>');
					$('#municipio').empty().append('<option selected="selected" disabled value="0">N/A</option>');
				}else{

					var select = document.getElementById("estado");
					$('#estado').empty().append('<option selected="selected" disabled value="">Selecciona una Opción </option>');
					for(index in response) {
						select.options[select.options.length] = new Option(response[index].nombre, response[index].id);
					}

				}


			});
		}

		function municipios(id){
			$.get("/municipios/"+id,function(response){
				$('#municipio').empty().append('<option selected="selected" disabled value="2464">N/A</option>');
				var datos =$('#estado').is(':empty');
				if (datos) {
					document.getElementById('municipio').disabled=true;
				}else{
					document.getElementById('municipio').disabled=false;
				}
				var select = document.getElementById("municipio");
				$('#municipio').empty().append('<option selected="selected" disabled value="">Selecciona una Opción </option>');
				for(index in response) {
					select.options[select.options.length] = new Option(response[index].nombre, response[index].id);
				}
			});
		}

		@if (!isset($solicitud->pais_id))
			$('#pais').val(108);
		@endif
		@if (!isset($solicitud->estado_id))
			estados(108);

		@endif












	@if ($errors->count()>0)
    	$('#vialidad').val({{old('vialidad_id')}});
    	/*$('#pais').val({{old('pais_id')}});
    	$('#estado').val({{old('estado_id')}});
    	$('#municipio').val({{old('municipio_id')}});*/
	@endif
		{{-- input mask --}}
		$('#telefono').mask('(000) 000-00-00');
		$('#telefono2').mask('(000) 000-00-00');
		$('#codigo_postal').mask('00000');
		$('#exterior').mask('00000');

		@if (Auth::user()->tipo_persona =='fisica')
		$('#rfc').mask('AAAASSSSSSYYY', {'translation': {
			A: {pattern: /[A-Za-z]/},
			S: {pattern: /[0-9]/},
			Y: {pattern: /[A-Za-z-0-9]/}
		}
	});
		@else

		$('#rfc').mask('AAASSSSSSYYY', {'translation': {
			A: {pattern: /[A-Za-z]/},
			S: {pattern: /[0-9]/},
			Y: {pattern: /[A-Za-z-0-9]/}
		}
	   });



		@endif

		$('#rfc').keyup(function(){
			$(this).val($(this).val().toUpperCase());
    	});
    	$('#nombre').keyup(function(){

        	$(this).val($(this).val().toUpperCase());
    	});
    	@if ($existe[0]->existe!=1)
    		$('#existeRfc').modal('show');
			@else
			$('#existeRfcc').modal('show');
    	@endif


	</script>


	@endsection
