<?php

namespace App\Http\Controllers\Usuarios\Administrador\Asm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tema;
use App\Models\TipoEvaluacion;

class TemasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temas = Tema::all();
        $tipos_evaluaciones = TipoEvaluacion::get();
        return view('usuarios.administrador.asm.temas.index')->with('temas',$temas)->with('tipos_evaluaciones',$tipos_evaluaciones);
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
        $temas = new Tema($request->all());
        $temas->save();
        return redirect()->route('temas.index')->with('message_success','Tema Creado Correctamente');
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
        $temas = Tema::findOrFail($request->id);
        $temas->fill($request->all());
        $temas->save();
        return redirect()->route('temas.index')->with('message_success','Tema Editado Correctamente');
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
