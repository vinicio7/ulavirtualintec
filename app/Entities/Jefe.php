<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Jefe extends Model
{
    protected $table = 'jeves';
    protected $fillable = ['jefe_est','localidad'];

}
