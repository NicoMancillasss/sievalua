<?php

namespace App\Http\Controllers\Usuarios\Administrador\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Portal\Contratacion;

class ContratacionEvaluacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contrataciones = Contratacion::all();

        return view('usuarios.administrador.portal.contratacion.index')
        ->with('contrataciones', $contrataciones);
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
        $path   = $file->storeAs('public/portal/contrataciones', $random . $titulo);

        $contratacion = new Contratacion();

        $contratacion->titulo      =   $request->titulo;
        $contratacion->descripcion =   $request->descripcion;
        $contratacion->documento   =   substr($path, 6);

        $contratacion->save();

        return back()->with('message_success', 'Contratacion Creada Correctamente');
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

        $contratacion = Contratacion::find($request->co_id);
        if(isset($request->documento))
        {
            $file   = $request->documento;
            $titulo = $file->getClientOriginalName();
            $random = random_int(1, 3);
            $path   = $file->storeAs('public/portal/contrataciones', $random . $titulo);
            $contratacion->documento      =   substr($path, 6);
        }
        
        $contratacion->titulo      =   $request->titulo;
        $contratacion->descripcion =   $request->descripcion;

        $contratacion->save();

        return back()->with('message_success', 'Contrataciones Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contratacion = Contratacion::find($id);
        $contratacion->delete();
        return back()->with('message_success', 'Contratación Eliminado Correctamente');
    }
}
