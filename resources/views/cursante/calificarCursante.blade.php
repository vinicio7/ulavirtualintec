@extends('layouts.main')

@section('content')

    <div class="row border-bottom white-bg dashboard-header">

        {!! Form::open(['route' => 'cursante.formCalifCursante', 'method' => 'POST'])!!}
        <!!--Seleccionar la materia del docente a calificar-->

        <div class="" style="text-align:center; margin-bottom: 15px;">
            <label>Seleccione el Cursante a Evaluar: </label>
            <select class="selectpicker" name="cursante" data-live-search="true">
                @foreach($nombres as $n)
                    <option>{{ $n -> nombres . ' ' . $n -> paterno . ' ' . $n -> materno . ' - ' .$n -> id }}</option>
                @endforeach
            </select>
        </div>
        <div class="table table-striped">
            <table class="table text-center">
                <tr>
                    <td class="success" width="80%">Indicador</td>
                    <td class="success" width="20%">Valoración</td>
                </tr>

                <tr>
                    <td class="active" >Procede de acuerdo con las normas institucionales.</td>
                    <td class="active">
                        <fieldset>
                            <input type="radio" name="1califCursante" value="100">AA
                            <input type="radio" name="1califCursante" value="90">A
                            <input type="radio" name="1califCursante" value="80" checked>B
                            <input type="radio" name="1califCursante" value="71">C
                            <input type="radio" name="1califCursante" value="50">D
                        </fieldset>
                    </td>
                </tr>

                <tr>
                    <td class="active" >Asume sus decisiones y/o responde por sus acciones.</td>
                    <td class="active">
                        <fieldset>
                            <input type="radio" name="2califCursante" value="100">AA
                            <input type="radio" name="2califCursante" value="90">A
                            <input type="radio" name="2califCursante" value="80" checked>B
                            <input type="radio" name="2califCursante" value="71">C
                            <input type="radio" name="2califCursante" value="50">D
                        </fieldset>
                    </td>
                </tr>

                <tr>
                    <td class="active" >Trata a las personas con respeto y dignidad.</td>
                    <td class="active">
                        <fieldset>
                            <input type="radio" name="3califCursante" value="100">AA
                            <input type="radio" name="3califCursante" value="90">A
                            <input type="radio" name="3califCursante" value="80" checked>B
                            <input type="radio" name="3califCursante" value="71">C
                            <input type="radio" name="3califCursante" value="50">D
                        </fieldset>
                    </td>
                </tr>

                <tr>
                    <td class="active" >Controla sus emociones con equilibrio y adecuación.</td>
                    <td class="active">
                        <fieldset>
                            <input type="radio" name="4califCursante" value="100">AA
                            <input type="radio" name="4califCursante" value="90">A
                            <input type="radio" name="4califCursante" value="80" checked>B
                            <input type="radio" name="4califCursante" value="71">C
                            <input type="radio" name="4califCursante" value="50">D
                        </fieldset>
                    </td>
                </tr>
            </table>
        </div>
        <p align="center">
            <button type="submit" class=" btn-primary btn-sm glyphicon glyphicon-check" style="text-align:center" name="materia" value=<?php echo($id_materia) ?>> ENVIAR CALIFICACIÓN</button>
        </p>
        {!! Form::close() !!}
    </div>


@endsection

