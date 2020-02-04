<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Auth;

class Despacho
{
     private $auth;


    public function __construct(Guard $auth){
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
         if ($this->auth->user()->perfil->id==3 && $this->auth->user()->activo == 1) {
            return $next($request);
        }else{
            \Session::flash('alert_modal', 'Usuario No Activo');
            return redirect()->route('portal.home')
            ->with(Auth::logout())
            ->with('message_error','Usuario desactivado');

        }
    }
}
