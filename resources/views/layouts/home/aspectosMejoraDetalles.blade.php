@extends('layouts.app')
@section('content')

@if ($pae->count()==0)
<div class="card shadow m-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-dark">Aspectos de Mejora {{$ejercicio->año}}</h6>
		<div class="dropdown no-arrow">
			<a href="{{route('aspectosMejora')}}" class="btn btn-info btn-sm hvr-box-shadow-outset">      <i class="fas fa-angle-left"></i>   Regresar</a>
		</div>
	</div>
    <div class="jumbotron jumbotron-fluid mt-4">
    <div class="container">
        <h1 class="display-4">No se han encontrado registros</h1>
    </div>
    </div>
</div>
@else
<div class="card shadow m-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-dark">Aspectos de Mejora {{$ejercicio->año}}</h6>
		<div class="dropdown no-arrow">
        {{--<a href="" data-toggle="modal" data-target="#graficas"  class="btn btn-secondary btn-sm hvr-box-shadow-outset">      <i class="fas fa-chart-pie text-warning"></i>    Graficas   </a> --}}
            <a href="{{route('excel.asm',$ejercicio->id) }}"        class="btn btn-success btn-sm hvr-box-shadow-outset">        <i class="fas fa-file-excel"></i>   Excel   </a>
            {{-- <a href="{{route('csv.asm',$ejercicio->id) }}"      class="btn btn-info btn-sm hvr-box-shadow-outset">      <i class="fas fa-file-csv"></i>     CSV     </a> --}}
            <a href="{{route('pdf.asm',$ejercicio->id) }}"          class="btn btn-danger btn-sm hvr-box-shadow-outset">         <i class="fas fa-file-pdf"></i>     Pdf     </a>
			<a href="{{route('aspectosMejora')}}"                   class="btn btn-info btn-sm hvr-box-shadow-outset">           <i class="fas fa-angle-left"></i>   Regresar</a>
		</div>
    </div>
    <div class="row">
        <div class="col-10 text-right mt-1"><h6 class="mt-4">Parametros de semaforización: </h6></div>
        <div class="col-2  mt-1"><p class="badge mt-4 mr-3 badge-danger">BAJO</p><p class="badge mt-3 mr-3 badge-warning">MEDIO</p><p class="badge mt-3 mr-3 badge-success">ALTO</p></div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped text-center" >
                <thead class="thead-dark  sticky-top sticky-offset">
                    <tr style="" class="">
                        <th class="align-middle" rowspan="2">Programa o Fondo</th>
                        <th class="align-middle">Dependencia</th>
                        <th class="align-middle">Ejercicio Fiscal Evaluado</th>
                        <th class="align-middle">ASM</th>
                        {{-- <th class="align-middle">Doc. Opinión Institucional</th> --}}
                        <th class="align-middle">Doc. Trabajo</th>
                        <th class="align-middle">Doc. Institucional</th>
                        <th class="align-middle" colspan="4">Clasificación por Nivel de prioridad</th>
                        <th class="align-middle" colspan="4">Clasificación por Tipo de Actor Involucrado</th>
                        <th class="align-middle">Asm Concluidos al  100%</th>
                        <th class="align-middle">Avance Asm</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="font-size: 10px;">
                        <td class="align-middle" colspan="6"></td>
                        <td class="align-middle  badge-danger">      Bajo</td>
                        <td class="align-middle  badge-warning">     Medio</td>
                        <td class="align-middle  badge-info">        Alto</td>
                        <td class="align-middle  badge-success">     Muy Alto</td>
                        <td class="align-middle  badge-light ">      Especifico</td>
                        <td class="align-middle  badge-primary ">    Institucional</td>
                        <td class="align-middle  badge-dark">        Interinstitucional</td>
                        <td class="align-middle  badge-secondary">   Intergubernamental</td>
                        <td class="align-middle" colspan="2"></td>
                    </tr>
                    @foreach ($pae as $pa)
                        <tr class="text-center" style="font-size: 12px;">
                            <td class="align-middle" style="font-size: 14px;"><strong>{{$pa->programa}}</strong></td>
                            <td class="align-middle"><a href="{{route('asmDepAsm',Crypt::encrypt($pa->id))}}">{{$pa->dependencia}}</a></td>
                            <td class="align-middle">{{$pa->ejercicio}}</td>
                            <td class="align-middle"><a href="{{route('asmDepAsm',Crypt::encrypt($pa->id))}}">{{$pa->asm}}</a></td>
                            {{-- <td class="align-middle"><a class="hvr-bob" href=""><i class="fas fa-file text-info fa-2x"></i></a></td> --}}
                            <td class="align-middle"><a class="hvr-bob" href="{{route('verDocTrabajo',Crypt::encrypt($pa->id))}}"><i class="fas fa-file text-success fa-3x"></i></a></td>
                            <td class="align-middle"><a class="hvr-bob" href="{{route('verDocInstitucional',Crypt::encrypt($pa->id))}}"><i class="fas fa-file text-info fa-3x"></i></a></td>
                            <td class="align-middle alert-danger">{{$pa->prioridad_bajo}}</td>
                            <td class="align-middle alert-warning">{{$pa->prioridad_medio}}</td>
                            <td class="align-middle alert-info">{{$pa->prioridad_alto}}</td>
                            <td class="align-middle alert-success">{{$pa->prioridad_muy_alto}}</td>

                            <td class="align-middle alert-light ">{{$pa->aspecto_especifico}}</td>
                            <td class="align-middle alert-primary ">{{$pa->aspecto_institucional}}</td>
                            <td class="align-middle alert-dark">{{$pa->aspecto_interinstitucional}}</td>
                            <td class="align-middle alert-secondary">{{$pa->aspecto_intergubernamental}}</td>

                            <td class="align-middle">{{$pa->asmTerminados()}}</td>
                            <td class="align-middle font-weight-bold @if($pa->asmPorcentaje() < 39) text-white bg-danger @elseif($pa->asmPorcentaje() > 39 && $pa->asmPorcentaje() < 79) bg-warning @elseif($pa->asmPorcentaje() > 79) text-white bg-success @endif">
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
                            <tr class="text-center" style="font-size: 12px;" class="text-center ">
                                <td class="align-middle font-weight-bold"  colspan="3"><strong class="">Total</strong></td>
                                <td class="align-middle font-weight-bold">{{$pa->totalAsm()}}</td>
                                <td class="align-middle font-weight-bold"></td>
                                <td class="align-middle font-weight-bold"></td>
                                <td class="align-middle font-weight-bold badge-danger">{{$pa->totalPrioridad(4)}}</td>
                                <td class="align-middle font-weight-bold badge-warning">{{$pa->totalPrioridad(3)}}</td>
                                <td class="align-middle font-weight-bold badge-info">{{$pa->totalPrioridad(2)}}</td>
                                <td class="align-middle font-weight-bold badge-success">{{$pa->totalPrioridad(1)}}</td>

                                <td class="align-middle font-weight-bold badge-light">{{$pa->totalActor(1)}}</td>
                                <td class="align-middle font-weight-bold badge-primary">{{$pa->totalActor(2)}}</td>
                                <td class="align-middle font-weight-bold badge-dark">{{$pa->totalActor(3)}}</td>
                                <td class="align-middle font-weight-bold badge-secondary">{{$pa->totalActor(4)}}</td>
                                <td class="align-middle font-weight-bold">{{$pa->totalAsmTerminados()}}</td>
                                <td class="align-middle @if($pa->totalAsmTerminados() < 39) bg-danger text-white font-weight-bold @elseif($pa->totalAsmTerminados() > 39 && $pa->totalAsmTerminados() < 79) bg-warning @elseif($pa->totalAsmTerminados() > 79) bg-success @endif ">{{$pa->totalAsmAvance()}}%</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <p class="m-5">
        <a class="btn btn-primary btn-block"  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Graficas
        </a>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="row m-3">
            <div class="col-sm-12 col-md-6">
                <div class="card m-2 shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="car-body">
                        <div id="piechart_3d" >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card m-2 shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <div id="chart_div" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-3">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <div class="card m-2 shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body ">
                        <canvas id="chart4" width="500" height="400"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row m-3">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <div class="card m-2 shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body ">
                        <canvas id="chart3" width="500" height="400"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-2"></div>
        </div>
    </div>

