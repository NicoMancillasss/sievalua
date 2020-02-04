@extends('usuarios.despacho.layouts.main')
@section('content')
<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark">Evaluaciones Aceptadas a {{$solicitud->folio}}</h6>
		<div class="dropdown no-arrow">
			<a href="{{ route('despacho.solicitudes.index') }}" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-angle-left"></i>
                Regresar
            </a>
		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body ">
		<table class="table table-responsive table-hover text-center">
			<thead class="thead-dark ">
				<tr class="">
					<th scope="col" class="align-middle">Dependencia</th>
					<th scope="col" class="align-middle">Programa</th>
					<th scope="col" class="align-middle">Tipo de evaluación</th>
					<th scope="col" class="align-middle">Fecha Cita</th>
                    <th scope="col" class="align-middle">Lugar</th>
				</tr>
			</thead>
			<tbody>

				@foreach ($solicitud->postula->where('estatus',1)->where('cita','<>','')->where('lugar','<>','') as $postula)
				<tr class="">
                    <td class="align-middle">{{$postula->evaluacion->dependencia->nombre}}

                    </td>
					<td class="align-middle">{{$postula->evaluacion->programa->nombre}}</td>
					<td class="align-middle">{{$postula->evaluacion->tipoEvaluacion->nombre}}</td>
					<td class="align-middle"><i class="far fa-clock"></i> Indefinida{{--$postula->parseFecha() --}}</td>
					<td class="align-middle"><i class="fas fa-map-marker-alt"></i> Tú cita para la firma de contrato e inicio de la evaluación se te notificará posteriormente por lo que no omito señalar que será indispensable la presencia del representante legal. {{-- $postula->lugar --}}</td>
					{{--@if ($postula->firma_contrato==1)<td>  <a href="{{ route('despacho.mensajes.create',$postula)}}" class="text-center"><i class="text-success fas fa-sms fa-lg"></i></a> </td>@endif--}}
                </tr>
                <tr>
                    <td colspan="5">
                        <div class="row">
                            {{-- <div class="col text-center align-middle">
                                <button type="button" class="btn btn-success btn-block">
                                    <a class="text-white" href="{{route('despacho.asm.recomendados',$postula->id)}}"> Hallazgos</a>
                                </button>
                            </div> --}}
                            <a class="text-white" href="{{route('despacho.asm.recomendados',Crypt::encrypt($postula->id))}}">
                                <div class="card border-left-info shadow h-100 py-2 hvr-hollow">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-md font-weight-bold text-info text-uppercase mb-1">Hallazgos</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file-invoice fa-2x text-gray-500"></i>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            @forelse ($postula->evaluacion->documentosFinales as $documento)
                                <div class="col text-center ">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">

                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                            <div class="h6 mb-0 font-weight-bold text-gray-600">{{$documento->catalogoDocumento->descripcion}}</div>
                                                @if ($documento->repositorioDocFinal)

                                            <a target="_blank" href="{{asset('storage/'.$documento->repositorioDocFinal->ruta)}}">
                                                         <div class="text-xs font-weight-bold text-success text-uppercase mb-1">{{$documento->catalogoDocumento->nombre}}</div>
                                                     </a>
                                                @else

                                                <form class="form-inline"  action="{{route('despacho.documentoFinales.guardar',[$documento->id,$postula->id]) }}" class="form-inline" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('POST')
                                                        <div class="col-md-12 form-group  mb-2">
                                                            <div class="custom-file">
                                                            <input type="file" accept="{{$documento->tipoArchivo->extencion}}" class="custom-file-input" name="documento_final" id="customFileLang" lang="es">
                                                                <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                                                            </div>
                                                        </div>
                                                            <button type="submit" class="btn btn-primary  btn-sm btn-block">Subir Archivo</button>
                                                    </form>
                                                @endif
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            @empty

                            @endforelse



                        </div>
                    </td>
                </tr>
				@endforeach

			</tbody>
		</table>

    </div>
</div>
@endsection
