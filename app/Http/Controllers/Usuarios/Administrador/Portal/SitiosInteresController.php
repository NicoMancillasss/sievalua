<?php

namespace App\Http\Controllers\Usuarios\Administrador\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Portal\SitioInteres;

class SitiosInteresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $si = SitioInteres::all();

        return view('usuarios.administrador.portal.sitios_interes.index')->with('si', $si);
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
        $file   = $request->imagen;
        $nombre = $file->getClientOriginalName();
        $random = random_int(1, 3);
        $path   = $file->storeAs('public/portal/sitios_interes', $random . $nombre);

        $si = new SitioInteres();

        $si->nombre    =   $request->nombre;
        $si->imagen    =   substr($path, 6);
        $si->link      =   $request->link;

        $si->save();

        return back()->with('message_success', 'Sitio de Interes Creado Correctamente');
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
        $si = SitioInteres::find($request->si_id);

        if(isset($request->documento))
        {
            // $si->fill($request->all());
            $file   = $request->imagen;
            $nombre = $file->getClientOriginalName();
            $random = random_int(1, 3);
            $path   = $file->storeAs('public/portal/sitios_interes', $random . $nombre);
            $si->imagen    =   substr($path, 6);
        }

        $si->nombre    =   $request->nombre;
        $si->link      =   $request->link;

        $si->save();

        return back()->with('message_success', 'Sitio de Interes Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $si = SitioInteres::find($id);
        $si->delete();
        return back()->with('message_success', 'Sitio de Interes Eliminado Correctamente');
    }
}
