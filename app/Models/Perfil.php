<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfiles';
    protected $fillable=['nombre'];

    public function user(){
    	return $this->HasOne('App\User');
    }
}
