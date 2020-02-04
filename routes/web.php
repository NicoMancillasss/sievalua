<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/sievaluap/sievalua/convocatoria', function () {
    return view('layouts/home/convocatoria');
});
Auth::routes(['verify' => true]);
Route::middleware(['noCache'])->group(function ()
{
    Route::redirect('/', '/sievalua', 301);

    Route::get('/sievalua', 'Portal\HomeController@index')->name('portal.home');
    Route::prefix("sievalua")->group(function ()
    {
        Route::get('/evaluaciones/programa-anual',                          'Portal\EvaluacionesController@index')                      ->name('evaluaciones');
        Route::get('/evaluaciones/total-de-evaluaciones',                   'Portal\TotalEvaluacionesController@index')                 ->name('totalEvaluaciones');
        Route::get('/evaluaciones/evaluacion-global',                       'Portal\EvaluacionGlobalController@index')                  ->name('evaluacionGlobal');
        Route::get('/evaluaciones/sistema-estatal-de-evaluacion',           'Portal\SistemaEstatalEvaluacionController@index')          ->name('sEE');
        Route::get('/evaluaciones/contratacion',                            'Portal\ContratacionController@index')                      ->name('contratacion');
        Route::get('/indicadores',                                          'Portal\IndicadoresController@index')                       ->name('indicadores');
        Route::get('/lineamientos',                                         'Portal\LineamientoController@index')                       ->name('lineamientos');
        Route::get('/marco-juridico',                                       'Portal\MarcoJuridicoController@index')                     ->name('marcoJuridico');
        Route::get('convocatoria',                                          'Portal\ConvocatoriaController@index')                      ->name('convocatoria');
        Route::get('resultados/convocatoria',                               'Portal\ConvocatoriaController@resultadosConvocatoria')     ->name('resultados.convocatoria');
        // Aspectos de Mejora
        Route::get('/aspectos-de-mejora',                                   'Portal\AspectosMejoraController@index')                    ->name('aspectosMejora');
        Route::get('/aspectos-de-mejora/{ejercicio}',                       'Portal\AspectosMejoraController@verASM')                   ->name('asmDetalles');
        Route::get('/aspectos-de-mejora/dependencia/{evaluacion}',          'Portal\AspectosMejoraController@verDepAsm')                ->name('asmDepAsm');
        Route::get('/aspectos-de-mejora/dependencia/actividades/{id}',      'Portal\AspectosMejoraController@verActividades')           ->name('asmActividades');
        // Route::get('/aspectos-de-mejora/dependencia/graficas/{id}',     'Portal\AspectosMejoraController@graficas')                  ->name('graficas.asm');
        Route::get('/aspectos-de-mejora/dependencia/docTrabajo/{evaluacion}',        'Portal\AspectosMejoraController@verDocumentoTrabajo')      ->name('verDocTrabajo');
        Route::get('/aspectos-de-mejora/dependencia/docInstitucional/{evaluacion}',  'Portal\AspectosMejoraController@verDocumentoInstitucional')->name('verDocInstitucional');


        Route::get('/sitios-de-interes',                                'Portal\SitiosInteresController@index')                     ->name('sitiosInteres');
        Route::get('/terminos-referencia',                              'Portal\TerminosReferenciaController@index')                ->name('terminosReferencia');
        Route::get('/capacitacion',                                     'Portal\CapacitacionController@index')                      ->name('capacitacion');

        /*=================================
        =        REPORTES PORTAL          =
        =================================*/

        Route::get('aspectos-de-mejora/reportes/pdf/{id}',              'Portal\Reportes\ReportesAsmController@pdf')                ->name('pdf.asm');
        Route::get('aspectos-de-mejora/reportes/csv/{id}',              'Portal\Reportes\ReportesAsmController@csv')                ->name('csv.asm');
        Route::get('aspectos-de-mejora/reportes/excel/{id}',            'Portal\Reportes\ReportesAsmController@excel')              ->name('excel.asm');

        Route::get('aspectos-de-mejora/reportes/pdf/documentoTrabajo/{id}',              'Portal\Reportes\ReportesAsmController@pdfDocTrabajo')              ->name('pdf.docTrabajo');
        Route::get('aspectos-de-mejora/reportes/pdf/documentoInstitucional/{id}',        'Portal\Reportes\ReportesAsmController@pdfDocInstitucional')        ->name('pdf.docInstitucional');


    });
});


