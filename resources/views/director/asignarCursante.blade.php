@extends('layouts.main')
@section('content')
    <div class="row border-bottom white-bg dashboard-header">
        <h3>Alumnos</h3>
        @if($cursantes)
        <div class="container">
            <div class="table-responsive" style="margin-right: 150px">
                <table class="table table-hover">
                    <thead>
                    <th>Identificacion</th>
                    <th>Nombres</th>
                    <th>Curso</th>
                    <th>Horario</th>
                    <th>Grupo</th>
                    <th>Acción</th>
                    </thead>
                    @foreach($cursantes as $cursante)
                    <tbody >
                    <td>{{$cursante->dpi}}</td>
                    <td>{{$cursante->nombres}} {{$cursante->paterno}} {{$cursante->materno}}</td>
                    
                     <?php
                        $materia_nombre = '';
                        //$materia =  Materia::where('id',$cursante->materia_id)->first();
                        $asignado = \DB::table('kardex1')->where('user',$cursante->id)->first();
                        if ($asignado){
                            $materia = \DB::table('materias')->where('id',$asignado->materia_id)->first();
                            $materia_nombre = $materia->nombreMateria;
                            $horario = \DB::table('horarios')->where('id',$asignado->gestion)->first();
                            $horario_nombre = $horario->descripcion;
                            $grupo = $asignado->grupo;
                        }else
                        {
                            $materia_nombre = "Sin asignar";
                            $horario_nombre = "- - -";
                            $grupo = "- - -";
                        }
                    ?>
                    <td>{{$materia_nombre}}</td>
                    
                    <td>{{$horario_nombre}}</td>
                    <td>{{$grupo}}</td>
                    <td>
                        {!! link_to_route('asignarMateria',
                                                    $title = 'Asignar',
                                                    $parameters = $cursante->id,
                                                    $attributes = ['class'=>'btn btn-primary']) !!}
                    </td>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
    @else
    <p>No hay Alumnos Registrados</p>
    @endif
@endsection