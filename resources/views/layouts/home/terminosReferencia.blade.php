@extends('layouts.app')

@section('content')
<div class="container my-5">

    <div class="row m-5 ">

        @foreach ($terminosR as $tr)
            <div class="col">
                <a class="hvr-float-shadow" href="" target="_blanck" data-toggle="modal" data-target="#myModal{{$tr->id}}">
                    <div class=" h-100 justify-content-center  mx-sm-1 p-3 ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>{{$tr->nombre}}</h6>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>

    @foreach ($terminosR as $tr)
        <div id="myModal{{$tr->id}}" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">{{$tr->nombre}}</h4>
                    </div>
                    <div class="modal-body">

                        <embed src="{{asset('storage/'.$tr->documento)}}"
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
