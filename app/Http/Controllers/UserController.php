<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //

    public function index()
    {
        return view('auth.login');
    }

    public function login()
    {
        return view('layouts.main');
    }

    public function main()
    {
        if (auth()->user()->role == 'admin') {
            //mostrarle dashboard
            return view('layouts.dashboard');
        }
        elseif(auth()->user()->role == 'docente'){
            $disciplinas = \DB::table('kardexes')
            ->join('materias as m', 'materia_id', '=', 'm.id')
            ->select('m.nombreMateria')
            ->where('user', '=', \Auth::user()->id)
            ->where('activo', '=', true)
            ->get();
        return view('cursante.selecMateriaCalifCursante', compact('disciplinas'));
        }
        elseif (auth()->user()->role == 'cursante') {
            $disciplinas = \DB::table('kardexes')
            ->join('materias as m', 'materia_id', '=', 'm.id')
            ->select('m.nombreMateria')
            ->where('user', '=', \Auth::user()->id)
            ->where('activo', '=', true)
            ->get();
            //mostrarle tareas
            return view('cursante.calificarCursante');
        }    
    }
}
