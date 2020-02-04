
<table class="table table-bordered">
	<thead>
		<tr>
			<th scope="col">Folio</th>
			<th scope="col">Evaluaciones Aceptadas</th>
			<th scope="col">Fecha Cita</th>
			<th scope="col">Lugar</th>
		</tr>
	</thead>
	<tbody>
		@foreach($aceptados as $aceptado)
		<tr>
			<td>{{$aceptado->folio}}</td>
			<td>
				@foreach($aceptado->postula->where('estatus',1)->where('cita','<>','') as $postulacion)

					<i class=" far fa-check-square"></i>   {{$postulacion->evaluacion->programa->nombre}}
			
				@endforeach
			</td>
		</tr>
		@endforeach

	</tbody>
</table>