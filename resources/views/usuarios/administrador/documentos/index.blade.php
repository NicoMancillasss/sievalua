@extends('usuarios.administrador.layouts.main')
@section('status','show')
@section('link5','active')
@section('content')
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-dark">Documentos</h6>
        <div class="dropdown no-arrow">
            <a href="" data-toggle="modal" data-target="#crear" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-plus"></i> Crear</a>
        </div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		<table class="table table-hover table-responsive d-md-table w-100 d-block">
			<thead class="thead-dark">
				<tr class="text-center">

                    <th class="align-middle" scope="col">Nombre Documento</th>
                    <th class="align-middle" scope="col">Descripción Documento</th>
                    <th class="align-middle" scope="col">Tipo de Documento</th>
					<th class="align-middle" scope="col">Acciones</th>

				</tr>
			</thead>
			<tbody>
            {{-- @foreach ($evaluaciones as $year =>$evaluacion)
                <tr>
                    <td>
                        <span class="badge badge-danger">{{$evaluacion[0]->ejercicio->año}}</span>
                    </td>
                </tr>
            --}}
				@foreach ($documentos as $documento)
					<tr class="text-center">
                        <td class="align-middle">{{$documento->nombre}}</td>
                        <td class="align-middle">{{$documento->descripcion}}</td>
                        <td class="align-middle">{{$documento->tipo_documento}}</td>
                        {{--<td>{{$documento->ejercicio->año}}</td>--}}
					<td>
						<a href="#" data-toggle="modal" data-target="#editar"  data-datos="{{$documento}}" class="btn btn-warning btn-sm hvr-box-shadow-outset"><i class="fas fa-pen"></i> Editar</a>
					</td>
					</tr>
                @endforeach
            {{--@endforeach--}}
			</tbody>
		</table>

	</div>
</div>
@include('usuarios.administrador.documentos.create')
@include('usuarios.administrador.documentos.edit')
@endsection
@section('script')
<script>
    @if($errors->edit->count()!=0)
		$('#editar').modal('show');
	@elseif($errors->count()!=0)
		$('#crear').modal('show');
	@endif

    $('#editar').on('show.bs.modal', function(e){
        var documento = $(e.relatedTarget).data().datos;
        var dato = $("#nombre").val(documento.nombre);
        $("#descripcion").val(documento.descripcion);
        $('#tipo_documento option[value="'+documento.tipo_documento + '"]').prop("selected",true);
        //$('#ejercicio_id option[value="'+documento.ejercicio_id + '"]').prop("selected",true);
        $('#idDocumento').val(documento.id);
    });
</script>
<script src="{{ asset('js/dataTable.js')}}"></script>

@endsection
