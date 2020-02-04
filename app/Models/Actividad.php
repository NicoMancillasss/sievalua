<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'actividades';
    protected $fillable=['asm_id','actividad','area_coordinadora','prioridad_id','area_responsable','fecha_termino','resultados_esperados','evidencias','ponderacion'];

public function asm()
    {
    	return $this->belongsTo('App\Models\Asm');
    }

    public function cantidadAvance()
    {
    	return $porcentaje = Avance::where('actividad_id',$this->id)->sum('porcentaje_avance');
    }

    public function avance(){
        return $this->hasMany('App\Models\Avance');
    }
     public function prioridad()
    {
        return $this->belongsTo('App\Models\Prioridad');
    }
}
