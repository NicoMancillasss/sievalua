<?php

namespace App\Http\Controllers\Usuarios\Despacho;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ejercicio;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ejercicio = new Ejercicio();


        if($ejercicio->activo()>0 && strtotime(date('Y/m/d')) >= strtotime($ejercicio->ejercicioActivo()))
        {
            \Session::flash('message_success','Te recordamos que ha concluido el proceso de evaluación');
            return view('usuarios.dependencia.mensajes.index')->with('ejercicio',$ejercicio);
        }
        else if($ejercicio->activo()>0 && strtotime(date('Y/m/d')) <= strtotime($ejercicio->ejercicioActivo())) {
            /**
             * \Session::flash('message_danger','Te recordamos que ha concluido el proceso de evaluación');*/
            /*\Session::flash('ultimo','AVISO            Se informa a los Despachos Externos interesados a participar
            en la Convocatoria para realizar las Evaluaciones al Desempeño contempladas en el Programa Anual de Evaluación 2019,
             que el plazo para el registro concluye el último minuto del día 05 de agosto de 2019.');*/
            return view('usuarios.dependencia.mensajes.index')->with('ejercicio',$ejercicio);
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
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
}
