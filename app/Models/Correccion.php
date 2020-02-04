<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Correccion extends Model
{
    protected $table = 'correcciones';
    protected $fillable=['datos_generales','doc_generales','doc_especificos','solicitud_id'];
    public function getTabla(){
		//get para obtener el nombre de la tabla para la bitacora
		return $this->table;
	}
}
