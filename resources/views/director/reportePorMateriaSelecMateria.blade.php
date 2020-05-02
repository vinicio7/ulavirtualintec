@extends('layouts.main')
@section('content')
    <div class="row border-bottom white-bg dashboard-header">

            {!! Form::open(['route' => 'director.reportex', 'method' => 'GET'])!!}
            <p align="center">
                <label>Seleccione el horario: </label>
            </p>
            <div class="form-group" align="center">
                <select class="selectpicker" name="horario" data-live-search="true">
                    @foreach($horarios as $horario)
                        <option value="{{$horario->id}}"> {{$horario->descripcion}}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group" align="center">
                <select class="selectpicker" name="curso" data-live-search="true">
                    @foreach($materias as $materia)
                        <option value="{{$materia->id}}"> {{$materia->nombreMateria}}</option>
                    @endforeach
                </select>

            </div>
            <p align="center">
                <button type="submit" class=" btn-primary btn-sm glyphicon glyphicon-search" style="text-align:center"> Filtrar </button>
            </p>
            {!! Form::close() !!}
            {!! Form::open(['route' => 'pdf.reportePorMateria', 'method' => 'POST'])!!}
            <div class="form-group" align="center">
                <select class="selectpicker" name="alumno" data-live-search="true">
                    @foreach($alumnos as $alumno)
                        <option value="{{$alumno->id}}"> {{$alumno->nombres}} {{$alumno->paterno}} {{$alumno->materno}} </option>
                    @endforeach
                </select>
            </div>
            <p align="center">
                <button type="submit" class=" btn-primary btn-sm glyphicon glyphicon-check" style="text-align:center"> Generar Reporte </button>
            </p>
            {!! Form::close() !!}
    </div>

@endsection