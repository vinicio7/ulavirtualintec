<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EDUTECH - Aula virtual</title>

    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('font-awesome/css/font-awesome.css') !!}
    {!! Html::style('css/animate.css') !!}
    {!! Html::style('fuentespropias/open-sans.css') !!}
    {!! Html::style('css/stylo.css') !!}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>

<body class="gray-bg" style="background-image: url('img/foondo.jpg');">

<div class="loginColumns animated fadeInDown">

    <div class="row">


        <div class="col-md-6">
            <h1 class="font-bold" style="font-size: 60px; color: #ff8000; font-weight: bold"> EduTech</h1>

            <p align="justify">

            Bienvenidos a aula virtual.

        </p>

        <p align="justify">
           Edutech es una plataforma social que facilita la comunicación e interacción virtual como complemento de la presencial, aunque también puede usar como una plataforma de educación en línea. Permite organizar estudiantes, asignar tareas, calificaciones y mantener una comunicación que involucre a profesores, estudiantes y padres de familia.
        </p>

        </div>
        <div class="col-md-6">

            @include('partials.errors')

            @yield('content')

        </div>
    </div>
    <hr/>
    <div class="row">
       
        <div class="col-md-4 text-right">
            <strong><small style="color:#ff8000">Copyright © 2020</small></strong>
        </div>
    </div>
</div>
        @yield('pie')
</body>

</html>
