@extends('layouts.main')

@section('content')

    <div class="row border-bottom white-bg dashboard-header">

        {!! Form::open(['route' => 'cursante.calificarCursante', 'method' => 'POST'])!!}
        <p align="center">
            <label>Seleccione la Disciplina: </label>
        </p>
        <div class="form-group" align="center">
            <select class="selectpicker" name="materia" data-live-search="true">
                @foreach($disciplinas as $d)
                    <option>{{ $d -> nombreMateria }}</option>
                @endforeach
            </select>
        </div>
        <p align="center">
            <button type="submit" class=" btn-primary btn-sm glyphicon glyphicon-check" style="text-align:center"> Generar Reporte </button>
        </p>
        {!! Form::close() !!}
    </div>
@endsection

