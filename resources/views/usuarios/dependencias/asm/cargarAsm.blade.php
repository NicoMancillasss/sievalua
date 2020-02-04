@extends('usuarios.dependencias.layouts.main')
@section('status','show')
@section('link','active')
@section('content')
{{-- <h5>El despacho que te evaluará es: {{Auth::user()->despachoEvaluador()->nombre}}</h5>
<h5>con el programa: {{Auth::user()->evaluacion()->evaluacion->programa->nombre}}</h5> --}}
<h5 class="text-center">Cargar Aspecto Suceptible de Mejora {{$asm->ejercicio->año}}</h5>
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark"> Programa: {{$asm->evaluacion->programa->nombre}}</h6>
		<div class="dropdown no-arrow">
			<a href="{{ route('dependencia.ejercicio.programa.asm',[$evaluacion->ejercicio_id,$evaluacion]) }}" class="btn btn-info btn-sm hvr-box-shadow-outset">Regresar</a>
 		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		@if($asm->estatus_id==2 && $asm->correcciones !='Ninguno')
					<td colspan="13"><div class="alert alert-danger" role="alert">
						<strong>¡Corrección!</strong>  Tiene Correcciones.
						<pre>{{$asm->correcciones}}</pre>
					</div></td>
					@endif
		<form method="POST" action="{{ route('dependencia.ejercicio.programa.asm.guardar',[$evaluacion,$asm->id]) }}">
			@csrf
			@method('POST')
			<div class="form-group row ">
				<div class="col-md-6">
						<label for="selectEstatus">Fuente de Información</label>
						<select selected   required="" class="form-control  $errors->has('estatus') ? ' is-invalid' : '' " data-style="btn-primary" id="evaluacion"  name="tipo_evaluacion_id">
						<option value="{{$evaluacion->tipoEvaluacion->id}}">{{$evaluacion->tipoEvaluacion->nombre}}</option>

						</select>
					</div>
				<div class="col-md-6">
					<label for="selectEstatus">Tema</label>
					<select multiple required="" class="form-control selectMultiple  $errors->has('estatus') ? ' is-invalid' : '' " id="temas" name="temas[]">
						@foreach ($temas->where('tipo_evaluacion_id',$evaluacion->tipo_evaluacion) as $tema)
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
					<label for="inicio">Aspecto Suceptible de Mejora</label>
					<textarea name="asm" id="asm" class="form-control">{{$asm->asm}}</textarea>
				</div>
            </div>


            <div class="form-group row">
                 <div class="col-md-12">
					<ul class="list-group">
						@forelse ($asm_recomendados as $recomendado)
							<li class="list-group-item">

								@if (!in_array($recomendado->id,$engloba->pluck('engloba_asm_id')->toArray()))
									<input  name="engloba[]" id="" class="btn btn-primary" type="checkbox" value="{{$recomendado->id}}" @if(in_array($recomendado->id,[$asm->id])) checked  readonly="readonly" @endif >

									@else
									<a data-toggle="modal" data-target="#verAsm" href=""><span class="badge badge-danger badge-pill">Asignado</span></a>
								@endif
								{{$recomendado->asm}}
							</li>
						@empty
							<li class="list-group-item">Ningún Asm</li>
						@endforelse
					</ul>
				</div>
           </div>


            {{--
            <div class="form-group row">
				<div class="col-12">
					<label for="inicio">Recomendación</label>
					<textarea name="recomendacion" id="recomendacion" class="form-control">{{$asm->recomendacion}}</textarea>
				</div>
			</div>
            --}}

			<div class="form-group row">
				<div class="col-md-6">
					<label for="inicio">Documento de Referencia</label>
					<input required=""  type="text" id="documento_referencia" name="documento_referencia" class="form-control {{ $errors->has('documento_referencia') ? ' is-invalid' : '' }}" value="{{$asm->documento_referencia}}" >
					@if ($errors->has('documento_referencia'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('documento_referencia') }}</strong>
					</span>
					@endif
				</div>
			</div>
{{-- 			<div class="form-group" >
			<hr>
				<label for=""><strong>Criterios de selección</strong></label>
				<div class="form-check">
					<input class=" " type="checkbox" value="1" id="defaultCheck1" name="criterios[]">
					Claridad
					<input class="ml-3 " type="checkbox" value="2" id="defaultCheck1" name="criterios[]">
					Factibilidad
					<input class=" ml-3" type="checkbox" value="3" id="defaultCheck1" name="criterios[]">
					Justificación
					<input class=" ml-3" type="checkbox" value="4" id="defaultCheck1" name="criterios[]">
					Relevancia

				</div>
			</div> --}}
			<hr>
			<div class="form-group" >
				<label for=""><strong>Actores Involucrados en su solución</strong></label>
				<div class="form-check">

					@foreach ($actores as $actor)
					<input  onchange="Clasificacion()" class=" " type="checkbox" value="{{$actor->id}}" id="check{{$actor->id}}" name="actores[]"@if(in_array($actor->id,$asm->actor->pluck('actor_id')->toArray())) checked @endif>
					{{$actor->nombre}}
					@endforeach
				</div>
			</div>
			<hr>
			<div class="form-group" >
				<label for=""><strong>Con respecto al Objetivo del Programa, este Hallazgo.</strong></label>
					@foreach ($acciones as $accion)
					<div class="form-check">
						<input class="form-check-input" type="radio" name="accion_id"  value="{{$accion->id}}">
						<label class="form-check-label" for="exampleRadios1">
							<p class="text-justify"><strong>{{$accion->nombre}}: </strong> {{$accion->descripcion}}</p>
						</label>
					</div>

					@endforeach

				<div class="col-md-12">
					<label for="inicio"><strong>Justificación de acción</strong></label>
					<input required=""  type="text" id="justificacion_accion" name="justificacion_accion" class="form-control {{ $errors->has('justificacion_accion') ? ' is-invalid' : '' }}" value="{{ old('justificacion_accion') }}" >
					@if ($errors->has('justificacion_accion'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('justificacion_accion') }}</strong>
						</span>
					@endif
				</div>
			</div>
			<hr>
			{{-- Nivel de Prioridad --}}
			<div class="form-group row">
                <div class="col-md-3">
                    <label for=""><strong>Nivel de Prioridad</strong></label>
                    <br>
                    @foreach ($prioridades as $prioridad)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="prioridad_id" id="inlineRadio1" value="{{$prioridad->id}}">
                            <label class="form-check-label" for="inlineRadio1">{{$prioridad->nombre}}</label>
                        </div>
                    @endforeach


                </div>

                <div class="col-md-9">
                    <label for="inicio"><strong>Justificación de nivel de prioridad</strong></label>
                    <input 	value="" required=""  type="text" id="prioridad_justificacion" name="prioridad_justificacion" class="form-control {{ $errors->has('prioridad_justificacion') ? ' is-invalid' : '' }}" value="{{ old('prioridad_justificacion') }}" >
                    @if ($errors->has('prioridad_justificacion'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('prioridad_justificacion') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">

				<div class="area_responsable  col-md-6">
						<label for="inicio"><strong>Área Responsable</strong></label>
						<input   type="text" id="area_responsable" name="area_responsable" class="form-control {{ $errors->has('area_responsable') ? ' is-invalid' : '' }}" value="{{ old('area_responsable') }}" >
						@if ($errors->has('area_responsable'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('area_responsable') }}</strong>
						</span>
						@endif
				</div>

				<div class="area_coordinadora col-md-6">
						<label for="inicio"><strong>Área Coordinadora</strong></label>
						<input   type="text" id="area_coordinadora" name="area_coordinadora" class="form-control {{ $errors->has('area_coordinadora') ? ' is-invalid' : '' }}" value="{{ old('area_coordinadora') }}" >
						@if ($errors->has('area_coordinadora'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('area_coordinadora') }}</strong>
						</span>
						@endif


					</div>
			</div>

			<div class="form-group row">

				<div class="col-md-4">
					<label for="inicio"><strong>Fecha Término</strong></label>
						<input required=""  type="date" id="fecha_termino" name="fecha_termino" class="form-control {{ $errors->has('fecha_termino') ? ' is-invalid' : '' }}" value="{{ old('fecha_termino') }}" >
						@if ($errors->has('fecha_termino'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('fecha_termino') }}</strong>
						</span>
						@endif
				</div>
				<div class="col-md-4">
					<label for="inicio"><strong>Resultados Esperados</strong></label>
						<input required=""  type="text" id="resultados_esperados" name="resultados_esperados" class="form-control {{ $errors->has('resultados_esperados') ? ' is-invalid' : '' }}" value="{{ old('resultados_esperados') }}" >
						@if ($errors->has('resultados_esperados'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('resultados_esperados') }}</strong>
						</span>
						@endif
				</div>
				<div class="col-md-4">
					<label for="inicio"><strong>Productos y/o Evidencias</strong></label>
						<input required=""  type="text" id="evidencia" name="evidencia" class="form-control {{ $errors->has('evidencia') ? ' is-invalid' : '' }}" value="{{ old('evidencia') }}" >
						@if ($errors->has('evidencia'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('evidencia') }}</strong>
						</span>
						@endif
				</div>
			</div>




			<div class="form-group">
				@if($evaluacion->activo==1)
					<button type="submit" class="btn btn-block btn-primary hvr-box-shadow-outset">Guardar ASM</button>
				@endif
			</div>

		</form>

	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">

			@if($asm->otro_tema !='')
				$(".otro_tema").show();
			@else
				$(".otro_tema").hide();
			@endif

		$('#evaluacion option[value="' +{{$asm->evaluacion_id}} +'"]').prop("selected", true);
		$("#temas").val({{$asm->tema->pluck('tema_id')}});
		//$('input[name=nivel_prioridad][value={{ $asm->nivel_prioridad }}]').attr('checked', true);
		//$('input[name=accion][value={{ $asm->accion }}]').attr('checked', true);
		$('input[name=prioridad_id][value={{ $asm->prioridad_id }}]').attr('checked', true);
		$('input[name=accion_id][value={{ $asm->accion_id }}]').attr('checked', true);

		$(".area_responsable").hide();
		$(".area_coordinadora").hide();

		function Clasificacion()
        {
            var aspecto =[];
            $("input[name='actores[]']").each(function (index) {
            aspecto.push($(this).prop('checked'));
            });

            console.log(aspecto);
            if (JSON.stringify(aspecto) == JSON.stringify([true,false,false,false,false])) {
                $(".area_coordinadora").hide();

                $(".area_responsable").show();
                console.log("Especifico");
            }else if(JSON.stringify(aspecto) == JSON.stringify([true,true,false,false,false])){
                $(".area_responsable").hide();

                $(".area_coordinadora").show();
                console.log("institucional");
            }else{
                $(".area_responsable").hide();
                $(".area_coordinadora").hide();

            }

        }



</script>
@endsection
