<?php

namespace App\Http\Controllers\Usuarios\Dependencia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Ejercicio;
use App\Models\Evaluacion;
use App\Models\Postula;
use App\Models\Solicitud;
use App\Models\Asm;
use App\Models\Mensaje;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd($url = route('dependencia.programa.documento.institucional',[1]));
        $ejercicios = Ejercicio::all();
        /* Funcion que verifica que el usuario dependencia vaya hacer evaluación
        if ( Auth::user()->vaEvaluar()) {*/
        return view('usuarios.dependencias.home.home')->with('ejercicios', $ejercicios);
        /*}else{
            \Session::flash('alert_modal', 'Función que verifica que su usuario dependencia este dada de alta para aplicarle la evaluación su dependencia no esta dada de alta');
            return redirect()->route('portal.home')->with(Auth::logout());
        }*/
    }

    public function verProgramas($ejercicio)
    {

        $ejercicio = Ejercicio::find($ejercicio);
        $evaluacion = Evaluacion::where('ejercicio_id', $ejercicio->id)
            ->where('dependencia_id', Auth::user()->dependencia->id)->get()->pluck('id');
        $asm = new Asm();

        /*Buscar todos los id que */
        $seleccionadas = Postula::whereIn('evaluacion_id', $evaluacion)
            ->where('cita', '<>', '')
            ->where('lugar', '<>', '')
            ->where('estatus', '=', 1)
            ->get();
        return view('usuarios.dependencias.home.verProgramas')
            ->with('ejercicio', $ejercicio)
            ->with('asm', $asm)
            ->with('seleccionadas', $seleccionadas);
    }
}
