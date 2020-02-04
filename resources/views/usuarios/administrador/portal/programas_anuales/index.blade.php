@extends('usuarios.administrador.layouts.main')
@section('content')
<head>
    {{-- homerMosaico Propio
    <link rel="stylesheet" media="all" href="{{asset('css/hoverMosaico.css')}}">--}}
</head>
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div id="ste" class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Programa Anual</h6>
		<div class="dropdown no-arrow">
			<a href="" data-toggle="modal" data-target="#crear" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-plus"></i> Agregar</a>
		</div>
    </div>

    @if ($programas->isEmpty())
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">No existen Programas Anuales</h1>
            <p class="lead">Clic en Agregar un programa anual</p>
        </div>
    </div>
    @else
    <div class="card-body">
		<div class="table-responsive">
			<table class="table table-hover text-center">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Titulo</th>
					<th scope="col">Descripción</th>
					<th scope="col">Documento</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($programas as $programa)
				<tr>
				    <td class="align-middle">{{$programa->titulo}}</td>
					<td class="align-middle">{{$programa->descripcion}}</td>
                    <td class="align-middle"><a target="_blank" href="{{asset('storage/'.$programa->documento)}}" class="w-25" alt="">{{$programa->titulo}}</a></td>
					<td class="align-middle">
					<a href=""  data-toggle="modal" data-target="#edit" data-datos="{{$programa}}" class="btn btn-warning btn-sm mb-2"><i class="fa fas fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i></a>

					<form method="POST" action="{{ route('administrador.portal.programaAnual.delete', $programa->id) }}" role="form">
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

@include('usuarios.administrador.portal.programas_anuales.create')
@include('usuarios.administrador.portal.programas_anuales.edit')

@endsection
@section('script')
<script type="text/javascript">
    $(document).on('change','input[type="file"]',function(){
        var fileSize = this.files[0].size;
        if(fileSize > 5097152){
            alert('El archivo no debe superar los 5 MB');
            $('input[type="file"]').val('');
            var tpl = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Holy guacamole!</strong> El archivo no debe superar 5 MB'

            +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> '
            +'</div>';

            $('.contenedor').html(tpl)
            }
        });

    $('#edit').on('show.bs.modal', function(e) {

        var pa = $(e.relatedTarget).data().datos;


        console.log(pa);

        $('#pa_id')         .val(pa.id);
        $('#documentoPA')   .text(pa.documento);
        $('#documentoPA')   .val(pa.documento);
        $('#descripcionPA') .text(pa.descripcion);
        $('#descripcionPA') .val(pa.descripcion);
        $('#tituloPA')      .text(pa.titulo);
        $('#tituloPA')      .val(pa.titulo);

        console.log(pa.id);

    });
</script>
<script src="{{ asset('js/dataTable.js')}}"></script>
@endsection
