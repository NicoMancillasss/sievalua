<style>

        body{
            font-family: sans-serif;
            font-size: 11px;
            line-height: 20px;
            font-weight: 400;
            color: #3b3b3b;
            -webkit-font-smoothing: antialiased;
            font-smoothing: antialiased;
        }

        .wrapeer{
          margin: 0 auto;
          padding: 40px;
          max-width: 800px;
        }
        .table {
        margin: 0 0 40px 0;
        width: 100%;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
        display: table;
        }
        @media screen and (max-width: 580px) {
          .table {
            display: block;
          }
        }

        .row {
          display: table-row;
          background: #f6f6f6;
        }
        .row:nth-of-type(odd) {
          background: #e9e9e9;
        }
        .row.header {
          font-weight: 900;
          color: #ffffff;
          background: #ea6153;
        }
        .row.green {
          background: #27ae60;
        }
        .row.blue {
          background: #2980b9;
        }
        @media screen and (max-width: 580px) {
          .row {
            padding: 14px 0 7px;
            display: block;
          }
          .row.header {
            padding: 0;
            height: 6px;
          }
          .row.header .cell {
            display: none;
          }
          .row .cell {
            margin-bottom: 10px;
          }
          .row .cell:before {
            margin-bottom: 3px;
            content: attr(data-title);
            min-width: 98px;
            font-size: 10px;
            line-height: 10px;
            font-weight: bold;
            text-transform: uppercase;
            color: #969696;
            display: block;
          }
        }

        .cell {
          padding: 6px 12px;
          display: table-cell;
        }
        @media screen and (max-width: 580px) {
          .cell {
            padding: 2px 16px;
            display: block;
          }
        }
        th{
            border: solid 1px #3b423d;
            font-weight: 600;
        }
        td{
            border: solid 1px #3b423d;
        }


        p{
            text-align: justify;
        }


        .noclass{
          border: none;
          text-align: center;
          font-size: 17pt;
        }

</style>


    <script type="text/php">
    $leyenda_pie_pagina = "Documento Generado: ".date('d-m-Y H:i:s')." | Página {PAGE_NUM}/{PAGE_COUNT}";
    if ( isset($pdf) ) {
        $font = $fontMetrics->getFont("helvetica", "bold");
        $pdf->page_text(10, , $leyenda_pie_pagina, $font, 8, array(0,0,0));
    }
    </script>

        <table cellpadding="5" class="table table-striped">
            <tr>
            <td class="noclass"><img src="http://sievalua.zacatecas.gob.mx/imagenes/logosfp.png" width="280"></td>
            <td class="noclass">
            {{--<b>Secretaria de la Función Pública</b><br>--}}
                <b>Aspectos de Mejora {{$ejercicio->año}}</b><br>
            </td>
            </tr>
        </table>

<table style="border:solid 1px #ccc;" width="100%"  cellspacing="0" cellpadding="1">
    <thead>
        <tr style="background-color:#5f984c; text-align: center; ">
            <th style="text-align: center; font-size: 11pt;" rowspan="2">Programa o Fondo</th>
            <th style="text-align: center; font-size: 11pt;">Dependencia</th>
            <th style="text-align: center; font-size: 11pt;">Ejercicio Fiscal Evaluado</th>
            <th style="text-align: center; font-size: 11pt;" colspan="4">Clasificación por Nivel de Prioridad</th>
            <th style="text-align: center; font-size: 11pt;" colspan="4">Clasificación por Tipo de Actor Involucrado</th>
            <th style="text-align: center; font-size: 11pt;">ASM Concluidos al 100%</th>
            <th style="text-align: center; font-size: 11pt;">Avance ASM</th>
        </tr>
    </thead>
    <tbody>
        <tr style="font-size: 10px; text-align: center; font-weight: bold;">
            <td class="align-middle" colspan="2"></td>
            <td class="align-middle badge-danger">Bajo</td>
            <td class="align-middle badge-warning">Medio</td>
            <td class="align-middle badge-info">Alto</td>
            <td class="align-middle badge-success">Muy Alto</td>
            <td class="align-middle badge-dark">Especifico</td>
            <td class="align-middle badge-secondary">Institucional</td>
            <td class="align-middle badge-light">Interinstitucional</td>
            <td class="align-middle badge-primary">Intergubernamental</td>
            <td class="align-middle" colspan="2"></td>
        </tr>
        @foreach($pae as $pa)
            <tr style="text-align: center;">
                <td style="text-align: center;">{{$pa->programa}}</td>
                <td class="align-middle">{{$pa->dependencia}}</td>
                <td class="align-middle">{{$pa->ejercicio}}</td>
                <td class="align-middle alert-danger">{{$pa->prioridad_bajo}}</td>
                <td class="align-middle alert-warning">{{$pa->prioridad_medio}}</td>
                <td class="align-middle alert-info">{{$pa->prioridad_alto}}</td>
                <td class="align-middle alert-success">{{$pa->prioridad_muy_alto}}</td>

                <td class="align-middle alert-dark">{{$pa->aspecto_especifico}}</td>
                <td class="align-middle alert-secondary">{{$pa->aspecto_institucional}}</td>
                <td class="align-middle alert-light">{{$pa->aspecto_interinstitucional}}</td>
                <td class="align-middle alert-primary">{{$pa->aspecto_intergubernamental}}</td>

                <td class="align-middle">{{$pa->asmTerminados()}}</td>
                <td class="align-middle">
                    {{round($pa->asmPorcentaje(),2)}} %
                </td>
            </tr>
            @if ($loop->last)
                <tr style="font-size: 12px; text-align: center;" class="text-center">
                    <td colspan="3"><strong class="">Total</strong></td>
                    <td>{{$pa->totalPrioridad(4)}}</td>
                    <td>{{$pa->totalPrioridad(3)}}</td>
                    <td>{{$pa->totalPrioridad(2)}}</td>
                    <td>{{$pa->totalPrioridad(1)}}</td>
                    <td>{{$pa->totalActor(1)}}</td>
                    <td>{{$pa->totalActor(2)}}</td>
                    <td>{{$pa->totalActor(3)}}</td>
                    <td>{{$pa->totalActor(4)}}</td>
                    <td>{{$pa->totalAsmTerminados()}}</td>
                    <td>{{$pa->totalAsmAvance()}}</td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>
