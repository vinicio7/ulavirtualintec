@extends('layouts.main')
@section('content')
    <div class="row border-bottom white-bg dashboard-header">

            {!! Form::open(['route' => 'porAlumno', 'method' => 'POST'])!!}
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
            <p align="center">
                <button type="submit" class=" btn-primary btn-sm glyphicon glyphicon-check" style="text-align:center"> Generar Reporte </button>
            </p>
            {!! Form::close() !!}

    </div>

@endsection