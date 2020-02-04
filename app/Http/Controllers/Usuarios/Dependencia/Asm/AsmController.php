<?php

namespace App\Http\Controllers\Usuarios\Dependencia\Asm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Evaluacion;
use App\Models\TipoEvaluacion;
use App\Models\Tema;
use App\Models\Asm;
use App\Models\TemaAsm;
use App\Models\Actor;
use App\Models\ActorAsm;
use App\Models\EnglobaAsm;
use Auth;
use App\User;
use App\Notifications\NuevaAlerta;
use Illuminate\Support\Facades\Notification;
//Nuevos modelos cargados
use App\Models\Accion;
use App\Models\Prioridad;
use App\Models\Aspecto;
use App\Http\Requests\AsmDependenciaRequest;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use DB;

class AsmController extends Controller
{
    public function index($ejercicio,$eval)
    {
        try {
            $ejercicio = decrypt($ejercicio);
            $eval = decrypt($eval);
        } catch (DecryptException $e) {
            //  dd("vaya vaya tenemos un intruso que anda merodeando por aquí");
        }

    	$evaluacion = Evaluacion::find($eval);

        $asm = $evaluacion->asm->where('user_id',Auth::user()->id);
        foreach ($asm as $as) {
            $as->porcentaje_asm = $as->porcentajeAsm();
        }
        //dd($asm);
/*
        $asm = Asm::leftjoin('actividades','actividades.asm_id','=','asm.id')
                   ->leftjoin('avances','avances.actividad_id','=','actividades.id')
                   ->join('estatus','asm.estatus_id','estatus.id')
                ->select(
                DB::raw('(SUM( avances.porcentaje_avance) ) * ( actividades.ponderacion / 100) as porcentaje_asm'),
                DB::raw('COUNT(DISTINCT  actividades.id) actividades' ),
                DB::raw('SUM(DISTINCT  actividades.ponderacion) actividad_ponderacion' ),
                'asm.id as id',
                'asm.asm as asm',
                //estatus
                'asm.estatus_id as estatus_id',
                'estatus.estatus as estatus',
                'asm.documento_probatorio as documento_probatorio',
                'asm.activo as activo',

            )
            ->where('asm.tipo','Dependencia')
            ->where('asm.user_id',Auth::user()->id)
            ->where('asm.evaluacion_id',$evaluacion->id)
            ->groupBy('asm.id')



           ->get();
           */





        $asm_recomendados = $evaluacion->asm->where('tipo','<>','Dependencia')->where('estatus_id',5);
        $engloba =EnglobaAsm::whereIn('engloba_asm_id', $asm_recomendados->pluck('id'))->get();






        return view('usuarios.dependencias.asm.index')
        ->with('asm',$asm)
        ->with('engloba',$engloba)
        ->with('asm_recomendados',$asm_recomendados)
        ->with('evaluacion',$evaluacion);
    }

    public function CrearAsm(Evaluacion $evaluacion)
    {
        if ($evaluacion->activo==1) {
            /*$asm = Asm::where('ejercicio_id',$evaluacion->ejercicio->id)
            ->where('programa_id',$evaluacion->programa_id)
            ->where('tipo','Recomendado')
            ->where('dependencia_id',Auth::user()->dependencia->id)->get();*/

            $asm_recomendados = $evaluacion->asm->where('tipo','<>','Dependencia')->where('estatus_id',5);
            $engloba = EnglobaAsm::whereIn('engloba_asm_id', $asm_recomendados->pluck('id'))->get();

            //Nuevos catalagos Incluidos
            $acciones = Accion::all();
            $aspectos = Aspecto::all();
            $prioridades = Prioridad::all();

            $temas = Tema::all();
            $actores = Actor::all();
            $fuentes = TipoEvaluacion::all();
            return view('usuarios.dependencias.asm.create')
            ->with('acciones',$acciones)
            ->with('aspectos',$aspectos)
            ->with('prioridades',$prioridades)
            ->with('temas',$temas)
            ->with('engloba',$engloba)
            ->with('asm_recomendados',$asm_recomendados)
            ->with('actores',$actores)
            ->with('fuentes',$fuentes)
            ->with('evaluacion',$evaluacion);
            }else{
                return back();
            }
    }