Route::middleware(['auth', 'administrador'])->group(function ()
{

    /*
        Rutas para errores de administrador
    */
        Route::get('administrador/error/404',function()
        {
            return view('usuarios.administrador.errores.404');
        })->name('error.404');
    /*
        Fin Rutas para errores de administrador
    */


    /*=============================================
    =            Rutas para solicitudes           =
    =============================================*/
    //Ruta para ver las notificaciones que le llegan a los admin
    Route::get('administrador/ver/notificaciones',                                  'Usuarios\Administrador\NotificacionesController@index')                ->name('administrador.notificaciones.index');
    Route::get('administrador/ver/notificacion/{notificacion}',                     'Usuarios\Administrador\NotificacionesController@verNotificacion')      ->name('administrador.notificacion.show');
    //Ruta Prueba
    Route::get('administrador/home',                                                'Usuarios\Administrador\Home\HomeController@index')                     ->name('administrador.home');

    Route::get('administrador/solicitudes/{ejercicio}/{estatus?}',                  'Usuarios\Administrador\SolicitudesController@index')                   ->name('administrador.solicitudes');

    Route::get('administrador/ver/solicitud/{solicitud}',                           'Usuarios\Administrador\SolicitudesController@verSolicitud')            ->name('administrador.ver.solicitud');
    //Ruta para rechazar la solicitud Completamente

    Route::post('administrador/ver/solicitud/firmaContato',                         'Usuarios\Administrador\SolicitudesController@firmaContrato')           ->name('administrador.ver.solicitud.firmaContrato');

    Route::post('administrador/rechazar/solicitud/{solicitud}',                     'Usuarios\Administrador\SolicitudesController@rechazarSolicitud')       ->name('administrador.rechazar.solicitud');
    //ruta para mandar a la vista donde se enviará correo especificando p´q se rechaza la solicitud
    Route::get('administrador/rechazar/solicitud/{solicitud}',                      'Usuarios\Administrador\SolicitudesController@verRechazarSolicitud')    ->name('administrador.ver.rechazar.solicitud');
    //Ruta para desactivar la evaluacion correspondiente a cada solicitud
    Route::post('administrador/desactivar/evaluacion/{solicitud}/{evaluacion}',     'Usuarios\Administrador\SolicitudesController@desactivarEvaluacion')    ->name('administrador.desactivar.evaluacion');
    //Ruta para desactivar una unica evaluación
    Route::post('administrador/desactivarUna/evaluacion/{solicitud}/{evaluacion}',  'Usuarios\Administrador\SolicitudesController@desactivarUnaEvaluacion') ->name('administrador.desactivarUna.evaluacion');
    //Ruta para mandar a la vista de rechazar solicitud
    Route::get('administrador/rechazar/solicitud/postulacion/{postula}',            'Usuarios\Administrador\SolicitudesController@verDesactivarSolicitud')  ->name('administrador.rechazar.solicitud.postula');



    //ruta para pasar a la vista de Correcciones
    Route::get('administrador/solicitud/correcciones/{solicitud}',                  'Usuarios\Administrador\SolicitudesController@correcciones')        ->name('administrador.correccion.solicitud');
    //Ruta para enviar las correciones al correo y modificar el estatus.
    Route::post('administrador/enviar/correcciones/{solicitud}',                    'Usuarios\Administrador\SolicitudesController@enviarCorrecciones')  ->name('administrador.enviar.correccion.solicitud');

    Route::put('administrador/editar/correcciones/{correccion}/{solicitud}',        'Usuarios\Administrador\SolicitudesController@editarCorrecciones')  ->name('administrador.editar.correccion.solicitud');

    //ruta para vel la documentacion que capturo de cada evaluacion
    Route::get('administrador/documentacion{id}',                                   'Usuarios\Administrador\SolicitudesController@VerDocumentacion')    ->name('administrador.ver.documentacion');
    //Ruta para ver los ejercicios que existen
    Route::get('administrador/solicitud/ejercicios',                                'Usuarios\Administrador\EjercicioController@verEjercicios')         ->name('administrador.ver.solicitudes.ejercicios');
    //Programar una Cita Y aceptar la solicitud
    Route::post('administrador/programar/cita/{solicitud}',                         'Usuarios\Administrador\SolicitudesController@programarCita')       ->name('administrador.programarCita');
    /* Ruta para vista programar cita de evaluacion*/
    Route::get('administrador/evaluacion/cita/{evaluacion}',                        'Usuarios\Administrador\SolicitudesController@vistaProgramaCita')   ->name('administrador.ver.programa.cita');

    //Ruta Para Ver el padron de Aceptados
    Route::get('administrador/padron/aceptados/PAE/{ejercicio}',                    'Usuarios\Administrador\SolicitudesController@verPadronAceptados')  ->name('administrador.ver.padron.aceptados');

    /*=====  End of Section comment block  ======*/


    /*Ruta Para Ejercicios  */
    Route::resource('/administrador/ejercicios',    'Usuarios\Administrador\EjercicioController');
    /*Ruta Para catalago  Programas  */
    Route::resource('/administrador/programas',     'Usuarios\Administrador\ProgramasController');
    /*Ruta Para Evaluaciones PAE */
    Route::resource('/administrador/evaluaciones',  'Usuarios\Administrador\EvaluacionesController');


    /*Ruta para crgar los documentos de la evaluacion corresapondientes a generales*/
    Route::get('/administrador/evaluaciones/generales/{id}',                            'Usuarios\Administrador\EvaluacionesController@showDocumentosGenerales')        ->name('evaluacion.documentos.generales');

    Route::post('/administrador/evaluaciones/guardar/generales/{id}',                   'Usuarios\Administrador\EvaluacionesController@guardarDocumentosGenerales')     ->name('evaluacion.documentos.generales.guardar');
    /*Ruta para crgar los documentos de la evaluacion corresapondientes a especificos*/
    Route::get('/administrador/evaluaciones/especificos/{id}/{evaluacion}',             'Usuarios\Administrador\EvaluacionesController@showDocumentosEspecificos')      ->name('evaluacion.documentos.especificos');

    Route::post('/administrador/evaluaciones/guardar/especificos/{id}/{evaluacion}',    'Usuarios\Administrador\EvaluacionesController@guardarDocumentosEspecificos')   ->name('evaluacion.documentos.especificos.guardar');
    //Ruta para editar los documentos de los despachos del lado del administrador
    Route::post('/administrador/evaluaciones/actualizar/documento',                     'Usuarios\Administrador\SolicitudesController@editarDocumento')                 ->name('evaluacion.documentos.editar');
    //Ruta para cargar los documentos finales que se le solicitaran al despacho al concluir
    Route::get('/administrador/evaluaciones/finales/{documento}/{evaluacion}',          'Usuarios\Administrador\EvaluacionesController@showDocumentosFinales')          ->name('evaluacion.documentos.finales');
    //Ruta para editar los documentos finales
    Route::post('/administrador/evaluaciones/guardar/finales/{documento}/{evaluacion}', 'Usuarios\Administrador\EvaluacionesController@guardarDocumentosFinales')       ->name('evaluacion.documentos.finales.guardar');



    /*Ruta Para  catalago Tipos de Evaluaciones  */
    Route::resource('/administrador/tiposEvaluaciones',         'Usuarios\Administrador\TiposEvaluacionesController');
    /*Ruta para catalago de documentos */
    Route::resource('/administrador/catalogoDocumentos',        'Usuarios\Administrador\DocumentosController');
    /*Ruta Para  catalago Tipos de Archivos  */
    Route::resource('/administrador/tiposArchivos',           'Usuarios\Administrador\TiposArchivosController');

    /*================================
	=            Mensajes            =
	=================================*/
    /* Ruta para el inicio de los mensajes */
    Route::get('/administrador/mensajes/index/{ejercicio}',         'Usuarios\Administrador\MensajesController@index')              ->name('administrador.mensajes.index');
    /* Ruta para realizar observacion a un despacho o dependencia*/
    Route::post('/administrador/mensajes/observacion',              'Usuarios\Administrador\MensajesController@enviarObservacion')  ->name('administrador.mensajes.enviar.observacion');
    /* Ruta para ver la conversacion que contiene el que seleccionas*/
    Route::get('/administrador/mensajes/ver/{evaluacion}',          'Usuarios\Administrador\MensajesController@verMensajes')        ->name('administrador.mensajes.ver');


    /*================================
	=            Reportes            =
    =================================*/

    /*Rutas para imprimir pdf*/
    Route::get('administrador/pdf/padron/aceptados/{ejercicio}',    'Usuarios\Administrador\Reportes\ReportesSolicitudController@padronAceptado')       ->name('administrador.pdf.padron.aceptados');
    /*Ruta para imprimir pdf de ficha de datos generales*/
    Route::get('administrador/ficha/datos/generales{id}',           'Usuarios\Administrador\Reportes\ReportesSolicitudController@datosGenerales')       ->name('administrador.pdf.datosgenerales');
    /*Ruta para generar reporte excel*/
    Route::get('administrador/excel/padron/aceptados/{ejercicio}',  'Usuarios\Administrador\Reportes\ReportesSolicitudController@padronAceptadoExcel')  ->name('administrador.excel.padron.aceptados');
    /*Ruta para generar el padron de rechazados pdf*/
    Route::get('administrador/pdf/padron/rechazados/{ejercicio}',   'Usuarios\Administrador\Reportes\ReportesSolicitudController@padronRechazado')      ->name('administrador.pdf.padron.rechazados');
    //Rutas para generar reportes de asm




    /*=================================================================
	=            Rutas para ASM del lado del administrador            =
    =================================================================*/
    Route::put('administrador/asm/validar/actividad/avance/{tipo}',             'Usuarios\Administrador\Asm\AvancesController@aceptarAvance')       ->name('administrador.asm.validar.avance');

    Route::get('administrador/asm/validar/ejercicios',                          'Usuarios\Administrador\Asm\AsmController@verEjercicios')           ->name('administrador.asm.validar.ejercicios');
    //ruta para ver los asm que ha cargado el despacho
    Route::get('administrador/asm/ver/despacho/{postulacion}',                  'Usuarios\Administrador\Asm\AsmController@verHallazgos')            ->name('administrador.asm.despacho.hallazgos');

    Route::get('administrador/asm/detalles/despacho/{postulacion}/{hallazgo}',  'Usuarios\Administrador\Asm\AsmController@detallesHallazgos')       ->name('administrador.asm.despacho.detalles.hallazgos');

    Route::get('administrador/asm/editar/despacho/{postulacion}/{hallazgo}',    'Usuarios\Administrador\Asm\AsmController@editarHallazgos')         ->name('administrador.asm.despacho.editar.hallazgos');

    Route::get('administrador/asm/create/programas/{ejercicio}',                'Usuarios\Administrador\Asm\AsmController@create')                  ->name('administrador.asm.programa.create');

    Route::get('administrador/asm/programas/{ejercicio}',                       'Usuarios\Administrador\Asm\AsmController@index')                   ->name('administrador.asm.programas');

	Route::get('administrador/asm/ejercicios',                                  'Usuarios\Administrador\Asm\AsmController@verEjerciciosHallazgos')  ->name('administrador.asm.ejercicios');
	//Ruta para ver las dependencias que corresponden al ejercico
	Route::get('administrador/asm/dependencia/{ejercicio}',                     'Usuarios\Administrador\Asm\AsmController@verDependencias')         ->name('administrador.asm.dependencia');
     //Ruta para ver los Asm en revision d las dependencias
	Route::get('administrador/asm/dependencia/Asm/{evaluacion}',                'Usuarios\Administrador\Asm\AsmController@verAsm')                  ->name('administrador.asm.dependencia.asm');
	//Ruta para desactivar Asm
	Route::get('administrador/asm/dependencia/Asm/desactiva/{accion}/{asm}',    'Usuarios\Administrador\Asm\AsmController@descativarAsm')           ->name('administrador.valida.dependencia.asm.desactivado');

    Route::post('administrador/asm/programas/guardar/{ejercicio}',              'Usuarios\Administrador\Asm\AsmController@store')                   ->name('administrador.asm.programa.guardar');

    Route::get('administrador/asm/programas/editar/{asm}',                      'Usuarios\Administrador\Asm\AsmController@edit')                    ->name('administrador.asm.programa.edit');

    Route::put('administrador/asm/programas/actualizar/{asm}',                  'Usuarios\Administrador\Asm\AsmController@update')                  ->name('administrador.asm.programa.update');
    //Ruta para activar la creacion de asm de un programa
    Route::get('administrador/asm/pae/evaluacion/{id}',                         'Usuarios\Administrador\EvaluacionesController@cambiarActivo')      ->name('administrador.asm.pae.activo');

    /*Ruta del Api para obtener la dependencia que le pertenece a ese programa*/
    Route::get('dependencia/{id}',          'Api\ApiController@getDependencia')     ->name('get.dependencia');

    Route::get('tipo/Evaluacion/{id}',      'Api\ApiController@getTipoEvaluacion')  ->name('get.evaluacion.tipo');

    Route::get('despacho/{id}',             'Api\ApiController@getDespacho')        ->name('get.despacho');

    Route::get('temas/{id}',                'Api\ApiController@getTemas')           ->name('get.temas');

    //Rutas para crud de los catalogos de los Asm
    Route::resource('/administrador/asm/temas',         'Usuarios\Administrador\Asm\TemasController');

    Route::resource('/administrador/asm/aspectos',      'Usuarios\Administrador\Asm\AspectosController');

    Route::resource('/administrador/asm/acciones',      'Usuarios\Administrador\Asm\AccionesController');

    Route::resource('/administrador/asm/prioridades',   'Usuarios\Administrador\Asm\PrioridadesController');

	Route::resource('/administrador/asm/actores',       'Usuarios\Administrador\Asm\ActoresController');

	/*Ruta del Api para obtener la dependencia que le pertenece a ese programa*/
    Route::get('dependencia/{id}',  'Api\ApiController@getDependencia') ->name('get.dependencia');


	Route::get('despacho/{id}',     'Api\ApiController@getDespacho')    ->name('get.despacho');
	/*=================================
	=          Validacion Asm         =
	=================================*/
		//ACEPTAR
	Route::post('administrador/asm/aceptar',                'Usuarios\Administrador\Asm\AsmController@aceptarAsm')          ->name('administrador.asm.aceptar');
		//ENVIAR CORRECCION
    Route::post('administrador/asm/correccion',             'Usuarios\Administrador\Asm\AsmController@enviarAsmCorreccion') ->name('administrador.asm.correccion');

	//Route::get('administrador/asm/actividades{id}/{tipo}',  'Usuarios\Administrador\Asm\AsmController@verActividades')      ->name('administrador.asm.actividades');
    //ACEPTAR
    Route::post('administrador/asm/aceptar',                'Usuarios\Administrador\Asm\AsmController@aceptarAsm')          ->name('administrador.asm.aceptar');
    //ENVIAR CORRECCION
    Route::post('administrador/asm/correccion',             'Usuarios\Administrador\Asm\AsmController@enviarAsmCorreccion') ->name('administrador.asm.correccion');

    Route::get('administrador/asm/actividades{id}',         'Usuarios\Administrador\Asm\ActividadesController@index')       ->name('administrador.asm.actividades');


    /*=====  End Validacion Asm  ======*/


    /*=================================
	=            PORTAL               =
	=================================*/
    //Carrucel
    Route::get('administrador/portal/carrusel/index',                       'Usuarios\Administrador\Portal\CarrucelController@index')                       ->name('administrador.portal.carrusel.index');
    Route::post('administrador/portal/carrusel/create',                     'Usuarios\Administrador\Portal\CarrucelController@store')                       ->name('administrador.portal.carrusel.create');
    Route::put('administrador/portal/carrusel/update',                      'Usuarios\Administrador\Portal\CarrucelController@update')                      ->name('administrador.portal.carrusel.update');
    Route::delete('administrador/portal/carrusel/delete/{id}',              'Usuarios\Administrador\Portal\CarrucelController@destroy')                     ->name('administrador.portal.carrusel.delete');

    //Mosaicos
    Route::get('administrador/portal/mosaicos/index',                       'Usuarios\Administrador\Portal\MosaicosController@index')                       ->name('administrador.portal.mosaicos.index');
    Route::post('administrador/portal/mosaicos/create',                     'Usuarios\Administrador\Portal\MosaicosController@store')                       ->name('administrador.portal.mosaicos.create');
    Route::put('administrador/portal/mosaicos/update',                      'Usuarios\Administrador\Portal\MosaicosController@update')                      ->name('administrador.portal.mosaicos.update');
    Route::delete('administrador/portal/mosaicos/delete/{id}',              'Usuarios\Administrador\Portal\MosaicosController@destroy')                     ->name('administrador.portal.mosaicos.delete');

    //Sitios Interes
    Route::get('administrador/portal/sitiosInteres/index',                  'Usuarios\Administrador\Portal\SitiosInteresController@index')                  ->name('administrador.portal.sitiosInteres.index');
    Route::post('administrador/portal/sitiosInteres/create',                'Usuarios\Administrador\Portal\SitiosInteresController@store')                  ->name('administrador.portal.sitiosInteres.create');
    Route::put('administrador/portal/sitiosInteres/update',                 'Usuarios\Administrador\Portal\SitiosInteresController@update')                 ->name('administrador.portal.sitiosInteres.update');
    Route::delete('administrador/portal/sitiosInteres/delete/{id}',         'Usuarios\Administrador\Portal\SitiosInteresController@destroy')                ->name('administrador.portal.sitiosInteres.delete');
    //Programa Anual
    Route::get('administrador/portal/programaAnual/index',                  'Usuarios\Administrador\Portal\ProgramaAnualController@index')                  ->name('administrador.portal.programaAnual.index');
    Route::post('administrador/portal/programaAnual/create',                'Usuarios\Administrador\Portal\ProgramaAnualController@store')                  ->name('administrador.portal.programaAnual.create');
    Route::put('administrador/portal/programaAnual/update',                 'Usuarios\Administrador\Portal\ProgramaAnualController@update')                 ->name('administrador.portal.programaAnual.update');
    Route::delete('administrador/portal/programaAnual/delete/{id}',         'Usuarios\Administrador\Portal\ProgramaAnualController@destroy')                ->name('administrador.portal.programaAnual.delete');
    //Total de Evaluaciones
    Route::get('administrador/portal/totalEvaluaciones/index',              'Usuarios\Administrador\Portal\TotalEvaluacionesController@index')              ->name('administrador.portal.totalEvaluaciones.index');
    Route::post('administrador/portal/totalEvaluaciones/create',            'Usuarios\Administrador\Portal\TotalEvaluacionesController@store')              ->name('administrador.portal.totalEvaluaciones.create');
    Route::put('administrador/portal/totalEvaluaciones/update',             'Usuarios\Administrador\Portal\TotalEvaluacionesController@update')             ->name('administrador.portal.totalEvaluaciones.update');
    Route::delete('administrador/portal/totalEvaluaciones/delete/{id}',     'Usuarios\Administrador\Portal\TotalEvaluacionesController@destroy')            ->name('administrador.portal.totalEvaluaciones.delete');
    //Sistema Estatal
    Route::get('administrador/portal/sistemaEstatal/index',                 'Usuarios\Administrador\Portal\SistemaEstatalController@index')                 ->name('administrador.portal.sistemaEstatal.index');
    Route::post('administrador/portal/sistemaEstatal/create',               'Usuarios\Administrador\Portal\SistemaEstatalController@store')                 ->name('administrador.portal.sistemaEstatal.create');
    Route::put('administrador/portal/sistemaEstatal/update',                'Usuarios\Administrador\Portal\SistemaEstatalController@update')                ->name('administrador.portal.sistemaEstatal.update');
    Route::delete('administrador/portal/sistemaEstatal/delete/{id}',        'Usuarios\Administrador\Portal\SistemaEstatalController@destroy')               ->name('administrador.portal.sistemaEstatal.delete');
    //Contratacion de Evaluaciones
    Route::get('administrador/portal/contratacion/index',                   'Usuarios\Administrador\Portal\contratacionEvaluacionesController@index')      ->name('administrador.portal.contratacion.index');
    Route::post('administrador/portal/contratacion/create',                 'Usuarios\Administrador\Portal\contratacionEvaluacionesController@store')      ->name('administrador.portal.contratacion.create');
    Route::put('administrador/portal/contratacion/update',                  'Usuarios\Administrador\Portal\contratacionEvaluacionesController@update')     ->name('administrador.portal.contratacion.update');
    Route::delete('administrador/portal/contratacion/delete/{id}',          'Usuarios\Administrador\Portal\contratacionEvaluacionesController@destroy')    ->name('administrador.portal.contratacion.delete');
    //Marco Juridico
    Route::get('administrador/portal/marcoJuridico/index',                  'Usuarios\Administrador\Portal\MarcoJuridicoController@index')                  ->name('administrador.portal.marcoJuridico.index');
    Route::post('administrador/portal/marcoJuridico/create',                'Usuarios\Administrador\Portal\MarcoJuridicoController@store')                  ->name('administrador.portal.marcoJuridico.create');
    Route::put('administrador/portal/marcoJuridico/update',                 'Usuarios\Administrador\Portal\MarcoJuridicoController@update')                 ->name('administrador.portal.marcoJuridico.update');
    Route::delete('administrador/portal/marcoJuridico/delete/{id}',         'Usuarios\Administrador\Portal\MarcoJuridicoController@destroy')                ->name('administrador.portal.marcoJuridico.delete');
    //Capacitación
    Route::get('administrador/portal/capacitacion/index',                   'Usuarios\Administrador\Portal\CapacitacionController@index')                   ->name('administrador.portal.capacitacion.index');
    Route::post('administrador/portal/capacitacion/create',                 'Usuarios\Administrador\Portal\CapacitacionController@store')                   ->name('administrador.portal.capacitacion.create');
    Route::put('administrador/portal/capacitacion/update',                  'Usuarios\Administrador\Portal\CapacitacionController@update')                  ->name('administrador.portal.capacitacion.update');
    Route::delete('administrador/portal/capacitacion/delete/{id}',          'Usuarios\Administrador\Portal\CapacitacionController@destroy')                 ->name('administrador.portal.capacitacion.delete');
    //Aviso de Privacidad
    Route::get('administrador/portal/avisoPrivacidad/index',                'Usuarios\Administrador\Portal\AvisoPrivacidadController@index')                ->name('administrador.portal.avisoPrivacidad.index');
    Route::post('administrador/portal/avisoPrivacidad/create',              'Usuarios\Administrador\Portal\AvisoPrivacidadController@store')                ->name('administrador.portal.avisoPrivacidad.create');
    Route::put('administrador/portal/avisoPrivacidad/update',               'Usuarios\Administrador\Portal\AvisoPrivacidadController@update')               ->name('administrador.portal.avisoPrivacidad.update');
    Route::delete('administrador/portal/avisoPrivacidad/delete/{id}',       'Usuarios\Administrador\Portal\AvisoPrivacidadController@destroy')              ->name('administrador.portal.avisoPrivacidad.delete');
    //Inicio Portal
    Route::get('administrador/portal/index',                                'Usuarios\Administrador\Portal\PortalController@index')             ->name('administrador.portal.inicio.index');
    //Convocatoria
    Route::get('administrador/portal/convocatoria/index',                   'Usuarios\Administrador\Portal\ConvocatoriaController@index')       ->name('administrador.portal.convocatoria.index');
    Route::post('administrador/portal/convocatoria/store',                  'Usuarios\Administrador\Portal\ConvocatoriaController@store')       ->name('administrador.portal.convocatoria.store');
    Route::put('administrador/portal/convocatoria/update',                  'Usuarios\Administrador\Portal\ConvocatoriaController@update')      ->name('administrador.portal.convocatoria.update');
    Route::delete('administrador/portal/convocatoria/destroy/{id}',         'Usuarios\Administrador\Portal\ConvocatoriaController@destroy')     ->name('administrador.portal.convocatoria.destroy');
    //Terminos de Referencia
    Route::get('administrador/portal/terminos-referencia/index',            'Usuarios\Administrador\Portal\TerminosReferenciaController@index')                  ->name('administrador.portal.terminosReferencia.index');
    Route::post('administrador/portal/terminos-referencia/create',          'Usuarios\Administrador\Portal\TerminosReferenciaController@store')                  ->name('administrador.portal.terminosReferencia.create');
    Route::put('administrador/portal/terminos-referencia/update',           'Usuarios\Administrador\Portal\TerminosReferenciaController@update')                 ->name('administrador.portal.terminosReferencia.update');
    Route::delete('administrador/portal/terminos-referencia/delete/{id}',   'Usuarios\Administrador\Portal\TerminosReferenciaController@destroy')                ->name('administrador.portal.terminosReferencia.delete');

    /*=====  End of Rutas para Portal del lado del administrador  ======*/

    /*=========================================================================
=            Seguimiento de los Aspectos Sucepribles de Mejora            =
=========================================================================*/
    Route::get('administrador/home/asm/{ejercicio}',    'Usuarios\Administrador\Home\AsmController@index')     ->name('administrador.home.asm');

    /*=====  End of Seguimiento de los Aspectos Sucepribles de Mejora  ======*/
});


