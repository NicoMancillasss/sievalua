<?php

namespace App\Http\Controllers\Usuarios\Dependencia\Asm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Evaluacion;
use App\Models\Actividad;
use App\Models\Avance;
use App\Models\Asm;
use Auth;

class DocumentoTrabajoController extends Controller
{
    public function documentoTrabajo($id)
    {
    	$evaluacion = Evaluacion::find($id);
        $asm = $evaluacion->asm->where('user_id',Auth::user()->id)
        ->where('tipo','Dependencia')
        ->where('ejercicio_id','=',$evaluacion->ejercicio_id)
        ->where('aspecto_id','=',1)
        ->where('estatus_id',3);

        return view('usuarios.dependencias.asm.documento_trabajo.index')
        ->with('evaluacion',$evaluacion)
        ->with('asm',$asm);

    }

    public function avanceDocumentoTrabajo($id)
    {
        $evaluacion = Evaluacion::find($id);

        $asm = $evaluacion->asm->where('user_id',Auth::user()->id)
        ->where('tipo','Dependencia')
        ->where('ejercicio_id','=',$evaluacion->ejercicio_id)
        ->where('aspecto_id','=',1)
        ->where('estatus_id',3);

        return view('usuarios.dependencias.asm.documento_trabajo.avances')
        ->with('evaluacion',$evaluacion)
        ->with('asm',$asm);

    }

    public function verAvance(Actividad $actividad,$evaluacion)
    {
        $evaluacion = Evaluacion::find($evaluacion);
        $avances = Avance::where('actividad_id',$actividad->id)->get();

        return view('usuarios.dependencias.asm.documento_trabajo.acciones')
        ->with('avances',$avances)
        ->with('evaluacion',$evaluacion)
        ->with('actividad',$actividad);
    }

    public function verActividades($asm)
    {
    $asm = Asm::findOrFail($asm);
    return view('usuarios.dependencias.asm.documento_trabajo.actividades')
    ->with('asm',$asm);
    }


}