    public function guardarAsm(AsmDependenciaRequest $request,Evaluacion $evaluacion)
    {

        $asm = new Asm($request->except(['actores','temas']));

        $asm->evaluacion_id=$evaluacion->id;
        $asm->ejercicio_id=$evaluacion->ejercicio_id;
        $asm->tipo="Dependencia";
        $asm->recomendacion="la dependencia no pude recomendar";
        $asm->user_id=Auth::user()->id;
        $asm->estatus_id=4;
        $asm->aspecto_id=$asm->clasificaAsm($request->actores);

        $asm->accion_id=$request->accion_id;
        $asm->prioridad_id=$request->prioridad_id;
        //validacion
        $asm->area_responsable=$request->area_responsable;
        $asm->area_coordinadora=$request->area_coordinadora;
        $asm->fecha_termino=$request->fecha_termino;
        $asm->resultados_esperados=$request->resultados_esperados;
        $asm->evidencia=$request->evidencia;
        $asm->save();

        if ($request->engloba != []) {
            foreach ($request->engloba as $item) {
            $engloba = new EnglobaAsm();
            $engloba->asm_id = $asm->id;
            $engloba->engloba_asm_id = $item;
            $engloba->save();
       }

        }

        foreach ($request->temas as $item) {
            $tema = new TemaAsm();
            $tema->asm_id=$asm->id;
            $tema->tema_id= intval($item);
            $tema->save();
        }

        foreach ($request->actores as $item) {
            $actor = new ActorAsm();
            $actor->asm_id=$asm->id;
            $actor->actor_id= intval($item);
            $actor->save();
        }


        return redirect()->route('dependencia.programa.asm.acciones.asm',[$asm->id,$evaluacion->id])
        ->with('sweet_success','Asm guardado Correctamente')
        ->with('sweet_success_ok','Asm guardado Correctamente')
        //->with('alert_modal',collect($object = (object) [
                //'propertyOne' => 'foo',
                //'propertyTwo' => 42,
            //]))
        ->with('message_success','Asm guardado Correctamente');


    }

    public function edit( $id ,$evaluacion)
    {
        $id = Crypt::decrypt($id);
        //Nuevos catalagos Incluidos
        $acciones = Accion::all();
        $aspectos = Aspecto::all();
        $prioridades = Prioridad::all();

        $evaluacion = Evaluacion::find($evaluacion);
        $asm_recomendados = $evaluacion->asm->where('tipo','<>','Dependencia')->where('estatus_id',5);

        $engloba = EnglobaAsm::whereIn('engloba_asm_id', $asm_recomendados->pluck('id'))->get();

        $asm = Asm::find($id);
        $temas = Tema::all();
        $actores = Actor::all();
        $fuentes = TipoEvaluacion::all();
        return view('usuarios.dependencias.asm.edit')
        ->with('temas',$temas)
        ->with('actores',$actores)
        ->with('asm',$asm)
        ->with('fuentes',$fuentes)
        ->with('acciones',$acciones)
        ->with('aspectos',$aspectos)
        ->with('prioridades',$prioridades)
        ->with('engloba',$engloba)
        ->with('asm_recomendados', $asm_recomendados)
        ->with('evaluacion',$evaluacion);

    }

