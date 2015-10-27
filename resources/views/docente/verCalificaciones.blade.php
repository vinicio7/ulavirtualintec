@extends('layouts.main')

@section('content')

    <div class="row border-bottom white-bg dashboard-header">
        <div class="table table-striped">
            <table class="table text-center table table-hover" border="2" width="100%">
                <tr>
                    <td class="success" width="5%" rowspan="2">Grado/Profesion</td>
                    <td class="success" width="30%" rowspan="2">Cursante</td>
                    <td class="success" width="15%" colspan="2">Decidir</td>
                    <td class="success" width="15%" colspan="2">Saber</td>
                    <td class="success" width="15" colspan="2">Hacer</td>
                    <td class="success" width="15%" colspan="2">Ser</td>
                    <td class="success" width="10%" rowspan="2">Nota Final</td>
                </tr>

                <tr>
                    <td class="success">Nota</td>
                    <td class="success">Valor</td>
                    <td class="success">Nota</td>
                    <td class="success">Valor</td>
                    <td class="success">Nota</td>
                    <td class="success">Valor</td>
                    <td class="success">Nota</td>
                    <td class="success">Valor</td>
                </tr>

                @foreach($notas as $n)
                    <tr>
                        <td class="success">
                            <?php
                            //Ver si tiene grado o profesion
                            if ($n->grade_id == 1) $gradoProf = $n ->profesion;
                            else $gradoProf = \DB::table('grades')->where('id',$n -> grade_id) -> value('grado');
                            echo($gradoProf);
                            ?>
                        </td>
                        <td class='active'>{{ $n -> nombres . ' ' . $n -> paterno . ' ' . $n -> materno}}</td>
                        <td class="active">{{ $n -> prom1 }}</td>
                        <td class="active"><?php echo ($n -> prom1)*0.2?></td>
                        <td class="active">{{ $n -> prom2 }}</td>
                        <td class="active"><?php echo ($n -> prom2)*0.3?></td>
                        <td class="active">{{ $n -> prom3 }}</td>
                        <td class="active"><?php echo ($n -> prom3)*0.4?></td>
                        <td class="active">{{ $n -> prom4 }}</td>
                        <td class="active"><?php echo ($n -> prom4)*0.1?></td>
                        <td class="info">
                            <?php echo(($n -> prom1)*0.2 + ($n -> prom2)*0.3 + ($n -> prom3)*0.4 + ($n -> prom4)*0.1)?>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection

