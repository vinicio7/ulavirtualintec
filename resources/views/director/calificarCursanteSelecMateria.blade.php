@extends('layouts.main')

@section('content')

    <div class="row border-bottom white-bg dashboard-header">

        {!! Form::open(['route' => 'director.calificarCursante', 'method' => 'POST'])!!}
        <!!--Seleccionar la materia del docente a calificar-->

        <div class="" style="text-align:center; margin-bottom: 15px;">
            <label>Seleccione el Materia a Evaluar: </label>
            <?php
                $disciplina = \DB::table('materias')->select('id', 'nombreMateria')->get();
            ?>
            <select class="selectpicker" name="materia" data-live-search="true">
                @foreach($disciplina as $d)
                    <option> {{$d -> nombreMateria}}</option>;
                @endforeach
            </select>
        </div>
        <p align="center">
            <button type="submit" class=" btn-primary btn-sm glyphicon glyphicon-check" style="text-align:center"> SELECCIONAR</button>
        </p>
        {!! Form::close() !!}
    </div>


@endsection

