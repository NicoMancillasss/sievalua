<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Estado;
use App\Models\Portal\Convocatoria;

class convocatoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $convocatorias = Convocatoria::all();
        return view('layouts.home.convocatoria')->with('convocatorias',$convocatorias);

    }

    public function resultadosConvocatoria()
    {
        $convocatorias = Convocatoria::all();
        return view('layouts.home.resultadosConvocatoria')->with('convocatorias',$convocatorias);
    }
}
