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

                <p align="justify">
                    Ingrese el correo electrónico registrado en su filiación personal y se le
                    enviará su contraseña a su correo.
                </p>

                <p align="justify">
                    Por favor verfique su bandeja de entrada, y si no se encuentra ahí verifique también
                    su bandeja de correo no deseado o bandeja de spam.
                </p>

                @include('partials.errors')

                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="row">

                    <div class="col-lg-12">
                        <form method="post" class="m-t" role="form" action="/password/email">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary block full-width m-b">Enviar mi contraseña</button>

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
