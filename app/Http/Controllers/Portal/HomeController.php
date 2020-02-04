<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Estado;
use App\Models\Ejercicio;
use App\Models\Portal\Carrucel;
use App\Models\Portal\Mosaico;
use App\Models\Portal\SitioInteres;

use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd($estados=Estado::all());
        $ejercicio = new Ejercicio();
        if($ejercicio->activo()>0 && strtotime(date('Y/m/d')) <= strtotime($ejercicio->ejercicioActivo()))
        {
            /*\Session::flash('message_success','Te recordamos que se encuentra ya abierta la convocatoria para el programa anual de evaluación');
            \Session::flash('ultimo','AVISO El plazo para el registro y participar en la Convocatoria del Programa Anual de Evaluación 2019, concluye el día 05 de agosto de 2019.');*/
        }

        $mosaicos = Mosaico::all();
        $imagenes = Carrucel::all();
        $sitios = SitioInteres::all();

        $var = 0;
        $v = "";

        return view('layouts.home.home')
        ->with('ejercicio', $ejercicio)
        ->with('mosaicos', $mosaicos)
        ->with('imagenes', $imagenes)
        ->with('var', $var)
        ->with('sitios', $sitios)
        ->with('v', $v);
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
    public function update(Request $request, $id)
    {
        //
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
