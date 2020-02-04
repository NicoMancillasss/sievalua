<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Models\Ejercicio;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
    }

    protected function redirectTo(){
        if (Auth::user()->perfil->id==2 || Auth::user()->perfil->id==1 || Auth::user()->perfil->id==5 ) {
            return '/administrador/home';
        }
        elseif(Auth::user()->perfil->id==4){
            return '/dependencia/portafolio/home';


        }elseif(Auth::user()->perfil->id==3){
            return '/despacho/solicitudes/index';
        }
        else{
            dd('no es tipo válido');
        }
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {

        $ejercicio = new Ejercicio();
        return view('auth.login')->with('ejercicio',$ejercicio);
    }



   /**
* Validate the user login request.
*
* @param  \Illuminate\Http\Request  $request
* @return void
*/
protected function validateLogin(Request $request)
{
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    // The user is being remembered...
    }
    $request->validate([
        $this->username() => 'required|string',
        'password' => 'required|string',
    ]);
}



}
