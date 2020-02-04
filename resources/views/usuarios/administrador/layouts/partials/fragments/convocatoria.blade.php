@if (Route::currentRouteNamed('administrador.ver.solicitudes.ejercicios'))
    show active
@elseif(Route::currentRouteNamed('ejercicios.index'))
    show active
@elseif(Route::currentRouteNamed('evaluaciones.index'))
    show active
@elseif(Route::currentRouteNamed('programas.index'))
    show active
@elseif(Route::currentRouteNamed('tiposEvaluaciones.index'))
    show active
@elseif(Route::currentRouteNamed('catalogoDocumentos.index'))
    show active
@elseif(Route::currentRouteNamed('tiposArchivos.index'))
    show active
@endif
