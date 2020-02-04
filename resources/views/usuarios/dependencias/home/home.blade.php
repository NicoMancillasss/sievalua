@extends('usuarios.dependencias.layouts.main')
@section('content')
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Ejercicios{{-- que tocaron --}}</h6>
		<div class="dropdown no-arrow">

		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
        <div class="row">
            <div class="alert alert-info text-center col-12" role="alert">
                <h4 class="alert-heading">¡Bienvenido!</h4>
                <p>Te mostramos los ejercicios en los cuales estan los programas a los que fuiste seleccionado para evaluar.</p>
                <hr>
                <p class="mb-0">Puedes dar clic en cada uno de los ejercicios mostrados en pantalla para seguir con el proceso. </p>
            </div>
            {{-- <div id="startButton" class="alert alert-info text-center col-1 " href="javascript:void(0);">
                <p
                    class="fas fa-walking fa-3x mt-4"
                    data-toggle="tooltip" data-placement="top" title="Guia de usuario dinamico. Si deceas seguir la guia del proceso completo da clic aqui...">
                </p>
                Guia
            </div> --}}
        </div>


		<table class="table table-hover">
			<thead class="thead-dark">
				<tr class="text-center">
					<th scope="col">Año</th>
					{{--<th scope="col">Estatus</th>--}}
                    <th scope="col">Acciones</th>
                    <th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($ejercicios as $ejercicio)
				<tr class="text-center " >
					<th><span class="badge badge-success">{{$ejercicio->año}}</span> - <span class="badge badge-success">{{$ejercicio->año+1}}</span></th>
                    {{--
                        <th>
						@if($ejercicio->activo==1)
						<span class="badge badge-success">Activo</span>
						@else
						<span class="badge badge-danger">Inactivo</span>
						@endif
					</th>
                        --}}
					<th >
                        <a data-step="1" data-intro="Primer paso dar clic en el los programas el año correspondiente" class="introjs-showElement introjs-relativePosition btn btn-warning btn-sm hvr-box-shadow-outset" href="{{ route('dependencia.ejercicio.programas',$ejercicio->id) }}" >
                            <i class="fas fa-search"></i>
							Ver Programas
						</a>
                    </th>
                    {{-- <th>
                        <a href="{{ route('dependencia.mensajes.index',$ejercicio->id)}}" class="text-center"><i class="text-success fas fa-sms fa-2x"></i></a>
                    </th> --}}
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
