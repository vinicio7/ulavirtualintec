<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INTEC - Aula virtual</title>

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
            <h1 class="font-bold" style="font-size: 60px; color: #ff8000; font-weight: bold"> INTEC</h1>

            <p align="justify">

            Bienvenidos a aula virtual de la academia de computacion INTEC.

        </p>

        <p align="justify">
            El portal le permitira interactuar virtualmente para eficientar los procesos de tareas, notas, pagos, A cualquier hora y en cualquier momento.
        </p>

        </div>
        <div class="col-md-6">

            @include('partials.errors')

            @yield('content')

        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-6" align="justify">
            <strong style="color: white">Sitio web desarrollado por: Oscar Palala</strong>
        </div>
        <div class="col-md-4 text-right">
            <strong><small style="color:#ff8000">Copyright © 2018</small></strong>
        </div>
    </div>
</div>
        @yield('pie')
</body>

</html>
