<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class CalificarTareas extends Model
{
    //
    protected $table = 'calificar_tareas';
    protected $fillable = ['tarea_id','alumno_id','file','calificacion'];
}
