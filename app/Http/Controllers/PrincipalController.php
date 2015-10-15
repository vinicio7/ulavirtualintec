<?php

namespace App\Http\Controllers;

use App\Entities\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cursante = new User;
        $v = Validator::make($request->all(),[
            'nickname'  => 'required',
            'nombres'   => 'required',
            'paterno'   => 'required',
            'materno'   => 'required',
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
        $pass = Input::get('password');
        //$cursante->create($request->all());
        $cursante->id = Input::get('id');
        $cursante->nickname = Input::get('nickname');
        $cursante->password = bcrypt($pass);
        $cursante->nombres = Input::get('nombres');
        $cursante->paterno = Input::get('paterno');
        $cursante->materno = Input::get('materno');
        $cursante->email = Input::get('email');
        $cursante->telefono = Input::get('telefono');
        $cursante->sexo = Input::get('sexo');
        $cursante->fnac = Input::get('fnac');
        $cursante->grade_id = Input::get('grade_id');
        $cursante->direccion = Input::get('direccion');
        $cursante->profesion = Input::get('profesion');
        $cursante->role = 'cursante';
        $cursante->save();


        //$cursantes = User::all();
        return redirect('nuevoCursante')->with('status', true);

    }

    public function newDocente(Request $request)
    {
        $docente = new User;
        $v = Validator::make($request->all(),[
            'nickname'  => 'required',
            'nombres'   => 'required',
            'paterno'   => 'required',
            'materno'   => 'required',
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
        $pass = Input::get('password');
        //$cursante->create($request->all());
        $docente->id = Input::get('id');
        $docente->nickname = Input::get('nickname');
        $docente->password = bcrypt($pass);
        $docente->nombres = Input::get('nombres');
        $docente->paterno = Input::get('paterno');
        $docente->materno = Input::get('materno');
        $docente->email = Input::get('email');
        $docente->telefono = Input::get('telefono');
        $docente->sexo = Input::get('sexo');
        $docente->fnac = Input::get('fnac');
        $docente->grade_id = Input::get('grade_id');
        $docente->direccion = Input::get('direccion');
        $docente->profesion = Input::get('profesion');
        $docente->role = 'docente';
        $docente->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
