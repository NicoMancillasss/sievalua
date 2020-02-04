<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Notifications\ResetPasswordNotification;
use App\Notifications\VerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
use \Carbon\Carbon;
use App\Models\Ejercicio;
use App\Models\Alerta;
use App\Models\Mensaje;
use App\Models\Evaluacion;
use App\Models\Postula;
use App\Models\Solicitud;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'nombre', 'email', 'password', 'activo', 'perfil_id', 'dependencia_id', 'tipo_persona', 'rfc_temporal'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    public function getTabla()
    {
        //get para obtener el nombre de la tabla para la bitacora
        return $this->table;
    }
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail());
    }

    public function perfil()
    {
        return $this->BelongsTo('App\Models\Perfil');
    }


    public function alertas()
    {
        return $this->HasMany('App\Models\Alerta');
    }

    public function mensaje()
    {
        return $this->HasOne('App\Models\Mensaje', 'receptor_id');
    }

    public function dependencia()
    {
        return $this->BelongsTo('App\Models\Dependencia');
    }
    public function solicitud()
    {
        return $this->HasOne('App\Models\Solicitud');
    }

    public function vaEvaluar()
    {
        /*Primero verificamos que exista un ejercicio activo*/
        $ejercicio = new Ejercicio();
        if ($ejercicio->activo() > 0) {
            /*Capturar el ejercicio activo*/
            $ejercicioActivo = $ejercicio->ejercicioActualActivo();
            /*ver si la dependencia hará evaluacion*/
            $evaluacion = Evaluacion::where('ejercicio_id', $ejercicioActivo->id)
                ->where('dependencia_id', $this->dependencia->id)->get()->first();
            if (isset($evaluacion)) {

                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
        /*Funcion para verificar si dependencia va hacer evaluacion en e ejercicio activo*/
    }

    public function despachoEvaluador()
    {
        /*Primero verificamos que exista un ejercicio activo*/
        $ejercicio = new Ejercicio();
        if ($ejercicio->activo() > 0) {
            /*Capturar el ejercicio activo*/
            $ejercicioActivo = $ejercicio->ejercicioActualActivo();
            /*ver si la dependencia hará evaluacion*/
            $evaluacion = Evaluacion::where('ejercicio_id', $ejercicioActivo->id)
                ->where('dependencia_id', $this->dependencia->id)->get()->pluck('id');

            /*Buscar todos los id que */
            $seleccionadas = Postula::whereIn('evaluacion_id', $evaluacion)
                ->where('cita', '<>', '')
                ->where('lugar', '<>', '')
                ->where('estatus', '=', 1)
                ->get();
            if (isset($evaluacion)) {
                //
                return $seleccionadas;
            } else {
                return false;
            }
        } else {
            return false;
        }
        /*Funcion para verificar si dependencia va hacer evaluacion en e ejercicio activo*/
    }

    public function scopeSearch($query, $request)
    {

        return $query->where('email', 'LIKE', $request->dato)->where('perfil_id', 'LIKE', $request->perfil_id);
    }

    
}
