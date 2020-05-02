<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    //
    protected $table = 'tareas';
    protected $fillable = ['id','docente_id','materia_id','grupo','nombre','descripcion','archivo','ponderacion'];
}
