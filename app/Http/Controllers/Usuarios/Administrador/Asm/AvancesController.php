<?php

namespace App\Http\Controllers\Usuarios\Administrador\Asm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Avance;
//use App\Events\NuevaAlerta;
use App\Notifications\NuevaAlerta;
use Route;
use App\User;

class AvancesController extends Controller
{
    public function aceptarAvance(Request $request,$tipo)
     {
        

        switch ($tipo) {
            case 'aceptacion_rechazo':
                $avance = Avance::findOrFail($request->avance_id);
                if ($avance->estatus_id == 1){
                    $avance->estatus_id = 3;
                    
                }else if($avance->estatus_id == 3){
                    $avance->estatus_id = 1;
                }
            break;

            case 'correccion':
                $avance = Avance::findOrFail($request->correccion_avance_id);
                $avance->estatus_id=2;
                $avance->correccion=$request->correcciones;
                $avance->save();
                $ruta = Route('dependencia.programa.asm.actividad.avance',[$avance->actividad_id,$avance->actividad->asm->evaluacion_id]);
                $user = User::where('perfil_id',4)->where('dependencia_id',$avance->actividad->asm->evaluacion->dependencia->id)->first();
                $user->notify(new NuevaAlerta(array('titulo'=>'Tienes Una nueva corrección','mensaje'=>'Click para ver corrección','ruta'=>$ruta,'tipo'=>'warning')));
                 
                return back();
             break;
            
            default:
                # code...
            break;
        }

        $avance->save();

        
        

        return back();
     }
}
