<?php

namespace App\Http\Controllers;

use App\Entities\Kardex;
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
        //$materiaCursante = \DB::table('kardexes')->select('materia_id')->where('user', Auth::user()->id)->get();
        $disciplinas = \DB::table('kardexes')
            ->join('materias as m', 'materia_id', '=', 'm.id')
            //->join('nota_docentes as nd', 'user', '=', 'nd.id_cursante')
            ->select('m.nombreMateria', 'm.id', 'user')
            ->where('user', '=', Auth::user()->id)
            ->where('activo', '=', true)
            //->where('ua_id', '=', \DB::table('kardexes')->where('user', Auth::user()->id)->value('ua_id'))
            //->where('nd.id_cursante', '!=', Auth::user()->id AND 'nd.materia_id', '!=', 'materia_id')
            ->get();
        //dd($materiaCursante);
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


        //Tomamos la unidad academica de usuario cursnate
        $ua = \DB::table('kardexes')->where('user', Auth::user()->id)->value('ua_id');


        //Tomamos el id de usuario docente
        $idDoc = \DB::table('contrato_docentes')->where('materia_id', $materia)->where('activo', true)->where('ua_id', $ua)->value('user');
        //dd($materia, $idDoc);

        $disciplinas = \DB::table('kardexes')
            ->join('materias as m', 'materia_id', '=', 'm.id')
            ->select('m.nombreMateria')
            ->where('user', '=', Auth::user()->id)
            ->where('activo', '=', true)
            ->get();

        //Realizamos insercion
        if($idDoc!=null) {
            $existe = 0;
            $calificado = \DB::table('nota_docentes')
                -> select('id_cursante', 'materia_id')
                -> get();

            //Buscar si existe el registro
            foreach($calificado as $c){
                if($c -> id_cursante == Auth::user()->id && $c -> materia_id == $materia) //disciplinas -> id)

                {$existe=1;}

            }
            if($existe == 0) {
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
        }

        //Creamos estas varialbes para enviarlas y utilizarlas en la generacion del pdf
        $UnoCalifDoc = $request['1califDoc'];
        $DosCalifDoc = $request['2califDoc'];
        $TresCalifDoc = $request['3califDoc'];
        $CuatroCalifDoc = $request['4califDoc'];
        $CincoCalifDoc = $request['5califDoc'];
        $SeisCalifDoc = $request['6califDoc'];
        $SieteCalifDoc = $request['7califDoc'];
        $OchoCalifDoc = $request['8califDoc'];
        $NueveCalifDoc = $request['9califDoc'];
        $DiezCalifDoc = $request['10califDoc'];
        $OnceCalifDoc = $request['11califDoc'];
        $DoceCalifDoc = $request['12califDoc'];
        $TreceCalifDoc = $request['13califDoc'];
        $CatorceCalifDoc = $request['14califDoc'];
        $QuinceCalifDoc = $request['15califDoc'];
        $DieciseisCalifDoc = $request['16califDoc'];
        $DiecisieteCalifDoc = $request['17califDoc'];
        $DieciochoCalifDoc = $request['16califDoc'];
        $DiecinueveCalifDoc = $request['19califDoc'];
        $VeinteCalifDoc = $request['20califDoc'];
        //dd($docCalif);

        //dd($materia, $idDoc, $ua,$request['1califDoc'],$request['2califDoc'],$request['3califDoc'], $pru);
        return view('cursante.calificacionExitosaDocente', compact('idDoc', 'materia', 'UnoCalifDoc', 'DosCalifDoc'
                            , 'TresCalifDoc', 'CuatroCalifDoc', 'CincoCalifDoc', 'SeisCalifDoc', 'SieteCalifDoc'
                            , 'OchoCalifDoc', 'NueveCalifDoc', 'DiezCalifDoc', 'OnceCalifDoc', 'DoceCalifDoc', 'TreceCalifDoc'
                            , 'CatorceCalifDoc', 'QuinceCalifDoc', 'DieciseisCalifDoc', 'DiecisieteCalifDoc', 'DieciochoCalifDoc'
                            , 'DiecinueveCalifDoc', 'VeinteCalifDoc'));
    }

    public function selecMateriaCalificarCursante()
    {
        $disciplinas = \DB::table('kardexes')
            ->join('materias as m', 'materia_id', '=', 'm.id')
            ->select('m.nombreMateria')
            ->where('user', '=', Auth::user()->id)
            ->where('activo', '=', true)
            ->get();

        /* PARA DOCENTES (NO SIRVE ACA)
         * $disciplinas = \DB::table('kardexes')
            ->join('materias as m', 'materia_id', '=', 'm.id')
            ->join('nota_docentes as nd', 'user', '=', 'nd.id_cursante')
            ->select('m.nombreMateria')
            ->where('user', '=', Auth::user()->id)
            ->where('activo', '=', true)
            ->where('nd.id_cursante', '!=', Auth::user()->id AND 'nd.id_materia', '!=', 'materia_id')
            //->where('nd.id_materia', '!=', 'materia_id')
            ->get();*/
        return view('cursante.selecMateriaCalifCursante', compact('disciplinas'));
    }



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
            ->where('user', '!=', Auth::user()->id)
            ->where('k.activo', '=', true)
            ->get();
        $usuario_calificador = Auth::user()->id;
        //dd($usuario_calificador);
        //dd($nombres);
        return view('cursante.calificarCursante', compact('nombres', 'id_materia', 'usuario_calificador'));
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

        //Realizamos insercion verificando primero que la califcacion no existe
        $existe = 0;
        $calificado = \DB::table('nota_intercursantes')
            -> select('cursante_calificador', 'cursante_calificado')
            -> get();

        //Buscar si existe el registro
        foreach($calificado as $c){
            if($c -> cursante_calificador == Auth::user()->id && $c -> cursante_calificado == $idCalificado)
            {$existe=1;}
        }
        if($existe == 0) {
            \DB::table('nota_intercursantes')->insertGetId(
                ['cursante_calificador' => Auth::user()->id,
                    'cursante_calificado' => $idCalificado,
                    'materia_id' => (int)$request['materia'],
                    '4a' => (int)$request['1califCursante'],
                    '4b' => (int)$request['2califCursante'],
                    '4c' => (int)$request['3califCursante'],
                    '4d' => (int)$request['4califCursante'],
                ]
            );
        }
        //Creamos estas varialbes para enviarlas y utilizarlas en la generacion del pdf
        $cursanteCalificado = $request['cursante'];
        $materia = \DB:: table('materias')-> where('id', $request['materia'])-> value('nombreMateria');
        $UnoCalifCursante = $request['1califCursante'];
        $DosCalifCursante = $request['2califCursante'];
        $TresCalifCursante = $request['3califCursante'];
        $CuatroCalifCursante = $request['4califCursante'];
        //dd($materia, $idDoc, $ua,$request['1califDoc'],$request['2califDoc'],$request['3califDoc'], $pru);
        return view('cursante.calificacionExitosaCursante', compact('UnoCalifCursante', 'DosCalifCursante',
                                                                    'TresCalifCursante','CuatroCalifCursante',
                                                                    'cursanteCalificado', 'materia'));
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

    //No se utiliza!!
    public function calificacionExitosa()
    {
        return view('cursante.calificacionExitosa');
    }


    //pruba
    public function usuario($id)
    {
        dd('El usuario es: '. $id);
    }
}
