<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inicio de Sesión</title>

    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('font-awesome/css/font-awesome.css') !!}
    {!! Html::style('css/animate.css') !!}
    {!! Html::style('fuentespropias/open-sans.css') !!}
    {!! Html::style('css/stylo.css') !!}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>

<body class="gray-bg">

<div class="loginColumns animated fadeInDown">

    <div class="row">


        <div class="col-md-6">
            <h2 class="font-bold"> Sistema de Calificaciones Escuela de Altos Estudios Nacionales</h2>

            <p align="justify">

            Bienvenidos al Sistema Calificaciones de la Escuela de Altos Estudios Nacionales "SISEAEN",
            donde podrá acceder a calificar y ver calificaciones del postgrado que cursa.

        </p>

        <p align="justify">
            La escuela de Altos Estudios Nacionales es la unidad universitaria de Postgrado de mayor jerarquía en el
            Estado Plurinacional de Bolivia y se halla bajo tuición académica de la Universidad Militar "MCAL. BERNARDINO
            BILBOA RIOJA".
        </p>

        <!--p align="justify">
            <small>Para poder ingresar al Sistema deberá registrarse enviar los datos personales
                que se piden en el sitio www.constellamaris.com</small>
        </p-->

        </div>
        <div class="col-md-6">

            @include('partials.errors')

            @yield('content')

        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-6" align="justify">
            Sitio web desarrollado por:
            TF. CGON. Charlie Seoane Sanchez, Fabricio Torrico Barahona, Behimar Alvarado
        </div>
        <div class="col-md-4 text-right">
            <small>Copyright © 2015</small>
        </div>
    </div>
</div>

        @yield('pie')
</body>

</html>
