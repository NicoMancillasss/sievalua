@extends('usuarios.administrador.layouts.main')
@section('content')
<head>
    {{-- homerMosaico Propio --}}
    <link rel="stylesheet" media="all" href="{{asset('css/hoverMosaico.css')}}">
</head>
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div id="ste" class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Sitios de Interes</h6>
		<div class="dropdown no-arrow">
			<a href="" data-toggle="modal" data-target="#crear" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-plus"></i> Agregar</a>
		</div>
    </div>

    @if ($si->isEmpty())
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">No existen Sitios de Interes Guardados</h1>
            <p class="lead">Clic en Agregar para añadir un Sitio de Interes.</p>
        </div>
    </div>
    @else
    <div class="row ">
        @foreach ($si as $imagen)
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="container ">
                    <img src="{{asset('storage/'.$imagen->imagen)}}" alt="{{$imagen->nombre}}" class="image img-thumbnail" style="width:100%">
                    <div class="middle">
                        <div class="text">{{$imagen->nombre}}</div>
                        <div class="text">{{$imagen->link}}</div>
                        <form method="POST" action="{{ route('administrador.portal.sitiosInteres.delete', $imagen->id) }}" role="form">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm mt-2" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fa fa-fw fa-trash"></i></button>
                        </form>
                        <a href=""  data-toggle="modal" data-target="#edit" data-datos="{{$imagen}}" class="btn btn-warning btn-sm m-2">
                            <i class="fa fa-fw fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
                        </a> <br>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endif


</div>

@include('usuarios.administrador.portal.sitios_interes.create')
@include('usuarios.administrador.portal.sitios_interes.edit')

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
        });

    $('#edit').on('show.bs.modal', function(e) {

        var si = $(e.relatedTarget).data().datos;


        console.log(si);

        $('#si_id')        .val(si.id);
        $('#imagenSI')     .text(si.imagen);
        $('#imagenSI')     .val(si.imagen);
        $('#linkSI')       .text(si.link);
        $('#linkSI')       .val(si.link);
        $('#nombreSI')     .text(si.nombre);
        $('#nombreSI')     .val(si.nombre);

        console.log(si.id);

    });
</script>

@endsection
