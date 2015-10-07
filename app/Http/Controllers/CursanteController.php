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
        $pru = (int)$request['1califDoc'];
        dd($materia, $idDoc, $ua,$request['1califDoc'],$request['2califDoc'],$request['3califDoc'], $pru);


        //Realizamos insercion
        DB::table('nota_docentes')->insert([
           ['id_cursante' => Auth::user()->id,
            'id_docente'  => $idDoc,
            'materia_id'  => $materia,
            'ua_id'       => $ua,
            'indicador1'  => (int)$request['1califDoc'],
            'indicador2'  => (int)$request['2califDoc'],
           ],
        ]);
    }

    public function calificarCursante()
    {
        $cursantes = array('a' => 'pedro', 'b' => 'juan', 'c' => 'gabriel');
        return view('cursante.calificarCursante', compact('cursantes'));
    }




    public function formCalifCursante(Request $request)
    {
        dd($request->all());
        echo ($request['1califDoc']);
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



    //pruba
    public function usuario($id)
    {
        dd('El usuario es: '. $id);
    }
}
