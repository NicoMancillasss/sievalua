<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Auth;
use Closure;

class Superusuario
{
    private $auth;


    public function __construct(Guard $auth){
        $this->auth = $auth;
    }
    public function handle($request, Closure $next)
    {
        if ($this->auth->user()->perfil->id==1) {
            return $next($request);
        }else{
            return redirect()->route('portal.home')->with(Auth::logout());
        }
    }
}
