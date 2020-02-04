<?php

namespace App\Http\Controllers\Usuarios\Administrador\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Portal\SistemaEstatal;

class SistemaEstatalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $se = SistemaEstatal::all();

        return view('usuarios.administrador.portal.sistema_estatal.index')->with('se', $se);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sE = new SistemaEstatal();

        $sE->nombre =   $request->nombre;
        $sE->link   =   $request->link;

        $sE->save();

        return back()->with('message_success', 'Sistema Estatal de Evaluación Creado Correctamente');
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
    public function update(Request $request)
    {
        $sE = SistemaEstatal::find($request->se_id);

        $sE->nombre =   $request->nombre;
        $sE->link   =   $request->link;

        $sE->save();

        return back()->with('message_success', 'Sistema Estatal de Evaluación Editado Correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $se = SistemaEstatal::find($id);
        $se->delete();

        return back()->with('message_success', 'Sistem Estatal de Evaluación Eliminado Correctamente');
    }
}
