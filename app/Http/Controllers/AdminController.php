<?php

namespace App\Http\Controllers;

use App\Entities\Grade;
use App\Entities\Jefe;
use App\Entities\Leader;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function gradosList()
    {
        $grados = Grade::all();
        return view('admin.grados',compact('grados'));
    }

    public function gradosNew(Request $request)
    {
        $grado = new Grade;
        $v = Validator::make($request->all(),[
            'grado'  => 'required|unique:grades',
        ]);
        if ($v ->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        $grado->grado   = Input::get('grado');
        $grado->fuerza   = Input::get('fuerza');
        $grado->save();
        return redirect('lista_grados')->with('status', true);

    }

    public function gradosEdit($id)
    {
        $grado = Grade::find($id);
        return view('admin.editarGrado',compact('grado'));
    }
    public function gradosUpdate($id , Request $request)
    {
        $grado = Grade::find($id);
        //$cursante->fill($request->all());
        $grado->grado           = Input::get('grado');
        $grado->fuerza           = Input::get('fuerza');
        $grado->save();
        Session::flash('message','Grado Actualizado...');
        return redirect('lista_grados');
    }
    public function destroyGrado($id)
    {

        Grade::destroy($id);
        Session::flash('message','Grado Eliminado...');
        return redirect()->back();
    }

    public function jefesList()
    {
        $leaders = Leader::all();
        $jefes = Jefe::all();
        return view('admin.directores',compact('leaders','jefes'));
    }

    public function cargosEdit($id)
    {
        $leader = Leader::find($id);
        return view('admin.editarCargo',compact('leader'));
    }

    public function cargosUpdate($id , Request $request)
    {
        $leader = Leader::find($id);
        //$cursante->fill($request->all());
        $leader->nombreCompleto           = Input::get('nombreCompleto');
        $leader->cargo                    = Input::get('cargo');
        $leader->save();
        Session::flash('message','Director Actualizado...');
        return redirect('lista_directores');
    }
    public function jefesNew(Request $request)
    {
        $jefe = new Jefe();
        $v = Validator::make($request->all(),[
            'jefe_est'  => 'required',
            'localidad' => 'required|unique:jeves'
        ]);
        if ($v ->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        $jefe->jefe_est     = Input::get('jefe_est');
        $jefe->localidad    = strtoupper(Input::get('localidad'));
        $jefe->save();
        Session::flash('message','Director Creado');
        return redirect('lista_directores');

    }

    public function jefesEdit($id)
    {
        $jefe = Jefe::find($id);
        return view('admin.editarJefe',compact('jefe'));
    }

    public function jefesUpdate($id, Request $request)
    {
        $jefe = Jefe::find($id);
        //$cursante->fill($request->all());
        $jefe->jefe_est           = Input::get('jefe_est');
        $jefe->localidad           = Input::get('localidad');
        $jefe->save();
        Session::flash('message','Jefe Actualizado...');
        return redirect('lista_directores');
    }

    public function destroyJefe($id)
    {
        Jefe::destroy($id);
        Session::flash('message','Jefe Eliminado...');
        return redirect()->back();
    }
}
