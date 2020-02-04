<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\AfterSheet;
use App\Models\Solicitud;
use DB;

use Maatwebsite\Excel\Concerns\FromCollection;

class PadronAceptados implements WithEvents
{
    protected $ejercicio;
    public function __construct(int $ejercicio)
    {
        $this->ejercicio = $ejercicio;
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function (AfterSheet $event) {
                $event->sheet->setCellValue('D1', 'PADRON DE SOLICITADOS');
                $event->sheet->setCellValue('A2', 'Folio');
                $event->sheet->setCellValue('B2', 'Despacho');
                $event->sheet->setCellValue('C2', 'Dependencia');
                $event->sheet->setCellValue('D2', 'Evaluaciones Solicitadas');
                $event->sheet->setCellValue('E2', 'Estatus');
                $event->sheet->setCellValue('F2', 'Fecha Cita');
                $event->sheet->setCellValue('G2', 'Lugar');

                $event->sheet->getStyle('D1')->getFont()->setName('Tahoma')->setBold(true)->setSize(11);
                $event->sheet->getStyle('D1')->getAlignment()->setVertical('center')->setHorizontal('center');

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

                $styleArray = [
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                            'color' => ['argb' => '669933'],
                        ],
                    ],
                ];

                $event->sheet->getStyle('A2:G2')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB('669933');
                $event->sheet->getStyle('A1:G1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB('EDF2EE');


                $aceptados = Solicitud::where('estatus', 'aceptado')
                    ->where('ejercicio_id', $this->ejercicio)->get();



                $folio = 3;
                $despacho = 3;
                $evaluaciones = 3;
                $cita = 3;
                $lugar = 3;

                foreach ($aceptados as $padron) {
                    // $event->sheet->setCellValue('A'.$folio,$padron->folio);

                    foreach ($padron->postula as $evaluacion) {
                        $event->sheet->setCellValue('B' . $despacho, $padron->user->nombre);
                        $event->sheet->setCellValue('A' . $despacho, $padron->folio);
                        $despacho++;
                    }
                    foreach ($padron->postula as $evaluacion) {
                        $event->sheet->setCellValue('D' . $evaluaciones, $evaluacion->evaluacion->programa->nombre);
                        $event->sheet->setCellValue('C' . $evaluaciones, $evaluacion->evaluacion->dependencia->nombre);
                        if ($evaluacion->cita != '' && $evaluacion->lugar != '') {
                            $event->sheet->setCellValue('E' . $evaluaciones, 'Aceptada');
                        } else {
                            $event->sheet->setCellValue('E' . $evaluaciones, 'Rechazada');
                        }

                        $evaluaciones++;
                    }
                    foreach ($padron->postula as $evaluacion) {
                        $event->sheet->setCellValue('F' . $cita, $evaluacion->cita);
                        $event->sheet->setCellValue('G' . $cita, $evaluacion->lugar);
                        $cita++;
                    }

                    $folio += $padron->postula->count();
                }
            },
        ];
    }
}
