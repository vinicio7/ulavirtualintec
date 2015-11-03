<?php

namespace App\Http\Controllers;

use App\Entities\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('director.inscribirCursante');
    }

    public function insDocente()
    {
        return view('director.inscribirDocente');
    }

    //registra un cursante
    public function store(Request $request)
    {
        $cursante = new User;
        $v = Validator::make($request->all(),[
            'nickname'  => 'required|unique:users',
            'nombres'   => 'required',
            'paterno'   => 'required',
            'materno'   => 'string',
            'email'     => 'required|email|unique:users',
            //'password ' => 'required',
            'sexo'      => 'string',
            'telefono'  => 'numeric',
            'fnac'      => 'date',
            'direccion' => 'string',
            'profesion' => 'string'
        ]);
        if ($v ->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        //$pass = Input::get('password');
        //$cursante->create($request->all());
        $cursante->id           = Input::get('id');
        $cursante->nickname     = Input::get('nickname');
        $cursante->password     = Input::get('password');
        $cursante->nombres      = strtoupper(Input::get('nombres'));
        $cursante->paterno      = strtoupper(Input::get('paterno'));
        $cursante->materno      = strtoupper(Input::get('materno'));
        $cursante->email        = Input::get('email');
        $cursante->telefono     = Input::get('telefono');
        $cursante->sexo         = Input::get('sexo');
        $cursante->fnac         = Input::get('fnac');
        $cursante->grade_id     = Input::get('grade_id');
        $cursante->direccion    = strtoupper(Input::get('direccion'));
        $cursante->profesion    = strtoupper(Input::get('profesion'));
        $cursante->role = 'cursante';
        $cursante->save();
        //$cursantes = User::all();
        return redirect('nuevoCursante')->with('status', true);

    }
    public function mostrarCursantes()//lista a los cursantes
    {
        //$cursantes = User::all();
        $cursantes = DB::table('users')
            ->leftJoin('grades', 'users.grade_id','=','grades.id')
            ->select('users.id','users.nombres','users.paterno','users.materno','users.email','users.telefono','users.role','users.sexo','users.fnac','users.direccion','users.profesion','grades.grado')
            ->get();
        return view('director.modificarCursante', compact('cursantes'));
        //return $cursantes;
    }
    public function editarCursante($id)
    {
        $cursante =User::find($id);
        //return $cursante;
        return view('director.editarCursante',compact('cursante'));
    }

    public function actualizarCursante($id,Request $request )
    {
        $cursante =User::find($id);
        //$cursante->fill($request->all());
        $cursante->id           = Input::get('id');
        $cursante->nickname     = Input::get('nickname');
        $cursante->password     = Input::get('password');
        $cursante->nombres      = strtoupper(Input::get('nombres'));
        $cursante->paterno      = strtoupper(Input::get('paterno'));
        $cursante->materno      = strtoupper(Input::get('materno'));
        $cursante->email        = Input::get('email');
        $cursante->telefono     = Input::get('telefono');
        $cursante->sexo         = Input::get('sexo');
        $cursante->fnac         = Input::get('fnac');
        $cursante->grade_id     = Input::get('grade_id');
        $cursante->direccion    = strtoupper(Input::get('direccion'));
        $cursante->profesion    = strtoupper(Input::get('profesion'));
        $cursante->save();
        return redirect('modificarCursante')->with('update', true);
    }
    //crea el docente... y actualiza
    public function newDocente(Request $request)
    {
        $docente = new User;
        $v = Validator::make($request->all(),[
            'nickname'  => 'required|unique:users',
            'nombres'   => 'required',
            'paterno'   => 'required',
            'materno'   => 'string',
            'email'     => 'required|email|unique:users',
            //'password ' => 'required',
            'sexo'      => 'string',
            'telefono'  => 'numeric',
            'fnac'      => 'date',
            'direccion' => 'string',
            'profesion' => 'string'
        ]);
        if ($v ->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
       // $pass = Input::get('password');
        //$cursante->create($request->all());
        $docente->id            = Input::get('id');
        $docente->nickname      = Input::get('nickname');
        $docente->password      = Input::get('password');
        $docente->nombres       = strtoupper(Input::get('nombres'));
        $docente->paterno       = strtoupper(Input::get('paterno'));
        $docente->materno       = strtoupper(Input::get('materno'));
        $docente->email         = Input::get('email');
        $docente->telefono      = Input::get('telefono');
        $docente->sexo          = Input::get('sexo');
        $docente->fnac          = Input::get('fnac');
        $docente->grade_id      = Input::get('grade_id');
        $docente->direccion     = strtoupper(Input::get('direccion'));
        $docente->profesion     = strtoupper(Input::get('profesion'));
        $docente->role = 'docente';
        $docente->save();
    }
    public function mostrarDocentes()//lista a los docentes
    {
        //$cursantes = User::all();
        $docentes = DB::table('users')
            ->leftJoin('grades', 'users.grade_id','=','grades.id')
            ->select('users.id','users.nombres','users.paterno','users.materno','users.email','users.telefono','users.role','users.sexo','users.fnac','users.profesion','users.direccion','grades.grado')
            ->get();
        return view('director.modificarDocente', compact('docentes'));
        //return $docentes;
    }
    public function editarDocente($id)
    {
        $docente =User::find($id);
        //return $cursante;
        return view('director.editarDocente',compact('docente'));
    }
    public function actualizarDocente($id,Request $request )
    {
        $cursante =User::find($id);
        //$cursante->fill($request->all());
        $cursante->id           = Input::get('id');
        $cursante->nickname     = Input::get('nickname');
        $cursante->password     = Input::get('password');
        $cursante->nombres      = strtoupper(Input::get('nombres'));
        $cursante->paterno      = strtoupper(Input::get('paterno'));
        $cursante->materno      = strtoupper(Input::get('materno'));
        $cursante->email        = Input::get('email');
        $cursante->telefono     = Input::get('telefono');
        $cursante->sexo         = Input::get('sexo');
        $cursante->fnac         = Input::get('fnac');
        $cursante->grade_id     = Input::get('grade_id');
        $cursante->direccion    = strtoupper(Input::get('direccion'));
        $cursante->profesion    = strtoupper(Input::get('profesion'));
        $cursante->save();
        return redirect('modificarDocente')->with('update', true);
    }

    public function destroyCu($id)
    {
        User::destroy($id);
        Session::flash('message','Usuario Eliminado...');
        return redirect()->back();
    }
    public function destroyDo($id)
    {
        User::destroy($id);
        Session::flash('message','Usuario Eliminado...');
        return redirect()->back();
    }

    public function sortearIndex()
    {
        return view('director.sorteo');
    }

    public function sortearGrupos()
    {

        $alumnos = User::where('role','cursante')->get();
        //$as =$al->where('role','cursante');
        //$total = DB::table('users')->where('role','cursante');
        //for ($i=0 ; $i <= count($alumnos); $i++){
        //foreach($alumnos as $alumno){
        $shuffled = $alumnos->shuffle();
          //  $var[$i]= $alumno;
            //$i++;
        //}

        //$sds = array_chunk($shuffled,2,false);

        return view('director.sorteo', compact('shuffled'));
        //return $alumno;
        /*for($a = 1 ; $a<=$total; $a++){
            if($total % $a == 0){
                $numero[$a]= $a;
                $a++;
            }

        }
        return $numero;*/

    }

    public function calificarCursanteSelecMateria()
    {
        //dd($disciplinas);
        return view ('director.calificarCursanteSelecMateria');
    }

    public function calificarCursante(Request $request)
    {
        //Seleccionamos el id de la materia que selecciono
        $materiaId = \DB::table('materias')->where('nombreMateria',$request['materia'])->value('id');

        //Seleccionamos los cursantes que pasan esa materia
        $cursantes = \DB::table('kardexes')
                    ->join('users as u', 'user', '=', 'u.id')
                    ->select('u.nombres', 'u.paterno', 'u.materno', 'u.id')
                    ->where('materia_id', $materiaId)
                    ->where('activo', 1)
                    //Seleccionamos los que aun no califico
                    ->where('prom4JE',0)
                    //->where('ua_id', unidadDelDirector)
                    ->get();
        //dd($cursantes);
        return view ('director.calificarCursante', compact('cursantes', 'materiaId'));
    }

    public function formCalifCursante(Request $request)
    {
        //dd($request['materia']);
        if($request['cursante'] != null)
        {
            //Seleccionamos id del cursante
            $cursanteId = substr($request['cursante'], strpos($request['cursante'], '- ')+strlen('- '));

            //Insertamos valores
            \DB::table('kardexes')
                ->where('materia_id', $request['materia'])
                ->where('user', $cursanteId)
                ->where('activo', 1)
                ->update(
                    [
                        '41aJE' => $request['1califCursante'],
                        '41bJE' => $request['2califCursante'],
                        '41cJE' => $request['3califCursante'],
                        '41dJE' => $request['4califCursante'],
                        'prom4JE' => (($request['1califCursante']+
                                        $request['2califCursante']+
                                        $request['3califCursante']+
                                        $request['4califCursante'])/4)
                    ]);
        }
        return view('director.calificacionExitosa');
        //dd('exitoso');
    }
}
