@extends('layouts.main')

@section('content')

    <div class="row border-bottom white-bg dashboard-header">

        {!! Form::open(['route' => 'cursante.formCalifCursante', 'method' => 'POST'])!!}
        <!!--Seleccionar la materia del docente a calificar-->

        <div class="" style="text-align:center; margin-bottom: 15px;">
            <label>Seleccione el Cursante a Evaluar: </label>
            {!! Form::select('materia', $cursantes, ['class' => 'control-label selectpicker']) !!}
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
                            <input type="radio" name="1califDoc" value="1">AA
                            <input type="radio" name="1califDoc" value="2">A
                            <input type="radio" name="1califDoc" value="3" checked>B
                            <input type="radio" name="1califDoc" value="4">C
                            <input type="radio" name="1califDoc" value="5">D
                        </fieldset>
                    </td>
                </tr>

                <tr>
                    <td class="active" >Asume sus decisiones y/o responde por sus acciones.</td>
                    <td class="active">
                        <fieldset>
                            <input type="radio" name="2califCursante" value="1">AA
                            <input type="radio" name="2califCursante" value="2">A
                            <input type="radio" name="2califCursante" value="3" checked>B
                            <input type="radio" name="2califCursante" value="4">C
                            <input type="radio" name="2califCursante" value="5">D
                        </fieldset>
                    </td>
                </tr>

                <tr>
                    <td class="active" >Trata a las personas con respeto y dignidad.</td>
                    <td class="active">
                        <fieldset>
                            <input type="radio" name="3califCursante" value="1">AA
                            <input type="radio" name="3califCursante" value="2">A
                            <input type="radio" name="3califCursante" value="3" checked>B
                            <input type="radio" name="3califCursante" value="4">C
                            <input type="radio" name="3califCursante" value="5">D
                        </fieldset>
                    </td>
                </tr>

                <tr>
                    <td class="active" >Controla sus emociones con equilibrio y adecuación.</td>
                    <td class="active">
                        <fieldset>
                            <input type="radio" name="4califCursante" value="1">AA
                            <input type="radio" name="4califCursante" value="2">A
                            <input type="radio" name="4califCursante" value="3" checked>B
                            <input type="radio" name="4califCursante" value="4">C
                            <input type="radio" name="4califCursante" value="5">D
                        </fieldset>
                    </td>
                </tr>
            </table>
        </div>
        <button type="submit" class="btn btn-default col-md-3" style="text-align:center">ENVIAR CALIFICACIÓN</button>
        {!! Form::close() !!}
    </div>


@endsection

