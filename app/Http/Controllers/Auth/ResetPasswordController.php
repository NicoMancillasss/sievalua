<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Auth;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function redirectTo(){
        if (Auth::user()->perfil->id==2) {
            return '/administrador/home';
        }
        elseif(Auth::user()->perfil->id==4){
            return '/dependencia/home';
        }elseif(Auth::user()->perfil->id==3){
            return '/despacho/solicitudes/index';
        }
        else{
            return '/administrador/home';
        }
    }
}
