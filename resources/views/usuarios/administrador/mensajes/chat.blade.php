@extends('usuarios.administrador.layouts.main')
@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/chat.css') }}">
</head>
<div class="shadow-lg p-1 mb-3 bg-white rounded">
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 h-scroll">
            <div class="card m-0">
                <!-- Row start -->
                <div class="row no-gutters">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-2 col-2 h-scroll">
                        <div class="users-container">
                            <div class="chat-search-box">
                                <div class="input-group">
                                    <h6>Usuarios</h6>
                                </div>
                            </div>
                            <ul class="users">
                                @foreach ($evaluaciones as $evaluacion)
                                    <a href="{{route('administrador.mensajes.ver',$evaluacion->id) }}">
                                        <li class="person" data-chat="person1">
                                            <div class="user">


                                                    <img src="http://koppaldentist.com/images/female.png" alt="Despacho">
                                                    <span class="status busy"></span>
                                                {{--
                                                @elseif($solicitud->postula->solicitud->user===4)
                                                    <img src="https://cdn.pixabay.com/photo/2017/02/23/13/05/profile-2092113_960_720.png" alt="Dependencia">
                                                    <span class="status busy"></span>
                                                @endif
                                                --}}



                                            </div>

                                            <p class="name-time">
                                                <span class="name">{{ $evaluacion->programa->nombre }}</span><br>
                                                <span class="time" style="text-overflow: ellipsis;"></span>
                                                <p class="text-success">
                                                    {{}}
                                                </p>
                                            </p>
                                        </li>
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
