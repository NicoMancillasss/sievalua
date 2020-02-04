@extends('usuarios.administrador.layouts.main')
@section('content')
<head>
    {{-- homerMosaico Propio --}}
    <link rel="stylesheet" media="all" href="{{asset('css/hoverMosaico.css')}}">
</head>
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div id="ste" class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Marco Juridico</h6>
		<div class="dropdown no-arrow">
			<a href="" data-toggle="modal" data-target="#crear" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-plus"></i> Agregar</a>
		</div>
    </div>

    @if ($marcoJuridico->isEmpty())
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">No existen Marcos Juridicos Guardados</h1>
            <p class="lead">Clic en Agregar para añadir un Marco Juridico.</p>
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
				@foreach($marcoJuridico as $mj)
				<tr>
				    <td class="align-middle">{{$mj->titulo}}</td>
					<td class="align-middle">{{$mj->descripcion}}</td>
                    <td class="align-middle"><a href="{{asset('storage/'.$mj->documento)}}" target="_blank" class="w-25" alt="">{{$mj->titulo}}</a></td>
					<td class="align-middle">
					<a href=""  data-toggle="modal" data-target="#edit" data-datos="{{$mj}}" class="btn btn-warning btn-sm mb-2"><i class="fa fas fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i></a>

					<form method="POST" action="{{ route('administrador.portal.marcoJuridico.delete', $mj->id) }}" role="form">
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

@include('usuarios.administrador.portal.marco_juridico.create')
@include('usuarios.administrador.portal.marco_juridico.edit')

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

        var mj = $(e.relatedTarget).data().datos;


        console.log(mj);

        $('#mj_id')        .val(mj.id);
        $('#documentoMJ')  .text(mj.documento);
        $('#documentoMJ')  .val(mj.documento);
        $('#descripcionMJ').text(mj.descripcion);
        $('#descripcionMJ').val(mj.descripcion);
        $('#tituloMJ')     .text(mj.titulo);
        $('#tituloMJ')     .val(mj.titulo);

        console.log(mj.id);

    });
</script>
<script src="{{ asset('js/dataTable.js')}}"></script>
@endsection
