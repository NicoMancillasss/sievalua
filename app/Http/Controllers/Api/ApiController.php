<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Municipio;
use App\Models\Estado;
use App\Models\Postula;
use App\Models\Evaluacion;
use App\Models\Tema;

class ApiController extends Controller
{
    public function obtenerMunicipio($id)
    {
        return Municipio::where('estado_id',$id)->orderBy('nombre','ASC')->get();
        
    }

    public function obtenerEstados($id)
    {
    	return Estado::where('id_pais',$id)->orderBy('nombre','ASC')->get();
    }

    public function getDependencia($evaluacion)
    {
    	 	
        $evaluacion = Evaluacion::find($evaluacion);

        return response()->json($evaluacion->dependencia);
    }

     public function getTipoEvaluacion($evaluacion)
    {
    	 	
        $evaluacion = Evaluacion::find($evaluacion);

        return response()->json($evaluacion->tipoEvaluacion);
    }

    public function getTemas($evaluacion)
    {
         $evaluacion = Evaluacion::find($evaluacion);
         $temas = Tema::where('tipo_evaluacion_id',$evaluacion->tipo_evaluacion)->orWhere('id',22)->get();
         
         return response()->json($temas);

    }


    public function getDespacho($evaluacion)
    {
    	$postula = Postula::where('evaluacion_id',$evaluacion)
        ->where('cita','<>','')
        ->where('lugar','<>','')
        ->where('estatus','=',1)
        ->get()->first();

        return response()->json($postula->solicitud->user);
    }

}
