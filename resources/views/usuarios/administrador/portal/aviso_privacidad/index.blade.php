@extends('usuarios.administrador.layouts.main')
@section('content')
<head>
    {{-- homerMosaico Propio --}}
    <link rel="stylesheet" media="all" href="{{asset('css/hoverMosaico.css')}}">
</head>
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div id="ste" class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Aviso de privacidad</h6>
    </div>
    <div class="card-body">
		<div class="table-responsive">
			<table class="table table-hover text-center">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Documento del aviso</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($aviso as $av)
				<tr>
				    <td class="align-middle"><a href="{{asset('storage/'.$av->documento)}}">{{$av->documento}}</a></td>
					<td class="align-middle">
                        <a href="" target="_blank" data-toggle="modal" data-target="#edit" data-datos="{{$av}}" class="btn btn-warning btn-sm mb-2"><i class="fa fas fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		</div>

	</div>

</div>

@include('usuarios.administrador.portal.aviso_privacidad.edit')

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

        var av = $(e.relatedTarget).data().datos;


        console.log(av);

        $('#av_id')        .val(av.id);
        $('#documentoAV')     .text(av.documento);
        $('#documentoAV')     .val(av.documento);

        console.log(av.id);

    });
</script>
@endsection
