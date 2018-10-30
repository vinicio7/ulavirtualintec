@extends('layouts.main')
@section('content')
    <div class="row border-bottom white-bg dashboard-header">
        <h3>Docentes</h3>
        @if($docentes)
            <div class="container">
                <div class="table-responsive" style="margin-right: 100px;">
                    <table class="table table-hover">
                        <thead>
                        <th>DPI</th>
                        <th>Nombres</th>
                        <th>Curso</th>
                        <th>Gestión</th>
                        <th>Acción</th>
                        </thead>
                        @foreach($docentes as $docente)
                            <tbody >
                            <td>{{$docente->dpi}}</td>
                            <td>{{$docente->nombres}} {{$docente->paterno}} {{$docente->materno}}</td>
                            
                            <?php
                                $materia_nombre = '';
                                //$materia =  Materia::where('id',$docente->materia_id)->first();
                                $asignado = \DB::table('contrato_docentes')->where('user',$docente->id)->first();
                                if ($asignado){
                                    $materia = \DB::table('materias')->where('id',$asignado->materia_id)->first();
                                    $materia_nombre = $materia->nombreMateria;
                                    $horario = \DB::table('horarios')->where('id',$asignado->gestion)->first();
                                    $horario_nombre = $horario->descripcion;
                                    //$grupo = $asignado->grupo;
                                }else
                                {
                                    $materia_nombre = "Sin asignar";
                                    $horario_nombre = "- - -";
                                    //$grupo = "- - -";
                                }
                            ?>
                            <td>{{$materia_nombre}}</td>

                            <td>{{$horario_nombre}}</td>
                            <td>
                                {!! link_to_route('asignarContrato',
                                                            $title = 'Asignar',
                                                            $parameters = $docente->id,
                                                            $attributes = ['class'=>'btn btn-primary']) !!}
                            </td>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
    </div>
    @else
        <p>No existen Docentes</p>
    @endif
@endsection