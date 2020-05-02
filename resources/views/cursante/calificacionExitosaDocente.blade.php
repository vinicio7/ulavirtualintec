@extends('layouts.main')
@section('content')
    <div class="row border-bottom white-bg dashboard-header">
        <h3 class="text-navy" align="center"> CALIFICACIÓN EXITOSA</h3>
        {!! Form::open(['route' => 'pdf.calificacionDocente', 'method' => 'POST'])!!}
        <!!--Envia los valores que evaluo para imprimir en el pdf-->
        <input type="hidden" name="idDoc" value=<?php echo($idDoc)?>>
        <input type="hidden" name="materia" value=<?php echo($materia)?>>
        <input type="hidden" name="1" value=<?php echo($UnoCalifDoc)?>>
        <input type="hidden" name="2" value=<?php echo($DosCalifDoc)?>>
        <input type="hidden" name="3" value=<?php echo($TresCalifDoc)?>>
        <input type="hidden" name="4" value=<?php echo($CuatroCalifDoc)?>>
        <input type="hidden" name="5" value=<?php echo($CincoCalifDoc)?>>
        <input type="hidden" name="6" value=<?php echo($SeisCalifDoc)?>>
        <input type="hidden" name="7" value=<?php echo($SieteCalifDoc)?>>
        <input type="hidden" name="8" value=<?php echo($OchoCalifDoc)?>>
        <input type="hidden" name="9" value=<?php echo($NueveCalifDoc)?>>
        <input type="hidden" name="10" value=<?php echo($DiezCalifDoc)?>>
        <input type="hidden" name="11" value=<?php echo($OnceCalifDoc)?>>
        <input type="hidden" name="12" value=<?php echo($DoceCalifDoc)?>>
        <input type="hidden" name="13" value=<?php echo($TreceCalifDoc)?>>
        <input type="hidden" name="14" value=<?php echo($CatorceCalifDoc)?>>
        <input type="hidden" name="15" value=<?php echo($QuinceCalifDoc)?>>
        <input type="hidden" name="16" value=<?php echo($DieciseisCalifDoc)?>>
        <input type="hidden" name="17" value=<?php echo($DiecisieteCalifDoc)?>>
        <input type="hidden" name="18" value=<?php echo($DieciochoCalifDoc)?>>
        <input type="hidden" name="19" value=<?php echo($DiecinueveCalifDoc)?>>
        <input type="hidden" name="20" value=<?php echo($VeinteCalifDoc)?>>

        <p align="center">
            <button type="submit" class=" btn-primary btn-sm glyphicon glyphicon-check" style="text-align:center"> IMPRIMIR CALIFICACIÓN AL DOCENTE</button>
        </p>
        {!! Form::close() !!}
    </div>
@endsection

