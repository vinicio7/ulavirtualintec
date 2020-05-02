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
                    <tbody >
                    @foreach($cursantes as $cursante)
                    <?php
                        $user = "";
                        $user = DB::table('users')->where('id',$cursante->id)->first();
                        //dd($user->dpi);
                        //$cursante = User::where('id',$cursante->user)->first();
                    ?>
                        @if($user)
                        <td>{{$user->dpi}}</td>
                        <td>{{$user->nombres}}</td>
                        
                        <?php
                                $materia_nombre = '';
                                $horario_nombre = '';
                                $materia = \DB::table('materias')->where('id',$cursante->materia_id)->first();
                                if ($materia) {
                                    $materia_nombre = $materia->nombreMateria;
                                }
                                $horario = \DB::table('horarios')->where('id',$cursante->gestion)->first();
                                if ($horario) {
                                    $horario_nombre = $horario->descripcion;
                                }
                                $grupo = $cursante->grupo;
                        ?>
                        <td>{{$materia_nombre}}</td>
                        
                        <td>{{$horario_nombre}}</td>
                        <td>{{$grupo}}</td>
                        <td>
                            {!! link_to_route('asignarMateria',
                                                        $title = 'Asignar',
                                                        $parameters = $user->id,
                                                        $attributes = ['class'=>'btn btn-primary']) !!}
                        </td>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    @else
    <p>No hay Alumnos Registrados</p>
    @endif
@endsection