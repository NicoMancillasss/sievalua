<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'cat_paises';
    protected $fillable=['id_pais','nombre'];
}
