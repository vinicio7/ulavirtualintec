@extends('layouts.main')
@section('content')
    {!! Form::model($docente,['route'=>['upDocente', $docente->id],'method'=>'PUT', 'class'=>'form-horizontal', 'data-toggle'=>'validator']) !!}
    @include('director.forms.edit')
    {!! Form::close() !!}}
@endsection