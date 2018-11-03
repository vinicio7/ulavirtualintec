<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Entities\Materia;
use App\Entities\Kardex;

class ExcelController extends Controller
{
    public function generarExcel()
    {

        Excel::create('NombreDelArchivo', function($excel) {

            $excel->sheet('Materias', function($sheet) {

                $products = Materia::all();

                $sheet->fromArray($products);
            });
        })->export('xls');

    }

    public function import()
    {
        Excel::load('Materi.xls', function($reader) {

            foreach ($reader->get() as $book) {
                Materia::create([
                   'nombreMateria' =>$book->name,
                ]);
            }
        });
        return Materia::all();
    }

    public function guardarNotas(Request $request)
    {
        $ver = Excel::load($request['file1'], function($reader) {

            //Seleccionamos la materia, unidad academica y gestion del excel
            $materiaId = \DB::table('materias')->where('nombreMateria', $reader->noHeading()->toArray()[0][4])->value('id');
            $ua = \DB::table('unidad_academicas')->where('ua', $reader->noHeading()->toArray()[3][4])->value('id');
            $gestion = $reader->noHeading()->toArray()[4][4];

            foreach ($reader->get() as $notas) {
                //echo $notas[0];
                    \DB::table('kardex1')
                    ->where('materia_id', $materiaId)
                    ->where('gestion', $gestion)
                    ->where('ua_id', $ua)
                    ->where('activo', 1)
                    ->where('user', $notas[0])
                    ->update(
                        [
                            '11a' => $notas[5],
                            '11b' => $notas[6],
                            '11c' => $notas[7],
                            '12a' => $notas[9],
                            '12b' => $notas[10],
                            'prom1' => $notas[11]/0.2,
                            '21a' => $notas[13],
                            '21b' => $notas[14],
                            '21c' => $notas[15],
                            '22a' => $notas[17],
                            '22b' => $notas[18],
                            '22c' => $notas[19],
                            'prom2' => $notas[20]/0.3,
                            '31a' => $notas[22],
                            '31b' => $notas[23],
                            '31c' => $notas[24],
                            '31d' => $notas[25],
                            '31e' => $notas[26],
                            '31f' => $notas[27],
                            '31g' => $notas[28],
                            'prom3' => $notas[29]/0.4,
                            '41aFacil' => $notas[31],
                            '41bFacil' => $notas[32],
                            '41cFacil' => $notas[33],
                            '41dFacil' => $notas[34],
                            'prom4Facil' => $notas[35]/0.1,
                        ]);

            //ACTUALIZAMOS EL PARAMETRO 4, QUE EVALUAN JE,CURSANTE Y DOCENTE
                $promedios = \DB::table('kardex1')
                    ->where('materia_id', $materiaId)
                    ->where('activo', 1)
                    ->where('user', $notas[0])
                    ->select('prom4Cursante', 'prom4Facil', 'prom4JE')
                    ->get();

                if($promedios!=null)
                {
                    $promedioGeneral = ($promedios[0]->{'prom4Cursante'})*0.1+
                                        ($promedios[0]->{'prom4JE'})*0.2+
                                        ($promedios[0]->{'prom4Facil'})*0.7;

                    //Actualizamos el promedio general
                    \DB::table('kardex1')
                        ->where('materia_id', $materiaId)
                        /*->where('gestion', $gestion)
                        ->where('ua_id', $ua)*/
                        ->where('activo', 1)
                        ->where('user', $notas[0])
                        ->update(['prom4' => $promedioGeneral]);
                }
            }
        })->noHeading()->toArray();
        return view('docente.calificacionExitosa');
    }

