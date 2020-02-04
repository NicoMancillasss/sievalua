@extends('usuarios.administrador.layouts.main')
@section('content')

<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div id="ste" class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Carrusel</h6>
		<div class="dropdown no-arrow">
			<a href="" data-toggle="modal" data-target="#crear" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-plus"></i> Agregar</a>
		</div>
    </div>
    @if ($carrusel->isEmpty())
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">No existen imagenes en el Carrusel</h1>
                <p class="lead">Clic en Agregar para añadir una imagen al Carrusel.</p>
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
					<th scope="col">Link</th>
					<th scope="col">Imagen</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($carrusel as $imagen)
				<tr>
				    <td class="align-middle">{{$imagen->titulo}}</td>
					<td class="align-middle">{{$imagen->descripcion}}</td>
				    <td class="align-middle"><a target="_blank" href="{{$imagen->link}}">{{$imagen->link}}</a></td>
                    <td class="align-middle"><img src="{{asset('storage/'.$imagen->imagen)}}" class="w-25" alt=""></td>
					<td class="align-middle">
					<a href=""  data-toggle="modal" data-target="#edit" data-datos="{{$imagen}}" class="btn btn-warning btn-sm mb-2"><i class="fa fas fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i></a>

					<form method="POST" action="{{ route('administrador.portal.carrusel.delete', $imagen->id) }}" role="form">
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

@include('usuarios.administrador.portal.carrusel.create')
@include('usuarios.administrador.portal.carrusel.edit')

@endsection
@section('script')
<script type="text/javascript">
$(document).on('change','input[type="file"]',function(){
    var fileSize = this.files[0].size;
    if(fileSize > 1000000){
        alert('El archivo no debe superar los 1 MB');
        $('input[type="file"]').val('');
        var tpl = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Holy guacamole!</strong> El archivo no debe superar 1 MB'

        +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> '
        +'</div>';

        $('.contenedor').html(tpl)
        }

		consol.log(($this).width);
    });



    $('#edit').on('show.bs.modal', function(e) {

        var carrusel = $(e.relatedTarget).data().datos;


        console.log(carrusel);

        $('#carrusel_id')       .val(carrusel.id);
        $('#imagenCarrusel')    .text(carrusel.imagen);
        $('#imagenCarrusel')    .val(carrusel.imagen);
        $('#linkImagen')        .text(carrusel.link);
        $('#linkImagen')        .val(carrusel.link);
        $('#descripcionImagen') .text(carrusel.descripcion);
        $('#descripcionImagen') .val(carrusel.descripcion);
        $('#tituloImagen')      .text(carrusel.titulo);
        $('#tituloImagen')      .val(carrusel.titulo);

        console.log(carrusel.imagen);

    });
</script>
<script src="{{ asset('js/dataTable.js')}}"></script>
@endsection
