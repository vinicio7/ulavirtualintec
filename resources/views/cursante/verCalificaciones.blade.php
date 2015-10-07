@extends('layouts.main')

@section('content')

    <div class="row border-bottom white-bg dashboard-header">
        <div class="table table-striped">
            <table class="table text-center">
                <tr>
                    <td class="success" width="40%">Disciplina</td>
                    <td class="success" width="8%">Saber</td>
                    <td class="success" width="8%">Hacer</td>
                    <td class="success" width="16%">Promedio Saber-Hacer</td>
                    <td class="success" width="8%">Decidir</td>
                    <td class="success" width="8%">Ser</td>
                    <td class="success" width="12%">Nota Final</td>
                </tr>

                @foreach($notas as $n)
                    <tr>
                    <td class='active'>{{ $n -> nombreMateria }}</td>
                    <td class="active">{{ $n -> prom1 }}</td>
                    <td class="active">{{ $n -> prom2 }}</td>
                    <td class="warning">
                        <?php echo(($n -> prom1 + $n -> prom2)/2)?>
                    </td>
                    <td class="active">{{ $n -> prom3 }}</td>
                    <td class="active">{{ $n -> prom4 }}</td>
                    <td class="info">
                        <?php echo(($n -> prom1 + $n -> prom2 + $n -> prom3 + $n -> prom4)/4)?>
                    </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection

