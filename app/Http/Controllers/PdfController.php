<?php

namespace App\Http\Controllers;

use App\Entities\NotaDocente;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
            'quantity' => '1' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500'
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
        //return $pdf->stream('prueba.pdf');
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
        //dd($nombreMateria);
        //dd($docenteCalificado);

        $view =  \View::make('cursante.pdfCalifDocente', compact('cursanteCalificador', 'nombreMateria', 'docenteCalificado',
                                'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve', 'diez',
                                'once', 'doce', 'trece', 'catorce', 'quince', 'dieciseis', 'diecisiete',
                                'dieciocho', 'diecinueve', 'veinte'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('calificacionDocente.pdf');
        //return $pdf->stream('prueba.pdf');
    }
}
