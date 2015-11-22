<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class ContratoDocente extends Model
{
    protected $table = 'contrato_docentes';
    protected $fillable = ['materia_id','user', 'gestion', 'grupo', 'activo', 'ua_id'];
}
