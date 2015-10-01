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

                @foreach($disciplinas as $d)
                    <tr>
                    <td class='active'>{{ $d -> nombreMateria }}</td>
                    <td class="active">70</td>
                    <td class="active">90</td>
                    <td class="warning">80</td>
                    <td class="active">90</td>
                    <td class="active">90</td>
                    <td class="info">87</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection

