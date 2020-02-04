<?php

namespace App\Http\Controllers\Usuarios\Despacho;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SolicitudRequest;
use Auth;
use App\Models\Estado;
use App\Models\Ejercicio;
use App\Models\Solicitud;
use App\Models\Pais;
use App\Models\Vialidad;
use Mail;
use App\Mail\EnvioSolicitud;
use App\Models\Mensaje;
use App\Models\CatalogoDocumentosDespachoEva;
use Illuminate\Support\Facades\Crypt;

class SolicitudesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $mensajes = Mensaje::all();
        $existe = new Solicitud();
        $estados=Estado::all();
        $eje = new Ejercicio();

        if($eje->activo()>0 && strtotime(date('Y/m/d')) <= strtotime($eje->ejercicioActivo()))
        {
            /*        \Session::flash('ultimo','AVISO            Se informa a los Despachos Externos interesados a
            participar en la Convocatoria para realizar las Evaluaciones al Desempeño contempladas en el Programa
            Anual de Evaluación 2019, que el plazo para el registro concluye el último minuto del día 05 de agosto de
            2019.');*/
        }

        $ejercicios = Ejercicio::where('activo',1)->get()->count();
        if ($ejercicios==0) {
            return redirect()->route('portal.home')->with(Auth::logout())->with('message_error','No existe ningún ejercicio activo');
        }

        $solicitud = $existe->existeSolicitud();
        $paises = Pais::orderBy('nombre','ASC')->get();
        $vialidades = Vialidad::orderBy('nombre','ASC')->get();

        if ($solicitud!=null) {

            if ($solicitud->estatus=='revision' || $solicitud->estatus=='aceptado' || $solicitud->estatus =='rechazado') {
                    //dd($mensajes, $usuario);
            return view('usuarios.despacho.solicitudes.index')
            ->with('solicitud',$solicitud)->with('mensajes',$mensajes)->with('eje',$eje);
            }
        }

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'http://sippop.zacatecas.gob.mx/wsSievalua/GetdatosProveedor.aspx?rfc='.Auth::user()->rfc_temporal);
        $request= $response->getBody()->getContents();
        $data = json_decode($request);

        $existe = $client->request('GET', 'http://sippop.zacatecas.gob.mx/wsSievalua/GetProveedor.aspx?rfc='.Auth::user()->rfc_temporal);
        $valida= $existe->getBody()->getContents();
        $siexiste = json_decode($valida);

        /*Retorna en caso de tener correcciones*/
        if (isset($solicitud)) {
            if ($solicitud->paginaRetorno()=='datos_generales') {

                return view('usuarios.despacho.solicitudes.create')
                ->with('estados',$estados)
                ->with('vialidades',$vialidades)
                ->with('paises',$paises)
                ->with('solicitud',$solicitud)
                ->with('existe',$siexiste);

            }elseif ($solicitud->paginaRetorno()=='doc_generales') {
                return redirect()->route('documentos.create')->with("message_warning","¡Aqui tienes correcciones!")->with('solicitud',$solicitud);
            }elseif ($solicitud->paginaRetorno()=='doc_especificos') {
                return redirect()->route('documentosEspecificos.create')->with("message_warning","¡Aqui tienes correcciones!")->with('solicitud',$solicitud);
            }
    }
    return view('usuarios.despacho.solicitudes.createSolicitud')
    ->with('estados',$estados)
    ->with('vialidades',$vialidades)
    ->with('paises',$paises)
    ->with('solicitud',$solicitud)
    ->with('api',$data)
    ->with('existe',$siexiste);
}

public function store(SolicitudRequest $request)
{
    /*Verifica que si existe una solicitud en caso de que sea nulo inserta una nueva solicitud*/

    $existe = new Solicitud();
    $solicitud = $existe->existeSolicitud();
    if ($solicitud==null) {
        $folio="SFP-PAE-".date("dmhis");
        $ejercicio = Ejercicio::where('activo',1)->first();
        $solicitud = new Solicitud($request->all());
        $solicitud->rfc = strtoupper($request->rfc);
        $solicitud->nombre = strtoupper($request->nombre);
        $solicitud->apellido_materno = strtoupper($request->apellido_materno);
        $solicitud->apellido_paterno = strtoupper($request->apellido_paterno);
        $solicitud->vialidad = strtoupper($request->vialidad);
        $solicitud->colonia = strtoupper($request->colonia);
        $solicitud->folio=$folio;
        $solicitud->user_id=Auth::user()->id;
        $solicitud->ejercicio_id=$ejercicio->id;
        $solicitud->save();
        return redirect()->route('documentos.create')->with("message_success","¡Datos Generales Creados Correctamente!")->with('solicitud',$solicitud);
    }else{
        return back()->with("message_error","¡ya tienes una solicitud!");

    }
    }
    public function update(SolicitudRequest $request, $id)
    {

        $solicitud = Solicitud::findOrFail($id);
        $solicitud->fill($request->all());
        $solicitud->save();
        return redirect()->route('despacho.solicitudes.index')->with('message_success','Datos Editados Correctamente')
        ;

    }

    public function enviarSolicitud($id)
    {
        $ejercicio = new Ejercicio();
        $solicitud = Solicitud::find($id);
        if (($ejercicio->activo()>0 && strtotime(date('Y/m/d')) <= strtotime($ejercicio->ejercicioActivo())) || $solicitud->estatus=='correccion' ) {

            if (!$solicitud->documentosGenerales()) {
                return redirect()->route('documentos.create')->with("message_error","¡Aquí hay documentos que aun no subes!")->with('solicitud',$solicitud);
            }elseif (!$solicitud->documentosEspecificos()) {

            return redirect()->route('documentosEspecificos.create')->with('message_error','En la evaluación:'.\Session::get('campo').'¡ hay documentos que aun no subes!');
        }
        if ($solicitud->completoTodo()) {

            Mail::to($solicitud->user->email)->send(new EnvioSolicitud('usuarios.despacho.emails.solicitud_enviada',$solicitud));

            $solicitud->estatus='revision';
            $solicitud->save();
            return redirect()->route('despacho.solicitudes.index')
            ->with('modal','Tu solicitud ha sido enviada con éxito, te pedimos por favor revises tu correo electrónico para consultar
            información referente a tu registro.');
        }else{
            return redirect()->route('despacho.solicitudes.index')->with('message_warning','Tu solicitud no se puede enviar debido a que hay campos que aun llenas');
        }
        }else{
        \Session::flash('message_warning','No puedes enviar la solicitud debido a que la convocatoria se ha cerrado');
        return redirect()->route('portal.home')
        ->with('c_cerrada','La convocatoria se a cerrado')
        ->with(Auth::logout());

    }


    }

    public function verEvaluacionesAceptadas($id)
    {
        $mensaje = Mensaje::all();
        // $documentosFinales = CatalogoDocumentosDespachoEva::w
        $id = Crypt::decrypt($id);
        $solicitud = Solicitud::findOrFail($id);
        return view('usuarios.despacho.solicitudes.verEvaluacionesAceptadas')->with('solicitud',$solicitud)->with('mensaje',$mensaje);
    }



    public function verEvaluaciones()
    {
        $solicitudes = Solicitud::where('user_id',Auth::user()->id)->get();
        return view('usuarios.despacho.solicitudes.verEvaluaciones')->with('solicitudes',$solicitudes);
    }

    public function logoStore(Request $request)
    {
        dd($request);
        $datos = Solicitud::where('user_id', Auth::user()->id)->get();
    }
    public function logoUpdate()
    {
        $datos = Solicitud::where('user_id', Auth::user()->id)->get();
    }

}
