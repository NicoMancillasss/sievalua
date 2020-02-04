@extends('usuarios.dependencias.layouts.main')
@section('status','show')
@section('link','active')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-dark"> Programa: {{$evaluacion->programa->nombre}}</h6>
		<div class="dropdown no-arrow">
            <a href="{{route('dependencia.ejercicio.programa.asm',[Crypt::encrypt($asm->ejercicio->id),Crypt::encrypt($evaluacion->id)])}}" class="btn btn-info btn-sm hvr-box-shadow-outset"><i class="fas fa-angle-left"></i> Regresar</a>
		</div>
    </div>
    <div class="card-body ">
        <div class="text-center">
            <h5><strong>Aspectos Susceptibles de Mejora Cargados</strong></h5>
        </div>

        <div class="">
            <div class="row card-body text-center">
                <div class="col-sm-12 mb-4 border-bottom-info">
                    <div class=" text-center hvr-float-shadow mb-4">
                        <h5 class="card-title m-0 font-weight-bold text-dark mt-4"> ASM </h5>
                        <p class="card-text">{{$asm->asm}}</p>
                    </div>
                </div>
            </div>
            <div class="row card-body text-center">
                <div class="col-sm-12 col-md-6  mb-6 border-left-info">
                    <div class="text-center hvr-float-shadow">
                        <h5 class="card-title font-weight-bold text-dark">Tema</h5>
                        <p class="card-text">
                            @foreach ($asm->tema as $tema)
                                        {{$tema->tema->nombre}}
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6  mt-3 border-left-info ">
                    <div class="text-center justify-content-between hvr-float-shadow ">
                        <h5 class="card-title font-weight-bold text-dark">Recomendación</h5>
                        <p class="card-text">{{$asm->recomendacion}}</p>
                    </div>
                </div>
            </div>
            <div class="row card-body text-center">
                <div class="col-sm-12 col-lg-3 mb-4 border-left-info">
                    <div class="text-center hvr-float-shadow">
                        <h5 class="card-title font-weight-bold text-dark">Fuente de información</h5>
                        <select selected   required="" class="form-control  $errors->has('estatus') ? ' is-invalid' : '' " data-style="btn-primary" id="evaluacion"  name="tipo_evaluacion_id">
						    <option value="{{$evaluacion->tipoEvaluacion->id}}">{{$evaluacion->tipoEvaluacion->nombre}}</option>
						</select>

                    </div>
                </div>
                <div class="col-sm-12 col-lg-3 mb-4 border-left-info ">
                    <div class="text-center hvr-float-shadow">
                        <h5 class="card-title font-weight-bold text-dark">Documento</h5>
                        <p class="card-text">
                            {{$asm->documento_referencia}}
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3 mb-4 border-left-info ">
                    <div class="text-center hvr-float-shadow">
                        <h5 class="card-title font-weight-bold text-dark">Estatus</h5>
                        <p class="card-text">
                            @if($asm->estatus_id==1)
                                <span class="badge badge-danger">{{$asm->estatus->estatus}}</span>
                                @elseif($asm->estatus_id==2)
                                <span class="badge badge-warning">{{$asm->estatus->estatus}}</span>
                                @elseif($asm->estatus_id==3)
                                <span class="badge badge-success">{{$asm->estatus->estatus}}</span>
                                @elseif($asm->estatus_id==4)
                                <span class="badge badge-info ">{{$asm->estatus->estatus}}</span>
                            @endif
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3 mb-4 border-left-info ">
                    <div class="text-center hvr-float-shadow">
                        <h5 class="card-title font-weight-bold text-dark">Actores Involucrados</h5>
                        @foreach ($actores as $actor)
                        <input  onchange="Clasificacion()" class=" "  type="checkbox" value="{{$actor->id}}" id="check{{$actor->id}}" name="actores[]"@if(in_array($actor->id,$asm->actor->pluck('actor_id')->toArray())) checked disabled @endif>
                        {{$actor->nombre}}
                        @endforeach
                </div>
            </div>
            <div class="row card-body text-center">
                <div class="col-sm-12 col-lg-2 mb-4 border-left-info">
                    <div class="text-center hvr-float-shadow">
                        <h5 class="card-title font-weight-bold text-dark">Acción</h5>
                        <p class="card-text">{{$asm->accion->nombre}}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-2 mb-4 border-left-info ">
                    <div class="text-center hvr-float-shadow">
                        <h5 class="card-title font-weight-bold text-dark">Porcentaje</h5>
                        <p class="card-text">{{$asm->porcentajeAsm()}} %</p>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-2 mb-4 border-left-info ">
                    <div class="text-center hvr-float-shadow">
                        <h5 class="card-title font-weight-bold text-dark">Estado</h5>
                        <p class="card-text">
                            @if($asm->activo==1)
                                <span class="badge badge-success">Activo</span>
                            @else
                                <span class="badge badge-danger">Inactivo</span>
                            @endif
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-2 mb-4 border-left-info ">
                    <div class="text-center hvr-float-shadow">
                        <h5 class="card-title font-weight-bold text-dark">Prioridad</h5>
                        <p class="card-text">{{$asm->prioridad->nombre}}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-2 mb-4 border-left-info ">
                    <div class="text-center hvr-float-shadow">
                        <h5 class="card-title font-weight-bold text-dark">Justificación</h5>
                        <p class="card-text">
                            {{$asm->prioridad_justificacion}}
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-2 mb-4 border-left-info ">
                    <div class="text-center hvr-float-shadow ">
                        <h5 class="card-title font-weight-bold text-dark">Clasificación</h5>
                        <p class="card-text">{{$asm->aspecto->nombre}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
