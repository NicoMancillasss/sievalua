<?php

namespace App\Http\Controllers\Usuarios\Despacho;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Postula;
use App\Models\Ejercicio;
use App\Models\Solicitud;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\DocumentoEspecificoRequest;
use Auth;
use App\Models\CatalogoDocumento;
use App\Models\RepositorioDocumento;
use App\Models\CatalagoEvaluacion;


class DocumentosEspecificosController extends Controller
{

  public function create()
  {
    $existe = new Solicitud();
    $solicitud = $existe->existeSolicitud();
    $documentos = new  RepositorioDocumento();
   // $catalago = CatalogoDocumento::where('ejercicio_id',$solicitud->ejercicio_id)->where('tipo_documento','especifico')->get();
     $catalago = CatalagoEvaluacion::where('ejercicio_id',$solicitud->ejercicio_id)->get();

     $eje = new Ejercicio();
     if($eje->activo()>0 && strtotime(date('Y/m/d')) <= strtotime($eje->ejercicioActivo()))
     {
         /*
          \Session::flash('ultimo','AVISO            Se informa a los Despachos Externos interesados a participar en la Convocatoria para realizar las Evaluaciones al Desempeño contempladas en el Programa Anual de Evaluación 2019, que el plazo para el registro concluye el último minuto del día 05 de agosto de 2019.');
          */
     }

    /*Sber si ya envio la solicitud*/


     if ($solicitud->estatus=='correccion') {
      $postulaciones = Postula::where('solicitud_id',$solicitud->id)->get();
      return view('usuarios.despacho.documentos.correccionEspecificos')
      ->with('catalago',$catalago)
      ->with('documentos',$documentos)
      ->with('solicitud',$solicitud)
      ->with('eje',$eje)
      ->with('postulaciones',$postulaciones);

    }elseif ($solicitud->estatus=='captura') {
      $postulaciones = Postula::where('solicitud_id',$solicitud->id)->get();
      return view('usuarios.despacho.documentos.especificos')
      ->with('catalago',$catalago)
      ->with('documentos',$documentos)
      ->with('solicitud',$solicitud)
      ->with('eje',$eje)
      ->with('postulaciones',$postulaciones);
    }

    else{
     return redirect()->route('portal.home')->with(Auth::logout());
   }






 if ($solicitud!=null) {
  if ($solicitud->estatus=='revision' || $solicitud->estatus=='aceptado' || $solicitud->estatus =='rechazado') {
    return view('usuarios.despacho.solicitudes.index')
    ->with('catalago',$catalago)
    ->with('eje',$eje)
    ->with('documentos',$documentos)
    ->with('solicitud',$solicitud);
  }
}
if ($solicitud->postula->count()>0) {
  $postulaciones = Postula::where('solicitud_id',$solicitud->id)->get();


  return view('usuarios.despacho.documentos.especificos')
  ->with('solicitud',$solicitud)
  ->with('catalago',$catalago)
  ->with('eje',$eje)
  ->with('documentos',$documentos)
  ->with('postulaciones',$postulaciones);


}else{
 return redirect()->route('postulaciones.create')->with("message_warning","¡Denegado!");
}
}

public function guardarDocumentos(DocumentoEspecificoRequest $request,$id)
{
  $postula= Postula::find($id);
  $folio=Solicitud::find($postula->solicitud_id);

  foreach ($request->except(['catalago_documento_id']) as $nombre => $archivo) {
    if ($nombre != '_token') {
      $validator = $request->validate([
          $nombre => 'mimes:pdf|max:10000',
        ]);

      $nombre_doc= CatalogoDocumento::where('nombre',$nombre)->get()->first();

      $path = $archivo->storeAs('public/'.'Solicitudes'.'/'.$folio->folio.'/'.$postula->evaluacion->id,$nombre.'-'.$folio->folio.'.pdf');

      $catalago= CatalagoEvaluacion::where('evaluacion_id',$postula->evaluacion->id)->where('ejercicio_id',$folio->ejercicio_id)->where('catalago_documento_id',$nombre_doc->id)->first();

       $existe =  RepositorioDocumento::where('catalago_documento_id',$catalago->id)->where('postulacion_id',$id)->get()->count();

       if ($existe>0) {
          $doc =  RepositorioDocumento::where('catalago_documento_id',$catalago->id)->where('postulacion_id',$id)->get()->first();
          $quita=substr($path,6);
          $doc->ruta = $quita;
          $doc->save();
           return back()->with("message_success","¡Documento Guardado Correctamente");
        }



      $documentos = new RepositorioDocumento();
      $quita=substr($path,6);


      $documentos->catalago_documento_id = $catalago->id;
      $documentos->ruta = $quita;
      $documentos->postulacion_id= $id;
      $documentos->solicitud_id= $postula->solicitud_id;
      $documentos->save();

    }
  }
  return back()->with("message_success","¡Documentos Guardados Correctamente");
}

public function borrarDocumentoEspecifico($id)
{
  $documento = RepositorioDocumento::find($id);
  $documento->ruta='';
  $documento->save();
  Storage::delete('public/'.$documento->ruta);
  //$documento->delete();
  return redirect()->route('documentosEspecificos.create')->with('message_success','Documento Eliminado Correctamente');
}

}
