	<div class="border-bottom-danger"></div>
	<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

		<!-- Sidebar Toggle (Topbar) -->
		<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
			<i class="fa fa-bars"></i>
		</button>

	<!--     Topbar Search
		<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
			<div class="input-group">
				<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<button class="btn btn-primary" type="button">
						<i class="fas fa-search fa-sm"></i>
					</button>
				</div>
			</div>
		</form>
	-->
	{{--
		--}}
		<!-- Topbar Navbar -->
		<ul class="navbar-nav ml-auto">


            <!-- Nav Item - Alerts -->
            <li class="nav-item  no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">{{---Auth::user()->cantidad()->count()---}}@isset(Auth::user()->unreadNotifications) {{count(Auth::user()->unreadNotifications)}}@endisset</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Centro de Alertas
                </h6>

                @isset(Auth::user()->unreadNotifications)
					@foreach (Auth::user()->unreadNotifications as $notification)
	               <a class="dropdown-item d-flex align-items-center" href="{{route('administrador.notificacion.show',$notification->id)}}">
							<div class="mr-3">
							<div class="icon-circle bg-{{$notification->data['tipo']}}">
									<i class="fas fa-file-alt text-white"></i>
								</div>
							</div>
							<div>
								<span class="font-weight-bold">{{ $notification->data['titulo'] }}</span>
								<div class="small text-gray-500">{{$notification->created_at->diffForHumans() }}</div>

							</div>
						</a>
            	@endforeach
				@endisset

				{{-- 
					@foreach (Auth::user()->cantidadAlertas() as $alerta)
	                <a class="dropdown-item d-flex align-items-center" href="#">
	                	<div class="mr-3">
	                		<div class="icon-circle bg-primary">
	                			<i class="fas fa-file-alt text-white"></i>
	                		</div>
	                	</div>
	                	<div>
	                		<div class="small text-gray-500">December 12, 2019</div>
	                		<span class="font-weight-bold">{{ $alerta->mensaje }}</span>
	                	</div>
	                </a>
            	@endforeach
					--}}

                <a class="dropdown-item text-center small text-gray-500" href="{{route('administrador.notificaciones.index')}}">Ver todas las Notificacones</a>
              </div>
            </li>




		<!-- Nav Item - User Information -->
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle hvr-icon-grow" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="mr-2 d-none d-lg-inline text-secondary"><i class="fas fa-user fa-lg mr-2 hvr-icon"></i>  {{ Auth::user()->nombre }}</span>
			</a>
			<!-- Dropdown - User Information -->
			<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
				<!--
					<a class="dropdown-item" href="#">
						<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
						Profile
					</a>
					<a class="dropdown-item" href="#">
						<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
						Settings
					</a>
					<a class="dropdown-item" href="#">
						<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
						Activity Log
					</a>
					<div class="dropdown-divider"></div>
				-->

				<a class="dropdown-item hvr-icon-wobble-horizontal text-secondary" href="" data-toggle="modal" data-target="#logoutModal">
					<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 hvr-icon"></i>
					Salir
				</a>
			</div>
		</li>
	</ul>
</nav>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">¿Seguro que quieres salir?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Selecciona "Salir" sí quieres cerrar sesión.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary hvr-box-shadow-outset" type="button" data-dismiss="modal">Cancelar</button>
				<a class="btn btn-primary" href="{{ route('logout') }}"
				onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">
				{{ __('Salir') }}
			</a>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				@csrf
			</form></a>
		</div>
	</div>
</div>
</div>
