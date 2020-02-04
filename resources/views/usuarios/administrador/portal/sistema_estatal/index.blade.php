@extends('usuarios.administrador.layouts.main')
@section('content')
<head>
    {{-- homerMosaico Propio --}}
    <link rel="stylesheet" media="all" href="{{asset('css/hoverMosaico.css')}}">
</head>
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div id="ste" class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Sistema Estatal de Evaluación</h6>
		<div class="dropdown no-arrow">
			<a href="" data-toggle="modal" data-target="#crear" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-plus"></i> Agregar</a>
		</div>
    </div>

    @if ($se->isEmpty())
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">No existen Sistema Estatal de Evaluación Guardados</h1>
            <p class="lead">Clic en Agregar para añadir un Sistema Estatal de Evaluación.</p>
        </div>
    </div>
    @else
    <div class="card-body">
		<div class="table-responsive">
			<table class="table table-hover text-center">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Link</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($se as $sse)
				<tr>
				    <td class="align-middle">{{$sse->nombre}}</td>
					<td class="align-middle"><a href="{{$sse->link}}">{{$sse->link}}</a></td>
					<td class="align-middle">
					<a href=""  data-toggle="modal" data-target="#edit" data-datos="{{$sse}}" class="btn btn-warning btn-sm mb-2"><i class="fa fas fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i></a>

					<form method="POST" action="{{ route('administrador.portal.sistemaEstatal.delete', $sse->id) }}" role="form">
						@csrf
						@method('delete')
						<button type="submit" class="btn btn-danger btn-sm " data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fa fas fa-trash"></i></button>
					</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		</div>

	</div>
    @endif


</div>

@include('usuarios.administrador.portal.sistema_estatal.create')
@include('usuarios.administrador.portal.sistema_estatal.edit')

@endsection
@section('script')
<script type="text/javascript">

    $('#edit').on('show.bs.modal', function(e) {

        var se = $(e.relatedTarget).data().datos;


        console.log(se);

        $('#se_id')        .val(se.id);
        $('#linkSE')       .text(se.link);
        $('#linkSE')       .val(se.link);
        $('#nombreSE')     .text(se.nombre);
        $('#nombreSE')     .val(se.nombre);

        console.log(se.id);

    });
</script>
<script src="{{ asset('js/dataTable.js')}}"></script>
@endsection
