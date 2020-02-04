@extends('usuarios.despacho.layouts.main')
@section('content')
<h5 class="text-center">Hallazgos {{$asm->ejercicio->año}} </h5>
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark"> Programa:{{$asm->evaluacion->programa->nombre}} </h6>
		<div class="dropdown no-arrow">
			<a href="{{ route('despacho.asm.recomendados',[Crypt::encrypt($postulacion->id)]) }}" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-angle-left"></i> Regresar</a>

		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		<form method="POST" action="{{ route('despacho.asm.actualizar.despacho',[Crypt::encrypt($asm->id),Crypt::encrypt($postulacion->id)]) }}">
			@csrf
			@method('PUT')
			<div class="card border-dark p-3">

				<div class="form-group row ">
					<div class="col-md-6">
						<label for="selectEstatus">Programa</label>
						<select required=""  class="form-control is-valid  $errors->has('estatus') ? ' is-invalid' : '' " onchange="Dependencia(this.value)"  name="evaluacion_id">
							<option selected value="{{$postulacion->evaluacion->id}}">{{$postulacion->evaluacion->programa->nombre}}</option>
							{{-- @foreach ($programas as $programa)
								<option value="{{$programa->id}}">{{$programa->programa->nombre}}</option>
							@endforeach --}}

						</select>
					</div>
					<div class="col-md-6">
						<label for="selectEstatus">Dependencia</label>
						<select  required="" class="form-control is-valid  $errors->has('estatus') ? ' is-invalid' : '' " id="dependencia" name="dependencia_id">
							<option selected value="{{$postulacion->evaluacion->dependencia->id}}">{{$postulacion->evaluacion->dependencia->nombre}}</option>
							{{-- @foreach ($programas as $programa)
								<option value="{{$programa->dependencia->id}}">{{$programa->dependencia->nombre}}</option>
							@endforeach --}}
						</select>
					</div>
				</div>


				<div class="form-group row">
					<div class="col-md-12">
						<label for="selectEstatus">Despacho</label>
						<select  required="" class="form-control is-valid  $errors->has('estatus') ? ' is-invalid' : '' " id="despacho" name="despacho_id">
							<option selected value="{{$postulacion->solicitud->user->id}}">{{$postulacion->solicitud->user->nombre}}</option>
							{{-- @foreach ($seleccionadas as $despacho)
								<option value="{{$despacho->solicitud->user->id}}">{{$despacho->solicitud->user->nombre}}</option>
							@endforeach --}}
						</select>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-md-6">
						<label for="selectEstatus">Tipo de Evaluación</label>
						<select required="" class="form-control is-valid  $errors->has('estatus') ? ' is-invalid' : '' " id="selectEstatus" name="tipo_evaluacion_id">
							<option selected value="{{$postulacion->evaluacion->tipoEvaluacion->id}}">{{$postulacion->evaluacion->tipoEvaluacion->nombre}}</option>
							{{-- @foreach ($fuentes as $fuente)
							<option value="{{$fuente->id}}">Evaluación {{$fuente->nombre}}</option>
							@endforeach --}}
						</select>
					</div>

				</div>
			</div>
			<div class="card border-dark mt-3 p-3">
				<div class="form-group row">
					<div class="col-md-12">
						<label for="selectEstatus">Tema</label>
						<select multiple required="" onchange="otroTema()" class="form-control selectMultiple $errors->has('estatus') ? ' is-invalid' : '' " id="temas" name="temas[]">
							@foreach ($temas->where('tipo_evaluacion_id',$postulacion->evaluacion->tipoEvaluacion->id) as $tema)
								<option value="{{$tema->id}}">{{$tema->nombre}}</option>
							@endforeach

						</select>
					</div>
				</div>

					<div class="form-group row otro_tema">
					<div class="col-md-6">
						<label for="selectEstatus">Otro Tema</label>
						<input type="text" class="form-control" name="otro_tema" id="otro_tema" value="{{$asm->otro_tema}}" placeholder="Especifique otro tema">
					</div>

				</div>

				<div class="form-group row">
					<div class="col-12">
						<label for="inicio">Hallazgo</label>
						<textarea required name="asm" class="form-control">{{ $asm->asm }}</textarea>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-12">
						<label for="inicio">Recomendación</label>
						<textarea required name="recomendacion" class="form-control">{{ $asm->recomendacion }}</textarea>
					</div>
				</div>
			</div>
			<div class="card border-dark mt-3 p-3">
				<div class="form-group" >
                    <label for=""><strong>Actores Involucrados en su solución</strong></label>
                    <div class="form-check row">

                        @foreach ($actores as $actor)
                            <div class="col-sm-12">
                                <input class=" " type="checkbox" value="{{$actor->id}}" id="check{{$actor->id}}" name="actores[]"@if(in_array($actor->id,$asm->actor->pluck('actor_id')->toArray())) checked @endif>
                                {{$actor->nombre}}
                            </div>
                        @endforeach
                    </div>
                </div>


				<div class="form-group" >
					<label for=""><strong>Con respecto al Objetivo del Programa, este Hallazgo.</strong></label>
					@foreach ($acciones as $accion)
					<div class="form-check">
						<input class="form-check-input" type="radio" name="accion_id"  value="{{$accion->id}}">
						<label class="form-check-label" for="exampleRadios1">
							<p class="text-justify"><strong>{{$accion->nombre}}: </strong>{{$accion->descripcion}}</p>
						</label>
					</div>

					@endforeach
					<div class="col-md-12">
						<label for="inicio"><strong>Justificación de acción</strong></label>
						<input required="" value="{{$asm->justificacion_accion}}"  type="text" id="justificacion_accion" name="justificacion_accion" class="form-control {{ $errors->has('justificacion_accion') ? ' is-invalid' : '' }}" value="{{ old('justificacion_accion') }}" >
						@if ($errors->has('justificacion_accion'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('justificacion_accion') }}</strong>
						</span>
						@endif
					</div>
					<hr>

				</div>



				<div class="form-group row">
					<div class="col-md-3">
						<label for=""><strong>Nivel de Prioridad</strong></label>
						<br>
						@foreach ($prioridades as $prioridad)
							<div class="form-check form-check-inline col-sm-12 col-lg-2">
								<input class="form-check-input" type="radio" name="prioridad_id" id="inlineRadio1" value="{{$prioridad->id}}">
								<label class="form-check-label" for="inlineRadio1">{{$prioridad->nombre}}</label>
							</div>
						@endforeach

					</div>

					<div class="col-md-9">
						<label for="inicio"><strong>Justificación de nivel de prioridad</strong></label>
						<input 	value="{{$asm->prioridad_justificacion}}" required=""  type="text" id="prioridad_justificacion" name="prioridad_justificacion" class="form-control {{ $errors->has('prioridad_justificacion') ? ' is-invalid' : '' }}" value="{{ old('prioridad_justificacion') }}" >
						@if ($errors->has('prioridad_justificacion'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('prioridad_justificacion') }}</strong>
						</span>
						@endif
					</div>
				</div>
			</div>







		<div class="form-group">
			<button type="submit" class="btn btn-block btn-primary mt-3"><i class="fas fa-save"></i> Guardar</button>
		</div>

		</form>

	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">



		$(document).ready(function () {

			@if($asm->otro_tema !='')
				$(".otro_tema").show();
			@else
				$(".otro_tema").hide();
			@endif


			$("#temas").val({{$asm->tema->pluck('tema_id')}});
			$('#evaluacion option[value="' +{{$asm->evaluacion_id}} +'"]').prop("selected", true);
			$('input[name=prioridad_id][value={{ $asm->prioridad_id }}]').attr('checked', true);
			$('input[name=accion_id][value={{ $asm->accion_id }}]').attr('checked', true);
		});

		function otroTema() {
				$(".otro_tema").hide();
				$("#temas").change(function () {
				var existe=$(this).val();

				if (existe.includes('10')) {
					$(".otro_tema").show();
					$("#otro_tema").attr("required", "true");
				}else{
					$(".otro_tema").hide();

				}


				});
			 }

</script>

@endsection

