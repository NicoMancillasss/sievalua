@if (Route::currentRouteNamed('usuarios.index'))
    show active
@elseif(Route::currentRouteNamed('bitacora.index'))
    show active
@endif
