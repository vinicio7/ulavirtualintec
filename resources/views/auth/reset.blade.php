<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>C.O.N. "Stella Maris"</title>

    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('font-awesome/css/font-awesome.css') !!}
    {!! Html::style('css/animate.css') !!}
    {!! Html::style('css/stylo.css') !!}

</head>

<body class="gray-bg">

<div class="passwordBox animated fadeInDown">
    <div class="row">

        <div class="col-md-12">
            <div class="ibox-content">

                <h2 class="font-bold">Olvidó su contraseña?</h2>

                <p>
                    Ingrese el correo electrónico registrado en su filiación personal y se le
                    enviará los pasos para recuperar su contraseña a su correo.
                </p>

                @include('partials.errors')

                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="row">

                    <div class="col-lg-12">

                        <form method="POST" action="/password/reset">
                            {!! csrf_field() !!}
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group">
                                Email
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                            </div>

                            <div class="form-group">
                                Password
                                <input type="password" name="password" class="form-control">
                            </div>

                            <div class="form-group">
                                Confirm Password
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary block full-width m-b">
                                    Reset Password
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-6">
            Circulo de Oficiales Navales "Stella Maris"
        </div>
        <div class="col-md-6 text-right">
            <small>© 2015</small>
        </div>
    </div>
</div>

</body>

</html>
