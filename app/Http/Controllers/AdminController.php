<?php

namespace App\Http\Controllers;

use App\Entities\Tarea;
use App\Entities\User;
use App\Entities\Grade;
use App\Entities\Horarios;
use App\Entities\Mensaje;
use App\Entities\Bandeja;
use App\Entities\Materia;
use App\Entities\Jefe;
use App\Entities\CalificarTareas;
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
        $grados = Materia::all();
        return view('admin.grados',compact('grados'));
    }

    public function horariosList()
    {
        $horarios = Horarios::paginate(5);
        return view('admin.horarios',compact('horarios'));
    }

    public function mensajes()
    {
        return view('admin.mensajes');
    }

    public function verMensaje($id)
    {
        $bandeja = Bandeja::where('id_mensaje',$id)->first();
        $bandeja->estado = 1;
        $bandeja->save();
        return view('admin.verMensaje',compact('id'));
    }

    public function gradosNew(Request $request)
    {
        $grado = new Materia;
        $grado->nombreMateria   = Input::get('grado');
        $grado->save();
        return redirect('lista_grados')->with('status', true);
    }

    public function horariosNew(Request $request)
    {
        $horario = new Horarios;
        $horario->descripcion   = Input::get('horario');
        $horario->save();
        return redirect('lista_horarios')->with('status', true);
    }

    public function nuevoMensaje(Request $request)
    {
        if(auth()->user()->role == 'admin'){
            $usuarios = "";
            if (Input::get('para') == 1) {
                $usuarios = User::all();       
            } if (Input::get('para') == 2) {
                $usuarios = User::where('role','docente')->get();  
            }if (Input::get('para') == 3) {
                $usuarios = User::where('role','cursante')->get();  
            }
            foreach ($usuarios as $usuario) {
                $mensaje                = new Mensaje;
                $mensaje->enviado       = Input::get('id_user');
                $mensaje->fecha         = date("d-m-Y");
                $mensaje->contenido     = Input::get('mensaje');
                $mensaje->asunto        = Input::get('asunto');
                $mensaje->save();
                $bandeja                = new Bandeja;
                $bandeja->id_user       = $usuario->id;
                $bandeja->id_mensaje    = $mensaje->id;
                $bandeja->estado        = 0;
                $bandeja->save();
            }
            return redirect('mensajes')->with('status', true);
        }
        if(auth()->user()->role == 'docente'){
                $mensaje                = new Mensaje;
                $mensaje->enviado       = Input::get('id_user');
                $mensaje->fecha         = date("d-m-Y");
                $mensaje->contenido     = Input::get('mensaje');
                $mensaje->asunto        = Input::get('asunto');
                $mensaje->save();
                $bandeja                = new Bandeja;
                $bandeja->id_user       = Input::get('para');
                $bandeja->id_mensaje    = $mensaje->id;
                $bandeja->estado        = 0;
                $bandeja->save();
                return redirect('mensajes')->with('status', true);
        }
        if(auth()->user()->role == 'cursante'){
                $mensaje                = new Mensaje;
                $mensaje->enviado       = Input::get('id_user');
                $mensaje->fecha         = date("d-m-Y");
                $mensaje->contenido     = Input::get('mensaje');
                $mensaje->asunto        = Input::get('asunto');
                $mensaje->save();
                $bandeja                = new Bandeja;
                $bandeja->id_user       = Input::get('para');
                $bandeja->id_mensaje    = $mensaje->id;
                $bandeja->estado        = 0;
                $bandeja->save();
                return redirect('mensajes')->with('status', true);
        }

    }

    public function gradosEdit($id)
    {
        $grado = Materia::find($id);
        return view('admin.editarGrado',compact('grado'));
    }

     public function horariosEdit($id)
    {
        $horario = Horarios::find($id);
        return view('admin.editarHorario',compact('horario'));
    }

    public function gradosUpdate($id , Request $request)
    {
        $grado = Materia::find($id);
        //$cursante->fill($request->all());
        $grado->nombreMateria           = Input::get('grado');
        $grado->save();
        Session::flash('message','Curso Actualizado...');
        return redirect('lista_grados');
    }

    public function horariosUpdate($id , Request $request)
    {
        $horario = Horarios::find($id);
        //$cursante->fill($request->all());
        $horario->descripcion           = Input::get('horario');
        $horario->save();
        Session::flash('message','Horario Actualizado...');
        return redirect('lista_horarios');
    }
    
    public function destroyGrado($id)
    {

        Materia::destroy($id);
        Session::flash('message','Curso Eliminado...');
        return redirect()->back();
    }

    public function destroyHorario($id)
    {

        Horarios::destroy($id);
        Session::flash('message','Horario Eliminado...');
        return redirect()->back();
    }

    public function subirTarea(Request $request)
    {
        $validar = CalificarTareas::where('tarea_id',$request->input('tarea_id'))->where('alumno_id',$request->input('alumno'))->first();
        if(!$validar){
            $file = $request->file('file');
            $path = public_path().trim(' \tareas\ ');
            $ext = $file->getClientOriginalExtension();
            $file_name = time().$request->input('tarea_id').$request->input('alumno_id').".".$ext;
            $file->move($path , $file_name);
            $path2 = trim(' tareas\ ');
        
            $nueva_calificacion = new CalificarTareas;
            $nueva_calificacion->file           = $path2. $file_name;
            $nueva_calificacion->tarea_id       = $request->input('tarea_id');
            $nueva_calificacion->alumno_id      = $request->input('alumno_id');
            $nueva_calificacion->calificacion   = 0;
            $nueva_calificacion->save();
        }
        //Tarea::destroy($id);
        Session::flash('message','Tarea Subida...');
        return redirect()->back();
    }

    public function subirImagen(Request $request)
    {
       
        $file = $request->file('foto');
        $path = public_path().trim(' \fotosUsuarios\ ');
        $ext = $file->getClientOriginalExtension();
        $file_name = $request->input('id_user').".".$ext;
        $file->move($path , $file_name);
        //Tarea::destroy($id);
        Session::flash('message2','Fotografia Subida...');
        return redirect()->back();
    }

    public function destroyTarea($id)
    {

        Tarea::destroy($id);
        Session::flash('message','Tarea Eliminada...');
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
