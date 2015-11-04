@extends('layouts.main')

@section('content')

    <div class="row border-bottom white-bg dashboard-header">
        <div class="table table-striped">
            <table class="table text-center table table-hover">
                <tr>
                    <td class="success" width="40%">Disciplina</td>
                    <td class="success" width="8%">Decidir (20%)</td>
                    <td class="success" width="8%">Saber (30%) </td>
                    <!--td class="success" width="16%">Promedio Saber-Hacer</td-->
                    <td class="success" width="8%">Hacer (40%)</td>
                    <td class="success" width="8%">Ser (10%)</td>
                    <td class="success" width="12%">Nota Final</td>
                </tr>

                @foreach($notas as $n)
                    <tr>
                    <td class='active'>{{ $n -> nombreMateria }}</td>
                    <td class="active">{{ $n -> prom1 }}</td>
                    <td class="active">{{ $n -> prom2 }}</td>
                    <!--td class="warning">
                        <//?php echo(($n -> prom1 + $n -> prom2)/2)?>
                    </td-->
                    <td class="active">{{ $n -> prom3 }}</td>
                    <td class="active">{{ $n -> prom4 }}</td>
                    <td class="info">
                        <?php echo(($n -> prom1)*0.2 + ($n -> prom2)*0.3 + ($n -> prom3)*0.4 + ($n -> prom4)*0.1)?>
                    </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
