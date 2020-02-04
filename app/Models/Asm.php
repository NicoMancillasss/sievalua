<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Models\Evaluacion;
use DB;

class Asm extends Model
{
    protected $table = 'asm';
    protected $fillable=['asm','recomendacion','documento_referencia',
    'estatus','evaluacion_id','ejercicio_id','fecha_termino',
    'prioridad_id','prioridad_justificacion','aspecto_id','accion_id','otro_tema','justificacion_accion','area_responsable','area_coordinadora','resultados_esperados','evidencia'];

    public function getTabla(){
        //get para obtener el nombre de la tabla para la bitacora
        return $this->table;
    }
    
    public function tema()
    {
    	return $this->hasMany('App\Models\TemaAsm');
    }

    public function despacho()
    {
        return $this->belongsTo('App\User');
    }


    public function evaluacion()
    {
        return $this->belongsTo('App\Models\Evaluacion');
    }


    public function actor()
    {
    	return $this->hasMany('App\Models\ActorAsm');
    }

    public function actividades()
    {
        return $this->hasMany('App\Models\Actividad');
    }


    public function estatus()
    {
        return $this->belongsTo('App\Models\Estatus');
    }
    public function ejercicio()
    {
        return $this->belongsTo('App\Models\Ejercicio');
    }

    public function engloba()
    {
         return $this->hasMany('App\Models\EnglobaAsm');
    }

    public function prioridad()
    {
        return $this->belongsTo('App\Models\Prioridad');
    }
    public function accion()
    {
        return $this->belongsTo('App\Models\Accion');
    }
    public function aspecto()
    {
        return $this->belongsTo('App\Models\Aspecto');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function clasificaAsm(array $actores)
    {
       /*Validacion clasificacion de aspectos de mejora vSusceptibles*/
       if ($actores==[1]) {
        return "1";
    }else if( $actores==[2] || $actores==[1,2] ||$actores==[2,3] || $actores==[3] || $actores==[1,2,3]){
        return "2";
    }else if ($actores==[4] || $actores==[3,4] ) {
        return "3";
    }else if($actores==[5] ){
        return "4";
    }else{
        return "4";
    }

}

public function cantidadClasificacion($evaluacion,$tipo)
{
 $evaluacion = Evaluacion::find($evaluacion);
 return $this->where('evaluacion_id',$evaluacion->id)
 ->where('ejercicio_id',$evaluacion->ejercicio_id)
 ->where('user_id',Auth::user()->id)
 ->where('aspecto_id',$tipo)
 ->where('estatus_id',3)->get()->count();
}

public function porcentajeAsm()
{
  

    $total =0;
    foreach ($this->actividades as $actividad) {
      $total += ($actividad->cantidadAvance() * ($actividad->ponderacion))/100;
    }

    if ($this->actividades->count() >0) {
        return $total;
   }else{
        return 0;
    }
    

/*
    $cantidad_avance = $this
            ->leftjoin('actividades','actividades.asm_id','=','asm.id')
            ->leftjoin('avances','avances.actividad_id','=','actividades.id')
            ->select(DB::raw('SUM(avances.porcentaje_avance) * (actividades.ponderacion / 100) as cantidad_avance'),
                DB::raw('COUNT(DISTINCT actividades.id) actividades' ),
                //DB::raw('COUNT(DISTINCT asm.id) asm' ),
                //DB::raw('COUNT(DISTINCT avances.id) avances' ),
                //DB::raw('IF(SUM(avances.porcentaje_avance)/COUNT(DISTINCT actividades.id) = 100, 1, null) as terminados_cantidad')
            )
            ->where('asm.tipo','Dependencia')
            ->where('asm.estatus_id',3)
            ->where('asm.evaluacion_id',$this->evaluacion_id)
            ->groupBy('asm.id')
            ->distinct(DB::raw('DISTINCTROW'))

           ->get();
           dd($cantidad_avance);*/
           
    

}


}
