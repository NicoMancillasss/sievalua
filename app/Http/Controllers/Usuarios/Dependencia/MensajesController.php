<?php

namespace App\Http\Controllers\Usuarios\Dependencia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mensaje;
use App\Models\Ejercicio;
use App\Models\Evaluacion;

use Auth;
use App\Models\Postula;
use Mail;
use App\Mail\MensajeNuevoDepen;
use App\Models\Solicitud;
use Route;


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
        //solo a evaluar
        $ejercicio = Ejercicio::find($solicitud->ejercicio_id);
        $evaluacion = Evaluacion::where('ejercicio_id', $ejercicio->id)
            ->where('dependencia_id', Auth::user()->dependencia->id)->get()->pluck('id');


        /*Buscar todos los id que */
        $seleccionadas = Postula::whereIn('evaluacion_id', $evaluacion)
            ->where('cita', '<>', '')
            ->where('lugar', '<>', '')
            ->where('estatus', '=', 1)
            ->get();



        $mensajes = Mensaje::all();
        $usuario = Auth::user();
        return view('usuarios.dependencias.mensajes.chat')
            ->with('seleccionadas', $seleccionadas)
            ->with('solicitud', $solicitud)
            ->with('usuario', $usuario);
    }

    public function create($postula, $solicitud)
    {
        $postula = Postula::find($postula);
        return view('usuarios.dependencias.mensajes.verMensajes')->with('postula', $postula)->with('solicitud', $solicitud);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id, $solicitud)
    {
        $postula = Postula::find($id);
        $solicitud = Solicitud::find($solicitud);

        $mensaje = new Mensaje($request->all());
        $mensaje->ruta              =   "h";
        $mensaje->emisor_id         =   Auth::user()->id;
        $mensaje->receptor_id       =   $postula->solicitud->user->id;
        $mensaje->estatus           =   'enviado';
        $mensaje->postula_id        =   $id;
        //$usu                        =   $mensaje->receptor->email;
        $mensaje->save();
        //Mail::to($usu)->send(new MensajeNuevoDepen($request));

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

        $postula = Postula::findOrFail($postula);
        $solicitud = Solicitud::findOrFail($postula->solicitud->id);

        $ejercicio = Ejercicio::find($solicitud->ejercicio_id);
        $evaluacion = Evaluacion::where('ejercicio_id', $ejercicio->id)
            ->where('dependencia_id', Auth::user()->dependencia->id)->get()->pluck('id');

        /*Buscar todos los id que */
        $seleccionadas = Postula::whereIn('evaluacion_id', $evaluacion)
            ->where('cita', '<>', '')
            ->where('lugar', '<>', '')
            ->where('estatus', '=', 1)
            ->get();

        /*$mensaje = Mensaje::where('emisor_id', Auth::user()->id)
            ->orwhere('emisor_id', $usuario)
            ->where('postula_id', $postula)
            ->get();
        */

        $mensaje = Mensaje::where('postula_id', $postula->id)
            ->get();

        $mensajesVisto = Mensaje::where('receptor_id', Auth::user()->id)
        ->where('estatus', 'enviado')
        ->update(['estatus' => 'visto']);


        return view('usuarios.dependencias.mensajes.verMensajes')
            ->with('mensaje', $mensaje)
            ->with('seleccionadas', $seleccionadas)
            ->with('solicitud', $solicitud)
            ->with('postula', $postula)
            ->with('usuario', $usuario);


    }
    public function verMensaje($mensaje)
    {
        $mensaje = Mensaje::find($mensaje);
        return redirect($mensaje->ruta);
    }
}
