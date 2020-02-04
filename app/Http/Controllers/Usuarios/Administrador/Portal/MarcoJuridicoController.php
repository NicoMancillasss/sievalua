<?php

namespace App\Http\Controllers\Usuarios\Administrador\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Portal\MarcoJuridico;

class MarcoJuridicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcoJuridico = MarcoJuridico::all();

        return view('usuarios.administrador.portal.marco_juridico.index')
        ->with('marcoJuridico', $marcoJuridico);
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
        $path   = $file->storeAs('public/portal/marco_juridico', $random . $titulo);

        $marcoJ = new MarcoJuridico();

        $marcoJ->titulo      =   $request->titulo;
        $marcoJ->descripcion =   $request->descripcion;
        $marcoJ->documento   =   substr($path, 6);

        $marcoJ->save();

        return back()->with('message_success', 'Marco Juridico Creado Correctamente');
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
        $marcoJ = MarcoJuridico::find($request->mj_id);
        if(isset($request->documento))
        {
            $file   = $request->documento;
            $titulo = $file->getClientOriginalName();
            $random = random_int(1, 3);
            $path   = $file->storeAs('public/portal/marco_juridico', $random . $titulo);
            $marcoJ->documento      =   substr($path, 6);
        }

        $marcoJ->titulo      =   $request->titulo;
        $marcoJ->descripcion =   $request->descripcion;

        $marcoJ->save();

        return back()->with('message_success', 'Marco Juridico Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marcoJ = MarcoJuridico::find($id);
        $marcoJ->delete();
        return back()->with('message_success', 'Marco Juridico Eliminado Correctamente');
    }
}
