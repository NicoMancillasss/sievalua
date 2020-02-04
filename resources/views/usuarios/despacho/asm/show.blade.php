@extends('usuarios.despacho.layouts.main')
@section('content')
<h5 class="text-center">Hallazgo Susceptibles de Mejora {{$asm->ejercicio->año}} </h5>
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark"> Programa:{{$asm->evaluacion->programa->nombre}} </h6>
		<div class="dropdown no-arrow">
			<a href="{{ route('despacho.asm.recomendados',[Crypt::encrypt($postulacion->id)]) }}" class="btn btn-info btn-sm hvr-box-shadow-outset">Regresar</a>

		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">

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
						<select multiple required="" class="form-control selectMultiple  $errors->has('estatus') ? ' is-invalid' : '' " id="temas" name="temas[]">
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
				<div class="form-check">

					@foreach ($actores as $actor)
					<input class=" " type="checkbox" value="{{$actor->id}}" id="check{{$actor->id}}" name="actores[]"@if(in_array($actor->id,$asm->actor->pluck('actor_id')->toArray())) checked @endif>
					{{$actor->nombre}}
					@endforeach
				</div>
			</div>


				<div class="form-group" >
					<label for=""><strong>Con respecto al Objetivo del Programa, este Hallazgo.</strong></label>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="accion" id="exampleRadios1" value="Corrige">
						<label class="form-check-label" for="exampleRadios1">
							<p class="text-justify"><strong>Corrige:</strong> Corrige actividades o procesos del programa. Se refiere a aquellos aspectos que están
								relacionados con las Actividades de la Matriz de Indicadores para Resultados (MIR) del programa, tales
								como mejoras en sus indicadores, cambios no sustantivos en sus Reglas de Operación, mejoras en los
							procesos operativos, firma de convenios, ejercicios presupuestarios, entre otros.</p>
						</label>
					</div>
					{{-- Otro --}}
					<div class="form-check">
						<input class="form-check-input" type="radio" name="accion" id="exampleRadios1" value="Modifica">
						<label class="form-check-label" for="exampleRadios1">
							<p class="text-justify"><strong>Modifica:</strong>Modifica apoyos del programa. Se refiere a aquellos aspectos que están relacionados con los
								Componentes de la MIR del programa, es decir, modificaciones o mejoras en los bienes y/o servicios que
							brinda.</p>
						</label>
					</div>

					{{-- Otro --}}
					<div class="form-check">
						<input class="form-check-input" type="radio" name="accion" id="exampleRadios1" value="Adiciona">
						<label class="form-check-label" for="exampleRadios1">
							<p class="text-justify"><strong>Adiciona:</strong>Adiciona o reubica el programa. Se refiere a aquellos aspectos que buscan reforzar el programa
								por medio de la generación de sinergias con otros programas o incluso la integración de dos o más
								programas en uno solo, así como acciones para que el programa sea operado por otra dependencia,
							entidad o unidad responsable.</p>
						</label>
					</div>
					{{-- Otro --}}
					<div class="form-check">
						<input class="form-check-input" type="radio" name="accion" id="exampleRadios1" value="Reorienta">
						<label class="form-check-label" for="exampleRadios1">
							<p class="text-justify"><strong>Reorienta:</strong>Reorienta sustancialmente el programa. Se refiere a aquellos aspectos que están relacionados
								con el Propósito del programa, como por ejemplo acciones relacionadas con la planeación estratégica,
								con la focalización, con mejoras en la definición de su población objetivo, con la realización de
							evaluaciones de impacto, entre otros.</p>
						</label>
					</div>
					{{-- Otro --}}
					<div class="form-check">
						<input class="form-check-input" type="radio" name="accion" id="exampleRadios1" value="Suspende">
						<label class="form-check-label" for="exampleRadios1">
							<p class="text-justify"><strong>Suspende parcial o totalmente el Programa:</strong>Se refiere a aquellos aspectos que derivan en la suspensión
							parcial o total del programa.</p>
						</label>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-md-3">
						<label for=""><strong>Nivel de Prioridad</strong></label>
						<br>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="nivel_prioridad" id="inlineRadio1" value="Alto">
							<label class="form-check-label" for="inlineRadio1">Alto</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="nivel_prioridad" id="inlineRadio1" value="Medio">
							<label class="form-check-label" for="inlineRadio1">Medio</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="nivel_prioridad" id="inlineRadio1" value="Bajo">
							<label class="form-check-label" for="inlineRadio1">Bajo</label>
						</div>

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



	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
	$("input,textarea,select").attr("readonly", "true");

		$(document).ready(function () {

			@if($asm->otro_tema !='')
				$(".otro_tema").show();
			@else
				$(".otro_tema").hide();
			@endif

			$("#temas").change(function () {
			var existe=$(this).val();
			console.log($(this).val());
			//console.log(existe);
			if (existe.includes('10')) {
				$(".otro_tema").show();
				$("#otro_tema").attr("required", "true");
			}else{
				$(".otro_tema").hide();
				$("#otro_tema").val("");
			}


			});
		});
		$("#temas").val({{$asm->tema->pluck('tema_id')}});
		$('#evaluacion option[value="' +{{$asm->evaluacion_id}} +'"]').prop("selected", true);
		$('input[name=nivel_prioridad][value={{ $asm->nivel_prioridad }}]').attr('checked', true);
		$('input[name=accion][value={{ $asm->accion }}]').attr('checked', true);

        $("#otro_tema").attr("onlyread", "true");
</script>

@endsection

