<?php

namespace App\Http\Controllers\Usuarios\Despacho\Asm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Postula;
use App\Models\Tema;
use App\Models\TemaAsm;
use App\Models\Asm;
//Nuevos modelos cargados
use App\Models\Accion;
use App\Models\Prioridad;
use App\Models\Aspecto;

use App\Models\Actor;
use App\Models\ActorAsm;
use App\Http\Requests\AsmDespachoRequest;
use Illuminate\Support\Facades\Crypt;

use Auth;
use DB;

class AsmController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $id = Crypt::decrypt($id);
        $actores = Actor::all();
        $postulacion = Postula::find($id);
       //$asm = Asm::where('user_id',Auth::user()->id)->where('ejercicio_id',$postulacion->evaluacion->ejercicio_id)->get();
         $asm = DB::table('asm')
            ->leftjoin('evaluaciones','asm.evaluacion_id','evaluaciones.id')
            ->leftjoin('estatus','asm.estatus_id','estatus.id')
            //->leftjoin('temas_asm','temas_asm.asm_id','asm.id')//Verificar
            ->leftjoin('cat_programas','evaluaciones.programa_id','cat_programas.id')
            ->leftjoin('prioridades','asm.prioridad_id','prioridades.id')
            ->leftjoin('aspectos','asm.aspecto_id','aspectos.id')
            ->leftjoin('cat_evaluaciones','evaluaciones.tipo_evaluacion','cat_evaluaciones.id')
            ->leftjoin('dependencias','evaluaciones.dependencia_id','dependencias.id')
            ->leftjoin('users','asm.user_id','users.id')
            ->where('asm.tipo','=','Despacho')
            ->where('users.id','=',Auth::user()->id)
            ->where('asm.evaluacion_id','=',$postulacion->evaluacion->id)
            ->select(
                'cat_programas.nombre as programa',
                'dependencias.nombre as dependencia',
                'cat_evaluaciones.nombre as tipo_evaluacion',
                'asm.asm as asm',
                'prioridades.nombre as prioridad',
                'aspectos.nombre as aspecto',
                'asm.recomendacion as recomendacion',
                'asm.id as asm_id',
                'estatus.estatus as estatus'
                //'temas_asm.id as temas',

         )->get();

        
        return view ('usuarios.despacho.asm.index')
            ->with('postulacion',$postulacion)
            ->with('asm',$asm);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $id = Crypt::decrypt($id);
        $acciones = Accion::all();
        $aspectos = Aspecto::all();
        $prioridades = Prioridad::all();

        $actores = Actor::all();
        $postulacion = Postula::find($id);
        $temas = Tema::all();
        return view ('usuarios.despacho.asm.create')
            ->with('acciones',$acciones)
            ->with('aspectos',$aspectos)
            ->with('prioridades',$prioridades)
            ->with('postulacion',$postulacion)
            ->with('actores',$actores)
            ->with('temas',$temas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AsmDespachoRequest $request,$id)
    {
        $id = Crypt::decrypt($id);
        $postulacion = Postula::find($id);
        $asm = new Asm();
        $asm->fill($request->all());
        $asm->tipo="Despacho";
        $asm->estatus_id=4;
        $asm->user_id=Auth::user()->id;
        //$asm->dependencia_id=$postulacion->evaluacion->dependencia->id;
        $asm->evaluacion_id=$postulacion->evaluacion->id;
        $asm->ejercicio_id=$postulacion->evaluacion->ejercicio_id;
        $asm->aspecto_id=$asm->clasificaAsm($request->actores);
        $asm->otro_tema=$request->otro_tema;
        $asm->accion_id=$request->accion_id;
        $asm->prioridad_id=$request->prioridad_id;
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
        return redirect()->route('despacho.asm.recomendados',Crypt::encrypt($id))->with('message_success','Asm guardado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$postulacion)
    {
        $id =  Crypt::decrypt($id);
        $postulacion =  Crypt::decrypt($postulacion);

         $postulacion = Postula::find($postulacion);
        $asm = Asm::findOrFail($id);
        $temas = Tema::all();
        $actores = Actor::all();
        return view ('usuarios.despacho.asm.show')
            ->with('asm',$asm)
            ->with('actores',$actores)
            ->with('postulacion',$postulacion)
            ->with('temas',$temas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$postulacion)
    {
        //desencriptar valores
        $id =  Crypt::decrypt($id);
        $postulacion =  Crypt::decrypt($postulacion);
        
        $acciones = Accion::all();
        $aspectos = Aspecto::all();
        $prioridades = Prioridad::all();

        $postulacion = Postula::find($postulacion);
        $asm = Asm::findOrFail($id);
        $temas = Tema::all();
        $actores = Actor::all();
        return view ('usuarios.despacho.asm.edit')
            ->with('acciones',$acciones)
            ->with('aspectos',$aspectos)
            ->with('prioridades',$prioridades)
            ->with('asm',$asm)
            ->with('actores',$actores)
            ->with('postulacion',$postulacion)
            ->with('temas',$temas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,$postulacion)
    {
        $id =  Crypt::decrypt($id);
        $postulacion =  Crypt::decrypt($postulacion);

        $asm = Asm::findOrFail($id);
        $asm->fill($request->all());
        $asm->accion_id=$request->accion_id;
        $asm->prioridad_id=$request->prioridad_id;
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
        return redirect()->route('despacho.asm.recomendados',Crypt::encrypt($postulacion))->with('message_success','Asm actualizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
     public function enviarAsm(Request $request,$postulacion)
    {

        $asm = Asm::findOrFail($request->asm_id);
        $asm->estatus_id=5;
        $asm->save();
        return redirect()->route('despacho.asm.recomendados',Crypt::encrypt($postulacion))->with('message_success','Asm enviado correctamente');

    }


}
