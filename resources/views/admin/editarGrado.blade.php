@extends('layouts.main')
@section('content')
    <div class="row border-bottom white-bg dashboard-header">
        {!! Form::model($grado,['route'=>['updateGrado', $grado->id],'method'=>'PUT', 'class'=>'form-horizontal', 'data-toggle'=>'validator']) !!}

            <div class="form-group has-feedback" >
                <label for="grado">Grado</label>

                {!! Form::text('grado',null,['class'=>'form-control', 'placeholder'=>'Grado']) !!}

                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
            <div class="form-group">
                {!! Form::select('fuerza', array('2018' => '2018', '2019' => '2019', '2020' => '2020')) !!}
            </div>

        {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
@endsection