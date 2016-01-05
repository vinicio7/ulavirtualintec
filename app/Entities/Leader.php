<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $table = 'leaders';
    protected $fillable = ['dirNal','subdir','jefe_deac'];

}
