<?php

namespace App\Http\Controllers\Usuarios\Administrador\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Portal\TotalEvaluacion;

class TotalEvaluacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalE = TotalEvaluacion::all();

        return view('usuarios.administrador.portal.total_evaluaciones.index')
        ->with('totalE', $totalE);
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
        $file   = $request->documento;
        $titulo = $file->getClientOriginalName();
        $random = random_int(1, 3);
        $path   = $file->storeAs('public/portal/total_evaluaciones', $random . $titulo);

        $totalE = new TotalEvaluacion();

        $totalE->titulo      =   $request->titulo;
        $totalE->descripcion =   $request->descripcion;
        $totalE->documento   =   substr($path, 6);

        $totalE->save();

        return back()->with('message_success', 'Total de evaluación Creado Correctamente');
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
        $totalE = TotalEvaluacion::find($request->te_id);
        if(isset($request->documento))
        {
            $file   = $request->documento;
            $titulo = $file->getClientOriginalName();
            $random = random_int(1, 3);
            $path   = $file->storeAs('public/portal/programas_anuales', $random . $titulo);
            $totalE->documento      =   substr($path, 6);

        }

        $totalE->titulo      =   $request->titulo;
        $totalE->descripcion =   $request->descripcion;

        $totalE->save();

        return back()->with('message_success', 'Total Evaluación Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $totalE = TotalEvaluacion::find($id);
        $totalE->delete();
        return back()->with('message_success', 'Total Evaluación Eliminado Correctamente');
    }
}
