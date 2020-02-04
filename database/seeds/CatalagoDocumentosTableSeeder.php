<?php

use Illuminate\Database\Seeder;

class CatalagoDocumentosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('catalago_documentos')->delete();
        
        \DB::table('catalago_documentos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'acta_constitutiva',
            'descripcion' => 'Copia legible del Acta Constitutiva con su última modificación (personas morales) o copia legible del documento expedido por el SAT (personas físicas) mediante el cuál demuestren que su objeto social o giro comercial es acorde al objeto de la presente con',
                'tipo_documento' => 'general',
                
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'experiencia_evaluador',
                'descripcion' => 'Documento que acredite la Experiencia del evaluador en el tipo de evaluación correspondiente a la prestación del servicio.',
                'tipo_documento' => 'general',
                
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'obligaciones_fiscales',
                'descripcion' => 'Documento de opinión de cumplimiento de obligaciones fiscales.',
                'tipo_documento' => 'general',
                
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'constancia_no_adeudos',
            'descripcion' => 'Copia legible de la coonstancia de no adeudos fiscales emitida por la Secretaria de Finanzas del Gobierno del Estado de Zacatecas (dicha constancia deberá estar vigente).',
                'tipo_documento' => 'general',
                
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'cedula_padron_proveedores',
            'descripcion' => 'Copia legible de la cédula del Registro Único de Proveedores y Contratistas Validados(RUPCOVA) del Gobierno del Estado de Zacatecas, (vigente).',
                'tipo_documento' => 'general',
                
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'propuesta_verdad',
                'descripcion' => 'Escrito bajo protesta de decir verdad en el que manifiesta que el domicilio consignado a su propuesta será el lugar donde el vocante recibirá toda clase de notificaciones que resulten de los actos y contratos que celebren.',
                'tipo_documento' => 'general',
                
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'carta_prestacion_servicios',
                'descripcion' => 'Carta que especifique que su normatividad no le limita presentar garantía de la prestación de Servicios.  ',
                'tipo_documento' => 'general',
                
            ),
            7 => 
            array (
                'id' => 8,
                'nombre' => 'curricula_personal',
                'descripcion' => 'Curricula del personal que realizará la evaluación.',
                'tipo_documento' => 'especifico',
                
            ),
            8 => 
            array (
                'id' => 9,
                'nombre' => 'identificacion_oficial',
                'descripcion' => 'Copia legible de identificación oficial vigente de quien firma las propuestas.',
                'tipo_documento' => 'especifico',
                
            ),
            9 => 
            array (
                'id' => 10,
                'nombre' => 'carta_protesta',
                'descripcion' => 'Escrito del convocante en el que manifieste bajo protesta decir verdad que se compromete a cumplir con la entrega de los servicios.',
                'tipo_documento' => 'especifico',
                
            ),
            10 => 
            array (
                'id' => 11,
                'nombre' => 'propuesta_trabajo',
                'descripcion' => 'Propuesta de trabajo ejecutiva.',
                'tipo_documento' => 'especifico',
                
            ),
            11 => 
            array (
                'id' => 12,
                'nombre' => 'carta_manifestacion',
                'descripcion' => 'Carta de manifestación de tener conocimiento de las caraterísticas y operación del fondo o programa objeto de evaluación, o bien de programas similares.',
                'tipo_documento' => 'especifico',
                
            ),
            12 => 
            array (
                'id' => 13,
                'nombre' => 'propuesta_económica',
                'descripcion' => 'Propuesta económica.',
                'tipo_documento' => 'especifico',
                
            ),
            13 => 
            array (
                'id' => 14,
                'nombre' => 'cronograma_actividades',
                'descripcion' => 'Propuesta de Cronograma de actividades.',
                'tipo_documento' => 'especifico',
                
            ),
        ));
        
        
    }
}