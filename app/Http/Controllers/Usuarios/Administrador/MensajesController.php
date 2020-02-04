<?php

namespace App\Http\Controllers\Usuarios\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mensaje;
use App\Models\Postula;
use App\Models\Solicitud;
use App\Models\Ejercicio;
use App\Mail\MensajeObservacion;
use App\Models\Evaluacion;
use Auth;
use Mail;

class MensajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($ejercicio)
    {
        $ejercicio = Ejercicio::find($ejercicio);
        $evaluaciones = Evaluacion::where('ejercicio_id',$ejercicio->id)->get();
        $mensajes = Mensaje::all()->groupBy('receptor_id');
        
        return view('usuarios.administrador.mensajes.chat')->with('evaluaciones',$evaluaciones)->with('mensajes', $mensajes)->with('ejercicio', $ejercicio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($evaluacion)
    {
      $evaluacion = Evaluacion::find($evaluacion);
      return view('usuarios.administrador.mensajes.create')->with('evaluacion',$evaluacion);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function enviarObservacion(Request $request)
    {

    $mensaje = Mensaje::findOrFail($request->observaciones_mensaje_id);
    $usu= $mensaje->emisor->email;
    $mensaje->observacion=$request->observacion;
    $mensaje->estatus='observacion';
    $mensaje->save();
    Mail::to($usu)->send(new MensajeObservacion($mensaje));
    return back()
    ->with('message_success','Observaciones enviadas correctamente')
    ->with('message_info','Correo de correcciones enviado correctamente');
    }

    public function verMensajes($usuario, $postula)
    {

        $postula = Postula::findOrFail($postula);
        $mensajes = Mensaje::all();
        $solicitud = Solicitud::findOrFail($postula->solicitud->id);

        $mensaje = Mensaje::where('postula_id', $postula->id)->get();


        return view('usuarios.administrador.mensajes.verMensajes')
            ->with('mensaje',   $mensaje)
            ->with('solicitud', $solicitud)
            ->with('postula',   $postula)
            ->with('usuario',   $usuario);
    }

}
