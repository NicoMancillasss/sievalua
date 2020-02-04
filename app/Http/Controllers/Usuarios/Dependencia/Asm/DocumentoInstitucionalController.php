<?php

namespace App\Http\Controllers\Usuarios\Dependencia\Asm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Evaluacion;
use App\Models\Actividad;
use App\Models\Avance;
use App\Models\Asm;
use Auth;

class DocumentoInstitucionalController extends Controller
{
    
     public function documentoInstitucional($id)
    {
    	 $evaluacion = Evaluacion::find($id);
         $asm = $evaluacion->asm->where('user_id',Auth::user()->id)
        ->where('tipo','Dependencia')
        ->where('ejercicio_id','=',$evaluacion->ejercicio_id)
        ->where('aspecto_id','=',2)
        ->where('estatus_id',3);

         return view('usuarios.dependencias.asm.documento_institucional.index')
        ->with('evaluacion',$evaluacion)
        ->with('asm',$asm);

    }

    public function avanceDocumentoInstitucional($id)
    {
        $evaluacion = Evaluacion::find($id);

        $asm = $evaluacion->asm->where('user_id',Auth::user()->id)
        ->where('tipo','Dependencia')
        ->where('ejercicio_id','=',$evaluacion->ejercicio_id)
        ->where('aspecto_id','=',2)
        ->where('estatus_id',3);

        return view('usuarios.dependencias.asm.documento_institucional.avances')
        ->with('evaluacion',$evaluacion)
        ->with('asm',$asm);
    }

     public function verAvance(Actividad $actividad,$evaluacion)
    {
        
        $evaluacion = Evaluacion::find($evaluacion);
        $avances = Avance::where('actividad_id',$actividad->id)->get();

        return view('usuarios.dependencias.asm.documento_institucional.acciones')
        ->with('avances',$avances)
        ->with('evaluacion',$evaluacion)
        ->with('actividad',$actividad);
    }
}
