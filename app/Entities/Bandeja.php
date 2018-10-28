<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Bandeja extends Model
{
    //
    protected $table = 'bandeja';
    protected $fillable = ['id_user','id_mensaje','estado'];
}