Route::middleware(['auth','dependencia'])->group(function ()
{
    //Envia una notificacion a la instancia del usuario
    Route::get('dependencia/ver/notificacion/{id}',                  'Usuarios\Dependencia\NotificacionesController@verNotificacion')        ->name('notificacion.show');
    Route::get('dependencia/ver/notificaciones',                     'Usuarios\Dependencia\NotificacionesController@index')                  ->name('notificaciones.index');
    //Envia una mensaje a la instancia del usuario
    Route::get('dependencia/ver/mensaje/{id}',                  'Usuarios\Dependencia\MensajesController@verMensaje')->name('mensaje.show');

    Route::get('dependencia/portafolio/home',                        'Usuarios\Dependencia\HomeController@index')                            ->name('dependencia.home');
	/*Ruta para ver los programas a evaluar por ejercicio de cada dependencia*/
	Route::get('dependencia/ejercicio/programas/{ejercicio}',   'Usuarios\Dependencia\HomeController@verProgramas') ->name('dependencia.ejercicio.programas');

    /**
     *
     * Lista de rutas para dar de alta los aspectos Susceptibles de mejora
     *
     */
	Route::get('dependencia/ejercicio/programa/{ejercicio}/{evaluacion}',       'Usuarios\Dependencia\Asm\AsmController@index')                                 ->name('dependencia.ejercicio.programa.asm');
	/*Crear Asm*/
	Route::get('dependencia/ejercicio/crear/programa/{evaluacion}',             'Usuarios\Dependencia\Asm\AsmController@crearAsm')                              ->name('dependencia.ejercicio.programa.asm.crear');
	/*Guardar Asm*/
	Route::post('dependencia/ejercicio/guardar/programa/{evaluacion}/{asm?}',   'Usuarios\Dependencia\Asm\AsmController@guardarAsm')                            ->name('dependencia.ejercicio.programa.asm.guardar');
	/*Editar Asm*/
	Route::get('dependencia/asm/edit{asm}/{evaluacion}',                        'Usuarios\Dependencia\Asm\AsmController@edit')                                  ->name('dependencia.asm.edit');
	/*Editar Asm*/
	Route::put('dependencia/asm/edit/{asm}/{evaluacion}',                       'Usuarios\Dependencia\Asm\AsmController@update')                                ->name('dependencia.asm.update');
	/*Acciones de lod Asm*/
	Route::get('dependencia/programa/asm/acciones/{asm}/{evaluacion}',          'Usuarios\Dependencia\Asm\AccionesController@index')                            ->name('dependencia.programa.asm.acciones.asm');
    /*Acciones de los Detaññes del Asm*/
	Route::get('dependencia/programa/asm/acciones/detalles/{asm}/{evaluacion}', 'Usuarios\Dependencia\Asm\AccionesController@detalles')                         ->name('dependencia.programa.asm.acciones.detalles');

    Route::post('dependencia/programa/asm/acciones/guardar/{asm}',              'Usuarios\Dependencia\Asm\AccionesController@store')                            ->name('dependencia.programa.asm.acciones.guardar');
	/*Rutas para el documento de Trabajo*/
	Route::get('dependencia/programa/documento/trabajo/{id}',                   'Usuarios\Dependencia\Asm\DocumentoTrabajoController@documentoTrabajo')         ->name('dependencia.programa.documento.trabajo');
	/*Avances del documento de Trabajo*/
	Route::get('dependencia/programa/documento/trabajo/avances/{id}',           'Usuarios\Dependencia\Asm\DocumentoTrabajoController@avanceDocumentoTrabajo')   ->name('dependencia.programa.documento.trabajo.avances');
	//Ruta para ver las actividades del documento de trabaj
	Route::get('dependencia/asm/actividades{id}',                               'Usuarios\Dependencia\Asm\DocumentoTrabajoController@verActividades')           ->name('dependencia.asm.actividades');
	/*=======================================
	=            Validacion Asm Dependencia     =
	=========================================*/
    Route::post('dependencia/asm/enviar/revision',          'Usuarios\Dependencia\Asm\AsmController@enviarAsmRevision')     ->name('dependencia.enviar.asm.revision');

	Route::get('dependencia/asm/ver/{asm}/{evaluacion}',    'Usuarios\Dependencia\Asm\AsmController@cargarAsm')             ->name('dependencia.asm.cargar');

    Route::post('dependencia/asm/documento/probatorio/{asm}',          'Usuarios\Dependencia\Asm\AsmController@subirDocumentoProbatorio')     ->name('dependencia.subir.documento.probatorio');

    /*Route::post('dependencia/asm/actividad/avance/{avance}',          'Usuarios\Dependencia\Asm\AsmController@subirAvance')     ->name('dependencia.subir.actividad.avance');*/


    /*=====  End Validacion Asm  ======*/

    /*=============================================
    =        Avance documento Institucional       =
	=============================================*/

    Route::get('dependencia/programa/documento/institucional/{id}',                                                 'Usuarios\Dependencia\Asm\DocumentoInstitucionalController@documentoInstitucional')         ->name('dependencia.programa.documento.institucional');

    Route::get('dependencia/programa/documento/institucional/avances/{id}',                                         'Usuarios\Dependencia\Asm\DocumentoInstitucionalController@avanceDocumentoInstitucional')   ->name('dependencia.programa.documento.institucional.avances');

    Route::get('dependencia/programa/avance/documento/institucional/asm/actividad/avance/{actividad}/{evaluacion}', 'Usuarios\Dependencia\Asm\DocumentoInstitucionalController@verAvance')                      ->name('dependencia.programa.avance.doc.institucional.asm.actividad.avance');

    /*=====  End documento Institucional  ======*/

    /*Ruta para Mostrar los Asm por Aspectos [especifico,institucional]*/
    Route::get('dependencia/programa/clasificacion/aspecto/{evaluacion}/{clasificacion}',                       'Usuarios\Dependencia\Asm\AsmController@asmPorAspecto')             ->name('dependencia.programa.clasificacion.aspecto');
    /*Ruta para ver los avances de las actividades ligadas a los asm de un programa*/
    Route::get('dependencia/programa/asm/actividad/avance/{actividad}/{evaluacion}',                            'Usuarios\Dependencia\Asm\AvanceController@create')                 ->name('dependencia.programa.asm.actividad.avance');
    //Ruta para editar una accion
    Route::put('dependencia/programa/asm/accion/{accion}',                                                      'Usuarios\Dependencia\Asm\AccionesController@update')               ->name('dependencia.programa.asm.acciones.update');

    Route::get('dependencia/programa/avance/documento/trabajo/asm/actividad/avance/{actividad}/{evaluacion}',   'Usuarios\Dependencia\Asm\DocumentoTrabajoController@verAvance')    ->name('dependencia.programa.avance.doc.trabajo.asm.actividad.avance');

    Route::post('dependencia/programa/asm/actividad/avance/guardar/{actividad}',                                'Usuarios\Dependencia\Asm\AvanceController@store')                  ->name('dependencia.programa.asm.actividad.avance.guardar');
    /*Ruta para eliminar los avances de una actividad*/
    Route::delete('asm/actividad/avance/eliminar/{avance}',                                                     'Usuarios\Dependencia\Asm\AvanceController@destroy')                ->name('dependencia.programa.asm.actividad.avance.eliminar');
    //Ruta para editar las correcciones que tiene un avande de una actividad
    Route::put('asm/actividad/avance/editar',                                                                   'Usuarios\Dependencia\Asm\AvanceController@edit')                   ->name('dependencia.programa.asm.actividad.avance.editar');

    /*================================
	=            Mensajes            =
	=================================*/

    Route::get('dependencia/mensajes/index/{solicitud}',                'Usuarios\Dependencia\MensajesController@index')        ->name('dependencia.mensajes.index');

    Route::post('dependencia/mensajes/show',                            'Usuarios\Dependencia\MensajesController@show')         ->name('dependencia.mensajes.show');

    Route::get('dependencia/mensajes/create/{id}/{solicitud}',          'Usuarios\Dependencia\MensajesController@create')       ->name('dependencia.mensajes.create');

    Route::post('dependencia/mensajes/storage/{despacho}/{solicitud}',  'Usuarios\Dependencia\MensajesController@store')        ->name('dependencia.mensajes.store');

    Route::get('dependencia/mensajes/ver/{usuario}/{postula}',          'Usuarios\Dependencia\MensajesController@verMensajes')  ->name('dependencia.mensajes.ver');

    /*=====  End Mensajes  ======*/
});


