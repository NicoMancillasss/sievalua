<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Asm;
use App\Models\Actividad;
use App\Models\Avance;
use Illuminate\Contracts\Queue\ShouldQueue;
use DB;
/*Pae*/
class Evaluacion extends Model implements ShouldQueue
{
    protected $table = 'evaluaciones';
    protected $fillable=['entregable','programa_id','tipo_evaluacion','ejercicio_id','dependencia_id'];
    public function getTabla(){
        //get para obtener el nombre de la tabla para la bitacora
        return $this->table;
    }
    public $totall=[];


     public function documentosFinales()
    {
    	return $this->hasMany('App\Models\CatalogoDocumentosDespachoEva');
    }

    public function dependencia()
    {
    	return $this->BelongsTo('App\Models\Dependencia');
    }
    public function programa()
    {
    	return $this->BelongsTo('App\Models\Programa');
    }

    public function ejercicio()
    {
    	return $this->BelongsTo('App\Models\Ejercicio');
    }

    public function tipoEvaluacion()
    {
    	return $this->BelongsTo('App\Models\TipoEvaluacion','tipo_evaluacion');
    }

    public function postula()
    {
        return $this->hasOne('App\Models\Postula');
    }

     public function asm()
    {
        return $this->hasMany('App\Models\Asm');
    }

    public function cantidadAsm()
    {
        $asm = Asm::where('ejercicio_id',$this->ejercicio_id)
        ->where('evaluacion_id',$this->id)
        ->where('estatus_id',3)
        ->where('tipo','Dependencia')->get();

        return $asm;
    }

    public function asmPrioridad($prioridad)
    {
        $asm = Asm::where('ejercicio_id',$this->ejercicio_id)
        ->where('dependencia_id',$this->dependencia_id)
        ->where('tipo','Dependencia')
        ->where('estatus_id',3)
        ->where('nivel_prioridad',$prioridad)
        ->get();
        return $asm;
    }

    public function asmActor($actor)
    {
        $asm = Asm::where('ejercicio_id',$this->ejercicio_id)
        ->where('dependencia_id',$this->dependencia_id)
        ->where('tipo','Dependencia')
        ->where('estatus_id',3)
        ->where('aspecto',$actor)
        ->get()->count();
        return $asm;
    }

    public function asmTerminados()
    {

        $asm = $this->cantidadAsm();


        $contador =0;
        $porcentaje =0;
        foreach ($asm as $as) {
            foreach ($as->actividades as $ac) {

                if (isset($ac)) {
                    $porcentaje = $porcentaje + $ac->cantidadAvance();

                }
            }

            if ($as->actividades->count()!=0) {
                if ($porcentaje/$as->actividades->count() == 100) {

                $contador++;
            }
            $porcentaje=0;
            }
        }
        return $contador;



        /*
         $asm = Asm::leftjoin('actividades','actividades.asm_id','=','asm.id')
                   ->leftjoin('avances','avances.actividad_id','=','actividades.id')
                   ->join('estatus','asm.estatus_id','estatus.id')
                ->select(
              DB::raw('SUM(avances.porcentaje_avance) * (actividades.ponderacion / 100) as porcentaje_asm'),
            )
            ->where('asm.tipo','Dependencia')
           //->where('asm.user_id',Auth::user()->id)
            ->where('asm.evaluacion_id',$this->id)
            ->where('asm.estatus_id',3)
            ->groupBy('asm.id')


           ->get()->pluck('porcentaje_asm')->toArray();


         $i=0;
        foreach($asm as $indice){
            if($indice === '100.0000')
                 $i++;
        }

        return $i;
        */


    }

    public function asmPorcentaje()
    {
         /*$asm = Asm::leftjoin('actividades','actividades.asm_id','=','asm.id')
                   ->leftjoin('avances','avances.actividad_id','=','actividades.id')
                   ->join('estatus','asm.estatus_id','estatus.id')
                ->select(
              DB::raw('SUM(avances.porcentaje_avance) * (actividades.ponderacion / 100) as porcentaje_asm'),
            )
            ->where('asm.tipo','Dependencia')
           //->where('asm.user_id',Auth::user()->id)
            ->where('asm.evaluacion_id',$this->id)
            ->where('asm.estatus_id',3)
            ->groupBy('asm.id')


           ->get()->pluck('porcentaje_asm')->toArray();



          if (count($asm)==0) {
            return 0;
        }else{


            return array_sum($asm)/count($asm);
        }*/



        $asm = $this->cantidadAsm();

        $porcentaje =0;
        foreach ($asm as $as) {

            foreach ($as->actividades as $ac) {
                $actividad = Actividad::find($ac->id);
                if (isset($actividad)) {

                    $porcentaje = ($porcentaje + $actividad->cantidadAvance()/$as->actividades->count());
                }
            }
        }

        if (count($asm)==0) {
            return 0;
        }else{
            array_push($this->totall,$porcentaje/$asm->count());

            return $porcentaje/$asm->count();
        }



    }



public function totalAsmTerminados()
{

    $pae = Evaluacion::where('ejercicio_id',$this->ejercicio_id)->get();
    $total=0;
    foreach ($pae as $pa ) {
        $total= $total +$pa->asmTerminados();
    }
    return round($total,2);




}

public function totalAsmAvance()
{
    $pae = Evaluacion::where('ejercicio_id',$this->ejercicio_id)->get();
    $total=0;
    foreach ($pae as $pa ) {
        $total= $total +$pa->asmPorcentaje();
    }


    if ($total==0) {
            return 0;
        }else{


             return round( $total/$pae->count(),2);
        }

}

public function totalAsm()
{
  /*
  $pae = Evaluacion::where('ejercicio_id',$this->ejercicio_id)->get();
    $total=0;
    foreach ($pae as $pa ) {
        $total= $total +$pa->cantidadAsm()->count();
    }
    return $total;
    */

    $pae = Evaluacion::where('ejercicio_id',$this->ejercicio_id)->get();

    $total = DB::table('asm')
                ->where('ejercicio_id',$this->ejercicio_id)
                ->where('tipo','Dependencia')
                ->where('estatus_id',3)
                ->whereIn('evaluacion_id',$pae->pluck('id'))
                ->get()->count();

    return $total;
}

public function totalPrioridad($prioridad)
{

    $pae = Evaluacion::where('ejercicio_id',$this->ejercicio_id)->get();
    $total = DB::table('asm')
                ->where('ejercicio_id',$this->ejercicio_id)
                ->where('tipo','Dependencia')
                ->where('prioridad_id',$prioridad)
                ->where('estatus_id',3)
                ->whereIn('evaluacion_id',$pae->pluck('id'))
                ->get()->count();
         
    return $total;
}

public function totalActor($actor)
{
    $pae = Evaluacion::where('ejercicio_id',$this->ejercicio_id)->get();
    $total = DB::table('asm')
                ->where('ejercicio_id',$this->ejercicio_id)
                ->where('tipo','Dependencia')
                ->where('aspecto_id',$actor)
                ->where('estatus_id',3)
                ->whereIn('evaluacion_id',$pae->pluck('id'))
                ->get()->count();

    return $total;
}


}
