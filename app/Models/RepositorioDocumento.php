<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RepositorioDocumento extends Model
{
    protected $table = 'repositorio_documentos';
    protected $fillable=['id','documento_id','ruta','postulacion_id','solicitud_id'];
    public function getTabla(){
		//get para obtener el nombre de la tabla para la bitacora
		return $this->table;
	}
    public function documento()
	{
		return $this->BelongsTo('App\Models\CatalagoEvaluacion','catalago_documento_id'); 
	}
	public function solicitud()
	{
		return $this->BelongsTo('App\Models\Solicitud','solicitud_id'); 
	}


}
