<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Closure;
use Auth;

class Dependencia
{
     private $auth;


    public function __construct(Guard $auth){
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       
       if ($this->auth->user()->perfil->id==4 && $this->auth->user()->activo == 1) {
            return $next($request);
        }else{
            return redirect()->route('portal.home')->with(Auth::logout());
        }
    }
}
