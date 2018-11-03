<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Entities\NotaDocente;
use Illuminate\Support\Facades\Auth;

class DocenteController extends Controller
{
    public function calificar()
    {
     $materias = \DB::table('contrato_docentes')
                    ->join('materias as m', 'm.id', '=', 'materia_id')
                    ->select('nombreMateria')
                    ->where('user', Auth::user()->id)
                    ->where('gestion', \DB::table('contrato_docentes')->where('user', Auth::user()->id)->value('gestion'))
                    ->where('activo',1)
                    ->where('ua_id', \DB::table('contrato_docentes')->where('user', Auth::user()->id)->value('ua_id'))
                    ->get();
     return view('docente.calificar', compact('materias'));
    }

    public function verCalificaciones()
    {
        //Tomamos los datos materia_id, gestion y unidad academica id del docente para compararlos con los cursantes que pasan
        $datos = \DB::table('contrato_docentes')
            -> select('materia_id', 'gestion', 'ua_id')
            -> where('user', Auth::user()->id)
            -> get();

        //Verificamos que el docente tenga contrato
        if($datos[0]->{'materia_id'} != null)
        {
            $notas = \DB::table('kardex1')
                ->join('materias as m', 'materia_id', '=', 'm.id')
                ->join('users as u', 'user', '=', 'u.id')
                //->select('u.nombres', 'u.paterno', 'u.materno', 'grade_id', 'profesion', 'prom1', 'prom2', 'prom3', 'prom4')
                ->where('materia_id', '=', $datos[0]->{'materia_id'})
                ->where('gestion', '=', $datos[0]->{'gestion'})
                ->where('ua_id', '=', $datos[0]->{'ua_id'})
                ->where('activo', '=', true)
                ->get();
        }
        return view('docente.verCalificaciones', compact('notas'));
    }
}
