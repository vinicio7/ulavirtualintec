@extends('layouts.main')
@section('content')
    <div class="row border-bottom white-bg dashboard-header">
        <h3>Alumnos</h3>
        @if($cursantes)
        <div class="container">
            <div class="table-responsive" style="margin-right: 100px">
                <table class="table table-hover">
                    <thead>
                    <th>Identificacion</th>
                    <th>Nombres</th>
                    <th>Curso</th>
                    <th>Gestion</th>
                    <th>Grupo</th>
                    <th>Acción</th>
                    </thead>
                    @foreach($cursantes as $cursante)
                    <tbody >
                    <td>{{$cursante->id}}</td>
                    <td>{{$cursante->nombres}} {{$cursante->paterno}} {{$cursante->materno}}</td>
                    
                     <?php
                        $materia_nombre = '';
                        //$materia =  Materia::where('id',$cursante->materia_id)->first();
                        $materia = \DB::table('materias')->where('id',$cursante->materia_id)->first();
                        if ($materia){
                            $materia_nombre = $materia->nombreMateria;
                        }else
                        {
                            $materia_nombre = "Sin asignar";
                        }
                    ?>
                    <td>{{$materia_nombre}}</td>
                    
                    <td>{{$cursante->gestion}}</td>
                    <td>{{$cursante->grupo}}</td>
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