<?php

namespace App\Http\Controllers\Usuarios\Despacho;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ejercicio;
use App\Models\Solicitud;
use App\Models\RepositorioDocumento;
use App\Models\CatalagoEvaluacion;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\DocumentoRequest;
use Auth;
use Validator;
class DocumentosController extends Controller
{



  public function create()
  {

    $eje = new Ejercicio();
    if($eje->activo()>0 && strtotime(date('Y/m/d')) <= strtotime($eje->ejercicioActivo()))
    {

    }

   $existe = new Solicitud();
   /*Verifica que exista una solicitud encaso de que no la crea*/
   $solicitud = $existe->existeSolicitud();
   $documentos = new  RepositorioDocumento();
  // $catalago = CatalogoDocumento::where('ejercicio_id',$solicitud->ejercicio_id)->where('tipo_documento','general')->get();
  /* $catalago = CatalagoEvaluacion::where('ejercicio_id',$solicitud->ejercicio_id)->where(function ($query) {
      dd($query->catalago_documento->where('tipo_documento',1));
   })->get();
*/
   $catalago = CatalagoEvaluacion::where('ejercicio_id',$solicitud->ejercicio_id)->get();





     if ($solicitud->estatus=='correccion') {

       return view('usuarios.despacho.documentos.correccionGenerales')
       ->with('catalago', $catalago)

       ->with('documentos',$documentos)
       ->with('eje',$eje)
       ->with('solicitud',$solicitud);

     }elseif ($solicitud->estatus=='captura') {


      if ( $solicitud->estatus=='correccion') {
       return view('usuarios.despacho.documentos.generales')
       ->with('catalago', $catalago)

       ->with('eje',$eje)
       ->with('documentos',$documentos)
       ->with('solicitud',$solicitud);
     }
   }else{
    return redirect()->route('portal.home')->with(Auth::logout());
  }






if ($solicitud!=null) {
  if ($solicitud->estatus=='revision' || $solicitud->estatus=='aceptado' || $solicitud->estatus =='rechazado') {

    return view('usuarios.despacho.solicitudes.index')
    ->with('solicitud',$solicitud);
  }

  //$documentos =Documento::where('solicitud_id',$solicitud->id)->get()->first();
  return view('usuarios.despacho.documentos.generales')
  ->with('catalago',$catalago)
  ->with('eje',$eje)
  ->with('documentos',$documentos)
  ->with('solicitud',$solicitud);

}else{
  return redirect()->route('despacho.solicitudes.index')->with('message_warning','Aun no tienes datos generales')->with('eje',$eje);
}



}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function guardarDocumentos(Request $request,$id){
   //$eliminar= Storage::delete('public/Solicitudes/SFP-PAE-2305035124/Acta_Constitutiva.pdf');

      foreach ($request->except(['catalago_documento_id'])  as $nombre => $archivo) {

        $solicitud = Solicitud::find($id);
        if ($nombre != '_token') {


          $validator = $request->validate([
          'documento_probatorio' => 'mimes:pdf|max:10000',

        ]);




        $path = $archivo->storeAs('public/'.'Solicitudes'.'/'.$solicitud->folio.'',$nombre.'-'.$solicitud->folio.'.pdf');
        $existe =  RepositorioDocumento::where('catalago_documento_id',$request->catalago_documento_id)->where('solicitud_id',$id)->get()->count();
        if ($existe>0) {
          $doc =  RepositorioDocumento::where('catalago_documento_id',$request->catalago_documento_id)->where('solicitud_id',$id)->get()->first();
          $quita=substr($path,6);
          $doc->ruta = $quita;
          $doc->save();
          return back()->with("message_success","¡Documento Guardado Correctamente");

        }

        $documentos = new RepositorioDocumento();
        $quita=substr($path,6);
        /*$catalago= CatalogoDocumento::where('nombre',$nombre)->where('ejercicio_id',$solicitud->ejercicio_id)->first();*/
        $documentos->catalago_documento_id = $request->catalago_documento_id;
        $documentos->ruta = $quita;
        $documentos->solicitud_id= $id;

        $documentos->save();
        return back()->with("message_success","¡Documento Guardado Correctamente");


      }
    }
  }

  public function borrarDocumento($id)
  {
   $documento = RepositorioDocumento::find($id);
      Storage::delete('public/'.$documento->ruta);
      $documento->ruta='';
      $documento->save();
      return redirect()->route('documentos.create')->with('message_success','Documento Eliminado Correctamente');


 }


}
