@extends('usuarios.dependencias.layouts.main')
@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Notificaciones Sin Leer</h6>
            </div>
            <div class="card-body">
                
                @forelse (Auth::user()->unreadNotifications as $notification)
                    <div class="card bg-{{$notification->data['tipo']}} text-white shadow">
                        <div class="card-body">
                        
                        <a href="{{route('notificacion.show',$notification->id)}}">{{$notification->data['titulo']}}</a>
                         <span style="font-size: 9px">{{$fecha = $notification->created_at->diffForHumans()}} </span>
                        <div class="text-white-50 small">{{$notification->data['mensaje']}}</div>
                        </div>
                    </div>
                @empty
                     <div class="card bg-secondary text-white shadow">
                        <div class="card-body">
                        0 Alertas
                        <div class="text-white-50 small"><a href="{{--route('')--}}"></a></div>
                        </div>
                    </div>
                @endforelse
            
                </div>
              </div>
    </div>
     <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Notificaciones Sin Leer</h6>
            </div>
            <div class="card-body">
                
                @forelse (Auth::user()->readNotifications->take(12) as $notification)
                    <div class="card bg-{{$notification->data['tipo']}} text-white shadow">
                        <div class="card-body">
                        
                        <a href="{{route('notificacion.show',$notification->id)}}">{{$notification->data['titulo']}}</a>
                         <span style="font-size: 9px">{{$fecha = $notification->created_at->diffForHumans()}} </span>
                        <div class="text-white-50 small">{{$notification->data['mensaje']}}</div>
                        </div>
                    </div>
                @empty
                <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                        0 Alertas
                        <div class="text-white-50 small"><a href="{{--route('')--}}"></a></div>
                    </div>
                </div>
                    
                @endforelse
            
                </div>
              </div>
    </div>

</div>

@endsection
