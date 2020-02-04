<!--Modlal Crear -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Editar Actividad</h5>

				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="{{ route('dependencia.programa.asm.acciones.update',1) }}">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label for="inicio">Actividad</label>
						<input required=""  type="text" id="actividad_edit" name="actividad" class="form-control {{ $errors->has('actividad') ? ' is-invalid' : '' }}" value="{{ old('actividad') }}" >
						@if ($errors->has('actividad'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('actividad') }}</strong>
						</span>
						@endif
					</div>

					@if ($asm->aspecto=="Institucional")
					<div class="form-group">
						<label for="inicio">Área Coordinadora</label>
						<input required=""  type="text" id="area_coordinadora_edit" name="area_coordinadora" class="form-control {{ $errors->has('area_coordinadora') ? ' is-invalid' : '' }}" value="{{ old('area_coordinadora') }}" >
						@if ($errors->has('area_coordinadora'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('area_coordinadora') }}</strong>
						</span>
						@endif
					</div>
					@endif
					<div class="form-group">
						<label for="inicio">Área Responsable</label>
						<input required=""  type="text" id="area_responsable_edit" name="area_responsable" class="form-control {{ $errors->has('area_responsable') ? ' is-invalid' : '' }}" value="{{ old('area_responsable') }}" >
						@if ($errors->has('area_responsable'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('area_responsable') }}</strong>
						</span>
						@endif
					</div>

					<div class="form-group row">
						<div class="col-md-4">
							<label for="selectEstatus">Nivel de Prioridad</label>
							<select required="" class="form-control" name="prioridad_id">
								@foreach ($prioridades as $prioridad)
									<option value="{{$prioridad->id}}">{{$prioridad->nombre}}</option>
								@endforeach

							</select>
						</div>

						<div class="col-md-4">
							<label for="inicio">Fecha Término</label>
							<input required=""  type="date" id="fecha_termino_edit" name="fecha_termino" class="form-control {{ $errors->has('fecha_termino') ? ' is-invalid' : '' }}" value="{{ old('fecha_termino') }}" >
							@if ($errors->has('fecha_termino'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('fecha_termino') }}</strong>
							</span>
							@endif
						</div>

						<div class="col-md-4">
							<label for="inicio">Ponderación en porcentaje</label>
							<input required=""   type="number" id="ponderacionEdit" name="ponderacion" class="form-control {{ $errors->edit->has('ponderacion') ? ' is-invalid' : '' }}" value="{{ old('ponderacion') }}" >
							@if ($errors->edit->has('ponderacion'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->edit->first('ponderacion') }}</strong>
							</span>
							@endif
						</div>

					</div>


					<div class="form-group row">
						<div class="col-md-6">
							<label for="selectEstatus">Resultados Esperados</label>
							<input required=""  type="text" id="resultados_esperados_edit" name="resultados_esperados" class="form-control {{ $errors->has('resultados_esperados') ? ' is-invalid' : '' }}" value="{{ old('resultados_esperados') }}" >
							@if ($errors->has('resultados_esperados'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('resultados_esperados') }}</strong>
							</span>
							@endif
						</div>
						
						<div class="col-md-6">
							<label for="inicio">Evidencias</label>
							<input required=""  type="text" id="evidencias_edit" name="evidencias" class="form-control {{ $errors->has('evidencias') ? ' is-invalid' : '' }}" value="{{ old('evidencias') }}" >
							@if ($errors->has('evidencias'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('evidencias') }}</strong>
							</span>
							@endif
						</div> 
					</div>
					<input type="hidden" id="actividad_id"  value="{{ old('actividad_id') }}" name="actividad_id">




					<div class="modal-footer">
						<div class="form-group">
							<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
