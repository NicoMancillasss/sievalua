<?php

namespace App\Http\Controllers\Usuarios\Despacho;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mensaje;
use App\Models\Postula;
use Auth;
use Mail;
use App\Models\Solicitud;
use App\Mail\MensajeNuevoDespacho;
use App\User;

class MensajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($solicitud)
    {
        $solicitud = Solicitud::findOrFail($solicitud);
        $mensajes = Mensaje::all();
        $usuario = Auth::user();
        return view('usuarios.despacho.mensajes.chat')
            ->with('solicitud', $solicitud)
            ->with('mensajes', $mensajes)
            ->with('usuario', $usuario);
    }

    public function create($evaluacion, $solicitud)
    {

        $evaluacion = Postula::find($evaluacion);

        return view('usuarios.despacho.mensajes.verMensajes')->with('evaluacion', $evaluacion)->with('solicitud', $solicitud);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $postula, $solicitud)
    {
        $postula = Postula::find($postula);
        $solicitud = Solicitud::find($solicitud);
        $dependencia_user_id = User::where('perfil_id', 4)->where('dependencia_id', $postula->evaluacion->dependencia->id)->first()->id;

        $mensaje = new Mensaje($request->all());
        $mensaje->ruta             =   $url = Route('dependencia.mensajes.ver', [$dependencia_user_id, $postula->id]);
        $mensaje->postula_id       =   $postula->id;

        /*if ($request->hasFile('doc_evidencia')) {
            $archivo = $request->file('doc_evidencia');
            $nombre = $archivo->getClientOriginalName();
            $path = $archivo->storeAs('public/' . 'Solicitudes' . '/' . $solicitud->folio . '/' . 'Mensajes' . '/' . 'Archivos' . '/', $mensaje->id . $nombre);
        }

        $mensaje->doc_evidencia     =   $path;*/
        $mensaje->emisor_id         =   Auth::user()->id;
        $mensaje->receptor_id       =   $postula->evaluacion->dependencia->user->id;
        $mensaje->estatus           =   'enviado';
        //$usu                        =   $mensaje->receptor->email;
        $mensaje->save();
        // Mail::to($usu)->send(new MensajeNuevoDespacho($request));

        \Session::flash('message_success', 'Mensaje Enviado Correctamente');
        \Session::flash('message_success', 'Mensaje Enviado por Correo Correctamente');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $mensaje = Mensaje::findOrFail($request->mensaje_id);
        $mensaje->estatus = 'visto';
        $mensaje->save();
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function verMensajes($usuario, $postula)
    {
        $postula    = Postula::findOrFail($postula);
        $solicitud  = Solicitud::findOrFail($postula->solicitud->id);
        $mensajes   = Mensaje::all();

        /*$mensaje = Mensaje::where('emisor_id', Auth::user()->id)
            ->orwhere('emisor_id', $usuario)
            ->where('postula_id', $postula)
            ->get();
        */

        $mensaje = Mensaje::where('postula_id', $postula->id)
            ->get();

        return view('usuarios.despacho.mensajes.verMensajes')
            ->with('mensajes',  $mensajes)
            ->with('mensaje',   $mensaje)
            ->with('solicitud', $solicitud)
            ->with('postula',   $postula)
            ->with('usuario',   $usuario);


    }
}
