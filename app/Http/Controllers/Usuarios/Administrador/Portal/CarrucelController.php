<?php

namespace App\Http\Controllers\Usuarios\Administrador\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Portal\Carrucel;
use Illuminate\Validation\Rule;

class CarrucelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $carrusel =Carrucel::all();

        return view('usuarios.administrador.portal.carrusel.index')->with('carrusel', $carrusel);
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
        // dd($request->all());
        $file   = $request->imagen;
        $titulo = $file->getClientOriginalName();
        $random = random_int(1, 3);
        $path   = $file->storeAs('public/portal/carrusel', $random . $titulo);

        $carrusel = new Carrucel();

        $carrusel->titulo       =   $request->titulo;
        $carrusel->imagen       =   substr($path, 6);
        $carrusel->descripcion  =   $request->descripcion;
        $carrusel->link         =   $request->link;

        $carrusel->save();

        return back()->with('message_success', 'Carrusel Creado Correctamente');
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
        $carrusel = Carrucel::find($request->carrusel_id);

        if(isset($request->imagenCarrusel))
        {
            $file   = $request->imagenCarrusel;
            $titulo = $file->getClientOriginalName();
            $random = random_int(1, 3);
            $path   = $file->storeAs('public/portal/carrusel', $random . $titulo);
            $carrusel->imagen       =   substr($path, 6);
        }

        $carrusel->titulo       =   $request->titulo;
        $carrusel->descripcion  =   $request->descripcion;
        $carrusel->link         =   $request->link;

        $carrusel->save();

        return back()->with('message_success', 'Carrusel Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carrusel = Carrucel::find($id);
        $carrusel->delete();
        return back()->with('message_success', 'Carrusel Eliminado Correctamente');
    }
}
