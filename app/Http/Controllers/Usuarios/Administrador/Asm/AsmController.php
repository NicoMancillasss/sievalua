<?php

namespace App\Http\Controllers\Usuarios\Administrador\Asm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ejercicio;
use App\Models\Asm;
use App\Models\Evaluacion;
use App\Models\TipoEvaluacion;
use App\Models\Tema;
use App\Models\TemaAsm;
use App\Models\Postula;
use App\Models\ActorAsm;
use App\Models\Accion;
use App\Models\Prioridad;
use App\Models\Aspecto;
use App\Models\Actor;
use Auth;
use DB;
use App\Events\Bitacora;
use App\Notifications\NuevaAlerta;
use Route;
use App\User;
use App\Models\RepoDocsDespachoEva;

class AsmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($ejercicio)
    {

      $ejercicio = Ejercicio::find($ejercicio);
      //$asm = Asm::where('ejercicio_id',$ejercicio->id)->where('tipo','Administrador')->get();
      $asm = DB::table('asm')
      ->leftjoin('evaluaciones','asm.evaluacion_id','evaluaciones.id')
      ->leftjoin('cat_programas','evaluaciones.programa_id','cat_programas.id')
      ->leftjoin('prioridades','asm.prioridad_id','prioridades.id')
      ->leftjoin('aspectos','asm.aspecto_id','aspectos.id')
      ->leftjoin('cat_evaluaciones','evaluaciones.tipo_evaluacion','cat_evaluaciones.id')
      ->leftjoin('dependencias','evaluaciones.dependencia_id','dependencias.id')
      ->leftjoin('users','asm.despacho_id','users.id')
      ->where('asm.tipo','=','Administrador')
      ->where('asm.ejercicio_id','=',$ejercicio->id)
      ->select(
        'cat_programas.nombre as programa',
        'dependencias.nombre as dependencia',
        'users.nombre as despacho',
        'cat_evaluaciones.nombre as tipo_evaluacion',
        'asm.asm as asm',
        'prioridades.nombre as prioridad',
        'aspectos.nombre as aspecto',
        'asm.recomendacion as recomendacion',
        'asm.id as asm_id'
         )->get();



      return view('usuarios.administrador.asm.index')
      ->with('ejercicio',$ejercicio)
      ->with('asm',$asm);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($ejercicio)
    {
      $evaluacion = Evaluacion::where('ejercicio_id',$ejercicio)->get()->pluck('id');
      /*Buscar todos los id que */
      $seleccionadas = Postula::whereIn('evaluacion_id',$evaluacion)
      ->where('cita','<>','')
      ->where('lugar','<>','')
      ->where('estatus','=',1)
      ->get();


      $ejercicio = Ejercicio::find($ejercicio);
      $programas = Evaluacion::where('ejercicio_id',$ejercicio->id)->get();
      $fuentes = TipoEvaluacion::all();

      $acciones = Accion::all();
      $aspectos = Aspecto::all();
      $prioridades = Prioridad::all();
      $actores = Actor::all();
      $temas = Tema::all();


      return view('usuarios.administrador.asm.create')
      ->with('temas',$temas)
      ->with('actores',$actores)
      ->with('acciones',$acciones)
      ->with('prioridades',$prioridades)
      ->with('seleccionadas',$seleccionadas)
      ->with('programas',$programas)
      ->with('ejercicio',$ejercicio)
      ->with('fuentes',$fuentes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$ejercicio)
    {

        //$request->programa_id equivale al id de la evaluacion
        $evaluacion = Evaluacion::find($request->programa_id);
        // $postula = Postula::where('evaluacion_id',$evaluacion->id)
        //->where('cita','<>','')
        //->where('lugar','<>','')
        //->where('estatus','=',1)
        //->get()->first();
        // dd($request->all());
        $asm = new Asm($request->all());
        $asm->despacho_id=$request->despacho_id;
        $asm->evaluacion_id=$request->evaluacion_id;
        $asm->ejercicio_id=$ejercicio;
        $asm->user_id=Auth::user()->id;
        $asm->aspecto_id=$asm->clasificaAsm($request->actores);
        $asm->tipo='Administrador';
        $asm->estatus_id=5;
        $asm->save();


        foreach ($request->actores as $item) {
            $actor = new ActorAsm();
            $actor->asm_id=$asm->id;
            $actor->actor_id= intval($item);
            $actor->save();
        }

        foreach ($request->temas as $item) {
            $tema = new TemaAsm();
            $tema->asm_id=$asm->id;
            $tema->tema_id= intval($item);
            $tema->save();
        }

        event(new Bitacora($asm, 'Creación', 'Nuevo hallazgo'));
        return redirect()->route('administrador.asm.programas',$ejercicio);
    }

    public function edit($id)
    {
      $temas = Tema::all();
      $acciones = Accion::all();
      $aspectos = Aspecto::all();
      $prioridades = Prioridad::all();
      $actores = Actor::all();
      $fuentes = TipoEvaluacion::all();
      $asm = Asm::findOrFail($id);
      $ejercicio = Ejercicio::find($asm->ejercicio_id);
      $programas = Evaluacion::where('ejercicio_id',$asm->ejercicio_id)->get();
     // dd($programas);

      return view('usuarios.administrador.asm.edit')
      ->with('temas',$temas)
      ->with('actores',$actores)
      ->with('acciones',$acciones)
      ->with('prioridades',$prioridades)
      ->with('asm',$asm)
      ->with('programas',$programas)
      ->with('ejercicio',$ejercicio)
      ->with('fuentes',$fuentes);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      //dd($request->all());
      $evaluacion = Evaluacion::find($request->programa_id);
      //$postula = Postula::where('evaluacion_id',$evaluacion->id)
      //->where('cita','<>','')
      //->where('lugar','<>','')
      //->where('estatus','=',1)
      //->get()->first();

      $asm = Asm::findOrFail($id);
      $asm->fill($request->all());
      $asm->despacho_id=$request->despacho_id;
      $asm->aspecto_id=$asm->clasificaAsm($request->actores);
      $asm->ejercicio_id=$evaluacion->ejercicio_id;
      $asm->save();

      TemaAsm::destroy($asm->tema->pluck('id'));

      foreach ($request->temas as $item) {
        $tema = new TemaAsm();
        $tema->asm_id=$asm->id;
        $tema->tema_id= intval($item);
        $tema->save();
      }

      ActorAsm::destroy($asm->actor->pluck('id'));
      foreach ($request->actores as $item) {
      $actor = new ActorAsm();
      $actor->asm_id=$asm->id;
      $actor->actor_id= intval($item);
      $actor->save();

            }
      event(new Bitacora($asm, 'Modificación', 'Modificación de  hallazgo'));
      return redirect()->route('administrador.asm.programas',$evaluacion->ejercicio_id);

    }

    public function verEjercicios()
    {
      $ejercicios = Ejercicio::all();
      return view('usuarios.administrador.asm.validar.verEjercicios')->with('ejercicios',$ejercicios);
    }

    public function verEjerciciosHallazgos()
    {
      $ejercicios = Ejercicio::all();
      return view('usuarios.administrador.asm.verEjercicios')->with('ejercicios',$ejercicios);
    }

    public function verDependencias($ejercicio){
        /*
        $ejercicio = Ejercicio::find($ejercicio);
        $pae = Evaluacion::where('ejercicio_id',$ejercicio->id)->get();
        return view('usuarios.administrador.asm.validar.dependencias')
        ->with('pae',$pae)
        ->with('ejercicio',$ejercicio);
        */
        $ejercicio = Ejercicio::find($ejercicio);
        $evaluacion = Evaluacion::where('ejercicio_id',$ejercicio->id)->get()->pluck('id');
        /*Buscar todos los id que */
        $pae = Postula::whereIn('evaluacion_id',$evaluacion)
        ->where('cita','<>','')
        ->where('lugar','<>','')
        ->where('estatus','=',1)
        ->get();

        return view('usuarios.administrador.asm.validar.dependencias')
        ->with('pae',$pae)
        ->with('ejercicio',$ejercicio);
    }

    public function verAsm($evaluacion)
    {
        $evaluacion = Evaluacion::find($evaluacion);
        $dependencia_user_id = User::where('perfil_id',4)->where('dependencia_id',$evaluacion->dependencia->id)->first()->id;



       // $asm = $evaluacion->asm->where('user_id',$dependencia_user_id);

       $asm = DB::table('asm')
        ->leftjoin('evaluaciones','asm.evaluacion_id','evaluaciones.id')
        ->leftjoin('cat_programas','evaluaciones.programa_id','cat_programas.id')
        ->leftjoin('estatus','asm.estatus_id','estatus.id')
        ->leftjoin('prioridades','asm.prioridad_id','prioridades.id')
        ->leftjoin('aspectos','asm.aspecto_id','aspectos.id')
        ->leftjoin('cat_evaluaciones','evaluaciones.tipo_evaluacion','cat_evaluaciones.id')
        ->leftjoin('dependencias','evaluaciones.dependencia_id','dependencias.id')
        ->leftjoin('users','asm.despacho_id','users.id')
        ->where('asm.tipo','=','Dependencia')
        ->where('asm.evaluacion_id','=',$evaluacion->id)
        ->where('asm.user_id','=', $dependencia_user_id)
        ->select(
          'cat_programas.nombre as programa',
          'dependencias.nombre as dependencia',
          'users.nombre as despacho',
          'cat_evaluaciones.nombre as tipo_evaluacion',
          'asm.asm as asm',
          'prioridades.nombre as prioridad',
          'aspectos.nombre as aspecto',
          'asm.recomendacion as recomendacion',
          'asm.id as id',
          'asm.estatus_id as estatus_id',
          'estatus.estatus as estatus',
          'asm.fecha_termino as fecha_termino',
          'asm.created_at as created_at',
          'asm.activo as activo'
          )->get();
          //dd($asm);


        /*  dd($asm); */
        return view('usuarios.administrador.asm.validar.asm')
        ->with('evaluacion',$evaluacion)
        ->with('asm',$asm);
    }

    public function aceptarAsm(Request $request)
    {
      if (Auth::user()->perfil->id !=5) {
        $asm = Asm::findOrFail($request->asm_id);
        $asm->estatus_id=3;
        $asm->save();
        $ruta = Route('dependencia.ejercicio.programa.asm',[$asm->ejercicio_id,$asm->evaluacion_id]);
        event(new Bitacora($asm, 'Aceptacion', 'Validó y Acepto Asm'));


        $user = User::findOrFail($asm->user_id);
        $user->notify(new NuevaAlerta(array('titulo'=>'Tienes un nuevo ASM aceptado','mensaje'=>'Click para ver corrección','ruta'=>$ruta,'tipo'=>'success')));
        return back();
      }else {
        //event(new Bitacora($asm, 'Intento ', 'intento de Aceptación y validacion de asm'));
        return redirect()->route('error.404');
      }



    }

    public function enviarAsmCorreccion(Request $request)
    {

      $asm = Asm::findOrFail($request->correccion_asm_id);
      $asm->correcciones=$request->correcciones;
      $asm->estatus_id=2;
      $asm->save();
      event(new Bitacora($asm, 'Corrección', 'Envío a correcciones el asm'));
      $ruta = Route('dependencia.ejercicio.programa.asm',[$asm->ejercicio_id,$asm->evaluacion_id]);
      $user = User::findOrFail($asm->user_id);
      $user->notify(new NuevaAlerta( array('titulo'=>'Tienes Una nueva corrección en Asm','mensaje'=>'Click para ver corrección','ruta'=>$ruta,'tipo'=>'warning')));

      return back();

    }
    public function descativarAsm($accion,$evaluacion)
    {
      if (Auth::user()->perfil->id !=5) {
        if ($accion =='desactivarTodos') {
        $evaluacion = Evaluacion::findOrFail($evaluacion);
        $asm = Asm::where('ejercicio_id',$evaluacion->ejercicio_id)
        ->where('dependencia_id',$evaluacion->dependencia_id)
        ->where('estatus_id','=',3)
        ->where('tipo','Dependencia')
        ->update(['activo' => 0]);

      }elseif($accion =='activar'){
        $asm = Asm::findOrFail($evaluacion);
        $asm->activo = 1;
        $asm->save();
      }elseif($accion =='desactivar'){
        $asm = Asm::findOrFail($evaluacion);
        $asm->activo = 0;
        $asm->save();
      }
        event(new Bitacora($asm, 'Desactivó', 'desactivó el asm'));
        return back();
      }else{
        //event(new Bitacora($asm, 'Intentó', 'Intento desactivar  el asm'));
        return redirect()->route('error.404');
      }

   }



  public function verHallazgos(Postula $postulacion)
  {
      $evaluacion = Evaluacion::find($postulacion->evaluacion->id);
      //$asm = $evaluacion->asm->where('user_id',$postulacion->solicitud->user->id);

       $asm = DB::table('asm')
       ->select(
          'cat_programas.nombre as programa',
          'dependencias.nombre as dependencia',
          'users.nombre as despacho',
          'cat_evaluaciones.nombre as tipo_evaluacion',
          'asm.asm as asm',
          'prioridades.nombre as prioridad',
          'aspectos.nombre as aspecto',
          'asm.recomendacion as recomendacion',
          'asm.id as id',
          'asm.estatus_id as estatus_id',
          'estatus.estatus as estatus',
          'asm.fecha_termino as fecha_termino',
          'asm.created_at as created_at',
          'temas_asm.id as temas'
          )
        ->join('temas_asm','asm.id','temas_asm.asm_id')
        ->leftjoin('evaluaciones','asm.evaluacion_id','evaluaciones.id')
        ->leftjoin('cat_programas','evaluaciones.programa_id','cat_programas.id')
        ->leftjoin('estatus','asm.estatus_id','estatus.id')
        ->leftjoin('prioridades','asm.prioridad_id','prioridades.id')
        ->leftjoin('aspectos','asm.aspecto_id','aspectos.id')
        ->leftjoin('cat_evaluaciones','evaluaciones.tipo_evaluacion','cat_evaluaciones.id')
        ->leftjoin('dependencias','evaluaciones.dependencia_id','dependencias.id')
        ->leftjoin('users','asm.despacho_id','users.id')
        ->where('asm.tipo','=','Despacho')
        ->where('asm.evaluacion_id','=',$evaluacion->id)
        ->where('asm.user_id','=', $postulacion->solicitud->user->id)
        ->groupBy('asm.id')
        ->get()->toArray();
          $asm= \App\Models\Asm::hydrate($asm);
          //dd($asm->actores);
      $documentos = RepoDocsDespachoEva::where('evaluacion_id',$postulacion->evaluacion->id)->where('user_id',$postulacion->solicitud->user->id)->get();

      return view('usuarios.administrador.asm.validar.hallazgos')
      ->with('postulacion',$postulacion)
      ->with('documentos',$documentos)
      //->with('despacho',$despacho)
      ->with('asm',$asm);
  }

  public function detallesHallazgos(Postula $postulacion)
  {
      $evaluacion = Evaluacion::find($postulacion->evaluacion->id);
      $asm = $evaluacion->asm->where('user_id',$postulacion->solicitud->user->id);

      return view('usuarios.administrador.asm.validar.detallesHallazgos')
      ->with('postulacion',$postulacion)
      ->with('asm',$asm);
  }




 }
