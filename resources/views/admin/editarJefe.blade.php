@extends('layouts.main')
@section('content')
    <div class="row border-bottom white-bg dashboard-header">
        {!! Form::model($jefe,['route'=>['updateJefe', $jefe->id],'method'=>'PUT', 'class'=>'form-horizontal', 'data-toggle'=>'validator']) !!}

        <div class="form-group has-feedback" >
            <label for="grado">Director</label>

            {!! Form::text('jefe_est',null,['class'=>'form-control', 'placeholder'=>'Nombre Completo (incluyendo grados)']) !!}
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
        <div class="form-group has-feedback" >
            <label for="grado">Localiad</label>

            {!! Form::text('localidad',null,['class'=>'form-control', 'placeholder'=>'Nombre Completo (incluyendo grados)']) !!}
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>

        {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
@endsection