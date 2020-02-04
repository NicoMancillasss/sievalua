 <!-- Sidebar -->
 <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion " id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
    <div class="sidebar-brand-icon">
    </div>
    <div class="sidebar-brand-text mx-3">Dependencia</div>
  </a>

    {{--
        <form action="{{ route('dependencia.cambiar.ejercicio') }}" method="POST">
            @method('POST')
            @csrf
            <div class="form-group">
            <select class="form-control"  onchange="this.form.submit();" name="ejercicio">

                @foreach ($ejercicios as $ejercicio)
                <option value="">Seleccione Una Opción</option>
                <option value="{{$ejercicio->id}}">{{$ejercicio->año}}-{{$ejercicio->año+1}}</option>
                @endforeach
            </select>
            </div>
        </form>
    --}}

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link hvr-icon-pulse" href="{{ route('dependencia.home') }}">
            <i class="fas fa-home hvr-icon"></i>
            <span>Inicio</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

      <!-- Heading
      <div class="sidebar-heading">
        Interface
      </div>
    -->

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item @yield('link')">
      <a class="nav-link collapsed hvr-icon-grow-rotate" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-clipboard-list hvr-icon"></i>
        <span>Administración</span>
      </a>
      <div id="collapseTwo" class="collapse @yield('status')" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Administracion:</h6>
          <a class="collapse-item @yield('link')" href="{{ route('dependencia.home') }}">Portafolio</a>

        </div>
      </div>
    </li>

      <!-- Nav Item - Utilities Collapse Menu
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>
    -->
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
      {{-- <div class="sidebar-heading">
        Addons
      </div> --}}

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline hvr-icon-buzz-out">
        <button class="rounded-circle border-0 hvr-icon" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
