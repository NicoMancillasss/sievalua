<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <title></title>
    <style type="text/css">
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-family: sans-serif;
            
        }
        
        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        
        /* What is does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin:0 !important;
        }
        
        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
            color: black;
        }

        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            Margin: 0 auto !important;
            color: black;
        }
        table table table {
            table-layout: auto; 
        }
        
        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }
        
        /* What it does: A work-around for iOS meddling in triggered links. */
        .mobile-link--footer a,
        a[x-apple-data-detectors] {
            color:inherit !important;
            text-decoration: underline !important;
            color: black;
        }
        p{
            color: black;
        }
        h3{
            color: black;
        }
        h4{
            color: black;
        }
        h5{
            color: black;
        }
    </style>
    
    <!-- Progressive Enhancements -->
    <style>

        /* What it does: Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td:hover,
        .button-a:hover {
            background: #555555 !important;
            border-color: #555555 !important;
        }

    </style>
</head>
<body width="100%" bgcolor="#222222" style="Margin: 0;">
    

        <!-- Visually Hidden Preheader Text : BEGIN -->
        <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;">
            Secretaria de la Función Pública
        </div>
        <!-- Visually Hidden Preheader Text : END -->

        <!--    
            Set the email width. Defined in two places:
            1. max-width for all clients except Desktop Windows Outlook, allowing the email to squish on narrow but never go wider than 600px.
            2. MSO tags for Desktop Windows Outlook enforce a 600px width.
        -->
        <div style="max-width: 600px; margin: auto;">
            <!--[if (gte mso 9)|(IE)]>
            <table cellspacing="0" cellpadding="0" border="0" width="600" align="center">
            <tr>
            <td>
            <![endif]-->

            <!-- Email Header : BEGIN -->
            <table cellspacing="0" cellpadding="0" border="0" align="center"  bgcolor="#ffffff" width="100%" style="max-width: 600px;">
                <tr>
                    <td style="padding: 20px 0; text-align: center">
                        <img src="http://funcionpublica.zacatecas.gob.mx/sievalua/wp-content/uploads/2019/04/20190426_172911-1.png" width="100%" height="50" alt="alt_text" border="0">
                    </td>
                </tr>
            </table>
            <!-- Email Header : END -->
            
            <!-- Email Body : BEGIN -->
            <table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff" width="100%" style="max-width: 600px;">

                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <p align="right">
                                Fecha:  {{ date('d / m / Y') }}
                            </p>
                            <p align="right">
                                Folio: {{ $solicitud->folio }}
                            </p>
                            <p align="left">
                                {{ $solicitud->nombre }}
                            </p>
                            <p align="left">
                                Presente
                            </p>
                            <p align="justify" style="color: black;">
                                En atención al proceso del PAE-2019, se diseño un mecanismo que abone a la transparencia, por lo que se emitio la CONVOCATORIA  
                                pública abierta en la que participaron Despachos, Universidades y Personas Fisicas con capacidades para realizar Evaluaciones de Calidad. 
                                El Comité Seleccionador consideró en reunión de pleno la revisión de los  aspectos técnicos tales como área de experiencia, resultados de evaluaciones 
                                anteriormente realizadas,  currícula de los participantes en la evaluación, cronograma de actividades y propuesta económica, 
                                derivado del estudio y analisis se le informa  que fué seleccionado para realizar la siguiente evaluación:
                            </p>
                                    
                            <tr>
                                <td style="padding: 40px; mso-height-rule: exactly; line-height: 20px;">
                                   
                                   <br />


                                   <p style="font-weight: bold;">Evaluación aceptada:</p> <br>
                                   <table border="1">
                                        <tr>
                                            <th scope="col">Año a evaluar</th>
                                            <th scope="col">Dependencia Participante</th>
                                            <th scope="col">Política Programa a Evaluar</th>
                                            <th scope="col">Tipo Evaluación</th>
                                       
                                        </tr>
                                            <tr>
                                            <td>{{ $postula->evaluacion->ejercicio->año }}</td>
                                            <td>{{ $postula->evaluacion->dependencia->nombre }}</td>
                                            <td>{{ $postula->evaluacion->programa->nombre }}</td>
                                            <td>{{ $postula->evaluacion->tipoEvaluacion->nombre }}</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <p align="justify" style="color: black; ">
                                        De conformidad con las bases Quinta, Séptima y Octava Generales de la Convocatoria para participar en el concurso de 
                                        selección de despachos externos para realizar las evaluaciones del desempeño contempladas en el Programa Anual de Evaluación 2019 refrentes al Proceso de Designación,
                                         Publicación de Resultados y Consideraciones , así como lo establecido en el Artículo 79 de la Ley Federal de Presupuesto y Responsabilidad Hacendaria; el Artículo 120 de la Ley de Disciplina
                                          Financiera y Responsabilidad Hacendaria del Estado de Zacatecas y sus municipios; el Artículo 43 del Reglamento del Sistema Estatal de Evaluación, y del Proceso de Selección de Despachos 
                                          Evaluadores para el PAE-2019 a través de la Comisión Seleccionadora 
                                        y lo plasmado en el Acta de Selección de Despachos Evaluadores PAE-2019.
                                </p>
                            </tr>
                            <tr>    
                                <td>
                                    <br>
                                    <p align="center" style="font-weight: bold;"> 
                                        Te recordamos que tu cita para la firma de contrato e inicio
                                        de la evaluación se te notificará posteriormente por lo que no 
                                        omito señalar que será indispensable la presencia del representante legal.
                                    </p>   
                                    {{--
                                        <br>
                                        <p align="center" style="font-weight: bold;">Te recordamos que tu cita Programada es:</p>
                                        <br />
                                        <p align="center" style="font-weight: bold;">Lugar:</p><p align="center">{{ $data->lugar }}</p>
                                        <br/>
                                        <p align="center" style="font-weight: bold;">Fecha: </p> <p align="center">{{ $cita }}</p>
                                    --}}
                                    <br><br>
                                    <p align="center">
                                        Dirección de Planeación y de Evaluación de Programas Federales <br> 
                                            Secretaría de la Función Pública
                                    </p>
                                    <p align="center">Tel. 92-5-65-40 <br>
                                        Ext. 42280, 81 y 82
                                            </p>
                                </td>
                            </tr>
                    </table>
                </td>
            </tr>


        </table>
    </div>

</body>
</html>