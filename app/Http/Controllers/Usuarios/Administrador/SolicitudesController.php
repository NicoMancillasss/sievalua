<?php

namespace App\Http\Controllers\Usuarios\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Solicitud;
use App\Models\Ejercicio;
use App\Models\Postula;
use App\Mail\Rechazo;
use App\Mail\RechazoUna;
use App\Mail\Correcciones;
use App\Models\RepositorioDocumento;
use App\Mail\Aceptado;
use App\Models\Correccion;
use App\User;
use Mail;
use Illuminate\Support\Facades\Storage;
use App\Events\Bitacora;


class SolicitudesController extends Controller
{

    public function index($id, $estatus)
    {


        $solicitudes = Solicitud::where('ejercicio_id', $id)->orderBy('ejercicio_id', 'DESC')
            ->where('estatus', $estatus)
            ->get();

        return view('usuarios.administrador.solicitudes.index')
            ->with('estatus', $estatus)
            ->with('ejercicio', $id)
            ->with('solicitudes', $solicitudes);
    }

    public function verSolicitud($id)
    {

        $solicitud = Solicitud::find($id);
        /*Consumo del api de rucova para validar los datos de la  solicitud*/
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'http://sippop.zacatecas.gob.mx/wsSievalua/RevisarProveedor.aspx?rfc=' . $solicitud->rfc);
        $request = $response->getBody()->getContents();
        $data = json_decode($request);


        $prueba = new Postula();
        /*Ver los documentos que asigno*/
        $documentos = RepositorioDocumento::where('solicitud_id', $id)->where('postulacion_id', null)->get();

        $postulaciones = Postula::where('solicitud_id', $solicitud->id)->get();

