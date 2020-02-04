@extends('layouts.app')
@section('content')
<div class="" >
    <img src="{{asset('imagenes/principal/banners/banner08.jpg')}}" class="w-100" alt="">
</div>
@if ($contrataciones->count()==0)
    <div class="card shadow m-4">
        <div class="jumbotron jumbotron-fluid mt-4">
            <div class="container">
                <h1 class="display-4">No se han encontrado registros</h1>
            </div>
        </div>
    </div>
@else
<div class="container">
    <div class="row m-5 ">
        @foreach ($contrataciones as $c)

            <div class="col">
                <a class="hvr-float-shadow" href="" target="_blanck" data-toggle="modal" data-target="#myModal{{$c->id}}">
                    <div class=" h-100 justify-content-center  mx-sm-1 p-3 ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>{{$c->titulo}}</h6>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
    @foreach ($contrataciones as $c)
        <div id="myModal{{$c->id}}" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">{{$c->titulo}}</h4>
                    </div>
                    <div class="modal-body">

                        <embed src="{{asset('storage/'.$c->documento)}}"
                                frameborder="0" width="100%" height="400px">

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif

@endsection
