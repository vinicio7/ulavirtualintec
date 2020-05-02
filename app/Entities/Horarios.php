<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Horarios extends Model
{
    //
    protected $table = 'horarios';
    protected $fillable = ['descripcion'];
}
