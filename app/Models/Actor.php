<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'cat_actores';
    protected $fillable = ['nombre'];
}
