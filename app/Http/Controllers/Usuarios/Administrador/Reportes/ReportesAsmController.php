<?php

namespace App\Http\Controllers\Usuarios\Administrador\Reportes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ejercicio;
use PDF;
use Excel;
use DB;

class ReportesAsmController extends Controller
{
    public function index($id)
    {
        dd($id);
        $ejercicio = Ejercicio::findOrFail($id);

        $pae = DB::table('evaluaciones')->join('cat_programas', 'cat_programas.id', '=', 'evaluaciones.programa_id')
            ->join('dependencias', 'evaluaciones.dependencia_id', '=', 'dependencias.id')
            ->join('ejercicios', 'evaluaciones.ejercicio_id', '=', 'ejercicios.id')
            ->leftjoin('asm', 'asm.evaluacion_id', '=', 'evaluaciones.id')
            //->leftjoin('actividades','actividades.asm_id','=','asm.id')
            //->leftjoin('actividades', 'asm.id', '=', 'actividades.asm_id')
            //->leftjoin('avances','avances.actividad_id','=','actividades.id')

            ->select( //DB::raw('count(if(asm.estatus_id = 3, 1, null)) as asm_cantidad'), 'evaluaciones.id' //
                DB::raw(' DISTINCT cat_programas.nombre as programa'),
                DB::raw('  dependencias.nombre as dependencia'),
                DB::raw('  ejercicios.año as ejercicio'),
                DB::raw('  ejercicios.id as ejercicio_id'),
                DB::raw('  evaluaciones.id as id'),

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
            ->where('evaluaciones.ejercicio_id', $ejercicio->id)

            ->groupBy('evaluaciones.id')

            ->distinct(DB::raw('DISTINCTROW'))

            ->get()->toArray();
        $pae = \App\Models\Evaluacion::hydrate($pae);
        // dd($pae);

        //dd($pae);
        //dd($pae->first());

        /* Gráficas */
        $programas = Programa::whereIn('id', $pae->pluck('programa_id'))->pluck('id');
        $totalAsm = [];
        $totalPrioridad = [];
        $totalPorcentajeAsm = [];
        $totalActor = [];
        $prioridades = ["Bajo", "Medio", "Alto", "Muy Alto"];
        $actores = ["Especifico", "Institucional", "Interinstitucional", "Intergubernamental"];

        foreach ($pae as $pa) {
            array_push($totalAsm, $pa->cantidadAsm()->count());
            array_push($totalPorcentajeAsm, $pa->asmPorcentaje());
        }

        foreach ($prioridades as $prioridad) {

            array_push($totalPrioridad, $pa->totalPrioridad($prioridad));
        }
        foreach ($actores as $actor) {

            array_push($totalActor, $pa->totalActor($actor));
        }
        //  dd($prioridades, $actores, $totalPrioridad, $totalActor, $numActores);

        $totalActor = [5, 2, 0, 0];


        $pdf = PDF::loadView('usuarios.administrador.reportes.asm.aspectosMejora', compact('pae', 'programas'));

        return $pdf->download('Aspectos Suceptibles de Mejora' . $ejercicio->año . '.pdf');
    }
}
