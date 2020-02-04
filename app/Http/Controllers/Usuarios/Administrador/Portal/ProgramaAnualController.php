<?php

namespace App\Http\Controllers\Usuarios\Administrador\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Portal\ProgramaAnual;

class ProgramaAnualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programas = ProgramaAnual::all();

        return view('usuarios.administrador.portal.programas_anuales.index')
        ->with('programas', $programas);
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
        $path   = $file->storeAs('public/portal/programas_anuales', $random . $titulo);

        $programaA = new ProgramaAnual();

        $programaA->titulo      =   $request->titulo;
        $programaA->descripcion =   $request->descripcion;
        $programaA->documento   =   substr($path, 6);

        $programaA->save();

        return back()->with('message_success', 'Programa Anual Creado Correctamente');
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
        $programaA = ProgramaAnual::find($request->pa_id);
        // $programaA->fill($request->all());
        // dd($programaA, $request->all());



        $programaA->titulo      =   $request->titulo;
        $programaA->descripcion =   $request->descripcion;

        if(isset($request->documento))
        {
            dd($request->documento);
            $file   = $request->documento;
            $titulo = $file->getClientOriginalName();
            $random = random_int(1, 3);
            $path   = $file->storeAs('public/portal/programas_anuales', $random . $titulo);
            $programaA->documento      =   substr($path, 6);
        }

        

        $programaA->save();

        return back()->with('message_success', 'Programa Anual Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $programaA = ProgramaAnual::find($id);
        $programaA->delete();
        return back()->with('message_success', 'Programa Anual Eliminado Correctamente');
    }
}
