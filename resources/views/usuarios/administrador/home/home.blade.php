@extends('usuarios.administrador.layouts.main')
@section('content')
@section('title','Principal')
@section('hidesidebar','toggled')
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Ejercicios{{-- que tocaron --}}</h6>
		<div class="dropdown no-arrow">
			{{-- <a href=""data-toggle="modal" data-target="#crear" class="btn btn-info btn-sm hvr-box-shadow-outset">Crear</a> --}}
		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		{{-- <table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">Programa</th>
					<th scope="col">Despacho Evaluador</th>

				</tr>
			</thead>
			<tbody>
				@foreach(Auth::user()->despachoEvaluador() as $evaluacion)
				<tr>
					<th>{{$evaluacion->evaluacion->programa->nombre}}</th>
					<th>{{$evaluacion->solicitud->user->nombre}}</th>
				</tr>
				@endforeach
			</tbody>
		</table> --}}
	{{-- 	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
			<canvas id="myChart" width="400" height="100"></canvas>
			<script type="text/javascript">

				var ctx = document.getElementById('myChart').getContext('2d');
				var myChart = new Chart(ctx, {
					type: 'line',
					data: {
						labels: {{$ejercicios->pluck('año')}},
						datasets: [{
							label: '# Programas',
							data: [1, 2],
							backgroundColor: [
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 99, 132, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',

							],
							borderColor: [
							'rgba(54, 162, 235, 1)',
							'rgba(255, 99, 132, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',

							],
							borderWidth: 1
						}]
					},
					options: {
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero: true
								}
							}]
						}
					}
				});
            </script> --}}
		<table class="table table-hover">
			<thead class="thead-dark">
				<tr class="text-center">
					<th scope="col">Año</th>
					<th scope="col">Estatus</th>
					<th scope="col">Acciones</th>
					{{-- <th scope="col"></th> --}}
				</tr>
			</thead>
			<tbody>
				@foreach($ejercicios as $ejercicio)
				<tr class="text-center">
					<th><span class="badge badge-success">{{$ejercicio->año}}</span> - <span class="badge badge-success">{{$ejercicio->año+1}}</span></th>
					<th>
						@if($ejercicio->activo==1)
						<span class="badge badge-success">Activo</span>
						@else
						<span class="badge badge-danger">Inactivo</span>
						@endif
					</th>
					<th>
						<a class="btn btn-warning btn-sm hvr-box-shadow-outset" href="{{ route('administrador.home.asm',$ejercicio->id) }}" >
							<i class="fas fa-file-invoice"></i> Aspectos Susceptibles de Mejora
						</a>
                    </th>
                    {{-- <th>
                        <a href="{{ route('administrador.mensajes.index',$ejercicio->id)}}" class="text-center"><i class="text-success fas fa-sms fa-2x"></i></a>
                    </th> --}}
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>
	</div>

@endsection
@section('script')
<script src="{{ asset('js/dataTable.js')}}"></script>
@endsection
