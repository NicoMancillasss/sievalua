<!--Modlal Crear -->
<div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Crear Nuevas Evaluacion PAE</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="{{ route('evaluaciones.store') }}">
					@csrf
					@method('POST')

					<div class="form-group">
						<label for="selectEstatus">Dependencia</label>
						<select required="" class="form-control {{-- $errors->has('estatus') ? ' is-invalid' : '' --}}" id="selectEstatus" name="dependencia_id">
							<option value="">Seleccione una Opcion</option>
							@foreach ($dependencias as $dependencia)
								<option value="{{$dependencia->id}}">{{$dependencia->nombre}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="selectEstatus">Ejercicio</label>
						<select required="" class="form-control {{-- $errors->has('estatus') ? ' is-invalid' : '' --}}" id="selectEstatus" name="ejercicio_id">
							<option value="">Seleccione una Opcion</option>
							@foreach ($ejercicios as $ejercicio)
								<option value="{{$ejercicio->id}}">{{$ejercicio->año}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="selectEstatus">Programa</label>
						<select required="" class="form-control {{-- $errors->has('estatus') ? ' is-invalid' : '' --}}" id="selectEstatus" name="programa_id">
							<option value="">Seleccione una Opcion</option>
							@foreach ($programas as $programa)
								<option value="{{$programa->id}}">{{$programa->nombre}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="selectEstatus">Tipo de Evaluación</label>
						<select required="" class="form-control {{-- $errors->has('estatus') ? ' is-invalid' : '' --}}" id="selectEstatus" name="tipo_evaluacion">
							<option value="">Seleccione una Opcion</option>
							@foreach ($tipos_evaluaciones as $tipos_evaluacion)
								<option value="{{$tipos_evaluacion->id}}">{{$tipos_evaluacion->nombre}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="inicio">Entregable</label>
						<input required=""  type="text" id="entregable" name="entregable" class="form-control {{ $errors->has('entregable') ? ' is-invalid' : '' }}" value="{{ old('entregable') }}" >
						@if ($errors->has('entregable'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('entregable') }}</strong>
						</span>
						@endif
					</div>

					<div class="modal-footer">
						<div class="form-group">
							<button type="submit" class="btn btn-primary hvr-box-shadow-outset"><i class="fas fa-save"></i> Guardar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
