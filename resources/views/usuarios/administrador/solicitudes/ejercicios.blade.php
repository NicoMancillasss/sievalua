@extends('usuarios.administrador.layouts.main')
@section('status','show')
@section('title','Solicitudes')
@section('link0','active')
@section('content')
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Ejercicios</h6>
		<div class="dropdown no-arrow">
		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		<div class="table table-responsive">
			<table class="table table-hover">
			<thead class="thead-dark">
				<tr class="text-center">
					<th scope="col">Año</th>
					<th scope="col">Estatus</th>
					<th class="text-center">Solicitudes</th>
				</tr>
			</thead>
			<tbody>
				@foreach($ejercicios as $ejercicio)
					<tr class="text-center">
						<th class=" align-middle"><span class="badge badge-success">{{$ejercicio->año}}</span></th>
						<th class=" align-middle">
							@if($ejercicio->activo==1)
								<span class="badge badge-success">Activo</span>
							@else
								<span class="badge badge-danger">Inactivo</span>
							@endif
						</th>
						<th class="text-center">
								<a class="btn btn-info mb-2 btn-sm mr-2 hvr-box-shadow-outset"  data-placement="right" href="{{route('administrador.solicitudes',[$ejercicio->id,'revision'])}}">
									 <i class="fas fa-search"></i> Revisión <span  id="revision" class="badge badge-light">{{$ejercicio->cantidadRevision()}}
									 </span>

								</a>
								<a class="btn btn-warning mb-2 btn-sm mr-2 hvr-box-shadow-outset"  data-placement="right" href="{{route('administrador.solicitudes',[$ejercicio->id,'correccion'])}}">
									 <i class="fas fa-pen"></i> Correcciones<span class="badge badge-light">{{$ejercicio->cantidadCorreccion()}}
									 </span>

								</a>
								<a class="btn btn-danger mb-2 btn-sm mr-2 hvr-box-shadow-outset"  data-placement="right" href="{{route('administrador.solicitudes',[$ejercicio->id,'rechazado'])}}">
									 <i class="fas fa-times"></i> Rechazadas <span class="badge badge-light">{{$ejercicio->cantidadRechazo()}}
									 </span>

								</a>
								<a class="btn btn-success mb-2 btn-sm mr-2 hvr-box-shadow-outset"  data-placement="right" href="{{route('administrador.solicitudes',[$ejercicio->id,'aceptado'])}}">
									 <i class="fas fa-check"></i> Aceptadas <span class="badge badge-light">{{$ejercicio->cantidadAceptado()}}
									 </span>

								</a>



						</th>
					</tr>
				@endforeach

			</tbody>
		</table>

		</div>
{{-- 		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
<canvas id="myChart" width="400" height="100"></canvas>
<script type="text/javascript">

var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Revision', 'Coreccion', 'Rechazadas', 'Aceptadas'],
        datasets: [{
            label: '# Solicitudes',
            data: [3, 19, 3, 5,],
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
	</div>




</div>

@endsection
@section('script')
<script src="{{ asset('js/dataTable.js')}}"></script>
@endsection

