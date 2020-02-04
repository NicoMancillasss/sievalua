<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ejercicio;
use \Carbon\Carbon;
use Auth;
use App\Models\CatalagoEvaluacion;
use App\Models\CatalogoDocumento;
use App\Models\RepositorioDocumento;

class Solicitud extends Model
{

  protected $table = 'solicitudes';

  protected $fillable=['rfc','telefono','telefono_oficina','representante_legal','estatus','archivos','año','user_id','estado_id','municipio_id','redes_sociales','logo','folio','pais_id','vialidad_id','colonia','codigo_postal','vialidad','numero_interior','numero_exterior','nombre','apellido_materno','apellido_paterno'];

  public function getTabla(){
    //get para obtener el nombre de la tabla para la bitacora
    return $this->table;
  }
  public function user()
  {
    return $this->BelongsTo('App\User');
  }

  public function ejercicio()
  {
    return $this->BelongsTo('App\Models\Ejercicio');
  }

  public function estado()
  {
    return $this->BelongsTo('App\Models\Estado');
  }

  public function municipio()
  {
   return $this->BelongsTo('App\Models\Municipio');
 }

 public function postula()
 {
  return $this->hasMany('App\Models\Postula');
}

public function documentoGeneral()
{
  return $this->hasOne('App\Models\Documento');
}

public function pais()
{
  return $this->BelongsTo('App\Models\Pais');
}

public function tipoVialidad()
{
  return $this->BelongsTo('App\Models\Vialidad','vialidad_id');
}

public function correccion()
{
  return $this->hasOne('App\Models\Correccion');
}

public function completoTodo()
{
    //verificamos que tenga seleccionadas Postulaciones
  if($this->documentosGenerales() && $this->postulaciones() && $this->documentosEspecificos()){
    return true;
  }else{
    return false;
  }


}

/**/
public function documentosGenerales()
{
  $catalogo = CatalagoEvaluacion::where('ejercicio_id',$this->ejercicio_id)->where('evaluacion_id',null)->pluck('id')->toArray();


  $cargados = RepositorioDocumento::where('solicitud_id',$this->id)
  ->where('postulacion_id',null)->where('ruta','<>','')->get()->pluck('catalago_documento_id')->toArray();

  asort($catalogo);
  asort($cargados);


 $compara= array_diff($catalogo,$cargados);

  if ($compara==[]) {
    return true; //
  }else{
    return false; //true tenia
  }
}

public function postulaciones()
{
  if ($this->postula->count()>0) {
    return true;
  }else{
    return false;
  }
}

public function documentosEspecificos()
{
  foreach ($this->postula as $p) {
    $catalogo = CatalagoEvaluacion::where('ejercicio_id',$this->ejercicio_id)
    ->where('evaluacion_id',$p->evaluacion->id)
    ->get()->pluck('id')->toArray();

    $cargados = RepositorioDocumento::where('solicitud_id',$this->id)
    ->where('postulacion_id',$p->id)->where('ruta','<>','')->get()->pluck('catalago_documento_id')->toArray();

    $compara = array_diff($catalogo, $cargados);

    if ($compara!=[]) {
       \Session::flash('campo',$p->evaluacion->programa->nombre);
      return false;
    }

  }
  return true;
}


public function existeSolicitud()
{
 $ejercicio = Ejercicio::where('activo',1)->get()->first();
 $solicitud=Solicitud::where('ejercicio_id',$ejercicio->id)
 ->where('user_id',Auth::user()->id)->get()->first();
 return $solicitud;

}

public function paginaRetorno()
{

 if ($this->existeSolicitud()) {

   if (isset($this->correccion)) {
    if ($this->correccion->datos_generales!='' && $this->estatus=='correccion' ) {

      return "datos_generales";
    }elseif ($this->correccion->doc_generales!='' && $this->estatus=='correccion') {
     return "doc_generales";
   }elseif ( $this->correccion->doc_especificos!='' && $this->estatus=='correccion') {
              //return redirect()->route('despacho.solicitudes.index')->with('message_warning','Aqui Tienes Correcciones');

    return "doc_especificos";

  }else{
    return 'ninguno';
  }
}

}else{
  return false;
}
}

public function parseFecha($fecha)
{
  Carbon::setLocale('es');
  $date = Carbon::parse($fecha, 'UTC');
    //return  $this->cita=$date->format('d-m-Y');
  return  $this->cita=$date->isoFormat('dddd D MMMM YYYY, h:mm a');
}


}
