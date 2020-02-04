<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Solicitud;

class Ejercicio extends Model
{
    protected $table = 'ejercicios';
    protected $fillable=['año','activo','fecha_cierre'];

    public function activo()
    {
    	/*Verificamos si existe porlomenor su ejercicio activo*/
    	return $this->where('activo',1)->get()->count();
    }

    public function ejercicioActivo()
    {
      /*Retorna la fecha del ejercicio activo*/
    	 $fecha =$this->where('activo',1)->get()->first();
    	 return $fecha->fecha_cierre;
    }

    public function ejercicioActualActivo()
    {
      return $ejercicio =$this->where('activo',1)->get()->first();
      
    }

    /*Ver la cantidad de solicitudes que existen por ejercicio*/
    public function cantidadRevision()
    {
      return  $solicitudes = Solicitud::where('ejercicio_id',$this->id)
      ->where('estatus','revision')
      ->get()->count();
    }

    public function cantidadCorreccion()
    {
      return  $solicitudes = Solicitud::where('ejercicio_id',$this->id)
      ->where('estatus','correccion')
      ->get()->count();
    }
    
    public function cantidadRechazo()
    {
      return  $solicitudes = Solicitud::where('ejercicio_id',$this->id)
      ->where('estatus','rechazado')
      ->get()->count();
    }
    
    public function cantidadAceptado()
    {
      return  $solicitudes = Solicitud::where('ejercicio_id',$this->id)
      ->where('estatus','aceptado')
      ->get()->count();
    }
}
