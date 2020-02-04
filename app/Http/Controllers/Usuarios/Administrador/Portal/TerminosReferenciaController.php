<?php

namespace App\Http\Controllers\Usuarios\Administrador\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Portal\TerminosReferencia;

class TerminosReferenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terminosR = TerminosReferencia::all();
        // dd($terminosR);
        return view('usuarios.administrador.portal.terminos_referencia.index')->with('terminosR', $terminosR);
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
        $path   = $file->storeAs('public/portal/terminos_referencia', $random . $titulo);

        $terminosR = new TerminosReferencia();

        $terminosR->nombre      =   $request->nombre;
        $terminosR->descripcion =   $request->descripcion;
        $terminosR->documento   =   substr($path, 6);

        $terminosR->save();

        return back()->with('message_success', 'Termino de Referencia Creado Correctamente');
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
        $terminosR = TerminosReferencia::find($request->tr_id);
        if(isset($request->documento))
        {
            $file   = $request->documento;
            $titulo = $file->getClientOriginalName();
            $random = random_int(1, 3);
            $path   = $file->storeAs('public/portal/terminos_referencia', $random . $titulo);
            $terminosR->documento      =   substr($path, 6);
        }

        $terminosR->nombre      =   $request->nombre;
        $terminosR->descripcion =   $request->descripcion;

        $terminosR->save();

        return back()->with('message_success', 'Termino de Referencia Editado Correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $terminosR = TerminosReferencia::find($id);
        $terminosR->delete();
        return back()->with('message_success', 'Termino de Referencia Eliminado Correctamente');
    }
}
