@extends('layouts.app')
@section('content')
<div class="" >
    <img src="{{asset('imagenes/principal/banners/banner11.jpg')}}" class="w-100">
</div>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="m-5 table-responsive">
            <object data="{{asset('docs/Fundamentacion-de-marco-juridico.pdf')}}" type="application/pdf" width="1000" height="500">
            </object>
        </div>
    </div>

    <div class="row m-5 ">

        @foreach ($marcoJ as $mj)
            <div class="col">
                <a class="hvr-float-shadow" href="" target="_blanck" data-toggle="modal" data-target="#myModal{{$mj->id}}">
                    <div class=" h-100 justify-content-center  mx-sm-1 p-3 ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>{{$mj->titulo}}</h6>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>

    @foreach ($marcoJ as $mj)
        <div id="myModal{{$mj->id}}" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">{{$mj->titulo}}</h4>
                    </div>
                    <div class="modal-body">

                        <embed src="{{asset('storage/'.$mj->documento)}}"
                                frameborder="0" width="100%" height="400px">

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
