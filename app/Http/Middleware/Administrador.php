<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Auth;
use Route;

use Closure;

class Administrador
{
    private $auth;


    public function __construct(Guard $auth){
        $this->auth = $auth;
    }
    public function handle($request, Closure $next)
    {
        $route = Route::current();
        if ($this->auth->user()->perfil->id==2 || $this->auth->user()->perfil->id==1  || $this->auth->user()->perfil->id==5) {
            if ($this->auth->user()->perfil->id==5 && ($route->methods[0]== "POST" || $route->methods[0]== "PUT"  ) ) {
                
                return redirect()->route('error.404');
               dd("Lo sentimos usted es un usuario de tipo consulta no puede hacer ningúna peticion post ");
            }
            return $next($request);
        }else{
            return redirect()->route('portal.home')->with(Auth::logout());
        }
    }
}
