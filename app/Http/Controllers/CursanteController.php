<?php

namespace App\Http\Controllers;

use App\Entities\NotaDocente;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CursanteController extends Controller
{
    public function calificarDocente()
    {
        $disciplinas = array('a' => 'mat1', 'b' => 'matb', 'c' => 'matc');


//      \DB::('insert into nota_docentes(indicador1)
  //                values (?)', ([$request['1califDoc']]));

        /*$califDoc = new NotaDocente;
        $califDoc -> indicador1 = $request -> 1califDoc;
        $califDoc -> $this->save();*/
        return view('cursante.calificarDocente', compact('disciplinas'));
    }


    public function calificarCursante()
    {
        $cursantes = array('a' => 'pedro', 'b' => 'juan', 'c' => 'gabriel');
        return view('cursante.calificarCursante', compact('cursantes'));
    }

    public function formCalifDoc(Request $request)
    {
        //dd($request->all());
        \DB::insert('insert into nota_docentes(indicador1,)
                    values (?,?)', [$request['1califDoc']]);
//        echo ($request['1califDoc']);
    }


    public function formCalifCursante(Request $request)
    {
        dd($request->all());
        echo ($request['1califDoc']);
    }

    public function verCalificaciones()
    {
      /*  $disciplinas = \DB::table('materias')
                        ->select('nombreMateria')
                        ->get();
        //dd($disciplinas);
        //$cursantes = array('a' => 'pedro', 'b' => 'juan', 'c' => 'gabriel');
        return view('cursante.verCalificaciones', compact('disciplinas'));
*/
        $nombre = \DB::table('kardexes')
            ->select('nombres')
            ->where('id', '=', Auth::user()->id)
            ->get();
        dd($nombre);
    }



    //pruba
    public function usuario($id)
    {
        dd('El usuario es: '. $id);
    }
}
