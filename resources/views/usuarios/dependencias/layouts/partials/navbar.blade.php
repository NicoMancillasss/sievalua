	<div class="border-bottom-danger"></div>
	<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

		<!-- Sidebar Toggle (Topbar) -->
		<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
			<i class="fa fa-bars"></i>
		</button>

		<!-- Topbar Search
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

		<!-- Topbar Navbar -->
		<ul class="navbar-nav ml-auto">

			<!-- Nav Item - Search Dropdown (Visible Only XS)
			<li class="nav-item dropdown no-arrow d-sm-none">
				<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-search fa-fw"></i>
				</a>
				 -->
				<!-- Dropdown - Messages 				<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
					<form class="form-inline mr-auto w-100 navbar-search">
						<div class="input-group">
							<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<button class="btn btn-primary" type="button">
									<i class="fas fa-search fa-sm"></i>
								</button>
							</div>
						</div>
					</form>
				</div>
			</li>
			-->
			<!-- Nav Item - Alerts -->
            <li class="nav-item  no-arrow mx-1 ">
                <a class="nav-link dropdown-toggle {{ count(Auth::user()->unreadNotifications) > 0? 'shake-slow shake-constant shake-constant--hover' : ''}}" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">{{--Auth::user()->cantidad()->count()--}} {{count(Auth::user()->unreadNotifications)}}</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in " aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Centro de notificaciones
                </h6>
                
                @foreach (Auth::user()->unreadNotifications as $notification)
	                 <a class="dropdown-item d-flex align-items-center" href="{{route('notificacion.show',$notification->id)}}">
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
				
				{{--
				@isset(Auth::user()->alertas)
					@foreach (Auth::user()->alertas->where('visto',0) as $alerta)
						<a class="dropdown-item d-flex align-items-center" href="{{route('notificacion.show',$alerta->id)}}">
							<div class="mr-3">
								<div class="icon-circle bg-primary">
									<i class="fas fa-file-alt text-white"></i>
								</div>
							</div>
							<div>
								<span class="font-weight-bold">{{ $alerta->titulo }}</span>
							<div class="small text-gray-500">{{$alerta->created_at->diffForHumans()}}</div>

							</div>
						</a>
            		@endforeach
				@endisset --}}

                <a class="dropdown-item text-center small text-gray-500" href="{{route('notificaciones.index')}}">Ver todas las Alertas</a>
              </div>
            </li>



			<li class="nav-item dropdown no-arrow mx-1">
				<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-envelope fa-fw"></i>

					<span class="badge badge-danger badge-counter">
                        @isset( Auth::user()->mensaje ) {{Auth::user()->mensaje->cantidadMensajes()->count()}}    @endisset
                    </span>
				</a>

				<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated-grow-in" aria-labelledby="messagesDropdown">
					<h6 class="dropdown-header">
						Centro de Mensajes
                    </h6>

                    @if (isset(Auth::user()->mensaje))
                        @foreach (Auth::user()->mensaje->cantidadMensajes() as $mensaje)
                            <a class="dropdown-item d-flex align-items-center" href="{{route('mensaje.show',$mensaje->id)}}">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="font-weight-bold">{{$mensaje->txt_solicitud}}</span>
                                <div class="small text-gray-500">{{$mensaje->created_at->diffForHumans()}}</div>

                                </div>
                            </a>
                        @endforeach
                    @endif
					</a>
					<a class="dropdown-item text-center small text-gray-500" href="#">Leer Mas Mensajes</a>
				</div>
			</li>

			<div class="topbar-divider d-none d-sm-block"></div>

			<!-- Nav Item - User Information -->
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle hvr-icon-grow" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="mr-2 d-none d-lg-inline text-gray-600 small"><i class="fas fa-user fa-lg mr-2 hvr-icon"></i>  {{ Auth::user()->dependencia->nombre }}</span>
					{{-- <img class="img-profile rounded-circle" src="https://img.icons8.com/color/48/000000/anonymous-mask.png"> --}}
				</a>
				<!-- Dropdown - User Information -->
				<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
					<a class="dropdown-item hvr-icon-wobble-horizontal" href="" data-toggle="modal" data-target="#logoutModal">
						<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 hvr-icon text-gray-400"></i>
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
