<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    //
    protected $table = 'mensajes';
    protected $fillable = ['enviado','asunto','fecha','contenido'];
}
