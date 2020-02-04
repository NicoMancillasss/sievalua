<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Auth;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
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
            dd('no es tipo válido');
        }
    }
}
