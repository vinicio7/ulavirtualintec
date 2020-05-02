@extends('layouts.main')
@section('content')
    <div class="row border-bottom white-bg dashboard-header col-sm-12">
        <div class="col-sm-6">
        {!! Form::model($horario,['route'=>['updateHorario', $horario->id],'method'=>'PUT', 'class'=>'form-horizontal', 'data-toggle'=>'validator']) !!}

            <div class="form-group has-feedback col-sm-12" >
                <label for="grado">Grado</label>

                {!! Form::text('horario',null,['class'=>'form-control', 'placeholder'=>'horario']) !!}

                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>

        {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
        </div>
    </div>
@endsection