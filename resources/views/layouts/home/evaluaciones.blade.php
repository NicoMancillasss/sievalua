@extends('layouts.app')

@section('content')
<div class="" >
    <img src="{{asset('imagenes/principal/banners/banner12.jpg')}}" class="w-100" alt="">
</div>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-3">
        </div>
        <div class="col m-3">
            <h1><span class="fas fa-clipboard-list"></span> Programas anuales</h1>
        </div>
        <div class="col-3">
        </div>
    </div>
    <div class="row m-5 ">
        @foreach ($programaA as $evaluacion)
            <div class="col ">
                <a class="hvr-float-shadow" href="" target="_blanck" data-toggle="modal" data-target="#myModal{{$evaluacion->id}}">
                    <div class=" justify-content-center h-100 mx-sm-1 p-3">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>{{$evaluacion->titulo}}</h6>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    @foreach ($programaA as $evaluacion)
        <div id="myModal{{$evaluacion->id}}" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <div class="modal-content">
                    <div class="modal-header text-dark">
                        <h2 class="modal-title">{{$evaluacion->titulo}}</h2>
                    </div>
                    <div class="modal-body">
                        <embed src="{{asset('storage/'.$evaluacion->documento)}}" frameborder="0" width="100%" height="400px">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
