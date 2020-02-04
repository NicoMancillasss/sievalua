@extends('usuarios.administrador.layouts.main')
@section('content')
<head>
    {{-- homerMosaico Propio --}}
    <link rel="stylesheet" media="all" href="{{asset('css/hoverMosaico.css')}}">
</head>
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div id="ste" class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Términos de Referencia</h6>
		<div class="dropdown no-arrow">
			<a href="" data-toggle="modal" data-target="#crear" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-plus"></i> Agregar</a>
		</div>
    </div>

    @if ($terminosR->isEmpty())
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">No existen Términos de Referencia Guardados</h1>
            <p class="lead">Clic en Agregar para añadir un Términos de Referencia.</p>
        </div>
    </div>
    @else
    <div class="card-body">
		<div class="table-responsive">
			<table class="table table-hover text-center">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Descripción</th>
					<th scope="col">Documento</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($terminosR as $tr)
				<tr>
				    <td class="align-middle">{{$tr->nombre}}</td>
					<td class="align-middle">{{$tr->descripcion}}</td>
                    <td class="align-middle"><a href="{{asset('storage/'.$tr->documento)}}" target="_blank" class="w-25" alt="">{{$tr->nombre}}</a></td>
					<td class="align-middle">
					<a href=""  data-toggle="modal" data-target="#edit" data-datos="{{$tr}}" class="btn btn-warning btn-sm mb-2"><i class="fa fas fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i></a>

					<form method="POST" action="{{ route('administrador.portal.terminosReferencia.delete', $tr->id) }}" role="form">
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

@include('usuarios.administrador.portal.terminos_referencia.create')
@include('usuarios.administrador.portal.terminos_referencia.edit')

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

        var tr = $(e.relatedTarget).data().datos;


        console.log(tr);

        $('#tr_id')        .val(tr.id);
        $('#documentotr')  .text(tr.documento);
        $('#documentotr')  .val(tr.documento);
        $('#descripciontr').text(tr.descripcion);
        $('#descripciontr').val(tr.descripcion);
        $('#titulotr')     .text(tr.titulo);
        $('#titulotr')     .val(tr.titulo);

        console.log(tr.id);

    });
</script>
<script src="{{ asset('js/dataTable.js')}}"></script>
@endsection
