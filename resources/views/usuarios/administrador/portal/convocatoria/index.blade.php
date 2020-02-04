@extends('usuarios.administrador.layouts.main')
@section('status','show')
@section('content')



<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Portal Convocatoria</h6>
		<div class="dropdown no-arrow">
			<a href=""data-toggle="modal" data-target="#crear" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-plus"></i> Crear</a>
		</div>
    </div>

    @if ($convocatorias->isEmpty())
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">No existen convocatorias</h1>
            {{-- <p class="lead">Clic en Agregar para añadir una imagen al Mosaico.</p> --}}
        </div>
    </div>
    @else
	<!-- Card Body -->
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-hover text-center">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Ejercicio</th>
					<th scope="col">Nombre Convocatoria</th>
					<th scope="col">Imagen Convocatoria</th>
					<th scope="col">Imagen Resultados Convocatoria</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($convocatorias as $convocatoria)
				<tr>
				    <td>{{$convocatoria->ejercicio->año}}</td>
					<td><span class="badge badge-success">{{$convocatoria->nombre}}</span></td>
				<td><a target="_blank" href="{{asset('storage/'.$convocatoria->imagenConvocatoria)}}"> {{$convocatoria->imagenConvocatoria != '0 '? $convocatoria->imagenConvocatoria : '' }}</a></td>
					<td><a target="_blank" href="{{asset('storage/'.$convocatoria->imagenResultado)}}"> {{$convocatoria->imagenResultado != '0' ? $convocatoria->imagenResultado : '' }}</a></td>
					<td>
					<a href=""  data-toggle="modal" data-target="#edit" data-datos="{{$convocatoria}}" class="btn btn-warning btn-sm mb-2" ><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Editar" aria-hidden="true"></i></a>

					<form method="POST" action="{{ route('administrador.portal.convocatoria.destroy', $convocatoria->id) }}" role="form">
						@csrf
						@method('delete')
						<button type="submit" class="btn btn-danger btn-sm " data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
@include('usuarios.administrador.portal.convocatoria.create')
@include('usuarios.administrador.portal.convocatoria.edit')
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
		var convocatoria = $(e.relatedTarget).data().datos;
		$('#edit_ejercicio option[value="' +convocatoria.ejercicio_id  +'"]').prop("selected", true);
		$('#edit_nombre').val(convocatoria.nombre);
		$('#convocatoria_id').val(convocatoria.id);
		$('.imagenConvocatoria').text(convocatoria.imagenConvocatoria);
		$('.imagenResultado').text(convocatoria.imagenResultado);

	});

</script>
<script src="{{ asset('js/dataTable.js')}}"></script>
@endsection
