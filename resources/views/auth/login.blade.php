@extends('auth.layout')

@section('content')

<div class="ibox-content">
    {!! Form::open(['route' => 'login', 'method' => 'POST', 'role' => 'form']) !!}

        <div class="form-group">
            {!! Form::text('nickname', old('nickname'), ['class' => 'form-control', 'placeholder' => 'Usuario']) !!}

        </div>
        <div class="form-group">
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña']) !!}
        </div>
        {!! Form::submit('Iniciar sesión', ['class' => 'btn btn-primary block full-width m-b']) !!}

        <a href="{{ url('password/email') }}">
            <small>Olvidó su contraseña?</small>
        </a>

    {!! Form::close() !!}
    <p class="m-t">
        <small>Sistema de Califiacaciones E.A.E.N. &copy; 2015</small>
    </p>
</div>

@endsection