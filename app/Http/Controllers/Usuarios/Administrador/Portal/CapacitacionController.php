<?php

namespace App\Http\Controllers\Usuarios\Administrador\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Portal\Capacitacion;

class CapacitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $capacitacion = Capacitacion::all();

        return view('usuarios.administrador.portal.capacitacion.index')
        ->with('capacitacion', $capacitacion);
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
        $path   = $file->storeAs('public/portal/capacitacion', $random . $titulo);

        $capacitacion = new Capacitacion();

        $capacitacion->titulo      =   $request->titulo;
        $capacitacion->descripcion =   $request->descripcion;
        $capacitacion->documento   =   substr($path, 6);

        $capacitacion->save();

        return back()->with('message_success', 'Capacitacion Creado Correctamente');
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
        $capacitacion = Capacitacion::find($request->ca_id);
        if(isset($request->documento))
        {
            $file   = $request->documento;
            $titulo = $file->getClientOriginalName();
            $random = random_int(1, 3);
            $path   = $file->storeAs('public/portal/capacitacion', $random . $titulo);
            $capacitacion->documento      =   substr($path, 6);

        }

        $capacitacion->titulo      =   $request->titulo;
        $capacitacion->descripcion =   $request->descripcion;

        $capacitacion->save();

        return back()->with('message_success', 'Capacitación Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $capacitacion = Capacitacion::find($id);
        $capacitacion->delete();
        return back()->with('message_success', 'Capacitación Eliminado Correctamente');
    }
}
