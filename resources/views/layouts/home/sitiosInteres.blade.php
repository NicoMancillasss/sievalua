@extends('layouts.app')
@section('content')
<div class=" mt-5">
    <div class="row w-auto m-5">
        @foreach ($sitios as $sitio)
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 mt-5 mb-5">
                <a href="{{$sitio->link}}" target="_blank" class="hvr-bob">
                    <img src="{{asset('storage/'.$sitio->imagen)}}" class="h-100 w-100" alt="{{$sitio->nombre}}">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
