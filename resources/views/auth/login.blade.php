@extends('auth.layout')

<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Registrarse</h4>
            </div>
            <div class="modal-body">
                {!!Form::open(['route' => 'login', 'class' => 'form'])!!}
                <div class="form-group">
                    <label >Email</label>
                    {!!Form::email('email', '', ['class'=> 'form-control']) !!}

                </div>
                <div class="form-group">
                    <label>Password</label>
                    {!!Form::password('password', ['class'=> 'form-control']) !!}

                </div>
                <div class="checkbox">
                    <label><input name="remember" type="checkbox"> Remember me</label>
                </div>
                <div>
                    {!! Form::submit('login',['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
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
    <!--button type="button" class="btn btn-primary block full-width m-b" data-toggle="modal" data-target="#myModal">
        Registrarse
    </button>

        <!--a href="{{ url('password/email') }}">
            <small>Olvidó su contraseña?</small>
        </a-->

    {!! Form::close() !!}
    <p class="m-t" align="center">
        <small>Sistema de Califiacaciones E.A.E.N. &copy; 2015</small>
    </p>
</div>

@endsection