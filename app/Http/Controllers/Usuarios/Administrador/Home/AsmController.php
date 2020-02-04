<?php

namespace App\Http\Controllers\Usuarios\Administrador\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ejercicio;
use App\Models\Evaluacion;
use App\Models\Asm;
use App\Models\Programa;
use DB;

class AsmController extends Controller
{
    public function index($ejercicio)
    {
    	$ejercicio = Ejercicio::findOrFail($ejercicio);

        //$pae = Evaluacion::where('ejercicio_id',$ejercicio->id)->get();



    	$pae = DB::table('evaluaciones')->join('cat_programas', 'cat_programas.id', '=', 'evaluaciones.programa_id')
            ->join('dependencias', 'evaluaciones.dependencia_id', '=', 'dependencias.id')
            ->join('ejercicios', 'evaluaciones.ejercicio_id', '=', 'ejercicios.id')
            ->leftjoin('asm', 'asm.evaluacion_id', '=', 'evaluaciones.id')
            //->leftjoin('actividades','actividades.asm_id','=','asm.id')
            //->leftjoin('actividades', 'asm.id', '=', 'actividades.asm_id')
            //->leftjoin('avances','avances.actividad_id','=','actividades.id')




            ->select(//DB::raw('count(if(asm.estatus_id = 3, 1, null)) as asm_cantidad'), 'evaluaciones.id' //
            DB::raw( ' DISTINCT cat_programas.nombre as programa'),
            DB::raw( '  dependencias.nombre as dependencia'),
            DB::raw( '  ejercicios.año as ejercicio'),
            DB::raw( '  ejercicios.id as ejercicio_id'),
            DB::raw( '  evaluaciones.id as id'),

            DB::raw('COUNT( IF(asm.estatus_id = 3 , 1, null)   AND IF(asm.estatus_id = 3 , 1, null) AND IF(asm.tipo = "Dependencia" , 1, null) ) asm'),
            DB::raw('COUNT( IF(asm.prioridad_id = 4 , 1, null) AND IF(asm.estatus_id = 3 , 1, null) AND IF(asm.tipo = "Dependencia" , 1, null) ) prioridad_bajo'),
            DB::raw('COUNT( IF(asm.prioridad_id = 3 , 1, null) AND IF(asm.estatus_id = 3 , 1, null) AND IF(asm.tipo = "Dependencia" , 1, null) ) prioridad_medio'),
            DB::raw('COUNT( IF(asm.prioridad_id = 2 , 1, null) AND IF(asm.estatus_id = 3 , 1, null) AND IF(asm.tipo = "Dependencia" , 1, null) ) prioridad_alto'),
            DB::raw('COUNT( IF(asm.prioridad_id = 1 , 1, null) AND IF(asm.estatus_id = 3 , 1, null) AND IF(asm.tipo = "Dependencia" , 1, null) ) prioridad_muy_alto'),
            //clasificacion
            DB::raw('COUNT( IF(asm.aspecto_id = 1 , 1, null)   AND IF(asm.estatus_id = 3 , 1, null) AND IF(asm.tipo = "Dependencia" , 1, null) ) aspecto_especifico'),
            DB::raw('COUNT( IF(asm.aspecto_id = 2 , 1, null)   AND IF(asm.estatus_id = 3 , 1, null) AND IF(asm.tipo = "Dependencia" , 1, null) ) aspecto_institucional'),
            DB::raw('COUNT( IF(asm.aspecto_id = 3 , 1, null)   AND IF(asm.estatus_id = 3 , 1, null) AND IF(asm.tipo = "Dependencia" , 1, null) ) aspecto_interinstitucional'),
            DB::raw('COUNT( IF(asm.aspecto_id = 4 , 1, null)   AND IF(asm.estatus_id = 3 , 1, null) AND IF(asm.tipo = "Dependencia" , 1, null) ) aspecto_intergubernamental')
            //asm terminados
            //DB::raw('COUNT(actividades.id ) as cantidad_terminados '),


            )
            /*
            ->select(DB::raw('COUNT(IF(asm.estatus_id = 3, 1,IF(asm.tipo = "Dependencia", 1,IF(asm.dependencia_id = 1,1, null)))) asm_cantidad'),
                DB::raw('COUNT(DISTINCT IF( asm.nivel_prioridad = "Bajo", 1, null)) bajo'),
                DB::raw('COUNT(IF(asm.nivel_prioridad = "Medio", 1, null)) medio'),
                DB::raw('COUNT(IF(asm.nivel_prioridad = "Alto", 1, null)) alto'),
                DB::raw('COUNT(IF(asm.nivel_prioridad = "Muy alto", 1, null)) muy_alto'),
                DB::raw('COUNT(IF(asm.aspecto = "Especifico", 1, null)) especifico'),
                DB::raw('COUNT(IF(asm.aspecto = "Institucional", 1, null)) institucional'),
                DB::raw('COUNT(IF(asm.aspecto = "Interinstitucional", 1, null)) interinstitucional'),
                DB::raw('COUNT(IF(asm.aspecto = "Intergubernamental", 1, null)) intergubernamental'),
                DB::raw('COUNT(DISTINCT actividades.id) actividades' ),
                DB::raw('COUNT(DISTINCT asm.id) asm' ),
                DB::raw('COUNT(DISTINCT avances.actividad_id) avances' ),
                DB::raw('SUM(avances.porcentaje_avance)/COUNT(DISTINCT actividades.id) cantidad_avance'),
                DB::raw('IF(SUM(avances.porcentaje_avance)/COUNT(DISTINCT actividades.id) = 100, 1, null) as terminados_cantidad'),
            )
            */
            ->where('evaluaciones.ejercicio_id', $ejercicio->id)

            ->groupBy('evaluaciones.id')

             ->distinct(DB::raw('DISTINCTROW'))





            ->get()->toArray();
             $pae= \App\Models\Evaluacion::hydrate($pae);
            // dd($pae);




        //dd($pae);
        //dd($pae->first());

        /* Gráficas */
        $programas = Programa::whereIn('id',$pae->pluck('programa_id'))->pluck('id');
        $totalAsm=[];
        $totalPrioridad=[];
        $totalPorcentajeAsm=[];
        $totalActor=[];
        $prioridades = ["Bajo","Medio","Alto","Muy Alto"];
        $actores = ["Especifico","Institucional","Interinstitucional","Intergubernamental"];

        /*
        foreach ($pae as $pa) {
            array_push($totalAsm,$pa->cantidadAsm()->count());
            array_push($totalPorcentajeAsm,$pa->asmPorcentaje());
        }

        foreach ($prioridades as $prioridad) {

            array_push($totalPrioridad,$pa->totalPrioridad($prioridad));

        }
        foreach ($actores as $actor) {

            array_push($totalActor,$pa->totalActor($actor));

        }
        */

        /* Gráficas */

    	return view('usuarios.administrador.home.seguimientoAsm.index')
    	->with('pae',$pae)
        ->with('programas',$programas)
        ->with('totalPorcentajeAsm',collect($totalPorcentajeAsm))
        ->with('totalActor',collect($totalActor))
        ->with('totalPrioridad',collect($totalPrioridad))
        ->with('totalAsm',collect($totalAsm))
        ->with('ejercicio',$ejercicio);
    }

}