Route::middleware(['auth', 'despacho', 'verified'])->group(function ()
{
    Route::get('despacho/home/evaluaciones',                            'Usuarios\Despacho\SolicitudesController@verEvaluaciones')                      ->name('despacho.home.evaluaciones');

    Route::get('despacho/home',                                         'Usuarios\Despacho\HomeController@index')                                       ->name('despacho.home');

    Route::get('despacho/solicitudes/index',                            'Usuarios\Despacho\SolicitudesController@index')                                ->name('despacho.solicitudes.index');

    Route::post('despacho/solicitudes/store',                           'Usuarios\Despacho\SolicitudesController@store')                                ->name('despacho.solicitudes.store');

    Route::get('despacho/solicitudes/editar/{id}',                      'Usuarios\Despacho\SolicitudesController@update')                               ->name('despacho.solicitudes.update');

    Route::resource('despacho/logo',                                    'Usuarios\Despacho\LogoController');
    // Route::post('despacho/guardar-logo',                                'Usuarios\Despacho\SolicitudesController@logoStore')                            ->name('despacho.logoStore');
    // Route::put('despacho/editar-logo',                                  'Usuarios\Despacho\SolicitudesController@logoUpdate')                           ->name('despacho.logoUpdate');

    Route::resource('postulaciones',                                    'Usuarios\Despacho\PostulacionesController');

    Route::resource('documentos',                                       'Usuarios\Despacho\DocumentosController');

    Route::resource('documentosEspecificos',                            'Usuarios\Despacho\DocumentosEspecificosController');

    Route::post('despacho/documentos/guardar/{id}',                     'Usuarios\Despacho\DocumentosController@guardarDocumentos')                     ->name('despacho.documentos.guardar');

    Route::post('despacho/documentosespecificos/guardar/{id}',          'Usuarios\Despacho\DocumentosEspecificosController@guardarDocumentos')          ->name('despacho.documentosespecificos.guardar');
    //Guarda los documentos finales de la evaluacion
    Route::post('despacho/documentosesFinales/guardar/{documento}/{postulacion}',           'Usuarios\Despacho\EvaluacionesController@subirDocumentoFinal')                  ->name('despacho.documentoFinales.guardar');

    //Eliminar Documentos Generales
    Route::get('despacho/eliminar/documento/{id}',                      'Usuarios\Despacho\DocumentosController@borrarDocumento')                       ->name('despacho.solicitudes.borrarDocumento');

    //Eliminar documentos Especificos
    Route::get('despacho/eliminar/documentoespecifico/{id}',            'Usuarios\Despacho\DocumentosEspecificosController@borrarDocumentoEspecifico')  ->name('despacho.solicitudes.borrarDocumentoEspecifico');

    //Ruta Para enviar mi solicitud
    Route::get('despacho/enviar/solicitud/{id}',                        'Usuarios\Despacho\SolicitudesController@enviarSolicitud')                      ->name('despacho.solicitudes.enviar');

    //Ruta para ver las evaluaciones aceptadas de cada solicitud
    Route::get('despacho/ver/evaluaciones{id}',                         'Usuarios\Despacho\SolicitudesController@verEvaluacionesAceptadas')             ->name('despacho.evaluaciones.aceptadas');
    //Ruta para cargar el index de los aspectos Susceptibles de mejora que el despacho hace a la dependencia.
    Route::get('despacho/cargar/asm/despacho{evaluacion}',              'Usuarios\Despacho\Asm\AsmController@index')                                    ->name('despacho.asm.recomendados');
    //Ruta para cargar la vista de crear nuevos asm por parte del despacho
    Route::get('despacho/crear/asm/despacho{postula}',                  'Usuarios\Despacho\Asm\AsmController@create')                                   ->name('despacho.asm.crear.despacho');
    //Ruta para guardar los asm del despacho
    Route::post('despacho/guardar/asm/despacho{postula}',               'Usuarios\Despacho\Asm\AsmController@store')                                    ->name('despacho.asm.guardar.despacho');
    //Ruta para editar los asm del despacho
    Route::get('despacho/edit/asm/despacho{id}/{postulacion}',          'Usuarios\Despacho\Asm\AsmController@edit')                                     ->name('despacho.asm.edit.despacho');
    //Ruta para guardar la edicion de los Asm
    Route::put('despacho/actualizar/asm/despacho{id}/{postulacion}',    'Usuarios\Despacho\Asm\AsmController@update')                                   ->name('despacho.asm.actualizar.despacho');

	//Ruta para ver las evaluaciones aceptadas de cada solicitud
	Route::get('despacho/ver/evaluaciones{id}',                         'Usuarios\Despacho\SolicitudesController@verEvaluacionesAceptadas')     ->name('despacho.evaluaciones.aceptadas');
	//Ruta para cargar el index de los aspectos Susceptibles de mejora que el despacho hace a la dependencia.
	Route::get('despacho/cargar/asm/despacho{evaluacion}',              'Usuarios\Despacho\Asm\AsmController@index')                            ->name('despacho.asm.recomendados');
	//Ruta para cargar la vista de crear nuevos asm por parte del despacho
	Route::get('despacho/crear/asm/despacho{postula}',                  'Usuarios\Despacho\Asm\AsmController@create')                           ->name('despacho.asm.crear.despacho');
	//Ruta para guardar los asm del despacho
	Route::post('despacho/guardar/asm/despacho{postula}',               'Usuarios\Despacho\Asm\AsmController@store')                            ->name('despacho.asm.guardar.despacho');
	//Ruta para editar los asm del despacho
	Route::get('despacho/edit/asm/despacho{id}/{postulacion}',          'Usuarios\Despacho\Asm\AsmController@edit')                             ->name('despacho.asm.edit.despacho');
	//Ruta para guardar la edicion de los Asm
	Route::put('despacho/actualizar/asm/despacho{id}/{postulacion}',    'Usuarios\Despacho\Asm\AsmController@update')                           ->name('despacho.asm.actualizar.despacho');
	//Ruta para enviar asm de despacho
	Route::post('despacho/enviar/asm/{postulacion}',                    'Usuarios\Despacho\Asm\AsmController@enviarAsm')                        ->name('despacho.asm.enviar');
	//Ruta para ver la informacion del asm completa
	Route::get('despacho/asm/ver{id}/{postulacion}',                    'Usuarios\Despacho\Asm\AsmController@show')                             ->name('despacho.asm.ver');


    /*================================
	=            Mensajes            =
	=================================*/

    Route::get('despacho/mensajes/index/{solicitud}',                   'Usuarios\Despacho\MensajesController@index')           ->name('despacho.mensajes.index');

    Route::post('despacho/mensajes/show',                               'Usuarios\Despacho\MensajesController@show')            ->name('despacho.mensajes.show');

    Route::get('despacho/mensajes/create/{id}/{solicitud}',             'Usuarios\Despacho\MensajesController@create')          ->name('despacho.mensajes.create');
    //Route::post('despacho/mensajes/store', 'Usuarios\Despacho\MensajesController@store')->name('despacho.mensajes.store');
    Route::post('despacho/mensajes/storage/{dependencia}/{solicitud}',  'Usuarios\Despacho\MensajesController@store')           ->name('despacho.mensajes.store');
    //Route::get('despacho/mensajes/editar/{id}', 'Usuarios\Despacho\MensajesController@update')->name('despacho.mensajes.update');
    Route::get('despacho/enviar/mensajes{id}',                          'Usuarios\Despacho\MensajesController@enviarMensaje')   ->name('despacho.mensajes.enviar');

    Route::get('despacho/mensajes/ver/{usuario}/{postula}',             'Usuarios\Despacho\MensajesController@verMensajes')     ->name('despacho.mensajes.ver');

    /*=====  End Mensajes  ======*/

    //Ruta Api para Obtener los municipios en relacion a su Estado
    Route::get('municipios/{id}',   'Api\ApiController@obtenerMunicipio')   ->name('get.municipios');
    Route::get('estados/{id}',      'Api\ApiController@obtenerEstados')     ->name('get.estados');
});

/*==================================================
=            Rutas para el superusuario            =
==================================================*/
Route::middleware(['auth', 'superusuario'])->group(function ()
{
    /*Crud de usuarios*/
    Route::resource('superusuario/usuarios', 'Usuarios\Superusuario\UsuariosController');
    Route::resource('superusuario/bitacora', 'Usuarios\Superusuario\BitacoraController');
});


/*=====  End of rutas para el superusuario  ======*/
