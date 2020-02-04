<?php

namespace App\Http\Controllers\Usuarios\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class NotificacionesController extends Controller
{
    public function index()
    {
        return view('usuarios.administrador.notificaciones.index');
    }


    public function verNotificacion($id)
    {
        $notificacion = Auth::user()->notifications->find($id)->markAsRead();
        return redirect(Auth::user()->notifications->find($id)->data['ruta']);
    }

    
}
