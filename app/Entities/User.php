<?php

namespace App\Entities;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //
    //protected $fillable = ['name', 'email', 'password'];
    protected $fillable = ['nickname', 'nombres', 'paterno', 'materno', 'email', 'password', 'sexo', 'telefono', 'fnac', 'direccion', 'profesion'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function completeName()
    {
        return $this->paterno . " " . substr($this->materno,0,1) . ". " . $this->nombres;
    }

    public function getRole()
    {
        if($this->role == 'admin')return 'Administrador';
        if($this->role == 'director')return 'Director';
        if($this->role == 'docente')return 'Docente';
        if($this->role == 'facilitador')return 'Facilitador';
        if($this->role == 'cursante')return 'Cursante';
        if($this->role == 'invitado')return 'Invitado';
    }
}