</div>
@endif


@endsection
@section('script')

<script type="text/javascript">



$( document ).ready(function() {

    google.charts.load("current", {packages:['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        // Grafica por Clasificación por Tipo de Actor Involucrado

        var data = google.visualization.arrayToDataTable([

            ['Actores', 'Total Actores'],
            @foreach ($actores as $index => $value)
            ['{{$actores[$index]}}', {{$totalActor[$index]}}],
            @endforeach
        ]);

        var options = {
            title: 'Clasificación por el Tipo de Actor Involucrado',
                    is3D: true,
                    width:500,
                    height:285,
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                chart.draw(data, options);


                    // Grafica clasificación por prioridades

                    var data3 = new google.visualization.arrayToDataTable([
                        ['Prioridades', 'Total Prioridades'],
                        @foreach($prioridades as $index => $value)
                        ['{{$prioridades[$index]}}', {{$totalPrioridad[$index]}}],
                        @endforeach
                    ]);

                    var options3 = {
                        title: 'Clasificación por nivel de prioridad',
                        is3D: true,
                        width:500,
                        height:250,
                    };

                    var chart3 = new google.visualization.PieChart(document.getElementById('chart_div'));
                    chart3.draw(data3, options3);


                }

                    var ctx3 = document.getElementById('chart3').getContext('2d');

                        var myChart3 = new Chart(ctx3, {
                            type: 'bar',
                            data: {
                                labels: [
                                    @foreach($acronimos as $index => $value)
                                        '{{$acronimos[$index]}}',
                                    @endforeach
                                ],
                                datasets: [{
                                    data: {{$totalPorcentajeAsm}},
                                    backgroundColor:
                                    ["#00BD9B","#00CD6A","#0099DE","#AE59B9","#23475F","#8FA7A6"],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                legend: {
                                    display: false,
                                    position: 'bottom',
                                    fullWidth: true,
                                    fontStyle: "bold"
                                },
                                title: {
                                    display: true,
                                    text: 'Nivel de cumplimiento por dependencia',
                                    position: 'bottom',
                                    fontSize: 22
                                },
                                animation: {
                                    animateScale: true,
                                    animateRotate: true
                                }
                            }
                        });

                    var ctx4 = document.getElementById('chart4').getContext('2d');

                        var myChart4 = new Chart(ctx4, {
                            type: 'bar',
                            data: {
                                labels: [
                                    @foreach($programa as $index => $value)
                                        '{{$programa[$index]}}',
                                    @endforeach
                                ],
                                datasets: [{
                                    // label: [@foreach($programa as $index => $value)
                                    //             '{{$programa[$index]}}',
                                    //         @endforeach],
                                    data: {{$totalAsm}},
                                    backgroundColor:
                                    ["#ED6D25","rgb(54, 162, 235)","rgb(255, 205, 86)","#00C851","#009900","#4285F4"],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                legend: {
                                    display: false,
                                    position: 'bottom',
                                    fontStyle: "bold"
                                },
                                title: {
                                    display: true,
                                    text: 'Total ASM por Programas',
                                    position: 'bottom',
                                    fontSize: 22
                                },
                                animation: {
                                    animateScale: true,
                                    animateRotate: true
                                }
                            }
                        });


                });



                </script>

@endsection
