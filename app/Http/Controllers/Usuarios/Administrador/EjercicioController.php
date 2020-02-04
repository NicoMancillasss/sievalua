<?php

namespace App\Http\Controllers\Usuarios\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ejercicio;
use App\Http\Requests\EjercicioRequest;
use Validator;

class EjercicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $ejercicios = Ejercicio::get();
        return view('usuarios.administrador.ejercicios.index')->with('ejercicios',$ejercicios);
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
    public function store(EjercicioRequest  $request)
    {
        $ejercicio = new Ejercicio();
        $ejercicio->año = $request->año;
        $ejercicio->save();
        return redirect()->route('ejercicios.index')->with('message_success','Ejercicio Creado Correctamente');
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
        $validator = Validator::make($request->all(), [
            'año'=>['required'],
        ],[ 'año.unique'=>'El año que intentas ingresar ya existe',]);

        if ($validator->fails())
        {
            return redirect()->route('ejercicios.index')->withErrors($validator,'edit')->withInput();
        }
        $ejercicio = Ejercicio::findOrFail($request->id);
        $ejercicio->fill($request->all());
        $ejercicio->save();
        return redirect()->route('ejercicios.index')->with('message_success','Ejercicio Editado Correctamente');

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

    //mirar las solicitudes deacuerdo a un determinado ejercicio
    public function verEjercicios()
    {
       
        $ejercicios = Ejercicio::get();
        return view('usuarios.administrador.solicitudes.ejercicios')->with('ejercicios',$ejercicios);
    }
}
