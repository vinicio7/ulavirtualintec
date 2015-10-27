@extends('layouts.main')

@section('content')

    <div class="row border-bottom white-bg dashboard-header">
        <div class="table table-striped">

            {!! Form::open(['route' => 'excel.darExcel', 'method' => 'POST'])!!}
            <!!--Seleccionar la materia que dicta a calificar-->

            <div class="" style="text-align:center; margin-bottom: 10px;">
                <label>Seleccione la Materia: </label>
                <select class="selectpicker" name="materia" data-live-search="true">
                    @foreach($materias as $m)
                        <option> {{$m -> nombreMateria}}</option>
                    @endforeach
                </select>
            </div>
            <p align="center" style="text-align:center; margin-bottom: 50px;">
                <button type="submit" class=" btn-primary btn-sm glyphicon glyphicon-download"> DESCARGAR PLANTILLA</button>
            </p>
            {!! Form::close() !!}

            <h4 align="center"> Una vez descargada la plantilla, deberá llenar tan solo las celdas que corresponde a calificaciones (las mismas esán vacias),
                                dejando todas las demás sin modificcion. Tras ello usted deberá cargar el archivo (pulsando en el boton "Seleccionar archivo") y
                                finalmente pulsar el bonton "GUARDAR".
            </h4>

            {!! Form::open(['route' => 'excel.guardarNotas', 'class'=>'form-horizontal', 'files'=>true, 'method'=>'POST']) !!}
            <div class="form-group col-lg-5"></div>
            <div class="form-group col-lg-4" style="text-align:center; margin-bottom: 10px;" align="center">
            <p align="center" style="text-align:center; margin-bottom: 50px;">
                    <input type="file" name="file1" accept=".xls, .xlsx, .csv" style="margin-bottom: 15px;" required>
                    <button type="submit" class=" btn-primary btn-sm glyphicon glyphicon-save"> GUARDAR </button>
                </p>
            </div>

            {!! Form::close()!!}
        </div>
    </div>
@endsection

