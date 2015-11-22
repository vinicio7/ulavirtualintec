<?php

namespace App\Http\Controllers;

use App\Entities\NotaDocente;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
    public function invoice()
    {
        $data = $this->getData();
        $date = date('Y-m-d');
        $invoice = "2222";
        $view =  \View::make('cursante.invoice', compact('data', 'date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('prueba.pdf');
    }

    public function getData()
    {
        $data =  [
            'quantity'      => '1' ,
            'description'   => 'some ramdom text',
            'price'         => '500',
            'total'         => '500'
        ];
        return $data;
    }

    public function calificacionCursante(Request $request)
    {
        $cursanteCalificador = \DB::table('users')->select('nombres', 'paterno', 'materno')->where('id', Auth::user()->id)->get();
        $uno = $request['1'];
        $dos = $request['2'];
        $tres = $request['3'];
        $cuatro = $request['4'];
        $cursanteCalificado = $request['cursanteCalificado'];
        $materia = $request['materia'];

        //dd($cursanteCalificado);
        $view =  \View::make('cursante.pdfCalifCursante', compact('uno', 'dos', 'tres', 'cuatro', 'cursanteCalificado',
                                'materia', 'cursanteCalificador'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('calificacionCursante.pdf');
    }

    public function calificacionDocente(Request $request)
    {
        $cursanteCalificador = \DB::table('users')->select('nombres', 'paterno', 'materno')->where('id', Auth::user()->id)->get();
        $docenteCalificado = \DB::table('users')->select('nombres', 'paterno', 'materno')->where('id', (int)$request['idDoc'])->get();
        $nombreMateria = \DB::table('materias')->where('id', (int)$request['materia'])->value('nombreMateria');
        $uno = $request['1'];
        $dos = $request['2'];
        $tres = $request['3'];
        $cuatro = $request['4'];
        $cinco = $request['5'];
        $seis = $request['6'];
        $siete = $request['7'];
        $ocho = $request['8'];
        $nueve = $request['9'];
        $diez = $request['10'];
        $once = $request['11'];
        $doce = $request['12'];
        $trece = $request['13'];
        $catorce = $request['14'];
        $quince = $request['15'];
        $dieciseis = $request['16'];
        $diecisiete = $request['17'];
        $dieciocho = $request['18'];
        $diecinueve = $request['19'];
        $veinte = $request['20'];

        $view =  \View::make('cursante.pdfCalifDocente', compact('cursanteCalificador', 'nombreMateria', 'docenteCalificado',
                                'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve', 'diez',
                                'once', 'doce', 'trece', 'catorce', 'quince', 'dieciseis', 'diecisiete',
                                'dieciocho', 'diecinueve', 'veinte'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('calificacionDocente.pdf');
    }


    //************* +++++ del director +++++++ ****************************
    //del director
    public function cursantes()
    {
        $cursantes = \DB::table('users')
            ->leftJoin('grades', 'users.grade_id','=','grades.id')
            ->select('users.id','users.nombres','users.paterno','users.materno','users.email','users.telefono','users.role','users.sexo','users.fnac','users.direccion','users.profesion','grades.grado')
            ->where('role','cursante')
            ->get();
        $view = \View::make('director.pdfCursantes',compact('cursantes'))->render();

        $pdf= \PDF::loadHTML($view)->setPaper('a4')->setOrientation('landscape');


        return $pdf->stream('Cursantes.pdf');
    }

    public function docentes()
    {
        $docentes = \DB::table('users')
            ->leftJoin('grades', 'users.grade_id','=','grades.id')
            ->select('users.id','users.nombres','users.paterno','users.materno','users.email','users.telefono','users.role','users.sexo','users.fnac','users.profesion','users.direccion','grades.grado')
            ->where('role','docente')
            ->get();
        $view = \View::make('director.pdfDocentes',compact('docentes'))->render();

        $pdf= \PDF::loadHTML($view)->setPaper('a4')->setOrientation('landscape');


        return $pdf->stream('Docentes.pdf');
    }
    public function grupos($m)
    {
        $grupos = DB::table('users')
            ->where('role','cursante')
            ->leftJoin('kardexes','users.id','=','user')
            ->leftJoin('grades', 'users.grade_id','=','grades.id')
            ->where('materia_id',$m)
            ->select('user','nombres','paterno','materno','grupo','grado','profesion')
            ->orderBy('grupo')
            ->orderBy('nombres')
            ->get();

        $view = \View::make('director.pdfgrupos',compact('grupos'))->render();

        $pdf= \PDF::loadHTML($view)->setPaper('a4')->setOrientation('landscape');
        return $pdf->stream('Grupos.pdf');
    }


    //************* +++++ del director +++++++ ****************************
}
