@extends('usuarios.despacho.layouts.main')
@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/chat.css') }}">
</head>
<div class="shadow-lg p-1 mb-3 bg-white rounded">
<!-- Content wrapper start -->
    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card m-0">
                <!-- Row start -->
                <div class="row no-gutters">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
                        <div class="users-container">
                            <div class="chat-search-box">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-info">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <ul class="users">
                                @foreach ($solicitud->postula->where('estatus',1)->where('cita','<>','')->where('lugar','<>','') as $postula)
                                    <a href="{{route('despacho.mensajes.ver',[ $postula->evaluacion->dependencia->user->id,$postula->id]) }}">
                                        <li class="person" data-chat="person1">
                                            <div class="user">
                                                <img src="https://cdn.pixabay.com/photo/2017/02/23/13/05/profile-2092113_960_720.png" alt="Retail Admin">
                                                <span class="status busy"></span>
                                            </div>
                                            <p class="name-time">
                                                <span class="name">{{ $postula->evaluacion->dependencia->nombre}}</span><br>
                                                <span class="time">{{ $postula->evaluacion->programa->nombre}}</span>
                                                <p class="text-success">
                                                @foreach ($postula->evaluacion->dependencia->mensajes($postula->id) as $msg)

                                                @if ($loop->last)
                                                    {{ $msg->txt_solicitud}}
                                                    @endif
                                                @endforeach
                                                </p>
                                            </p>
                                        </li>
                                    </a>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9 h-scroll">
                        @yield('mensajes')
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@section('script')
    <script src="{{ asset('js/chat.js')}}"></script>
@endsection
@endsection
