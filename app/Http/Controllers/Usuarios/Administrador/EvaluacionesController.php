<?php

namespace App\Http\Controllers\Usuarios\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Evaluacion;
use App\Models\Dependencia;
use App\Models\Ejercicio;
use App\Models\Programa;
use App\Models\TipoEvaluacion;
use App\Models\CatalogoDocumento;
use App\Models\CatalagoEvaluacion;
use App\Models\CatalogoTipoArchivo;
use App\Models\CatalogoDocumentosDespachoEva;
use App\Http\Requests\DocumentoFinalRequest;
use App\Events\Bitacora;
use Auth;

class EvaluacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $evaluaciones =Evaluacion::all()->groupBy('ejercicio_id');
        $dependencias = Dependencia::where('id','<>',98)->get();
        $ejercicios = Ejercicio::get();
        $programas = Programa::get();
        $tipos_evaluaciones = TipoEvaluacion::get();
        return view('usuarios.administrador.evaluaciones.index')
        ->with('evaluaciones',$evaluaciones)
        ->with('dependencias',$dependencias)
        ->with('programas',$programas)
        ->with('tipos_evaluaciones',$tipos_evaluaciones)
        ->with('ejercicios',$ejercicios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $evaluacion = new Evaluacion($request->all());
        $evaluacion->save();
        return redirect()->route('evaluaciones.index')->with('message_success','Evaluación Creada Correctamente');
    }

    public function showDocumentosGenerales($id)
    {
/*
        $documentosExistentes = CatalagoEvaluacion::where('ejercicio_id',$id)->get()->pluck('catalago_documento_id')->toArray();
        dd($documentosExistentes);*/
        $documentosExistentes = CatalagoEvaluacion::select()
        ->join("catalago_documentos","catalago_evaluacion.catalago_documento_id","=","catalago_documentos.id")
        ->where('catalago_documentos.tipo_documento','=','general')
        ->where('catalago_evaluacion.ejercicio_id','=',$id)
        ->get()->pluck('id')->toArray();

        $catalogo = CatalogoDocumento::where('tipo_documento','general')->get();
        return view('usuarios.administrador.evaluaciones.documentosGenerales')
        ->with('catalogo',$catalogo)
        ->with('ejercicio_id',$id)
        ->with('documentosExistentes',$documentosExistentes);
    }

    public function guardarDocumentosGenerales(Request $request,$id){
        $existenetes = CatalagoEvaluacion::select()
        ->join("catalago_documentos","catalago_evaluacion.catalago_documento_id","=","catalago_documentos.id")
        ->where('catalago_documentos.tipo_documento','=','general')
        ->get()->pluck('catalago_documento_id')->toArray();

        foreach ($request->documentos as $key => $valor) {
         $documento = new CatalagoEvaluacion();
         $documento->ejercicio_id=$id;
         $documento->catalago_documento_id=$valor;
         $registro = CatalagoEvaluacion::where('ejercicio_id',$id)->where('catalago_documento_id',$valor)->get()->first();

         if ($registro==null) {
            $documento->save();
        }else{
            if (in_array($valor,$existenetes)) {
                # code...
            }else{

                $registro->delete();
            }

            }

        }
        return back();

    }

    public function showDocumentosEspecificos($id, $evaluacion)
    {
/*
        $documentosExistentes = CatalagoEvaluacion::where('ejercicio_id',$id)->get()->pluck('catalago_documento_id')->toArray();
        dd($documentosExistentes);*/
        $documentosExistentes = CatalagoEvaluacion::select()
        ->join("catalago_documentos","catalago_evaluacion.catalago_documento_id","=","catalago_documentos.id")
        ->where('catalago_documentos.tipo_documento','=','especifico')
        ->where('catalago_evaluacion.evaluacion_id', $evaluacion)
        ->where('catalago_evaluacion.ejercicio_id','=',$id)
        ->get()->pluck('id')->toArray();

        $catalogo = CatalogoDocumento::where('tipo_documento','especifico')->get();
        return view('usuarios.administrador.evaluaciones.documentosEspecificos')
        ->with('catalogo',$catalogo)
        ->with('ejercicio_id',$id)
        ->with('documentosExistentes',$documentosExistentes)
        ->with('evaluacion',$evaluacion);
    }

    public function guardarDocumentosEspecificos(Request $request,$id,$evaluacion){
        $existenetes = CatalagoEvaluacion::select()
        ->join("catalago_documentos","catalago_evaluacion.catalago_documento_id","=","catalago_documentos.id")
        ->where('catalago_documentos.tipo_documento','=','especifico')
        ->get()->pluck('catalago_documento_id')->toArray();

        foreach ($request->documentos as $key => $valor) {
         $documento = new CatalagoEvaluacion();
         $documento->ejercicio_id=$id;
         $documento->catalago_documento_id=$valor;
         $documento->evaluacion_id=$evaluacion;
         $registro = CatalagoEvaluacion::where('ejercicio_id')
         ->where('evaluacion_id',$evaluacion)
         ->where('catalago_documento_id',$valor)->get()->first();

        if ($registro==null) {
            $documento->save();
        }

        }
        return back();

    }

    public function showDocumentosFinales($id, $evaluacion)
    {
        
        $documentosExistentes =  CatalogoDocumentosDespachoEva::where('evaluacion_id',$evaluacion)->get()->pluck('catalago_documento_id')->toArray();
        $tipo_archivos = CatalogoTipoArchivo::all();
        $existentesArchivo = CatalogoDocumentosDespachoEva::where('evaluacion_id',$evaluacion)->get()->pluck('tipo_archivo_id')->toArray();

        

            

        $catalogo = CatalogoDocumento::where('tipo_documento', 'final')->get();
        return view('usuarios.administrador.evaluaciones.documentosFinales')
            ->with('existentesArchivo', $existentesArchivo)
            ->with('catalogo', $catalogo)
            ->with('tipo_archivos', $tipo_archivos)
            ->with('ejercicio', $id)
            ->with('documentosExistentes', $documentosExistentes)
            ->with('evaluacion', $evaluacion);
    }

    public function guardarDocumentosFinales(DocumentoFinalRequest $request, $id, $evaluacion)
    {
  
      $existentes = CatalogoDocumentosDespachoEva::where('evaluacion_id',$evaluacion)->get()->pluck('id');
     

      $elimina_existentes =  CatalogoDocumentosDespachoEva::destroy($existentes);
      
      if($request->documentos != []){

          foreach ($request->documentos as $documento) {
            $catalago_documentos = new CatalogoDocumentosDespachoEva();
            $catalago_documentos->evaluacion_id = $evaluacion;
            $catalago_documentos->catalago_documento_id = $documento;
            $catalago_documentos->tipo_archivo_id = $request['archivo'.$documento];
            $catalago_documentos->save();
            
        }
      }
     
        return back()->with('message_success','documentos guardados Correctamente');
      

    }

    public function cambiarActivo($id)
    {
        if (Auth::user()->perfil->id !=5) {

            $evaluacion = Evaluacion::findOrFail($id);
            if ($evaluacion->activo==1) {
                $evaluacion->activo=0;
                event(new Bitacora($evaluacion, 'Desactivó', 'desactivaó la evaluación'.$evaluacion->programa->nombre));
            }else{
                $evaluacion->activo=1;
                event(new Bitacora($evaluacion, 'Activó', 'Activo la evaluación'.$evaluacion->programa->nombre));
            }
             $evaluacion->save();
        
            return back();
        }else {
             return redirect()->route('error.404');
        }
    }
}


