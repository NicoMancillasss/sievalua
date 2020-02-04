<?php

namespace App\Http\Controllers\Portal\Reportes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ejercicio;
use PDF;
use DB;
use Maatwebsite\Excel\facades\Excel;

use App\Exports\AsmExport;
use App\Models\Evaluacion;

class ReportesAsmController extends Controller
{
    public function pdf($id)
    {

        $ejercicio = Ejercicio::findOrFail($id);

        $pae = DB::table('evaluaciones')->join('cat_programas', 'cat_programas.id', '=', 'evaluaciones.programa_id')
            ->join('dependencias', 'evaluaciones.dependencia_id', '=', 'dependencias.id')
            ->join('ejercicios', 'evaluaciones.ejercicio_id', '=', 'ejercicios.id')
            ->leftjoin('asm', 'asm.evaluacion_id', '=', 'evaluaciones.id')

            ->select(
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

            )
            ->where('evaluaciones.ejercicio_id', $ejercicio->id)

            ->groupBy('evaluaciones.id')

            ->distinct(DB::raw('DISTINCTROW'))

            ->get()->toArray();
        $pae = \App\Models\Evaluacion::hydrate($pae);

        // $programas = Programa::whereIn('id', $pae->pluck('programa_id'))->pluck('id');
        $totalAsm = [];
        $totalPrioridad = [];
        $totalPorcentajeAsm = [];
        $totalActor = [];
        $prioridades = ["Bajo", "Medio", "Alto", "Muy Alto"];
        $actores = ["Especifico", "Institucional", "Interinstitucional", "Intergubernamental"];

        if (isset($pae)) { } else {
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
        }

        $pdf = PDF::loadView('usuarios.administrador.reportes.asm.aspectosMejora', compact('pae','ejercicio','prioridades', 'actores','totalActor', 'totalPrioridad', 'totalPorcentajeAsm', 'totalAsm'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download('Aspectos Suceptibles de Mejora' . $ejercicio->año . '.pdf');
    }

    public function excel($id)
    {
        return Excel::download(new AsmExport($id), 'Aspectos Suceptibles de Mejora.xlsx');
    }

    public function csv($id)
    {

        $ejercicio = Ejercicio::findOrFail($id);

        $pae = DB::table('evaluaciones')->join('cat_programas', 'cat_programas.id', '=', 'evaluaciones.programa_id')
            ->join('dependencias', 'evaluaciones.dependencia_id', '=', 'dependencias.id')
            ->join('ejercicios', 'evaluaciones.ejercicio_id', '=', 'ejercicios.id')
            ->leftjoin('asm', 'asm.evaluacion_id', '=', 'evaluaciones.id')

            ->select(
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

            )
            ->where('evaluaciones.ejercicio_id', $ejercicio->id)

            ->groupBy('evaluaciones.id')

            ->distinct(DB::raw('DISTINCTROW'))

            ->get()->toArray();
        $pae = \App\Models\Evaluacion::hydrate($pae);

        $pdf = PDF::loadView('usuarios.administrador.reportes.asm.aspectosMejora', compact('pae', 'ejercicio'));

        return $pdf->download('Aspectos Suceptibles de Mejora' . $ejercicio->año . '.pdf');
    }

    public function pdfDocTrabajo($id){

        $evaluacion = Evaluacion::find($id);
        $asm = $evaluacion->asm
            ->where('tipo', 'Dependencia')
            ->where('ejercicio_id', '=', $evaluacion->ejercicio_id)
            ->where('aspecto_id', '=', 1)
            ->where('estatus_id', 3);

        $pdf = PDF::loadView('layouts.home.asm.reportes.docTrabajo', compact('asm', 'evaluacion'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download('DocumentoTrabajo' . $evaluacion->programa->nombre . $evaluacion->ejercicio->año . '.pdf');

    }

    public function pdfDocInstitucional($id){

        $evaluacion = Evaluacion::find($id);

        $asm = $evaluacion->asm
            ->where('tipo', 'Dependencia')
            ->where('ejercicio_id', '=', $evaluacion->ejercicio_id)
            ->where('aspecto_id', '=', 2)
            ->where('estatus_id', 3);

        $pdf = PDF::loadView('layouts.home.asm.reportes.docInstitucional', compact('asm', 'evaluacion'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download('DocumentoInstitucional' .$evaluacion->programa->nombre. $evaluacion->ejercicio->año . '.pdf');
    }

}
