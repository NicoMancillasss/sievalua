@if (Route::currentRouteNamed('administrador.portal.carrusel.index'))
    show active
@elseif(Route::currentRouteNamed('administrador.portal.convocatoria.index'))
    show active
@elseif(Route::currentRouteNamed('administrador.portal.mosaicos.index'))
    show active
@elseif(Route::currentRouteNamed('administrador.portal.sitiosInteres.index'))
    show active
@elseif(Route::currentRouteNamed('administrador.portal.programaAnual.index'))
    show active
@elseif(Route::currentRouteNamed('administrador.portal.totalEvaluaciones.index'))
    show active
@elseif(Route::currentRouteNamed('administrador.portal.sistemaEstatal.index'))
    show active
@elseif(Route::currentRouteNamed('administrador.portal.contratacion.index'))
    show active
@elseif(Route::currentRouteNamed('administrador.portal.marcoJuridico.index'))
    show active
@elseif(Route::currentRouteNamed('administrador.portal.capacitacion.index'))
    show active
@elseif(Route::currentRouteNamed('administrador.portal.avisoPrivacidad.index'))
    show active
@elseif(Route::currentRouteNamed('administrador.portal.terminosReferencia.index'))
    show active
@endif
