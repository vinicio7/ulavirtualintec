<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Kardex extends Model
{
    //
    protected $fillable = ['materia_id','user', 'gestion', 'grupo', 'activo', 'ua_id'];
}
