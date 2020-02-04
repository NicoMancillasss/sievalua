<?php

namespace App\Http\Controllers\Usuarios\Administrador\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Portal\Mosaico;
use Illuminate\Support\Facades\Storage;

class MosaicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagenes = Mosaico::all();

        return view('usuarios.administrador.portal.mosaicos.index')->with('imagenes', $imagenes);
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

        $file   = $request->imagen;
        $nombre = $file->getClientOriginalName();
        $random = random_int(1,3);
        $path   = $file->storeAs('public/portal/mosaico', $random.$nombre);

        $mosaico = new Mosaico();

        $mosaico->nombre    =   $request->nombre;
        $mosaico->imagen    =   substr($path, 6);
        $mosaico->link      =   $request->link;

        $mosaico->save();

        return back()->with('message_success', 'Mosaico Creado Correctamente');
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
        $mosaico = Mosaico::find($request->mosaico_id);

        if(isset($request->documento))
        {
            $mosaico->fill($request->imagen);
            $file   = $request->imagen;
            $nombre = $file->getClientOriginalName();
            $random = random_int(1, 3);
            $path   = $file->storeAs('public/portal/mosaico', $random . $nombre);
            $mosaico->imagen    =   substr($path, 6);
        }
        
        $mosaico->nombre    =   $request->nombre;
        $mosaico->link      =   $request->link;

        $mosaico->save();

        return back()->with('message_success', 'Mosaico Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mosaico = Mosaico::find($id);
        $mosaico->delete();
        return back()->with('message_success', 'Mosaico Eliminado Correctamente');
    }
}
