<?php

namespace App\Http\Controllers\Usuarios\Administrador\Reportes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Solicitud;
use App\Models\Ejercicio;
use App\Exports\PadronAceptados;
use PDF;
use Excel;

class ReportesSolicitudController extends Controller
{

	public function padronAceptado($ejercicio)
	{
		$año = Ejercicio::find($ejercicio);
		$aceptados = Solicitud::where('estatus','aceptado')
		->where('ejercicio_id',$ejercicio)->get();

		$pdf = PDF::loadView('usuarios.administrador.reportes.solicitudes.padronAceptados',compact('aceptados','año'));
		$pdf->setPaper('A4', 'landscape');
		return $pdf->download('Padron de aceptados '.$año->año.'.pdf');

	}

	public function padronRechazado($ejercicio)
	{
		$año = Ejercicio::find($ejercicio);
		$rechazados = Solicitud::where('estatus','rechazado')
		->where('ejercicio_id',$ejercicio)->get();
		$pdf = PDF::loadView('usuarios.administrador.reportes.solicitudes.padronRechazados',compact('rechazados','año'));
		$pdf->setPaper('A4', 'landscape');
		return $pdf->download('Padron de rechazados'.$año->año.'.pdf');

	}


	public function padronAceptadoExcel($ejercicio)
	{
		  return Excel::download(new PadronAceptados($ejercicio), 'Padrón de Aceptados.xlsx');
	}

	public function datosGenerales($id)
	{
		$solicitud = Solicitud::findOrFail($id);
		/*Consumo del api de rucova para validar los datos de la  solicitud*/
		$client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'http://sippop.zacatecas.gob.mx/wsSievalua/RevisarProveedor.aspx?rfc='.$solicitud->rfc);
        $request= $response->getBody()->getContents();
        $infoProvedor = json_decode($request);
		$pdf = PDF::loadView('usuarios.administrador.reportes.solicitudes.datosGenerales',compact('solicitud','infoProvedor'));
		//return $pdf->stream("dompdf_out.pdf", array("Attachment" => false));
		return $pdf->download('Ficha datos Generales'.$solicitud->folio.'.pdf');
	}
}
