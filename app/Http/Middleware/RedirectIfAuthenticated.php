<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Illuminate\Contracts\Auth\Guard;

class RedirectIfAuthenticated
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
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if ($this->auth->user()->perfil_id==3) {
                return redirect()->route('despacho.solicitudes.index'); 
             }elseif($this->auth->user()->perfil_id==2){
                return redirect()->route('administrador.home');
             }
        }else{
            
        return $next($request);
        }

    }
}