    public function update(AsmDependenciaRequest $request,$id,$evaluacion)
    {

        $evaluacion = Evaluacion::find($evaluacion);
        $asm = Asm::find($id);
        $asm->fill($request->all());
        //dd($asm);
        $asm->aspecto_id=$asm->clasificaAsm($request->actores);
        $asm->justificacion_accion=$request->justificacion_accion;

        if ($asm->estatus_id==2) {
            $asm->estatus_id=1;
        }

        $asm->save();

        EnglobaAsm::destroy($asm->engloba->pluck('id'));
        if ($request->engloba != []) {
            foreach ($request->engloba as $item) {
                $engloba = new EnglobaAsm();
                $engloba->asm_id = $asm->id;
                $engloba->engloba_asm_id = $item;
                $engloba->save();
            }
        }

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
              return redirect()->route('dependencia.ejercicio.programa.asm',[Crypt::encrypt($asm->ejercicio_id), Crypt::encrypt($evaluacion->id)]);

    }

    //ver la tabla de clasificacion de asm
    public function asmPorAspecto($evaluacion,$clasificacion)
    {
        $evaluacion = Evaluacion::find($evaluacion);

        $asm_recomendados = $evaluacion->asm->where('tipo','<>','Dependencia')->where('estatus_id',5);

        $asm = $evaluacion->asm->where('user_id',Auth::user()->id)->where('aspecto_id','=',$clasificacion);
        $engloba =EnglobaAsm::whereIn('engloba_asm_id', $asm_recomendados->pluck('id'))->get();

        return view('usuarios.dependencias.asm.index')
        ->with('asm',$asm)
        ->with('engloba',$engloba)
        ->with('asm_recomendados',$asm_recomendados)
        ->with('evaluacion',$evaluacion);

    }

    public function enviarAsmRevision(Request $request)
    {
        $asm = Asm::findOrFail($request->asm_id);
        $asm->estatus_id=1;
        $asm->save();

        //envio de notificacion al usuario
        $ruta = Route('administrador.asm.dependencia.asm',[$asm->evaluacion->id]);
        $users = User::where('perfil_id',1)->orWhere('perfil_id',2)->get();
        Notification::send($users,new NuevaAlerta(array('titulo'=>'La dependencia '.$asm->evaluacion->dependencia->nombre,'mensaje'=>'la dependencia ha creado un nuevo asm, se espera que revises este asm pronto para poder darle seguimiento.','ruta'=>$ruta,'tipo'=>'success')));
        return back();
    }
    public function cargarAsm($asm,$evaluacion)
    {
        $evaluacion = Evaluacion::find($evaluacion);
        $asm = Asm::find($asm);
        $temas = Tema::all();
        $actores = Actor::all();
        $fuentes = TipoEvaluacion::all();
        $prioridades = Prioridad::all();
        $acciones = Accion::all();

        $asm_recomendados = $evaluacion->asm->where('tipo','Administrador');

        $engloba = EnglobaAsm::whereIn('engloba_asm_id', $asm_recomendados->pluck('id'))->get();

        return view('usuarios.dependencias.asm.cargarAsm')
        ->with('temas',$temas)
        ->with('acciones',$acciones)
        ->with('engloba',$engloba)
        ->with('asm_recomendados',$asm_recomendados)
        ->with('actores',$actores)
        ->with('asm',$asm)
        ->with('prioridades',$prioridades)
        ->with('fuentes',$fuentes)
        ->with('evaluacion',$evaluacion);
    }

    public function subirDocumentoProbatorio(Request $request,$id)
    {
       //dd($request->all());

         $archivo =$request->file('documento_probatorio');
          //return response()->download($url);
         $nombre = $archivo->getClientOriginalName();
         $asm = Asm::find($request->asm_id);

         $validator = $request->validate([
          'documento_probatorio' => 'max:10000',

        ]);
         //la ruta guardara el documento probatorio en la carpeta con el id del asm .
         $path = $archivo->storeAs('public/dependencias/'.$asm->evaluacion->dependencia->acronimo.'/'.'documento_Probatorio/'.$asm->id,$nombre);
         $quita=substr($path,6);
         $asm->documento_probatorio=$quita;
         $asm->observacion=$request->observacion;
         $asm->save();
         return back();

    }
}
