<?php

namespace App\Http\Controllers\Usuarios\Administrador\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Portal\AvisoPrivacidad;

class AvisoPrivacidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aviso = AvisoPrivacidad::all();

        return view('usuarios.administrador.portal.aviso_privacidad.index')
        ->with('aviso', $aviso);
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
        //
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
        $aviso = AvisoPrivacidad::find($request->av_id);

        $file   = $request->documento;
        $titulo = $file->getClientOriginalName();
        $path   = $file->storeAs('public/portal/aviso_privacidad', $titulo);
        $aviso->documento      =   substr($path, 6);

        $aviso->save();

        return back()->with('message_success', 'Aviso de Privacidad Editado Correctamente');
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
