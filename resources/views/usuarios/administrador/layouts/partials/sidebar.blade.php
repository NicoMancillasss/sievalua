 <!-- Sidebar -->
    <ul class="navbar-nav bg-dark sidebar @yield('hidesidebar') sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
        </div>
        <div class="sidebar-brand-text mx-3">Administrador</div>
      </a>


      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item ">
        <a class="nav-link  hvr-icon-pulse" href="{{route('administrador.home')}}">
          <i class="fas fa-home hvr-icon"></i>
          <span>Inicio</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Heading
      <div class="sidebar-heading">
        Interface
      </div>-->

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item @include('usuarios.administrador.layouts.partials.fragments.convocatoria')">
            <a class="nav-link collapsed hvr-icon-grow-rotate" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-clipboard-list hvr-icon"></i>
            <span>Convocatoria</span>
            </a>
            <div id="collapseTwo" class="collapse @include('usuarios.administrador.layouts.partials.fragments.convocatoria')" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Administración:</h6>
                <a class="hvr-underline-from-left collapse-item     {{ Route::currentRouteNamed('administrador.ver.solicitudes.ejercicios') ? 'active' : ''}}" href="{{route('administrador.ver.solicitudes.ejercicios')}}">Solicitudes</a>
                @if (Auth::user()->perfil->id!=5)
                    <a class="hvr-underline-from-left collapse-item     {{ Route::currentRouteNamed('ejercicios.index') ? 'active' : ''}}"          href="{{route('ejercicios.index')}}">Ejercicios</a>
                    <a class="hvr-underline-from-left collapse-item     {{ Route::currentRouteNamed('evaluaciones.index') ? 'active' : ''}}"        href="{{route('evaluaciones.index')}}">Evaluaciones</a>
                    <a class="hvr-underline-from-left collapse-item     {{ Route::currentRouteNamed('programas.index') ? 'active' : ''}}"           href="{{route('programas.index')}}">Programas</a>
                    <a class="hvr-underline-from-left collapse-item     {{ Route::currentRouteNamed('tiposEvaluaciones.index') ? 'active' : ''}}"   href="{{route('tiposEvaluaciones.index')}}">Tipos de Evaluación</a>
                    <a class="hvr-underline-from-left collapse-item     {{ Route::currentRouteNamed('catalogoDocumentos.index') ? 'active' : ''}}"  href="{{route('catalogoDocumentos.index')}}">Documentos</a>
                    <a class="hvr-underline-fr om-left collapse-item    {{ Route::currentRouteNamed('tiposArchivos.index') ? 'active' : ''}}"       href="{{route('tiposArchivos.index')}}">Tipos de Archivos</a>
                @endif

            </div>
            </div>
        </li>

        <hr class="sidebar-divider my-0">
        <li class="nav-item @include('usuarios.administrador.layouts.partials.fragments.asm')">
            <a class="nav-link collapsed hvr-icon-bounce" href="#" data-toggle="collapse" data-target="#collapseTh" aria-expanded="true" aria-controls="collapseTh">
            <i class="fas fa-chart-pie hvr-icon"></i>
            <span>ASM </span>
            @if($globalasm->count()>0)
            <span class="badge badge-danger">{{$globalasm->count()}} Nuevos</span>
            @endif
            </a>
            <div id="collapseTh" class="collapse @include('usuarios.administrador.layouts.partials.fragments.asm')" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Administración:</h6>
                <a class="hvr-underline-from-left collapse-item {{ Route::currentRouteNamed('administrador.asm.ejercicios') ? 'active' : ''}}"            href="{{route('administrador.asm.ejercicios')}}">Hallazgos Asm</a>
                <a class="hvr-underline-from-left collapse-item {{ Route::currentRouteNamed('administrador.asm.validar.ejercicios') ? 'active' : ''}}"    href="{{route('administrador.asm.validar.ejercicios')}}">Validar Asm @if($globalasm->count()>0)
                    <span class="badge badge-danger">{{$globalasm->count()}} Nuevos</span>
                    @endif
                    </a>
                    @if (Auth::user()->perfil->id!=5)
                    <a class="hvr-underline-from-left collapse-item {{ Route::currentRouteNamed('temas.index') ? 'active' : ''}}"         href="{{route('temas.index')}}">Temas</a>
                    <a class="hvr-underline-from-left collapse-item {{ Route::currentRouteNamed('aspectos.index') ? 'active' : ''}}"      href="{{route('aspectos.index')}}">Aspectos</a>
                    <a class="hvr-underline-from-left collapse-item {{ Route::currentRouteNamed('acciones.index') ? 'active' : ''}}"      href="{{route('acciones.index')}}">Acciones</a>
                    <a class="hvr-underline-from-left collapse-item {{ Route::currentRouteNamed('prioridades.index') ? 'active' : ''}}"   href="{{route('prioridades.index')}}">Prioridades</a>
                    <a class="hvr-underline-from-left collapse-item {{ Route::currentRouteNamed('actores.index') ? 'active' : ''}}"       href="{{route('actores.index')}}">Actores</a>
                @endif
            </div>
            </div>
        </li>
        @if (Auth::user()->perfil->id!=5)
            <li class="nav-item @include('usuarios.administrador.layouts.partials.fragments.portal')">
                <a class="nav-link collapsed hvr-icon-buzz" href="#" data-toggle="collapse" data-target="#collapsePort" aria-expanded="true" aria-controls="collapsePort">
                <i class="fas fa-chalkboard-teacher hvr-icon"></i>
                <span>Portal</span>
                </a>
                <div id="collapsePort" class="collapse @include('usuarios.administrador.layouts.partials.fragments.portal')" aria-labelledby="headingPort" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Administración:</h6>
                        <a class="hvr-underline-from-left collapse-item     {{ Route::currentRouteNamed('administrador.portal.carrusel.index') ? 'active' : ''}}"                   href="{{route('administrador.portal.carrusel.index')}}">Carrusel/Banner</a>
                        <a class="hvr-underline-from-left collapse-item     {{ Route::currentRouteNamed('administrador.portal.sitiosInteres.index') ? 'active' : ''}}"              href="{{route('administrador.portal.sitiosInteres.index')}}">Sitios de Interes</a>
                        <a class="hvr-underline-from-left collapse-item     {{ Route::currentRouteNamed('administrador.portal.convocatoria.index') ? 'active' : ''}}"               href="{{route('administrador.portal.convocatoria.index')}}">Convocatoria</a>
                        <a class="hvr-underline-from-left collapse-item     {{ Route::currentRouteNamed('administrador.portal.mosaicos.index') ? 'active' : ''}}"                   href="{{route('administrador.portal.mosaicos.index')}}">Imagenes Mosaico</a>
                        <a class="hvr-underline-from-left collapse-item     {{ Route::currentRouteNamed('administrador.portal.programaAnual.index') ? 'active' : ''}}"              href="{{route('administrador.portal.programaAnual.index')}}">Programa Anual</a>
                        <a class="hvr-underline-from-left collapse-item     {{ Route::currentRouteNamed('administrador.portal.totalEvaluaciones.index') ? 'active' : ''}}"          href="{{route('administrador.portal.totalEvaluaciones.index')}}">Total de Evaluaciones</a>
                        <a class="hvr-underline-from-left collapse-item     {{ Route::currentRouteNamed('administrador.portal.sistemaEstatal.index') ? 'active' : ''}}"             href="{{route('administrador.portal.sistemaEstatal.index')}}">Sistema Estatal de Evaluación</a>
                        <a class="hvr-underline-from-left collapse-item     {{ Route::currentRouteNamed('administrador.portal.contratacion.index') ? 'active' : ''}}"               href="{{route('administrador.portal.contratacion.index')}}">Contratación de evaluaciones</a>
                        <a class="hvr-underline-from-left collapse-item     {{ Route::currentRouteNamed('administrador.portal.marcoJuridico.index') ? 'active' : ''}}"              href="{{route('administrador.portal.marcoJuridico.index')}}">Marco Juridico</a>
                        <a class="hvr-underline-from-left collapse-item     {{ Route::currentRouteNamed('administrador.portal.capacitacion.index') ? 'active' : ''}}"               href="{{route('administrador.portal.capacitacion.index')}}">Capacitación</a>
                        <a class="hvr-underline-from-left collapse-item     {{ Route::currentRouteNamed('administrador.portal.terminosReferencia.index') ? 'active' : ''}}"         href="{{route('administrador.portal.terminosReferencia.index')}}">Terminos de Referencia</a>
                </div>
                </div>
            </li>
        @endif

        @if (Auth::user()->perfil->id==1)
            <li class="nav-item">
            <a class="nav-link collapsed hvr-icon-pulse-grow" href="#" data-toggle="collapse" data-target="#collapsethree" aria-expanded="true" aria-controls="collapsethree">
            <i class="fas fa-user-tie hvr-icon"></i>
            <span>Superusario</span>
            </a>
            <div id="collapsethree" class="collapse @include('usuarios.administrador.layouts.partials.fragments.superuser') " aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Administración:</h6>
                <a class="hvr-underline-from-left collapse-item {{ Route::currentRouteNamed('usuarios.index') ? 'active' : ''}} " href="{{ route('usuarios.index') }}">Usuarios</a>
                <a class="hvr-underline-from-left collapse-item {{ Route::currentRouteNamed('bitacora.index') ? 'active' : ''}} " href="{{ route('bitacora.index') }}">Bitacora</a>
            </div>
            </div>

        </li>
        @endif

        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline hvr-icon-buzz-out">
            <button class="rounded-circle border-0 hvr-icon" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