        return view('usuarios.administrador.solicitudes.verSolicitud')
            ->with('solicitud', $solicitud)
            ->with('documentos', $documentos)
            ->with('postulaciones', $postulaciones)
            ->with('infoProvedor', $data);
    }

    public function rechazarSolicitud(Request $request, $id)
    {
        $solicitud = Solicitud::find($id);
        //Desactivar todas las evaluaciones que le corresponden
        $postula = Postula::where('cita', Null)->where('lugar', Null)->where('solicitud_id', $id)->update(['estatus' => 0]);
        Mail::to($solicitud->user->email)->send(new Rechazo($request, $solicitud));
        $solicitud->descripcion_rechazo = $request->correcciones;
        $solicitud->estatus = "rechazado";
        $solicitud->save();
        event(new Bitacora($solicitud, 'Rechazo', 'Rechazo la solicitud con folio: ' . $solicitud->folio));

        return redirect()->route('administrador.solicitudes', [$solicitud->ejercicio_id, 'revision'])->with('message_success', "Solicitud Rechazada Correctamente");
    }

    public function verRechazarSolicitud($id)
    {

        $solicitud = Solicitud::find($id);
        return view('usuarios.administrador.solicitudes.rechazarSolicitud')
            ->with('solicitud', $solicitud);
    }

    //Desactiva todas las evaluaciones
    /*public function desactivarEvaluacion($solicitud ,$evaluacion)
	{
		$solicitud = Solicitud::find($solicitud);
		$postula = Postula::where('solicitud_id',$solicitud->id)
		->where('evaluacion_id',$evaluacion)->get()->first();
		$postula->estatus=0;
		$postula->save();
		Mail::to($solicitud->user->email)->send(new Rechazo("",$solicitud));
		event(new Bitacora($postula,'Desactivar','Desactivo Evaluacion '));
		return redirect()->route('administrador.ver.solicitud',$solicitud)->with('message_success',"Evaluacion Desactivada Correctamente");
	}*/

    //Desactiva todas las evaluaciones
    public function desactivarUnaEvaluacion(Request $request, $solicitud, $postula)
    {
        $solicitud = Solicitud::find($solicitud);
        $postula = Postula::find($postula);
        $postula->estatus = 0;
        $postula->descripcion_rechazo = $request->descripcion_rechazo;
        $postula->save();
        //Mail::to($solicitud->user->email)->send(new RechazoUna($request, $solicitud, $postula));
        event(new Bitacora($postula, 'Desactivar', 'Desactivo Evaluacion '));
        return redirect()->route('administrador.ver.solicitud', $solicitud)->with('message_success', "Evaluacion Desactivada Correctamente");
    }

    public function verDesactivarSolicitud($id)
    {
        $postula = Postula::find($id);
        $solicitud = Solicitud::find($postula->solicitud->id);
        return view('usuarios.administrador.solicitudes.verDesactivarSolicitud')
            ->with('postula', $postula)
            ->with('solicitud', $solicitud);
    }

    public function correcciones($solicitud)
    {
        $solicitud = Solicitud::find($solicitud);
        //dd($solicitud->correccion->where('tipo','datos_generales')->first() );
        return view('usuarios.administrador.solicitudes.correcciones')->with('solicitud', $solicitud);
    }

    public function enviarCorrecciones(Request $request, $id)
    {
        $solicitud = Solicitud::find($id);
        $solicitud->estatus = 'correccion';
        $solicitud->save();

        if ($request->datos_generales != '') {
            $existe = Correccion::where('solicitud_id', $id)->get()->first();
            if (isset($existe)) {
                $existe->datos_generales = $request->datos_generales;
                $existe->save();
                # code...
            } else {

                $correccion = new Correccion();
                $correccion->datos_generales = $request->datos_generales;
                $correccion->solicitud_id = $id;
                $correccion->save();
                # code...
            }
            return back();
        } else {
            $documento =     RepositorioDocumento::find($request->id_documento_correccion);
            $documento->correccion = $request->correccion;
            $documento->save();
            $existe = Correccion::where('solicitud_id', $id)->get()->first();


            if (isset($existe)) {
                if ($request->seccion == "doc_especificos") {
                    $existe->doc_especificos = '1';
                    $existe->save();
                    # code...
                }
                if ($request->seccion == "doc_generales") {
                    $existe->doc_generales = '1';
                    $existe->save();
                    # code...
                }

                event(new Bitacora($existe, 'Correccion', 'Correccion a ' . $solicitud->folio));
            } else {
                if ($request->seccion == "doc_especificos") {
                    $correccion = new Correccion();
                    $correccion->doc_especificos = '1';
                    $correccion->solicitud_id = $id;
                    $correccion->save();
                    # code...
                } else if ($request->seccion == "doc_generales") {
                    $correccion = new Correccion();
                    $correccion->doc_generales = '1';
                    $correccion->solicitud_id = $id;
                    $correccion->save();
                    # code...
                }


                event(new Bitacora($correccion, 'Correccion', 'Correccion a ' . $solicitud->folio));
            }


            //$correccion = new Correccion($request->all());

            $solicitud->estatus = 'correccion';
            $solicitud->save();


            event(new Bitacora($documento, 'Correccion', 'Correccion a ' . $solicitud->folio));
            //Mail::to($solicitud->user->email)->send(new Correcciones($request));

            return back()

                ->with('message_success', 'Correcciones guardadas correctamente')
                ->with('message_info', 'Correo de correcciones enviado correctamente');


            /*
		$solicitud = Solicitud::find($id);
		$solicitud->estatus='correccion';
		$solicitud->save();
		return redirect()->route('administrador.solicitudes')->with('message_success',"Enviado a Corrección Correctamente");
		*/
		}
	}

	public function editarCorrecciones(Request $request, $correccion, $solicitud)
	{

		$solicitud = Solicitud::findOrFail($solicitud);
		$solicitud->estatus = 'correccion';
		$solicitud->save();
		$correccion = Correccion::findOrFail($correccion);
		$correccion->fill($request->all());
		$correccion->save();
		event(new Bitacora($correccion, 'Correccion', 'Correccion a ' . $solicitud->folio));
		//Mail::to($solicitud->user->email)->send(new Correcciones($request));
		return back()
			->with('message_success', 'Correcciones editadas correctamente')
			->with('message_info', 'Correo de modificación correcciones enviado correctamente');
	}

	public function verDocumentacion($postulacion)
	{

		$postula = Postula::find($postulacion);

		return view('usuarios.administrador.solicitudes.verDocumentacion')
			->with('postula', $postula);
	}

	/*Esta funcion da por aceptado la solicitud*/
	public function programarCita(Request $request, $id)
	{
		$postula = Postula::findOrFail($id);
		$solicitud = Solicitud::findOrFail($postula->solicitud_id);
		$solicitud->estatus = 'aceptado';
		$solicitud->save();
		$postula->cita = $request->fecha_hora;
		$postula->lugar = $request->lugar;
		$postula->save();
		event(new Bitacora($postula, 'modificación', 'Aceptacion de la solicitud' . ' ' . $postula->solicitud->folio));
		//Mail::to($solicitud->user->email)->send(new Aceptado($request, $postula, $solicitud));

		return redirect()->route('administrador.ver.solicitud', $solicitud)->with('message_success', "Fecha Programada Correctamente");
	}

	public function verPadronAceptados($id)
	{


		$aceptados = Solicitud::where('estatus', 'aceptado')
			->where('ejercicio_id', $id)->get();
		$ejercicio = Ejercicio::findOrFail($id);
		return view('usuarios.administrador.solicitudes.padronAceptados')
			->with('aceptados', $aceptados)
			->with('estatus', 'aceptado')
			->with('ejercicio', $ejercicio);
	}

	public function vistaProgramaCita($evaluacion)
	{
		$postula = Postula::find($evaluacion);
		return view('usuarios.administrador.solicitudes.verProgramaCita')
			->with('postula', $postula);
	}

	public function editarDocumento(Request $request)
	{
		//dd($request->all());
		$documento = RepositorioDocumento::findOrFail($request->id_documento);
		Storage::delete('public/' . $documento->ruta);
		event(new Bitacora($documento, 'Remplazo', 'Modificacion del documento' . ' ' . $documento->documento->catalago_documento->nombre));

		$path = $request->nuevo_documento->storeAs('public', $documento->ruta);
		return back()->with('message_success', "Documento Actualizado Correctamente Correctamente");
	}

	public function firmaContrato(Request $request)
	{

		$postula = Postula::findOrFail($request->postula_id);
		$postula->firma_contrato = 1;
		$postula->save();
		return back();
	}
}
