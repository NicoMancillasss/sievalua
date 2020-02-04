@extends('usuarios.administrador.layouts.main')
@section('content')
@section('title','Principal')
@section('hidesidebar','toggled')
<h3 class="text-center text-capitalize">SEGUIMIENTO DE  ASPECTOS SUSCEPTIBLES DE MEJORA PAE-{{$ejercicio->año}}</h3>
<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Ejercicios{{-- que tocaron --}}</h6>
		<div class="dropdown no-arrow">
			{{-- <a href=""data-toggle="modal" data-target="#crear" class="btn btn-info btn-sm hvr-box-shadow-outset">Crear</a> --}}
		</div>
	</div>

    <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" >
                    <thead>
                        <tr style="">
                            <th rowspan="2">Programa o Fondo</th>
                            <th>Dependencia</th>
                            <th>Ejercicio Fiscal Evaluado</th>
                            <th>ASM</th>
                            <th>Doc.Opinión Institucional</th>
                            <th>Doc.Trabajo</th>
                            <th colspan="4">Clasificación por Nivel de prioridad</th>
                            <th colspan="4">Clasificación por Tipo de Actor Involucrado</th>
                            <th>Asm Concluidos al  100%</th>
                            <th>Avance Asm</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="font-size: 10px;">
                            <td colspan="6"></td>
                            <td>Bajo</td>
                            <td>Medio</td>
                            <td>Alto</td>
                            <td>Muy Alto</td>
                            <td>Especifico</td>
                            <td>Institucional</td>
                            <td>Interinstitucional</td>
                            <td>Intergubernamental</td>
                            <td colspan="2"></td>
                        </tr>
                        @foreach ($pae as $pa)
                            <tr class="text-center" style="font-size: 12px;">
                                <td style="font-size: 14px;"><strong>{{$pa->programa}}</strong></td>
                                <td>{{$pa->dependencia}}</td>
                                <td>{{$pa->ejercicio}}</td>
                                <td>{{$pa->asm}}</td>
                                <td>SI</td>
                                <td>SI</td>
                                <td>{{$pa->prioridad_bajo}}</td>
                                <td>{{$pa->prioridad_medio}}</td>
                                <td>{{$pa->prioridad_alto}}</td>
                                <td>{{$pa->prioridad_muy_alto}}</td>

                                <td>{{$pa->aspecto_especifico}}</td>
                                <td>{{$pa->aspecto_institucional}}</td>
                                <td>{{$pa->aspecto_interinstitucional}}</td>
                                <td>{{$pa->aspecto_intergubernamental}}</td>


                                <td>{{$pa->asmTerminados()}}</td>
                                <td>
                                    {{round($pa->asmPorcentaje(),2)}} %
                                </td>
                                {{--
                                <td>{{$pa->asmTerminados()}}</td>
                                <td>
                                    @if($pa->asmPorcentaje()== 100)
                                    <span class="badge badge-success">{{$pa->asmPorcentaje()}} %</span>
                                    @elseif($pa->asmPorcentaje()>0)
                                    <span class="badge badge-warning">{{$pa->asmPorcentaje()}} %</span>
                                    @else
                                    <span class="badge badge-danger">{{$pa->asmPorcentaje()}} %</span>
                                    @endif
                                </td>
                                --}}
                            </tr>

                            @if ($loop->last)
                                <tr class="text-center" style="font-size: 12px;" class="text-center">
                                    <td  colspan="3"><strong>Total</strong></td>
                                    <td>{{$pa->totalAsm()}}</td>
                                    <td></td>
                                    <td></td>
                                    <td>{{$pa->totalPrioridad('Bajo')}}</td>
                                    <td>{{$pa->totalPrioridad('Medio')}}</td>
                                    <td>{{$pa->totalPrioridad('Alto')}}</td>
                                    <td>{{$pa->totalPrioridad('Muy Alto')}}</td>
                                    <td>{{$pa->totalActor('Especifico')}}</td>
                                    <td>{{$pa->totalActor('Institucional')}}</td>
                                    <td>{{$pa->totalActor('Interinstitucional')}}</td>
                                    <td>{{$pa->totalActor('Intergubernamental')}}</td>
                                    <td></td>
                                    <td>{{$pa->totalAsmAvance()}}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        {{--Graficas  --}}
            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>

            <div class="row">
                <div class="col-md-6">
                    <div class="chart-container">
                        <canvas id="myChart1" width="140" height="80"></canvas>
                    </div>
                    <script type="text/javascript">
                        var ctx1 = document.getElementById('myChart1').getContext('2d');
                        var color = Chart.helpers.color;
                        var myChart1 = new Chart(ctx1, {
                            type: 'bar',
                            data: {
                                labels: {{$programas}},
                                datasets: [{
                                    label: '#',
                                    data: {{$totalAsm}},
                                    backgroundColor: [
                                    'rgb(255, 99, 132)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                    ],
                                    borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                    responsive: true,
                                    legend: {
                                        position: 'bottom',
                                    },
                                    title: {
                                        display: true,
                                        text: 'Clasificacion por Nivel de Prioridad'
                                    },
                                    animation: {
                                        animateScale: true,
                                        animateRotate: true
                                    }
                                }
                        });
                    </script>
                </div>
                <div class="col-md-6">
                    <ul class="mt-5">
                        {{--
                        @foreach($pae as $index => $pa)
                        <li style="-color:red;">{{$pa->programa->id}}.- {{$pa->programa->nombre}}</li>
                        <br>
                        @endforeach
                        --}}
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="chart-container">
                        <canvas id="myChart3" width="140" height="80"></canvas>
                    </div>
                    <script type="text/javascript">
                        var ctx3 = document.getElementById('myChart3').getContext('2d');

                        var myChart3 = new Chart(ctx3, {
                            type: 'doughnut',
                            data: {
                                labels: ["Bajo","Medio","Alto","Muyt Alto"],
                                datasets: [{
                                    label: 'Prioridad',
                                    data: {{$totalPrioridad}},
                                    backgroundColor:
                                    ["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)","#00C851"],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                legend: {
                                    position: 'bottom',
                                },
                                title: {
                                    display: true,
                                    text: 'Clasificacion por Nivel de Prioridad'
                                },
                                animation: {
                                    animateScale: true,
                                    animateRotate: true
                                }
                            }
                        });
                    </script>
                </div>
                <div class="col-md-6">
                    <div class="chart-container">
                        <canvas id="myChart4" width="200" height="150"></canvas>
                    </div>
                    <script type="text/javascript">
                        var ctx4 = document.getElementById('myChart4').getContext('2d');

                        var myChart4 = new Chart(ctx4, {
                            type: 'bar',
                            data: {
                                labels: {{$programas}},
                                datasets: [{
                                    label: 'Porcentaje',
                                    data: {{$totalPorcentajeAsm}},
                                    backgroundColor:
                                    ["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)","#00C851"],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                legend: {
                                    position: 'bottom',
                                },
                                title: {
                                    display: true,
                                    text: 'Nivel de Cumplimiento por Dependencia '
                                },
                                animation: {
                                    animateScale: true,
                                    animateRotate: true
                                },scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Dependencias'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: '% de Avance'
                            }
                        }]
                    }
                            },

                        });
                    </script>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="chart-container">
                        <canvas id="myChart2" width="140" height="80"></canvas>
                    </div>
                    <script type="text/javascript">
                        var ctx2 = document.getElementById('myChart2').getContext('2d');

                        var myChart2 = new Chart(ctx2, {
                            type: 'pie',
                            data: {
                                labels: ["Especifico","Institucional","Interinstitucional","Intergubernamental"],
                                datasets: [{
                                    label: 'Actor',
                                    data: {{$totalActor}},
                                    backgroundColor:
                                    ["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)","#00C851"],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                legend: {
                                    position: 'bottom',
                                },
                                title: {
                                    display: true,
                                    text: 'Clasificación por Tipo de Actor Involucrado'
                                },
                                animation: {
                                    animateScale: true,
                                    animateRotate: true
                                }
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
</div>

@endsection
