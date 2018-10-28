@extends('layouts.main')

@section('content')

    <div class="row border-bottom white-bg dashboard-header">

        {!! Form::open(['route' => 'pdf.reportePorMateria', 'method' => 'POST'])!!}
        <p align="center">
            <label>Seleccione el curso: </label>
        </p>
        <div class="form-group" align="center">
            <select class="selectpicker" name="cursante" data-live-search="true">
                @foreach($disciplinas as $d)
                    <option>{{ $d -> nombreMateria }}</option>
                @endforeach
            </select>

        </div>
        <div class="form-group" align="center">
            <select class="selectpicker" name="jefe" data-live-search="true">
                @foreach($jefes as $jefe)
                    <option>{{ $jefe -> jefe_est }}</option>
                @endforeach
            </select>

        </div>
        <p align="center">
            <button type="submit" class=" btn-primary btn-sm glyphicon glyphicon-check" style="text-align:center"> Generar Reporte </button>
        </p>
        {!! Form::close() !!}


    </div>
@endsection

