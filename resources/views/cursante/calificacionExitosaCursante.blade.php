@extends('layouts.main')
@section('content')
    <div class="row border-bottom white-bg dashboard-header">
        <h3 class="text-navy" align="center"> CALIFICACIÓN EXITOSA</h3>
        {!! Form::open(['route' => 'pdf.calificacionCursante', 'method' => 'POST'])!!}
        <!!--Envia los valores que evaluo para imprimir en el pdf-->
            <input type="hidden" name="1" value=<?php echo($UnoCalifCursante)?>>
            <input type="hidden" name="2" value=<?php echo($DosCalifCursante)?>>
            <input type="hidden" name="3" value=<?php echo($TresCalifCursante)?>>
            <input type="hidden" name="4" value=<?php echo($CuatroCalifCursante)?>>
            <input type="hidden" name="cursanteCalificado" value="<?php echo($cursanteCalificado)?>">
            <input type="hidden" name="materia" value="<?php echo($materia)?>">
            <p align="center">
                <button type="submit" class=" btn-primary btn-sm glyphicon glyphicon-check" style="text-align:center"> IMPRIMIR CALIFICACIÓN AL CURSANTE</button>
            </p>
        {!! Form::close() !!}
    </div>
@endsection

