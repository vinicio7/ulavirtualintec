<?php

namespace App\Http\Controllers;

use App\Entities\NotaDocente;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CursanteController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function calificarDocente()
    {
        $disciplinas = \DB::table('kardexes')
            ->join('materias as m', 'materia_id', '=', 'm.id')
            ->select('m.nombreMateria')
            ->where('user', '=', Auth::user()->id)
            ->where('activo', '=', true)
            ->get();
        //dd($disciplinas);
        /*$califDoc = new NotaDocente;
        $califDoc -> indicador1 = $request -> 1califDoc;
        $califDoc -> $this->save();*/
        return view('cursante.calificarDocente', compact('disciplinas'));
    }

    public function formCalifDoc(Request $request)
    {

        //Tomamos el id de materia
        $materia = \DB::table('materias')->where('nombreMateria', $request['materia'])->value('id');


        //Tomamos el id de usuario docente
        $idDoc = \DB::table('contrato_docentes')->where('materia_id', $materia)->where('activo', true)->value('user');
        //dd($materia, $idDoc);

        //Tomamos la unidad academica de usuario cursnate
        $ua = \DB::table('kardexes')->where('user', Auth::user()->id)->value('ua_id');

        //Realizamos insercion
        if($idDoc!=null) {
            \DB::table('nota_docentes')->insertGetId(
                ['id_cursante' => Auth::user()->id,
                    'id_docente' => $idDoc,
                    'materia_id' => $materia,
                    'ua_id' => $ua,
                    'indicador1' => (int)$request['1califDoc'],
                    'indicador2' => (int)$request['2califDoc'],
                    'indicador3' => (int)$request['3califDoc'],
                    'indicador4' => (int)$request['4califDoc'],
                    'indicador5' => (int)$request['5califDoc'],
                    'indicador6' => (int)$request['6califDoc'],
                    'indicador7' => (int)$request['7califDoc'],
                    'indicador8' => (int)$request['8califDoc'],
                    'indicador9' => (int)$request['9califDoc'],
                    'indicador10' => (int)$request['10califDoc'],
                    'indicador11' => (int)$request['11califDoc'],
                    'indicador12' => (int)$request['12califDoc'],
                    'indicador13' => (int)$request['13califDoc'],
                    'indicador14' => (int)$request['14califDoc'],
                    'indicador15' => (int)$request['15califDoc'],
                    'indicador16' => (int)$request['16califDoc'],
                    'indicador17' => (int)$request['17califDoc'],
                    'indicador18' => (int)$request['18califDoc'],
                    'indicador19' => (int)$request['19califDoc'],
                    'indicador20' => (int)$request['20califDoc'],
                ]
            );
        }

        $disciplinas = \DB::table('kardexes')
            ->join('materias as m', 'materia_id', '=', 'm.id')
            ->select('m.nombreMateria')
            ->where('user', '=', Auth::user()->id)
            ->where('activo', '=', true)
            ->get();
        //dd($materia, $idDoc, $ua,$request['1califDoc'],$request['2califDoc'],$request['3califDoc'], $pru);
        return view('cursante.calificacionExitosa');
    }

    public function selecMateriaCalificarCursante()
    {
        $disciplinas = \DB::table('kardexes')
            ->join('materias as m', 'materia_id', '=', 'm.id')
            ->select('m.nombreMateria')
            ->where('user', '=', Auth::user()->id)
            ->where('activo', '=', true)
            ->get();
        return view('cursante.selecMateriaCalifCursante', compact('disciplinas'));
    }

    /**
     * @param Request $request
     */
    public function calificarCursante(Request $request)
    {
        //Tomamos el id de materia
        $id_materia = \DB::table('materias')->where('nombreMateria', $request['materia'])->value('id');

        //Tomamos el grupo al que pertenece el usuario
        $grupo = \DB::table('kardexes')
            ->where('user', Auth::user()->id)
            ->where('materia_id', $id_materia)
            ->where('activo', '=', true)
            ->value('grupo');

        //Tomamos los nombres de los cursantes que pertenecen al gurpo en dicha materia
        $nombres = \DB::table('users')
            ->join('kardexes as k', 'users.id', '=', 'k.user')
            ->select('users.nombres', 'users.paterno', 'users.materno', 'users.id')
            ->where('k.grupo', $grupo)
            ->where('k.materia_id', $id_materia)
            //->where('user', '!=', Auth::user()->id)
            ->where('k.activo', '=', true)
            ->get();

       // dd($nombres);
        return view('cursante.calificarCursante', compact('nombres', 'id_materia'));
    }




    /*function after ($this, $inthat)
    {
        if (!is_bool(strpos($inthat, $this)))
            return substr($inthat, strpos($inthat,$this)+strlen($this));
    }*/

    public function formCalifCursante(Request $request)
    {
        //Tomamos el id del cursante que calificamos
        $idCalificado= substr($request['cursante'], strpos($request['cursante'], '- ')+strlen('- '));

//dd((int)$request['materia']);
        //Realizamos insercion
        \DB::table('nota_intercursantes')->insertGetId(
                [   'cursante_calificador' => Auth::user()->id,
                    'cursante_calificado' => $idCalificado,
                    'materia_id' => (int)$request['materia'],
                    '4a' => (int)$request['1califCursante'],
                    '4b' => (int)$request['2califCursante'],
                    '4c' => (int)$request['3califCursante'],
                    '4d' => (int)$request['4califCursante'],
                ]
        );
        //dd($materia, $idDoc, $ua,$request['1califDoc'],$request['2califDoc'],$request['3califDoc'], $pru);
        return view('cursante.calificacionExitosa');
    }

    public function verCalificaciones()
    {
            $notas = \DB::table('kardexes')
                ->join('materias as m', 'materia_id', '=', 'm.id')
                ->select('m.nombreMateria','prom1', 'prom2', 'prom3', 'prom4')
                ->where('user', '=', Auth::user()->id)
                ->where('activo', '=', true)
                ->get();
            //dd($notas);
            return view('cursante.verCalificaciones', compact('notas'));
    }

    public function calificacionExitos()
    {
        return view('cursante.calificacionExitosa');
    }



    //pruba
    public function usuario($id)
    {
        dd('El usuario es: '. $id);
    }
}
