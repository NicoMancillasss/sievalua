<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Carbon\Carbon;

class Postula extends Model
{
	protected $table = 'postula';
	protected $fillable=['evaluacion_id','solicitud_id'];

	public function getTabla(){
		//get para obtener el nombre de la tabla para la bitacora
		return $this->table;
	}

	public function evaluacion()
	{
		return $this->BelongsTo('App\Models\Evaluacion'); 
	}
	public function solicitud()
	{
		return $this->BelongsTo('App\Models\Solicitud'); 
	}

	public function documentoEspecifico(){
		return $this->hasOne('App\Models\DocumentoEspecifico');
	}

	public function repositorioDocumento()
	{
		return $this->hasMany('App\Models\RepositorioDocumento','postulacion_id');
	}

	public function parseFecha()
	{
		Carbon::setLocale('es');
		$date = Carbon::parse($this->cita, 'UTC');
		return  $this->cita=$date->isoFormat('dddd D MMMM YYYY, h:mm a');
	}

	public function evaluacionAsignada()
	{
		/*buscar si existe una registro en la tabla postulacion de la evaluacion correspondiente*/

		$existe = $this->where('evaluacion_id',$this->evaluacion->id)
		->where('cita','<>','')
		->where('lugar','<>','')
		->get()->count();
		if ($existe >0) {
			return true;
		}else{
			return false;
		}
	}

	public function isAceptada()
	{
		if($this->estatus==1 && $this->cita!=Null && $this->lugar!= Null)
		{
			return true;
		}else{
			return false;
		}


	}

}
