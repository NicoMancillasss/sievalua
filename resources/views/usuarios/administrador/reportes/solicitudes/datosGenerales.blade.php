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
  
  table {

    table-layout: fixed;
    width: 100%;
    border: 1px #555;
    border-collapse: collapse;
    
    margin: 25px auto;

    tr {
      &:hover {
        background: #f4f4f4;
        
        td {
          color: #555;
        }
      }
      
    }
    th, td {
      border-top: 1px;
      border-bottom-color: #555;
      border-collapse: collapse;
    }
    th {
      background: #00cccc;
      color: #fff;
      border-bottom-color: #555;
      text-transform: uppercase;
      font-size: 12px;
      &.last {
        border-right: none;
      }
    }
  }
  /* Clase para logo de SFP Al centro*/
  .noclass{
    border: none;
    text-align: center;
    font-size: 17pt;
  }

</style>
  <body>
    
    
    <script type="text/php">
    $leyenda_pie_pagina = "Documento Generado: ".date('d-m-Y H:i:s')." | Página {PAGE_NUM}/{PAGE_COUNT}";
    if ( isset($pdf) ) {
        $font = $fontMetrics->getFont("helvetica", "bold");
        $pdf->page_text(10, , $leyenda_pie_pagina, $font, 8, array(0,0,0));
    }
    </script>

<table cellpadding="5">
  <tr>
    <td colspan="5" align="right">
        <h3 style="font-weight: bold;"> Folio: {{$solicitud->folio}}</h3>
    </td>
  </tr>
  <tr>
    <td colspan="5" class="noclass"><img src="http://sievalua.zacatecas.gob.mx/imagenes/logosfp.png" width="280"></td>
  </tr>
  <tr>
      <td colspan="5" align="center"><h2 style="text-align: center; font-weight: bold;">Ficha de datos generales: {{$solicitud->user->nombre}}</h2></td>
  </tr>
  <tr>
      <td colspan="3" align="left">
        <h4 style="font-weight: bold;">Nombre/Razón Social:  {{$solicitud->user->nombre}}</h4>
      </td>
      <td colspan="2" align="left">
        <h4 style="font-weight: bold;">Rfc: {{$solicitud->rfc}}</h4>
      </td>
  </tr>
   <tr >
      <td colspan="2" align="left">
        <h4 style="font-weight: bold;">Teléfono Célular: {{$solicitud->telefono}}</h4>
      </td>
      <td colspan="2" align="left">        
        <h4 style="font-weight: bold;"> Télefono Oficina: {{$solicitud->telefono_oficina}}</h4>
      </td>
      <td colspan="1" align="left">
        <h4 style="font-weight: bold;">Redes Sociales: {{$solicitud->redes_sociales}}</h4>
      </td>
   </tr>
   <tr>
     <td colspan="5" align="left">
        <h4 style="font-weight: bold;">Nombre Representante legal: {{$solicitud->nombre}}</h4>  
     </td>
   </tr>
   <tr>
    <td colspan="3" align="left">
      <h4 style="font-weight: bold;">Apellido Paterno: {{$solicitud->apellido_paterno}}</h4>
   </td>
   <td colspan="2" align="lelft">
      <h4 style="font-weight: bold;">Apellido Materno: {{$solicitud->apellido_materno}}</h4>
   </td>
   </tr>
   <tr >
     <td colspan="5" align="left">
        <h4 style="font-weight: bold;">Correo Electrónico: {{$solicitud->user->email}}</h4>
     </td>
   </tr>

   <tr>
     <td colspan="5" align="center">
        <h3 style="font-weight: bold;">Domicilio Fiscal</h3>
     </td>
   </tr>
   <tr>
     <td  align="center">
        <h4 style="font-weight: bold;">País:               {{$solicitud->pais->nombre}}        </h4>
     </td>
     <td align="center">
        <h4 style="font-weight: bold;">Estado:             {{$solicitud->estado->nombre}}      </h4>
     </td>
     <td align="center">
        <h4 style="font-weight: bold;">Municipio:          {{$solicitud->municipio->nombre}}   </h4>
     </td>
     <td colspan="2" align="center">
        <h4 style="font-weight: bold;">Colonia:            {{$solicitud->colonia}}             </h4>
     </td>
   </tr>
   <tr >
     <td>
        <h4 style="font-weight: bold;" align="center">Nombre de Vialidad: {{$solicitud->vialidad}}            </h4>
     </td>
     <td>
        <h4 style="font-weight: bold;" align="center"> Número Exterior:    {{$solicitud->numero_exterior}}     </h4>
     </td>
     <td>
        <h4 style="font-weight: bold;" align="center">Número Interior:    {{$solicitud->numero_interior}}     </h4>
     </td>
     <td>
        <h4 style="font-weight: bold;" align="center">Código Postal:      {{$solicitud->codigo_postal}}       </h4>
     </td>
     <td>
        <h4 style="font-weight: bold;"align="center">Vialidad:           {{$solicitud->tipoVialidad->nombre}}</h4>
     </td>
   </tr>
    <tr>
      <td colspan="5" align="center">
        <h3   style="font-weight: bold;">Datos RUPCOVA</h3>
      </td>
    </tr>
    <tr>
      <td align="center" >
        <h4  style="font-weight: bold;">Número de Validación:@if (isset($infoProvedor[0]->Numero_Validacion))<span class="badge badge-info">{{$infoProvedor[0]->Numero_Validacion}}</span>
          @endif</h4>
      </td>
      <td align="center">
        <h4  style="font-weight: bold;">Número de Cédula:
            @if ($infoProvedor!=[])
            <span class="badge badge-info"> {{$infoProvedor[0]->Numero_Cedula}}</span>
            @endif</h4>
      </td>
      <td align="center">
        <h4 style="font-weight: bold;">Estatus de Cédula:
            @if ($infoProvedor!=[])
            @if ($infoProvedor[0]->Estatus_Cedula =='Vigente')
            <span class="badge badge-success">
              {{$infoProvedor[0]->Estatus_Cedula}}
            </span>
            @else
            <span class="badge badge-danger">
              {{$infoProvedor[0]->Estatus_Cedula}}
            </span>

            @endif
            @endif
        </h4>
      </td>
      <td align="center">
        <h4 style="font-weight: bold;">Fecha de Vigencia:
            @if ($infoProvedor!=[])
            <span class="badge badge-info">{{$solicitud->parseFecha($infoProvedor[0]->Fecha_Vigencia)}}</span>
            @endif</h4>
       </td>
       <td align="center">
        <h4  style="font-weight: bold;" >Estatus del Registro
            @if ($infoProvedor!=[])
            <span class="badge badge-info">{{$infoProvedor[0]->Estatus_Registro}}</span>
            @endif</h4>
       </td>
   </tr>
  </table>