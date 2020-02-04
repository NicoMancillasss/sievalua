<?php

namespace App\Http\Controllers\Usuarios\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CatalogoDocumento;
use App\Models\Ejercicio;
use App\Models\Evaluacion;

class DocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentos = CatalogoDocumento::orderBy('nombre','ASC')->get();
        $ejercicios = Ejercicio::all();
        $evaluaciones = Evaluacion::all();
        return view('usuarios.administrador.documentos.index')
        ->with('documentos',$documentos)
        ->with('evaluaciones',$evaluaciones)
        ->with('ejercicios',$ejercicios);
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
        $documento = new CatalogoDocumento($request->all());
        $documento->save();
        return redirect()->route('catalogoDocumentos.index')->with('message_success','Documento Creado Correctamente');
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
        $documentos = CatalogoDocumento::findOrfail($request->id);
        $documentos->fill($request->all());
        $documentos->save();
        return redirect()->route('catalogoDocumentos.index')->with('message_success','Documento Editado Correctamente');
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
