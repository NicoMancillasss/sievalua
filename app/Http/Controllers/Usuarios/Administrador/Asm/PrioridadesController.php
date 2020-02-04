<?php

namespace App\Http\Controllers\Usuarios\Administrador\Asm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Prioridad;

class PrioridadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prioridades = Prioridad::all();
        return view('usuarios.administrador.asm.prioridades.index')->with('prioridades',$prioridades);
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
        $prioridades = new Prioridad($request->all());
        $prioridades->save();
        return redirect()->route('prioridades.index')->with('message_success','Prioridad Creado correctamente');
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
        $prioridad = Prioridad::findOrFail($request->id);
        $prioridad->fill($request->all());
        $prioridad->save();
        return redirect()->route('prioridades.index')->with('message_success','Prioridad Editada Correctamente');
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
