<?php

namespace App\Http\Controllers\Usuarios\Dependencia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Alerta;
use Auth;


class NotificacionesController extends Controller
{
    public function index()
    {
        return view('usuarios.dependencias.notificaciones.index');
    }


    public function verNotificacion($id)
    {
        $notificacion = Auth::user()->notifications->find($id)->markAsRead();
        return redirect(Auth::user()->notifications->find($id)->data['ruta']);
    }
}