    //Genera la plantilla de excel que el docente descargara para llenar y posteriormene subir
    public function darExcel(Request $request)
    {
            Excel::create('CalificacionesEAEN', function($excel) use($request) {

            $excel->sheet('Calificar', function($sheet) use($request) {
                $estudiantes = Kardex::select('user', 'paterno', 'materno', 'nombres')
                                        ->join('users as u','user', '=', 'u.id')
                                        ->where('materia_id', '=', \DB::table('materias')->where('nombreMateria',$request['materia'])->value('id'))
                                        ->where('activo', 1)
                                        ->where('gestion', \DB::table('contrato_docentes')->where('user', Auth::user()->id)->value('gestion'))
                                        ->where('ua_id', \DB::table('contrato_docentes')->where('user', Auth::user()->id)->value('ua_id'))
                                        ->get();

                //Tomamos el nombre y carnet del docente
                $datosDocente = \DB::table('contrato_docentes')
                                ->join('users as u', 'u.id', '=', 'user')
                                ->select('u.id', 'nombres', 'paterno', 'materno')
                                ->where('user', Auth::user()->id)
                                ->where('activo', 1)
                                ->where('gestion', \DB::table('contrato_docentes')->where('user', Auth::user()->id)->value('gestion'))
                                ->where('ua_id', \DB::table('contrato_docentes')->where('user', Auth::user()->id)->value('ua_id'))
                                ->get();

                //Generamos las primeras flas, que son los datos relevantes
                $datos = array(
                    array('', '','', 'Materia: ', \DB::table('contrato_docentes')->join('materias as m', 'm.id','=', 'materia_id')->where('user', Auth::user()->id)->value('nombreMateria')),
                    array('', '','', 'Docente: ', $datosDocente[0]->paterno . ' ' . $datosDocente[0]->materno . ' ' . $datosDocente[0]->nombres),
                    array('', '','', 'C.I.: ', $datosDocente[0]->id),
                    array('', '','', 'Unidad Académica: ', \DB::table('contrato_docentes')->join('unidad_academicas as ua', 'ua.id','=', 'ua_id')->where('user', Auth::user()->id)->value('ua')),
                    array('', '','', 'Gestión ', \DB::table('contrato_docentes')->where('user', Auth::user()->id)->value('gestion')),
                    array('','','','','Usted deberá llenar tan solo aquellas columnas que tienen en el encabezado el símbolo (▼)'),
                    array(''),
                    array('', '','', '', 'DECIDIR (20%)', '','','','','','','', 'SABER (30%)', '','','','','','','','', 'HACER (40%)','','','','','','','','', 'SER (10%)'),
                    array('', '','', '', '1.1 Actuación en Grupos', '1.2 Toma de Decisiones', '' )
                );

                //Centrar y poner negrita la indicacion que solo debe calificar ciertas columnas
                $sheet->cells('E6', function ($cells) {$cells->setFontWeight('bold')->setValignment('center');});

                //Con el ultimo null deshabilitamos el heading
                $sheet->fromArray($datos, null, 'A1', false, false);

                //Llenamos la tabla con los nombres de los estudiantes
                $sheet->fromArray($estudiantes);

                //Poner en negrita los datos principales
                $sheet->cells('D1:D5', function ($cells) {
                    $cells->setFontWeight('bold');
                });

                //Encabezado de la tabla
                $sheet->row(9, (array('', '', '', '',
                                    'ACTUACIÓN EN GRUPOS', 'a) Aporte de Información', 'b) Dominio de técnicas de dinámicas de gruo', 'c) Capacidad de organización', 'TOMA DE DECISIONES', 'a) Aprecia los hechos objetivamente', 'b) Decide con acierto',
                                    'PROMEDIO DIMENSION DECIDIR', 'RESOLUCIÓN DE PROBLEMAS', 'a) Investigación con profundidad y acierto', 'b) Capacidad de análisis', 'c) Acierto en la comprensión y solución', 'EXPRESIÓN INSCRITA','a) Claridad y precisión en la redacción', 'b) Ortografía', 'c) Hecho coherente y con objetividad',
                                    'PROMEDIO DIMENSIÓN SABER', 'EXPRESIÓN ORAL','a) Expone sus ideas en forma clara', 'b) Coherente en el razonamiento', 'c) Capacidad de sínteis','d) Uso correcto de la terminología', 'e) Uso correcto de los recursos técnicos existentes', 'f) Sostiene sus criterios con seguridad', 'g) Prueba o sustentación oral individual',
                                    'PROMEDIO DIMENSIÓN HACER', 'RESPONSABILIDAD', 'a) Procede de acuerdo con las normas institucionales', 'b) Asume sus decisiones y/o responde por sus acciones', 'c) Trata a las personas con respeto y dignidad', 'd) Controla sus emociones con equilibrio y adecuación',
                                    'PROMEDIO DIMENSIÓN SER', 'NOTA FINAL')));

                $sheet->row(10, (array('Código', 'Apellido Paterno', 'Apellido Materno', 'Nombres',
                                        '','▼','▼','▼','','▼','▼','','','▼','▼','▼','','▼','▼','▼','','','▼','▼','▼','▼','▼','▼','▼','','','▼','▼','▼','▼','','')));

                $sheet->setAutoSize(true);

                //Alineamos las celdas dadas a la izquierda
                $sheet->cells('A1:Z6', function($cells) {$cells->setAlignment('left');});

                //Alineamos las celdas dadas al centro
                $sheet->cells('A9:Z9', function($cells) {$cells->setAlignment('center');});

                //Alineamos las celdas dadas a la izquierda
                $sheet->cells('A8:D50', function($cells) {$cells->setAlignment('left');});

                //Alineamos las celdas dadas al centro
                $sheet->cells('E8:AK30', function($cells) {$cells->setAlignment('center');});

                //Ponemos color a los encabezados
                $sheet->cells('E8:AK8', function($cells) {$cells->setBackground('#B0E0E6');});
                $sheet->cells('E9:AK9', function($cells) {$cells->setBackground('#7FFFD4');});

                //Celdas verticales principales
                $sheet->cells('E9', function($cells) {$cells->setBackground('#8FBC8F');});
                $sheet->cells('I9', function($cells) {$cells->setBackground('#8FBC8F');});
                $sheet->cells('L9', function($cells) {$cells->setBackground('#32CD32');});
                $sheet->cells('M9', function($cells) {$cells->setBackground('#8FBC8F');});
                $sheet->cells('Q9', function($cells) {$cells->setBackground('#8FBC8F');});
                $sheet->cells('U9', function($cells) {$cells->setBackground('#32CD32');});
                $sheet->cells('V9', function($cells) {$cells->setBackground('#8FBC8F');});
                $sheet->cells('AD9', function($cells) {$cells->setBackground('#32CD32');});
                $sheet->cells('AE9', function($cells) {$cells->setBackground('#8FBC8F');});
                $sheet->cells('AJ9', function($cells) {$cells->setBackground('#32CD32');});

                //Celda NOTA FINAL
                $sheet->cells('AK9', function($cells) {$cells->setBackground('#6B8E23');});

                //Cuadricular celdas
                $sheet->setBorder('D1:Z5', 'thin');
                $sheet->setBorder('E8:AK9', 'thin');

                //Cuadricular celdas de nombres
                $total = Kardex::select('user', 'paterno', 'materno', 'nombres')
                    ->join('users as u','user', '=', 'u.id')
                    ->where('materia_id', '=', \DB::table('materias')->where('nombreMateria',$request['materia'])->value('id'))
                    ->where('activo', 1)
                    ->where('gestion', \DB::table('contrato_docentes')->where('user', Auth::user()->id)->value('gestion'))
                    ->where('ua_id', \DB::table('contrato_docentes')->where('user', Auth::user()->id)->value('ua_id'))
                    ->count();
                $sheet->setBorder('A10:AK'.(10+$total), 'thin');

                //Unir Celdas
                //CELDAS DATOS
                $sheet->mergeCells('E1:Z1');
                $sheet->mergeCells('E2:Z2');
                $sheet->mergeCells('E3:Z3');
                $sheet->mergeCells('E4:Z4');
                $sheet->mergeCells('E5:Z5');

                //CELDAS DECIDIR, SABER, HACER, SER
                $sheet->mergeCells('E8:L8');
                $sheet->mergeCells('M8:U8');
                $sheet->mergeCells('V8:AD8');
                $sheet->mergeCells('AE8:AK8');

                //CELDAS PRINCIPALES VERTICALES
                $sheet->mergeCells('E9:E10');
                $sheet->mergeCells('I9:I10');
                $sheet->mergeCells('L9:L10');
                $sheet->mergeCells('M9:M10');
                $sheet->mergeCells('Q9:Q10');
                $sheet->mergeCells('U9:U10');
                $sheet->mergeCells('V9:V10');
                $sheet->mergeCells('AD9:AD10');
                $sheet->mergeCells('AE9:AE10');
                $sheet->mergeCells('AJ9:AJ10');
                $sheet->mergeCells('AK9:AK10');

                //CELDAS QUE NO SE USAN
                $sheet->mergeCells('A1:C9');
                $sheet->mergeCells('D6:D9');
                $sheet->mergeCells('E6:Z7');
                $sheet->mergeCells('AA1:AK7');
                $sheet->mergeCells('AL1:BZ300');

                //CENTRAR CELDAS
                $sheet->cells('A8:AK8', function($cells) {$cells->setAlignment('center');});
                $sheet->cells('A10:AK10', function($cells) {$cells->setAlignment('center');});
                $sheet->cells('F11:AK40', function($cells) {$cells->setAlignment('center');});


                //PONER TEXTO EN POSICION VERTICAL
                $sheet->getStyle('E9:AK9')->getAlignment()->setTextRotation(90);

                //Damos el formato de 0.00 a las celdas correspondientes
                $sheet->setColumnFormat(array('E11:AK50' => '0.00'));

                // Hallamos las celdas promedios
                for ($row = 11; $row <= 100; $row++) {
                    $sheet->setCellValue('L' . $row, '=IF(A' .$row. ',((SUM(F'.$row.':H'.$row.') + SUM(J'.$row.':K'.$row.'))/5)*0.20, " ")');
                    $sheet->setCellValue('U' . $row, '=IF(A' .$row. ',((SUM(N'.$row.':P'.$row.') + SUM(R'.$row.':T'.$row.'))/6)*0.30, " ")');
                    $sheet->setCellValue('AD' . $row, '=IF(A' .$row. ',((SUM(W'.$row.':AC'.$row.'))/7)*0.40, " ")');
                    $sheet->setCellValue('AJ' . $row, '=IF(A' .$row. ',((SUM(AF'.$row.':AI'.$row.'))/4)*0.10, " ")');
                    $sheet->setCellValue('AK' . $row, '=IF(A' .$row. ',L'.$row.' + U'.$row. ' + AD' .$row.' + AJ'.$row.', " ")');
                }

                //AUTO SIZE
                $sheet->setAutoSize(true);
            });
        })->export('xls');

            // Protect cells
                //$password='no';
                //$sheet->protectCells('A2', $password);
                //$sheet->freezePane("D2");*/
    }
}
