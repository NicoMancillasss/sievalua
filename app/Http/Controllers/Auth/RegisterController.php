<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;
use App\User;
use App\Models\Solicitud;
use Mail;
use App\Mail\Credenciales;
use App\Models\Rfc;
use App\Models\Ejercicio;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'despacho/solicitudes/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {

        $ejercicio = new Ejercicio();
        $this->middleware('noCache');
        
        if ($ejercicio->activo()>0 && strtotime(date('Y/m/d')) <= strtotime($ejercicio->ejercicioActivo())) {
            
            }else{

                return redirect('/')->send();
                die();
                
            }
            /*->with('c_cerrada','La convocatoria se a cerrado')
             ->with(Auth::logout());*/

        $this->middleware('guest');

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        Validator::extendImplicit('is_rfc', function ($attribute, $value, $parameters) {
            $rfc = new rfc($value);
            return $rfc->valida_rfc();
        }, 'Rfc no válido');

        $validator = Validator::make($data, [
            'rfc_temporal'=>['is_rfc'],
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],[
            'password.required'=>'Debes escribir una contraseña',
            'email.unique'=>'Correo Existente',
            'password.min'=>'La contraseña debe contener mas de 8 digitos',
            'password.confirmed'=>'La contraseña No coincide',
        ]);
         
            return $validator;
        

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
       /* $ejercicio = new Ejercicio();
        if ($ejercicio->activo()>0 && date('Y/m/d') <=$ejercicio->ejercicioActivo()) {*/
            Mail::to($data['email'])->send(new Credenciales($data));
            $user= User::create([
                'nombre' => strtoupper($data['nombre']),
                'rfc_temporal' => strtoupper($data['rfc_temporal']),
                'email' => $data['email'],
                'tipo_persona' => $data['tipo_persona'],
                'activo' => 1,
                'dependencia_id' => 98,
                'perfil_id' => 3,
                'password' => Hash::make($data['password']),
            ]);
            $user->save();
               
            return $user;
        /*}else{
            return back();
        }*/


    }

    public function showRegistrationForm()
    {
        \Session::flash('alert_modal', 'Bienvenido al sistema de registro para despachos evaluadores. Por favor proporcione la siguiente información para iniciar con el proceso.');
        return view('auth.register');
    }
}
