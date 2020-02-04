@if(Route::currentRouteNamed('administrador.asm.ejercicios'))
    show active
@elseif(Route::currentRouteNamed('administrador.asm.validar.ejercicios'))
    show active
@elseif(Route::currentRouteNamed('temas.index'))
    show active
@elseif(Route::currentRouteNamed('aspectos.index'))
    show active
@elseif(Route::currentRouteNamed('acciones.index'))
    show active
@elseif(Route::currentRouteNamed('prioridades.index'))
    show active
@elseif(Route::currentRouteNamed('actores.index'))
    show active
@endif
