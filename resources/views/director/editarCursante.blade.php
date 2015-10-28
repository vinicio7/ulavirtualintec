@extends('layouts.main')
@section('content')
    {!! Form::model($cursante,['route'=>['upCursante', $cursante->id],'method'=>'PUT', 'class'=>'form-horizontal', 'data-toggle'=>'validator']) !!}
        @include('director.forms.edit')
    {!! Form::close() !!}}
@endsection