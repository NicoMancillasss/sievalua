<?php

namespace App\Http\Controllers\Usuarios\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TipoEvaluacion;
use SebastianBergmann\Environment\Console;

class TiposEvaluacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos_evaluaciones =TipoEvaluacion::get();
        return view('usuarios.administrador.tipos_evaluacion.index')->with('tipos_evaluaciones',$tipos_evaluaciones);    
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
        $tipos_evaluaciones = new TipoEvaluacion($request->all());
        $tipos_evaluaciones->save();
        return redirect()->route('tiposEvaluaciones.index')->with('message_success','Tipo de evaluación Creada Correctamente');
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
        $tipos_evaluaciones = TipoEvaluacion::findOrFail($request->id);
        $tipos_evaluaciones->fill($request->all());
        $tipos_evaluaciones->save();
        return redirect()->route('tiposEvaluaciones.index')->with('message_success','Programa Editado Correctamente');
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
