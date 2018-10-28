<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Visitas extends Model
{
    //
    protected $table = 'visitas_login';
    protected $fillable = ['numero'];
}
