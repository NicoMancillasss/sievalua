<?php

namespace App\Http\Controllers\Usuarios\Despacho;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CatalogoDocumentosDespachoEva;
use App\Models\Postula;
use App\Models\RepoDocsDespachoEva;
use Auth;

class EvaluacionesController extends Controller
{
    public function subirDocumentoFinal(Request $request,$documento, $postulacion)
    {
        
         $postulacion = Postula::find($postulacion);
         $documento = CatalogoDocumentosDespachoEva::find($documento); 
         $archivo =$request->file('documento_final');
         $particion_archivo_nombre = explode(".", $archivo->getClientOriginalName());
         $extension = $particion_archivo_nombre[count($particion_archivo_nombre)-1];
        
       
         $validator = $request->validate([
          'documento_final' => 'max:10000',

        ]);
          $path = $archivo->storeAs('public/'.'Solicitudes'.'/'.$postulacion->solicitud->folio.'/DocumentosFinales',$documento->catalogoDocumento->nombre.'.'.$extension);
          $quita=substr($path,6);
          $repositorio = new RepoDocsDespachoEva();
          $repositorio->ruta = $quita;
          $repositorio->cat_doc_despacho_id = $documento->id;
          $repositorio->user_id = Auth::user()->id;
          $repositorio->evaluacion_id = $postulacion->evaluacion->id;
          $repositorio->save();
          return back();
         
    }
}
