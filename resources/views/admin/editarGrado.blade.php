@extends('layouts.main')
@section('content')
    <div class="row border-bottom white-bg dashboard-header">
        <div class="form-group col-sm-6">
        {!! Form::model($grado,['route'=>['updateGrado', $grado->id],'method'=>'PUT', 'class'=>'form-horizontal', 'data-toggle'=>'validator']) !!}

            <div class="form-group col-sm-12" >
                <label for="grado">Curso</label><br>

                {!! Form::text('grado',null,['class'=>'form-control', 'placeholder'=>'Grado']) !!}
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
           <br>

        {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
        </div>
    </div>
@endsection