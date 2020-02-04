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
                <b>Padrón de Rechazados {{$año->año}}</b><br>
            </td>
            </tr>
        </table>

<table style="border:solid 1px #ccc;" width="100%"  cellspacing="0" cellpadding="1">

	<tr style="background-color:#5f984c ">
		<th style="text-align: center; font-size: 11pt;">Folio</th>
		<th style="text-align: center; font-size: 11pt;">Despacho</th>
    <th style="text-align: center; font-size: 11pt;">Ejercicio</th>
    <th style="text-align: center; font-size: 11pt;">Descripción de Rechazo</th>
	</tr>



	@foreach($rechazados as $rechazado)
  	<tr>
     <th style="text-align: center;">{{$rechazado->folio}}</th> 
     <th style="text-align: center;">{{$rechazado->user->nombre}}</th> 
     <th style="text-align: center;">{{$rechazado->ejercicio->año}}</th> 
     <th style="text-align: justify;">{{$rechazado->descripcion_rechazo}}</th>
    </tr>
	@endforeach
</table>
