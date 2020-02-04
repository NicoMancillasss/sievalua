<?php

namespace App\Http\Controllers\Usuarios\Despacho;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Evaluacion;
use App\Models\Ejercicio;
use App\Models\Solicitud;
use App\Models\Postula;
use App\Models\DocumentoEspecifico;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\Models\RepositorioDocumento;

class PostulacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $existe = new Solicitud();
        $solicitud = $existe->existeSolicitud();
      if (isset($solicitud->postula)) {
            if ($solicitud->estatus=='revision' || $solicitud->estatus=='aceptado' || $solicitud->estatus =='rechazado' || $solicitud->estatus=='correccion' ) {
            return redirect()->route('portal.home')->with(Auth::logout());
        }else{
            if ($solicitud->documentosGenerales()) {
                $listaPostulaciones= $solicitud->postula->pluck('evaluacion_id')->toArray();
                $evaluaciones=Evaluacion::where('ejercicio_id',$solicitud->ejercicio->id)->get();
            return view('usuarios.despacho.postulaciones.create')
            ->with('evaluaciones',$evaluaciones)
            ->with('listaPostulaciones',$listaPostulaciones)
            ->with('solicitud',$solicitud);
        }else{
           return redirect()->route('documentos.create')->with('message_warning','Aun no has llenado Documentos Generales');
       }
        }
      }else{
        return redirect()->route('portal.home')->with(Auth::logout());
      }

   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ejercicio = Ejercicio::where('activo',1)->get()->first();
        $solicitud = Solicitud::where('user_id',Auth::user()->id)
        ->where('ejercicio_id',$ejercicio->id)
        ->get()->first();
      if ($request->evaluaciones!=null) {
           $listaPostulaciones= $solicitud->postula->pluck('evaluacion_id')->toArray();
        foreach ($request->evaluaciones as $evaluacion => $id) {
            $postula = new Postula();
            $postula->solicitud_id=$solicitud->id;
            $postula->evaluacion_id=$id;
            $postula->firma_contrato=0;
            $postulacions =Postula::where('evaluacion_id',$id)
            ->where('solicitud_id',$solicitud->id)
            ->get()->first();
            if ($postulacions==null) {
                $postula->save();
            }else{
                //dd($listaPostulaciones,$request->evaluaciones);
                foreach ($listaPostulaciones as $postulas => $ids) {
                    if (in_array($ids,$request->evaluaciones)) {

               }else{
                    $registro = Postula::where('evaluacion_id',$ids)
                    ->where('solicitud_id',$solicitud->id)->first();

                    if (isset($registro->documentoEspecifico)) {
                        $documento = documentoEspecifico::find($registro->documentoEspecifico->id);
                        $documento->delete();

                        $borrardocumentos = RepositorioDocumento::where('solicitud_id',$solicitud->id)->where('postulacion_id',$registro->id)->delete();

                        //eliminar la carpeta de archivos correspondiente a la evaluacion eliminada

                        Storage::deleteDirectory('public/Solicitudes/'.$solicitud->folio.'/'.$registro->evaluacion->id);
                         //is_dir('storage/Solicitudes/'.$solicitud->folio.'/'.$registro->evaluacion->id);


                    }
                    if (isset($registro)) {
                        Storage::deleteDirectory('public/Solicitudes/'.$solicitud->folio.'/'.$registro->evaluacion->id);
                         $borrardocumentos = RepositorioDocumento::where('solicitud_id',$solicitud->id)->where('postulacion_id',$registro->id)->delete();
                        $registro->delete();
                    }
               }
                }
           }
/*
  */

}
      }else{
        return redirect()->route('postulaciones.create')->with("message_warning","¡Debes seleccionar una evaluación!");
      }
    return redirect()->route('documentosEspecificos.create')->with("message_success","¡Selección de evaluación guardada correctamente!");
}


}
