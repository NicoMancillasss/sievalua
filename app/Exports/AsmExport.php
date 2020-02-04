<?php

namespace App\Exports;

use App\Models\Ejercicio;
use App\Models\Evaluacion;
use App\Models\Programa;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class AsmExport implements WithEvents
{

    protected $id;
    public function __construct(int $id)
    {
        $this->id = $id;
    }


    public function registerEvents(): array
    {
        return  [

            AfterSheet::class   => function(AfterSheet $event){

                $ejer = $this->id;
                $event->sheet->setCellValue('E1', 'ASPECTOS DE MEJORA 2018');
                $event->sheet->setCellValue('A2', 'Programa o Fondo');
                $event->sheet->setCellValue('B2', 'Dependencia');
                $event->sheet->setCellValue('C2', 'Ejercicio Fiscal Evaluado');
                $event->sheet->setCellValue('D2', 'ASM');
                $event->sheet->setCellValue('E2', 'Doc. Opinión Institucional');
                $event->sheet->setCellValue('F2', 'Doc. Trabajo');
                $event->sheet->setCellValue('G2', 'Clasificación por nivel de prioridad')->mergeCells('G2:J2');
                $event->sheet->setCellValue('K2', 'Clasificación por Tipo de Actor Involucrado')->mergeCells('K2:N2');
                $event->sheet->setCellValue('O2', 'Asm Concluidos al 100%');
                $event->sheet->setCellValue('P2', 'Avance Asm');

                $event->sheet->setCellValue('G3', 'Bajo');
                $event->sheet->setCellValue('H3', 'Medio');
                $event->sheet->setCellValue('I3', 'Alto');
                $event->sheet->setCellValue('J3', 'Muy Alto');
                $event->sheet->setCellValue('K3', 'Especifico');
                $event->sheet->setCellValue('L3', 'Institucional');
                $event->sheet->setCellValue('M3', 'Interinstitucional');
                $event->sheet->setCellValue('N3', 'Intergubernamental');

                $event->sheet->getStyle('E1')->getFont()->setName('Tahoma')->setBold(true)->setSize(11);
                $event->sheet->getStyle('E1')->getAlignment()->setVertical('center')->setHorizontal('center');
                $event->sheet->getStyle('E1')->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);

                $event->sheet->getStyle('A2')->getFont()->setName('Tahoma')->setBold(true)->setSize(10);
                $event->sheet->getStyle('A2')->getAlignment()->setVertical('center')->setHorizontal('center');
                $event->sheet->getStyle('A2')->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
                $event->sheet->getStyle('A2')->getActiveSheet()->getStyle('A2')->getFill()->getStartColor()->setRGB('5f984c');

                $event->sheet->getStyle('B2')->getFont()->setName('Tahoma')->setBold(true)->setSize(10);
                $event->sheet->getStyle('B2')->getAlignment()->setVertical('center')->setHorizontal('center');
                $event->sheet->getStyle('B2')->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);


                $event->sheet->getStyle('C2')->getFont()->setName('Tahoma')->setBold(true)->setSize(10);
                $event->sheet->getStyle('C2')->getAlignment()->setVertical('center')->setHorizontal('center');
                $event->sheet->getStyle('C2')->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);


                $event->sheet->getStyle('D2')->getFont()->setName('Tahoma')->setBold(true)->setSize(10);
                $event->sheet->getStyle('D2')->getAlignment()->setVertical('center')->setHorizontal('center');
                $event->sheet->getStyle('D2')->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);

                $event->sheet->getStyle('E2')->getFont()->setName('Tahoma')->setBold(true)->setSize(10);
                $event->sheet->getStyle('E2')->getAlignment()->setVertical('center')->setHorizontal('center');
                $event->sheet->getStyle('E2')->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);

                $event->sheet->getStyle('F2')->getFont()->setName('Tahoma')->setBold(true)->setSize(10);
                $event->sheet->getStyle('F2')->getAlignment()->setVertical('center')->setHorizontal('center');
                $event->sheet->getStyle('F2')->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);

                $event->sheet->getStyle('G2')->getFont()->setName('Tahoma')->setBold(true)->setSize(10);
                $event->sheet->getStyle('G2')->getAlignment()->setVertical('center')->setHorizontal('center');
                $event->sheet->getStyle('G2')->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);

                $event->sheet->getStyle('K2')->getFont()->setName('Tahoma')->setBold(true)->setSize(10);
                $event->sheet->getStyle('K2')->getAlignment()->setVertical('center')->setHorizontal('center');
                $event->sheet->getStyle('K2')->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);

                $event->sheet->getStyle('O2')->getFont()->setName('Tahoma')->setBold(true)->setSize(10);
                $event->sheet->getStyle('O2')->getAlignment()->setVertical('center')->setHorizontal('center');
                $event->sheet->getStyle('O2')->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);

                $event->sheet->getStyle('P2')->getFont()->setName('Tahoma')->setBold(true)->setSize(10);
                $event->sheet->getStyle('P2')->getAlignment()->setVertical('center')->setHorizontal('center');
                $event->sheet->getStyle('P2')->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
                //Color del titulo de la tabla
                $event->sheet->getStyle('A2:P2')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB('5C6167');
                //Color del las titulos de las columnas
                $event->sheet->getStyle('A1:P1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB('EDF2EE');
                $event->sheet->getStyle('A3:F3')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB('EDF2EE');
                //Colores de Clasificacion por nivel de prioridad
                $event->sheet->getStyle('G3')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB('DC3545');
                $event->sheet->getStyle('H3')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB('FFC107');
                $event->sheet->getStyle('I3')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB('17A2B8');
                $event->sheet->getStyle('J3')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB('28A745');
                //Colores de Clasificacion por Tipo de Actor Involucrado
                $event->sheet->getStyle('K3')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB('F8F9FA');
                $event->sheet->getStyle('L3')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB('007BFF');
                $event->sheet->getStyle('M3')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB('343A40');
                $event->sheet->getStyle('N3')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB('6C757D');

                $ejercicio = Ejercicio::findOrFail($ejer);

                $pae = DB::table('evaluaciones')->join('cat_programas', 'cat_programas.id', '=', 'evaluaciones.programa_id')
                    ->join('dependencias', 'evaluaciones.dependencia_id', '=', 'dependencias.id')
                    ->join('ejercicios', 'evaluaciones.ejercicio_id', '=', 'ejercicios.id')
                    ->leftjoin('asm', 'asm.evaluacion_id', '=', 'evaluaciones.id')

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

                $paes = 4;
                $event->sheet->getStyle('G')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB('F8D7DA');
                $event->sheet->getStyle('H')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB('FFF3CD');
                $event->sheet->getStyle('I')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB('D1ECF1');
                $event->sheet->getStyle('J')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB('D4EDDA');
                $event->sheet->getStyle('L')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB('CCE5FF');
                $event->sheet->getStyle('M')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB('D6D8D9');
                $event->sheet->getStyle('N')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB('E2E3E5');

                foreach($pae as $pa)
                {
                    // dd($pae, $pa);
                    $event->sheet->setCellValue('A' . $paes, $pa->programa);
                    $event->sheet->setCellValue('B' . $paes, $pa->dependencia);
                    $event->sheet->setCellValue('C' . $paes, $pa->ejercicio);
                    $event->sheet->setCellValue('D' . $paes, $pa->asm);
                    $event->sheet->setCellValue('E' . $paes, 'SI');
                    $event->sheet->setCellValue('F' . $paes, 'SI');
                    $event->sheet->setCellValue('G' . $paes, $pa->prioridad_bajo);
                    $event->sheet->setCellValue('H' . $paes, $pa->prioridad_medio);
                    $event->sheet->setCellValue('I' . $paes, $pa->prioridad_alto);
                    $event->sheet->setCellValue('J' . $paes, $pa->prioridad_muy_alto);
                    $event->sheet->setCellValue('K' . $paes, $pa->aspecto_especifico);
                    $event->sheet->setCellValue('L' . $paes, $pa->aspecto_institucional);
                    $event->sheet->setCellValue('M' . $paes, $pa->aspecto_interinstitucional);
                    $event->sheet->setCellValue('N' . $paes, $pa->aspecto_intergubernamental);
                    $event->sheet->setCellValue('O' . $paes, $pa->asmTerminados());
                    $event->sheet->setCellValue('P' . $paes, round($pa->asmPorcentaje(), 2));
                    $paes++;



                    $event->sheet->setCellValue('B' . $paes, "Total");
                    $event->sheet->setCellValue('G' . $paes, $pa->totalPrioridad(4));
                    $event->sheet->setCellValue('H' . $paes, $pa->totalPrioridad(3));
                    $event->sheet->setCellValue('I' . $paes, $pa->totalPrioridad(2));
                    $event->sheet->setCellValue('J' . $paes, $pa->totalPrioridad(1));
                    $event->sheet->setCellValue('K' . $paes, $pa->totalActor(1));
                    $event->sheet->setCellValue('L' . $paes, $pa->totalActor(2));
                    $event->sheet->setCellValue('M' . $paes, $pa->totalActor(3));
                    $event->sheet->setCellValue('N' . $paes, $pa->totalActor(4));
                    $event->sheet->setCellValue('O' . $paes, $pa->totalAsmTerminados());
                    $event->sheet->setCellValue('P' . $paes, $pa->totalAsmAvance());


                }


            },
        ];
    }
}
